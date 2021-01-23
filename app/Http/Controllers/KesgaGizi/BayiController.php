<?php

namespace App\Http\Controllers\KesgaGizi;

use Carbon\Carbon;
use App\Models\Bayi;
use App\Models\Files;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\GlobalState\Exception;
use App\Http\Requests\KesgaGizi\Bayi\FormBayi;

class BayiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (request()->ajax()) {
            $data = Bayi::orderBy('created_at', 'DESC')
                ->where('author', auth()->user()->id)
                ->get();
                return DataTables::of($data)
                ->addColumn('jumlah_umur', function ($s) {
                    return $s->jumlah_umur;
                })
                ->addColumn('jumh_bayi', function ($s) {
                    return $s->jumh_bayi1;
                })
                ->addColumn('nama_jorong', function ($s) {
                    return $s->nama_jorong . ' <div class="table-links"><a href="#" class="btn btn-icon icon-left btn-outline-info"><i class="fas fa-eye "></i></a>  <a href="' . route('lap-bayi.edit', $s->id) . '" class="btn btn-icon icon-left btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <form id="data-' . $s->id . '" action="' . route('lap-bayi.destroy', $s->id) . '"   method="post"> ' . csrf_field() . ' ' . method_field('delete') . '</form>
                    <a href="javascript:" onclick="confirmDelete(' . $s->id . ' )" class="btn btn-icon icon-left btn-outline-danger"><i class="fas fa-times"></i></a></div> ';
                })
                 ->rawColumns(['jumlah_umur', 'jumlah_bayi1', 'nama_jorong'])
                ->addIndexColumn()
                ->toJson();
        }
        return view ('KesgaGizi.Bayi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $updateMode = false;
        return view('KesgaGizi.Bayi.bayi-form', compact('updateMode'));
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'fileExcel' => 'required|file|mimes:csv,xls,xlsx|max:2048'
        ]);
        if ($request->hasFile('fileExcel')) {
            $file = $request->file('fileExcel');
            $name = 'Bayi(' . auth()->user()->name . ')' . date('Y-m-d') . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('fileUpload/Bayi', $name);

            Files::insert([
                'filename' => $name,
                'file_kategori' => 'bayi',
                'path' => $path,
                'nagari' => $request->nagari,
                'author' => auth()->user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil diUpload');
        }
        return redirect()->route('lap-bayi',['nagari' => $request->nagari]);
    }

    public function fileBayi()
    {
        if (auth()->user()->role == 'admin') {
            $datas = Files::where('nagari', request()->nagari)->where('file_kategori', 'bayi')->orderBy('created_at', 'desc')->paginate('10');
        } else {
            $datas = Files::where('author', auth()->user()->id)
            ->where('file_kategori','bayi')->orderBy('created_at', 'desc')->paginate('10');
        }
        return view('KesgaGizi.Bayi.listFile', compact('datas'));
    }
    public function fileDownload(Request $request)
    {
        if (auth()->user()->role == 'admin' || $request->ad == auth()->user()->id) {
            try {
                $url =  '/fileUpload/Bayi/' . $request->file;
                return Storage::download($url);
            } catch (Exception $e) {
                session()->flash('type', 'error');
                session()->flash('message', $e);
                return back();
            }
        }
    }
}
