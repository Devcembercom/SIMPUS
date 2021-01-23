<?php

namespace App\Http\Controllers\KesgaGizi;

use Exception;
use Carbon\Carbon;
use App\Models\LB1;
use App\Models\Lb1File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Files;
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
            $file = $request->file('fileExcel');
            $name = 'LB1(' . auth()->user()->name . ')' . date('Y-m-d') . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('fileUpload/LB1', $name);

            Files::insert([
                'filename' => $name,
                'file_kategori' => 'Lb1',
                'path' => $path,
                'nagari' => $request->nagari,
                'author' => auth()->user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil diUpload');

        }
        return redirect()->route('lap-lb1',['nagari' => $request->nagari]);
    }

    public function listLb1()
    {
        if (auth()->user()->role == 'admin') {
            $datas = Files::where('nagari', request()->nagari)->where('file_kategori', 'Lb1')->orderBy('created_at', 'desc')->paginate('10');
        } else {
            $datas = Files::where('nagari', request()->nagari)->where('file_kategori', 'Lb1')->where('author', auth()->user()->id)->orderBy('created_at', 'desc')->paginate('10');
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
