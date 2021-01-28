<?php

namespace App\Http\Controllers;

use App\Dajor;
use App\menus;
use Illuminate\Http\Request;

class DajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datas = Dajor::paginate(20);
        return view('Menu_Dajor.index',compact('datas'));
    }
    public function form()
    {
        return view('Menu_Dajor.input');
    }
    public function show($jorong_id)
    {
       $data = menus::where('jorong_id',$jorong_id)->get();
        return view('Menu_Laporan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $data = Dajor::create([
                'jorong' => $request['jorong'],
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Disimpan');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('menu.dajor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dajor  $dajor
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dajor  $dajor
     * @return \Illuminate\Http\Response
     */
    public function edit(Dajor $dajor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dajor  $dajor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dajor $dajor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dajor  $dajor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dajor $dajor)
    {
        //
    }
}
