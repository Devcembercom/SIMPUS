<?php

namespace App\Http\Controllers\KesgaGizi;

use Carbon\Carbon;
use App\Models\pmt;
use App\Models\Files;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\KesgaGizi\PMT\FormPmt;
use SebastianBergmann\GlobalState\Exception;

class PmtController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
          if (request()->ajax()) {
            $data = pmt::orderBy('created_at', 'DESC')
                ->where('author', auth()->user()->id)
                ->get();
                return DataTables::of($data)
                ->addColumn('bb1', function ($s) {
                    return $s->bb1;
                })
                ->addColumn('lila1', function ($s) {
                    return $s->lila1;
                })
                ->addColumn('hb1', function ($s) {
                    return $s->hb1;
                })
                ->addColumn('jumlah11', function ($s) {
                    return $s->jumlah11;
                })
                ->addColumn('tt1', function ($s) {
                    return $s->tt1;
                })
                ->addColumn('nama_bumil', function ($s) {
                    return $s->nama_bumil . ' <div class="table-links"><a href="#" class="btn btn-icon icon-left btn-outline-info"><i class="fas fa-eye "></i></a>  <a href="' . route('lap-pmt-bumil.edit', $s->id) . '" class="btn btn-icon icon-left btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <form id="data-' . $s->id . '" action="' . route('lap-pmt-bumil.destroy', $s->id) . '"   method="post"> ' . csrf_field() . ' ' . method_field('delete') . '</form>
                    <a href="javascript:" onclick="confirmDelete(' . $s->id . ' )" class="btn btn-icon icon-left btn-outline-danger"><i class="fas fa-times"></i></a></div> ';
                })
                 ->rawColumns(['bb1', 'lila1', 'hb1', 'jumlah1', 'tt1', 'nama_bumil'])
                ->addIndexColumn()
                ->toJson();
        }
       return view('KesgaGizi.PMT.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $updateMode = false;
        return view('KesgaGizi.PMT.pmt-form', compact('updateMode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = pmt::create([
                'nama_bumil' => $request->nama_bumil,
                'usia' => $request->usia,
                'hamil' => $request->hamil,

                'tgl1' => date('Y-m-d', strtotime($request->tgl1)),
                'bb1' => $request->bb1,
                'lila1' => $request->lila1,
                'hb1' => $request->hb1,
                'jumlah1' => $request->jumlah1,
                'tt1' => $request->tt1,


                'tgl2' => date('Y-m-d', strtotime($request->tgl2)),
                'bb2' => $request->bb2,
                'lila2' => $request->lila2,
                'hb2' => $request->hb2,
                'jumlah2' => $request->jumlah2,
                'tt2' => $request->tt2,


                'tgl3' => date('Y-m-d', strtotime($request->tgl3)),
                'bb3' => $request->bb3,
                'lila3' => $request->lila3,
                'hb3' => $request->hb3,
                'jumlah3' => $request->jumlah3,
                'tt3' => $request->tt3,
                'author' => auth()->user()->id,
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Disimpan');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('lap-pmt-bumil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pmt  $pmt
     * @return \Illuminate\Http\Response
     */
    public function show(pmt $pmt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pmt  $pmt
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('KesgaGizi.PMT.pmt-form', [
            'data' => pmt::findOrFail($id),
            'updateMode' => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pmt  $pmt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = pmt::findOrFail($id);
            $data->update([
                'nama_bumil' => $request->nama_bumil,
                'usia' => $request->usia,
                'hamil' => $request->hamil,

                'tgl1' => date('Y-m-d', strtotime($request->tgl1)),
                'bb1' => $request->bb1,
                'lila1' => $request->lila1,
                'hb1' => $request->hb1,
                'jumlah1' => $request->jumlah1,
                'tt1' => $request->tt1,


                'tgl2' => date('Y-m-d', strtotime($request->tgl2)),
                'bb2' => $request->bb2,
                'lila2' => $request->lila2,
                'hb2' => $request->hb2,
                'jumlah2' => $request->jumlah2,
                'tt2' => $request->tt2,


                'tgl3' => date('Y-m-d', strtotime($request->tgl3)),
                'bb3' => $request->bb3,
                'lila3' => $request->lila3,
                'hb3' => $request->hb3,
                'jumlah3' => $request->jumlah3,
                'tt3' => $request->tt3,
                'author' => auth()->user()->id,
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Dirubah');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('lap-pmt-bumil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pmt  $pmt
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = pmt::destroy($id);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Dihapus');

        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('lap-pmt-bumil');
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'fileExcel' => 'required|file|mimes:csv,xls,xlsx|max:2048'
        ]);
        if ($request->hasFile('fileExcel')) {
            $file = $request->file('fileExcel');
            $name = 'PMT(' . auth()->user()->name . ')' . date('Y-m-d') . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('fileUpload/PMT', $name);

            Files::insert([
                'filename' => $name,
                'file_kategori' => 'Pmt',
                'path' => $path,
                'nagari' => $request->nagari,
                'author' => auth()->user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil diUpload');
        }
        return redirect()->route('lap-pmt-bumil',['nagari' => $request->nagari]);
    }

    public function filePmt()
    {
        if (auth()->user()->role == 'admin') {
            $datas = Files::where('nagari', request()->nagari)->where('file_kategori', 'Pmt')->orderBy('created_at', 'desc')->paginate('10');
        } else {
            $datas = Files::where('author', auth()->user()->id)
            ->where('file_kategori','Pmt')->orderBy('created_at', 'desc')->paginate('10');
        }
        return view('KesgaGizi.PMT.listFile', compact('datas'));
    }
    public function fileDownload(Request $request)
    {
        if (auth()->user()->role == 'admin' || $request->ad == auth()->user()->id) {
            try {
                $url =  '/fileUpload/PMT/' . $request->file;
                return Storage::download($url);
            } catch (Exception $e) {
                session()->flash('type', 'error');
                session()->flash('message', $e);
                return back();
            }
        }
    }
}
