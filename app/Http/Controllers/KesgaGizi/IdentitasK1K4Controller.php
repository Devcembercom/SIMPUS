<?php

namespace App\Http\Controllers\KesgaGizi;

use App\Models\IdentitasK1;
use App\Models\IdentitasK4;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class IdentitasK1K4Controller extends Controller
{
    public function index()
    {
        return view('KesgaGizi.IdentitasK1K4.index');
    }

    public function dataK1()
    {
        if (request()->ajax()) {
            $data = IdentitasK1::orderBy('created_at', 'DESC')->get();
            return DataTables::of($data)
                ->addColumn('bulan', function ($s) {
                    return date('F', strtotime($s->created_at));
                })
                ->addColumn('umur', function ($s) {
                    return $s->umur . ' Th';
                })
                ->rawColumns(['bulan', 'umur'])
                ->addIndexColumn()
                ->toJson();
        }
    }
    public function dataK4()
    {
        if (request()->ajax()) {
            $data = IdentitasK4::orderBy('created_at', 'DESC')->get();
            return DataTables::of($data)
                ->addColumn('bulan', function ($s) {
                    return date('F', strtotime($s->created_at));
                })
                ->addColumn('umur', function ($s) {
                    return $s->umur . ' Th';
                })
                ->rawColumns(['bulan', 'umur'])
                ->addIndexColumn()
                ->toJson();
        }
    }
}
