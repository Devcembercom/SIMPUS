<?php

namespace App\Http\Controllers\KesgaGizi;

use Carbon\Carbon;
use App\Models\Files;
use App\Models\Anemia;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\GlobalState\Exception;
use App\Http\Requests\KesgaGizi\Anemia\formanemia;

class AnemiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (request()->ajax()) {
            $data = Anemia::orderBy('created_at', 'DESC')
                ->where('author', auth()->user()->id)
                ->get();
                return DataTables::of($data)
                ->addColumn('bb', function ($s) {
                    return $s->bb;
                })
                ->addColumn('lila', function ($s) {
                    return $s->lila;
                })
                ->addColumn('hb', function ($s) {
                    return $s->hb;
                })
                ->addColumn('protein', function ($s) {
                    return $s->protein;
                })
                ->addColumn('siha', function ($s) {
                    return $s->siha;
                })
                ->addColumn('nama_ibu', function ($s) {
                    return $s->nama_ibu . ' <div class="table-links"><a href="#" class="btn btn-icon icon-left btn-outline-info"><i class="fas fa-eye "></i></a>  <a href="' . route('lap-anemia.edit', $s->id) . '" class="btn btn-icon icon-left btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <form id="data-' . $s->id . '" action="' . route('lap-anemia.destroy', $s->id) . '"   method="post"> ' . csrf_field() . ' ' . method_field('delete') . '</form>
                    <a href="javascript:" onclick="confirmDelete(' . $s->id . ' )" class="btn btn-icon icon-left btn-outline-danger"><i class="fas fa-times"></i></a></div> ';
                })
                 ->rawColumns(['bb', 'lila', 'hb', 'protein', 'siha', 'nama_ibu'])
                ->addIndexColumn()
                ->toJson();
        }
        return view('KesgaGizi.Anemia.index');
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'fileExcel' => 'required|file|mimes:csv,xls,xlsx|max:2048'
        ]);
        if ($request->hasFile('fileExcel')) {
            $file = $request->file('fileExcel');
            $name = 'Anemia(' . auth()->user()->name . ')' . date('Y-m-d') . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('fileUpload/Anemia', $name);

            Files::insert([
                'filename' => $name,
                'file_kategori' => 'anemia',
                'path' => $path,
                'nagari' => $request->nagari,
                'author' => auth()->user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil diUpload');
        }
        return redirect()->route('lap-anemia',['nagari' => $request->nagari]);
    }

    public function fileAnemia()
    {
        if (auth()->user()->role == 'admin') {
            $datas = Files::where('nagari', request()->nagari)->where('file_kategori', 'anemia')->orderBy('created_at', 'desc')->paginate('10');
        } else {
            $datas = Files::where('author', auth()->user()->id)
            ->where('file_kategori','anemia')->orderBy('created_at', 'desc')->paginate('10');
        }
        return view('KesgaGizi.Anemia.listFile', compact('datas'));
    }
    public function fileDownload(Request $request)
    {
        if (auth()->user()->role == 'admin' || $request->ad == auth()->user()->id) {
            try {
                $url =  '/fileUpload/Anemia/' . $request->file;
                return Storage::download($url);
            } catch (Exception $e) {
                session()->flash('type', 'error');
                session()->flash('message', $e);
                return back();
            }
        }
    }
}
