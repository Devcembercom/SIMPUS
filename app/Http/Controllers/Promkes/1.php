<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\LB1;
use App\Models\Lb1File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PromkesFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PromkesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('promkes.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fileExcel' => 'required|file|mimes:csv,xls,xlsx|max:2048'
        ]);
        if ($request->hasFile('fileExcel')) {
            $file = $request->file('fileExcel');
            $name = 'Lb1(' . auth()->user()->name . ')' . date('Y-m-d') . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('fileUpload/LB1', $name);

            PromkesFile::insert([
                'filename' => $name,
                'path' => $path,
                'author' => auth()->user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil diUpload');
        }
        return redirect()->route('promkes');
    }

    public function listPromkes()
    {
        if (auth()->user()->role == 'admin') {
            $datas = PromkesFile::select('filename', 'author', 'created_at')->orderBy('created_at', 'desc')->paginate('10');
        } else {
            $datas = PromkesFile::select('filename', 'author', 'created_at')->where('author', auth()->user()->id)->orderBy('created_at', 'desc')->paginate('10');
        }
        return view('promkes.listFile', compact('datas'));
    }

    public function fileDownload(Request $request)
    {
        if (auth()->user()->role == 'admin' || $request->ad == auth()->user()->id) {
            try {
                $url =  '/fileUpload/Promkes/' . $request->file;
                return Storage::download($url);
            } catch (Exception $e) {
                session()->flash('type', 'error');
                session()->flash('message', $e);
                return back();
            }
        }
    }
}
