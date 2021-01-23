<?php

namespace App\Http\Controllers\KesgaGizi;

use Exception;
use Carbon\Carbon;
use App\Models\Files;
use App\Models\IdentitasK1;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\KesgaGizi\IdentitasK1K4\IdentitasK1Val;

class IdentitasK1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('KesgaGizi.IdentitasK1K4.index');
    }


    public function create()
    {
        return view('KesgaGizi.IdentitasK1K4.form.formK1', [
            'updateMode' => false,
        ]);
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'fileExcel' => 'required|file|mimes:csv,xls,xlsx|max:2048'
        ]);
        if ($request->hasFile('fileExcel')) {
            $file = $request->file('fileExcel');
            $name = 'K1K4(' . auth()->user()->name . ')' . date('Y-m-d') . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('fileUpload/K1K4', $name);

            Files::insert([
                'filename' => $name,
                'file_kategori' => 'k1k4',
                'path' => $path,
                'nagari' => $request->nagari,
                'author' => auth()->user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil diUpload');
        }
        return redirect()->route('identitasK1k4',['nagari' => $request->nagari]);
    }

    public function filek1k4()
    {
        if (auth()->user()->role == 'admin') {
            $datas = Files::where('nagari', request()->nagari)->where('file_kategori', 'k1k4')->orderBy('created_at', 'desc')->paginate('10');
        } else {
            $datas = Files::where('author', auth()->user()->id)
            ->where('file_kategori','k1k4')->orderBy('created_at', 'desc')->paginate('10');
        }
        return view('KesgaGizi.IdentitasK1K4.listFile', compact('datas'));
    }
    public function fileDownload(Request $request)
    {
        if (auth()->user()->role == 'admin' || $request->ad == auth()->user()->id) {
            try {
                $url =  '/fileUpload/K1K4/' . $request->file;
                return Storage::download($url);
            } catch (Exception $e) {
                session()->flash('type', 'error');
                session()->flash('message', $e);
                return back();
            }
        }
    }
}
