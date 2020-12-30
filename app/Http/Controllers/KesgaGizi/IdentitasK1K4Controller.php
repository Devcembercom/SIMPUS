<?php

namespace App\Http\Controllers\KesgaGizi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IdentitasK1K4Controller extends Controller
{
    public function index()
    {
        return abort('503', 'Proses Penyiapan');
    }
}
