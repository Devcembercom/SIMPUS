<?php

namespace App\Http\Controllers\KesgaGizi;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\IdentitasPersalinan;
use App\Http\Controllers\Controller;
use SebastianBergmann\GlobalState\Exception;
use App\Http\Requests\KesgaGizi\IdentitasPersalinan\FormIdentitasPersalinan;

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
                ->addColumn('jns_persalinan', function ($s) {
                    return $s->getJenisBersalin();
                })
                ->addColumn('nama_ibu', function ($s) {
                    return $s->nama_ibu . ' <div class="table-links"><a href="#">View</a><div class="bullet"></div><a href="' . route('identitas-persalinan.edit', $s->id) . '">Edit</a><div class="bullet"></div><form id="data-' . $s->id . '" action="' . route('identitas-persalinan.destroy', $s->id) . '"   method="post"> ' . csrf_field() . ' ' . method_field('delete') . '</form>
                    <a href="javascript:" onclick="confirmDelete(' . $s->id . ' )" class="text-danger">Trash</a></div>';
                })
                ->rawColumns(['umur', 'tgl_partus', 'partograf', 'jns_persalinan', 'nama_ibu'])
                ->addIndexColumn()
                ->toJson();
        }
        return view('KesgaGizi.IdentitasPersalinan.index');
    }

    public function create()
    {
        $updateMode = false;
        return view('KesgaGizi.IdentitasPersalinan.IdP-form', compact('updateMode'));
    }

    public function store(FormIdentitasPersalinan $request)
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
            session()->flash('message', 'Data Berhasil Disimpan');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('identitas-persalinan.create');
    }

    public function edit($id)
    {
        return view('KesgaGizi.IdentitasPersalinan.IdP-form', [
            'data' => IdentitasPersalinan::findOrFail($id),
            'updateMode' => true
        ]);
    }

    public function update(FormIdentitasPersalinan $request, $id)
    {
        try {
            $data = IdentitasPersalinan::findOrFail($id);
            $data->update([
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
            session()->flash('message', 'Data Berhasil Dirubah');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('identitas-persalinan');
    }

    public function destroy($id)
    {
        try {
            $data = IdentitasPersalinan::destroy($id);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Dihapus');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('identitas-persalinan');
    }
}
