<?php

namespace App\Http\Controllers\KesgaGizi;

use Exception;
use Carbon\Carbon;
use App\Models\LB1;
use App\Models\Lb1File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class LB1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('KesgaGizi.LB1.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fileExcel' => 'required|file|mimes:csv,xls,xlsx|max:2048'
        ]);
        if ($request->hasFile('fileExcel')) {
            try {
                $file = $request->file('fileExcel');
                $name = 'Lb1(' . auth()->user()->name . ')' . date('Y-m-d') . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('fileUpload/LB1', $name);
                Lb1File::insert([
                    'filename' => $name,
                    'path' => $path,
                    'author' => auth()->user()->id,
                    'created_at' => Carbon::now()->timestamp,
                    'updated_at' => Carbon::now()->timestamp,
                ]);
                session()->flash('type', 'success');
                session()->flash('message', 'Data Berhasil diUpload');
            } catch (Exception $e) {
                session()->flash('type', 'error');
                session()->flash('message', $e);
            }
        }
        return redirect()->route('lap-lb1');
    }

    public function listLb1()
    {
        if (auth()->user()->role == 'admin') {
            $datas = Lb1File::select('filename', 'author', 'created_at')->orderBy('created_at', 'desc')->paginate('10');
        } else {
            $datas = Lb1File::select('filename', 'author', 'created_at')->where('author', auth()->user()->id)->orderBy('created_at', 'desc')->paginate('10');
        }
        return view('KesgaGizi.Lb1.listFile', compact('datas'));
    }

    public function fileDownload(Request $request)
    {
        if (auth()->user()->role == 'admin' || $request->ad == auth()->user()->id) {
            try {
                $url =  '/fileUpload/LB1/' . $request->file;
                return Storage::download($url);
            } catch (Exception $e) {
                session()->flash('type', 'error');
                session()->flash('message', $e);
                return back();
            }
        }
    }
}
