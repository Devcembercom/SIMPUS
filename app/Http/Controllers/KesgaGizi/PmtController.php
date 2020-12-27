<?php

namespace App\Http\Controllers\KesgaGizi;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\pmt;
use App\Http\Controllers\Controller;
use SebastianBergmann\GlobalState\Exception;

class PmtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
            session()->flash('message', 'Data has been saved');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('lap-pmt-bumil.create');
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
    public function edit(pmt $pmt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pmt  $pmt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pmt $pmt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pmt  $pmt
     * @return \Illuminate\Http\Response
     */
    public function destroy(pmt $pmt)
    {
        //
    }
}
