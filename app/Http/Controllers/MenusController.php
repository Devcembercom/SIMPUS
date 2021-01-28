<?php

namespace App\Http\Controllers;

use App\menus;
use App\Dajor;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datas = menus::paginate(20);
        return view('Menu_Laporan.index',compact('datas'));
    }
    public function form()
    {
        $jorong = Dajor::all();
        return view('Menu_Laporan.input',compact('jorong'));
    }
    public function show($id)
    {
       $data = menus::findOrFail($id);
        return view('Menu_Laporan.laporan_view',compact('data'));
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
            $data = menus::create([
                'jorong_id' => $request['jorong_id'],
                'laporan' => $request['laporan'],
                'link' => $request['link'],
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Disimpan');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('menu.form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\menus  $menus
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\menus  $menus
     * @return \Illuminate\Http\Response
     */
    public function edit(menus $menus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\menus  $menus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menus $menus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\menus  $menus
     * @return \Illuminate\Http\Response
     */
    public function destroy(menus $menus)
    {
        //
    }
}
