<?php

namespace App\Http\Controllers\KesgaGizi;

use App\Models\LB1;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LB1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('KesgaGizi.LB1.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LB1  $lB1
     * @return \Illuminate\Http\Response
     */
    public function show(LB1 $lB1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LB1  $lB1
     * @return \Illuminate\Http\Response
     */
    public function edit(LB1 $lB1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LB1  $lB1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LB1 $lB1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LB1  $lB1
     * @return \Illuminate\Http\Response
     */
    public function destroy(LB1 $lB1)
    {
        //
    }
}
