<?php

namespace App\Http\Controllers\KesgaGizi;

use Illuminate\Http\Request;
use App\Models\IdentitasPersalinan;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class IdentitasPersalinanController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $data = IdentitasPersalinan::orderBy('created_at', 'DESC')
                ->where('author', auth()->user()->id)
                ->get();
            return DataTables::of($data)
                ->addColumn('umur', function ($s) {
                    return $s->umur . 'TH';
                })
                ->addColumn('tgl_partus', function ($s) {
                    return $s->getTglPartus();
                })
                ->addColumn('partograf', function ($s) {
                    return $s->getPartograf();
                })
                ->rawColumns(['umur', 'tgl_partus', 'partograf'])
                ->addIndexColumn()
                ->toJson();
        }
        return view('KesgaGizi.IdentitasPersalinan.index');
    }

    public function create()
    {
        return view('KesgaGizi.IdentitasPersalinan.add-data-form');
    }
}
