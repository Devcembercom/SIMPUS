<?php

namespace App\Http\Controllers\Promkes;

use Exception;
use Carbon\Carbon;
use App\Models\Files;
use App\Models\PromkesFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
            $name = 'Promkes(' . auth()->user()->name . ')' . date('Y-m-d') . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('fileUpload/Promkes', $name);

            Files::insert([
                'filename' => $name,
                'file_kategori' => 'Promkes',
                'path' => $path,
                'nagari' => $request->nagari,
                'author' => auth()->user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil diUpload');
        }
        return redirect()->route('promkes',['nagari' => $request->nagari]);
    }

    public function listPromkes()
    {
        if (auth()->user()->role == 'admin') {
            $datas = Files::where('nagari', request()->nagari)->where('file_kategori', 'Promkes')->orderBy('created_at', 'desc')->paginate('10');
        } else {
            $datas = Files::where('author', auth()->user()->id)
            ->where('file_kategori','Promkes')->orderBy('created_at', 'desc')->paginate('10');
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
