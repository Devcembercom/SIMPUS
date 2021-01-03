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
