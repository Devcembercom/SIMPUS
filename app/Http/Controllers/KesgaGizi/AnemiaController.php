<?php

namespace App\Http\Controllers\KesgaGizi;

use App\Models\Anemia;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $updateMode = false;
        return view('KesgaGizi.Anemia.anemia-form', compact('updateMode'));
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
            $data = Anemia::create([
                'nama_ibu' => $request->nama_ibu,
                'alamat' => $request->alamat,
                'lahir' => $request->lahir,
                'ditemukan' => $request->ditemukan,
                'bb' => $request->bb,
                'tb' => $request->tb,
                'lila' => $request->lila,
                'hb' => $request->hb,
                'protein' => $request->protein,
                'siha' => $request->siha,
                'hamil' => $request->hamil,
                'intervansi' => $request->intervansi,
                'nama_suami' => $request->nama_suami,
                'pekerjaan' => $request->pekerjaan,
                'status' => $request->status,
                'bpjs' => $request->bpjs,
                'kasus' => $request->kasus,
                'ket' => $request->ket,
                'author' => auth()->user()->id,
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Disimpan');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('lap-anemia');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anemia  $anemia
     * @return \Illuminate\Http\Response
     */
    public function show(Anemia $anemia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anemia  $anemia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('KesgaGizi.Anemia.anemia-form', [
            'data' => Anemia::findOrFail($id),
            'updateMode' => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anemia  $anemia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = Anemia::findOrFail($id);
            $data->update([
                'nama_ibu' => $request->nama_ibu,
                'alamat' => $request->alamat,
                'lahir' => $request->lahir,
                'ditemukan' => $request->ditemukan,
                'bb' => $request->bb,
                'tb' => $request->tb,
                'lila' => $request->lila,
                'hb' => $request->hb,
                'protein' => $request->protein,
                'siha' => $request->siha,
                'hamil' => $request->hamil,
                'intervansi' => $request->intervansi,
                'nama_suami' => $request->nama_suami,
                'pekerjaan' => $request->pekerjaan,
                'status' => $request->status,
                'bpjs' => $request->bpjs,
                'kasus' => $request->kasus,
                'ket' => $request->ket,
                'author' => auth()->user()->id,
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Dirubah');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('lap-anemia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anemia  $anemia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = Anemia::destroy($id);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Dihapus');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('lap-anemia');
    }
}
