<?php

namespace App\Http\Controllers\KesgaGizi;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\IdentitasPersalinan;
use App\Http\Controllers\Controller;
use App\Http\Requests\KesgaGizi\IdentitasPersalinan\Store;
use SebastianBergmann\GlobalState\Exception;

class IdentitasPersalinanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request()->ajax()) {
            $data = IdentitasPersalinan::orderBy('created_at', 'DESC')
                ->where('author', auth()->user()->id)
                ->get();
            return DataTables::of($data)
                ->addColumn('umur', function ($s) {
                    return $s->umur . ' Th';
                })
                ->addColumn('tgl_partus', function ($s) {
                    return $s->getTglPartus();
                })
                ->addColumn('partograf', function ($s) {
                    return $s->getPartograf();
                })
                ->addColumn('nama_ibu', function ($s) {
                    return $s->nama_ibu . ' <div class="table-links"><a href="#">View</a><div class="bullet"></div><a href="#">Edit</a><div class="bullet"></div><a href="#" class="text-danger">Trash</a></div>';
                })
                ->rawColumns(['umur', 'tgl_partus', 'partograf', 'nama_ibu'])
                ->addIndexColumn()
                ->toJson();
        }
        return view('KesgaGizi.IdentitasPersalinan.index');
    }

    public function create()
    {
        return view('KesgaGizi.IdentitasPersalinan.add-data-form');
    }

    public function store(Store $request)
    {
        try {
            $data = IdentitasPersalinan::create([
                'nama_ibu' => $request->nama_ibu,
                'umur' => $request->umur,
                'nama_suami' => $request->nama_suami,
                'alamat' => $request->alamat,
                'tgl_partus' => date('Y-m-d', strtotime($request->tgl_partus)),
                'kondisi_ibu' => $request->kondisi_ibu ?? 'Sehat',
                'jml_darah' => $request->jml_darah,
                'partograf' => $request->partograf,
                'kondisi_bayi' => $request->kondisi_bayi,
                'jk_bayi' => $request->jk_bayi,
                'bbl' => $request->bbl,
                'imd' => $request->imd,
                'tgl_unijek' => date('Y-m-d', strtotime($request->tgl_unijek)),
                'tgl_vit_k' => date('Y-m-d', strtotime($request->tgl_vit_k)),
                'jns_persalinan' => $request->jns_persalinan,
                'petugas' => $request->petugas,
                'status_bayar' => $request->status_bayar,
                'author' => auth()->user()->id,
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data has been saved');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('identitas-persalinan.create');
    }
}
