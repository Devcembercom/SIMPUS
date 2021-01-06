<?php

namespace App\Http\Controllers\KesgaGizi;

use Exception;
use App\Models\IdentitasK1;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\KesgaGizi\IdentitasK1K4\IdentitasK1Val;

class IdentitasK1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
                ->addColumn('nama_ibu', function ($s) {
                    return $s->nama_ibu . ' <div class="table-links"><a href="#">View</a><div class="bullet"></div><a href="' . route('editDataK1', ['id' => $s->id, 'type' => 'k1']) . '">Edit</a><div class="bullet"></div><form id="data-' . $s->id . '" action="' . route('destroyK1', ['id' => $s->id, 'type' => 'k1']) . '"   method="post"> ' . csrf_field() . ' ' . method_field('delete') . '</form>
                    <a href="javascript:" onclick="confirmDelete(' . $s->id . ' )" class="text-danger">Trash</a></div>';
                })
                ->addColumn('umur', function ($s) {
                    return $s->umur . ' Th';
                })
                ->addColumn('usia_hamil', function ($s) {
                    return $s->usia_hamil . ' Bulan';
                })
                ->rawColumns(['bulan', 'umur', 'nama_ibu', 'usia_hamil'])
                ->addIndexColumn()
                ->toJson();
        }
    }

    public function create()
    {
        return view('KesgaGizi.IdentitasK1K4.form.formK1', [
            'updateMode' => false,
        ]);
    }

    public function store(IdentitasK1Val $request)
    {
        try {
            IdentitasK1::insert([
                'bulan' => $request->bulan,
                'nama_ibu' => $request->nama_ibu,
                'umur' => $request->umur,
                'alamat' => $request->alamat,
                'nama_suami' => $request->nama_suami,
                'hamil_ke' => $request->hamil_ke,
                'hpht' => $request->hpht,
                'usia_hamil' => $request->usia_hamil,
                'jenis_resiko' => $request->jenis_resiko,
                'dpt_buku' => $request->dpt_buku
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Disimpan');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('createDataK1', ['type' => 'k1']);
    }

    public function edit(Request $request, $id)
    {
        return view('KesgaGizi.IdentitasK1K4.form.formK1', [
            'data' => IdentitasK1::findOrFail($id),
            'updateMode' => true
        ]);
    }

    public function update(IdentitasK1Val $request, $id)
    {
        try {
            $data = IdentitasK1::findOrFail($id);
            $data->update([
                'bulan' => $request->bulan,
                'nama_ibu' => $request->nama_ibu,
                'umur' => $request->umur,
                'alamat' => $request->alamat,
                'nama_suami' => $request->nama_suami,
                'hamil_ke' => $request->hamil_ke,
                'hpht' => $request->hpht,
                'usia_hamil' => $request->usia_hamil,
                'jenis_resiko' => $request->jenis_resiko,
                'dpt_buku' => $request->dpt_buku
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Diubah');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('identitasK1k4');
    }

    public function destroy($id)
    {
        try {
            $data = IdentitasK1::destroy($id);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Dihapus');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('identitasK1k4');
    }
}
