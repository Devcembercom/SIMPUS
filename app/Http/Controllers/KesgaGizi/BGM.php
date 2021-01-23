<?php

namespace App\Http\Controllers\KesgaGizi;

use Exception;
use App\Models\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BGM extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('KesgaGizi.BGM.index');
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'fileExcel' => 'required|file|mimes:csv,xls,xlsx|max:2048'
        ]);
        if ($request->hasFile('fileExcel')) {
            $file = $request->file('fileExcel');
            $name = 'BGM(' . auth()->user()->name . ')' . date('Y-m-d') . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('fileUpload/BGM', $name);

            Files::insert([
                'filename' => $name,
                'file_kategori' => 'bgm',
                'path' => $path,
                'nagari' => $request->nagari,
                'author' => auth()->user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil diUpload');
        }
        return redirect()->route('lap-BGM',['nagari' => $request->nagari]);
    }

    public function fileBgm()
    {
        if (auth()->user()->role == 'admin') {
            $datas = Files::where('nagari', request()->nagari)->where('file_kategori', 'bgm')->orderBy('created_at', 'desc')->paginate('10');
        } else {
            $datas = Files::where('author', auth()->user()->id)
            ->where('file_kategori','bgm')->orderBy('created_at', 'desc')->paginate('10');
        }
        return view('KesgaGizi.BGM.listFile', compact('datas'));
    }
    public function fileDownload(Request $request)
    {
        if (auth()->user()->role == 'admin' || $request->ad == auth()->user()->id) {
            try {
                $url =  '/fileUpload/BGM/' . $request->file;
                return Storage::download($url);
            } catch (Exception $e) {
                session()->flash('type', 'error');
                session()->flash('message', $e);
                return back();
            }
        }
    }
}
