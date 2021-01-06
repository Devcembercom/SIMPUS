<?php

namespace App\Http\Controllers\Promkes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromkesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('promkes.index');
    }
}
