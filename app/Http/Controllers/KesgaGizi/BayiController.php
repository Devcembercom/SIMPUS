<?php

namespace App\Http\Controllers\KesgaGizi;

use App\Models\Bayi;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = Bayi::create([
                'nama_jorong' => $request->nama_jorong,
                'nama_posyandu' => $request->nama_posyandu,
                'jumlah_umur' => $request->jumlah_umur
                ,
                'jumlah_bayi1' => $request->jumlah_bayi1,
                'eklusif1' => $request->eklusif1,
                'persen1' => $request->persen1,

               
                'jumlah_bayi2' => $request->jumlah_bayi2,
                'eklusif2' => $request->eklusif2,
                'persen2' => $request->persen2,

                
                'jumlah_bayi3' => $request->jumlah_bayi3,
                'eklusif3' => $request->eklusif3,
                'persen3' => $request->persen3,

                
                'jumlah_bayi4' => $request->jumlah_bayi4,
                'eklusif4' => $request->eklusif4,
                'persen4' => $request->persen4,

                
                'jumlah_bayi5' => $request->jumlah_bayi5,
                'eklusif5' => $request->eklusif5,
                'persen5' => $request->persen5,

                
                'jumlah_bayi6' => $request->jumlah_bayi6,
                'eklusif6' => $request->eklusif6,
                'persen6' => $request->persen6,

                'jumlah_bayi7' => $request->jumlah_bayi7,
                'eklusif7' => $request->eklusif7,
                'persen7' => $request->persen7,
                
                'author' => auth()->user()->id,
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Disimpan');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('lap-bayi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bayi  $bayi
     * @return \Illuminate\Http\Response
     */
    public function show(Bayi $bayi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bayi  $bayi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('KesgaGizi.Bayi.bayi-form', [
            'data' => Bayi::findOrFail($id),
            'updateMode' => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bayi  $bayi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        try {
            $data = Bayi::findOrFail($id);
            $data->update([
                'nama_jorong' => $request->nama_jorong,
                'nama_posyandu' => $request->nama_posyandu,
                'jumlah_umur' => $request->jumlah_umur
                ,
                'jumlah_bayi1' => $request->jumlah_bayi1,
                'eklusif1' => $request->eklusif1,
                'persen1' => $request->persen1,

               
                'jumlah_bayi2' => $request->jumlah_bayi2,
                'eklusif2' => $request->eklusif2,
                'persen2' => $request->persen2,

                
                'jumlah_bayi3' => $request->jumlah_bayi3,
                'eklusif3' => $request->eklusif3,
                'persen3' => $request->persen3,

                
                'jumlah_bayi4' => $request->jumlah_bayi4,
                'eklusif4' => $request->eklusif4,
                'persen4' => $request->persen4,

                
                'jumlah_bayi5' => $request->jumlah_bayi5,
                'eklusif5' => $request->eklusif5,
                'persen5' => $request->persen5,

                
                'jumlah_bayi6' => $request->jumlah_bayi6,
                'eklusif6' => $request->eklusif6,
                'persen6' => $request->persen6,

                'jumlah_bayi7' => $request->jumlah_bayi7,
                'eklusif7' => $request->eklusif7,
                'persen7' => $request->persen7,
                
                'author' => auth()->user()->id,
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Dirubah');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('lap-bayi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bayi  $bayi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = Bayi::destroy($id);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Dihapus');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('lap-bayi');
    }
}
