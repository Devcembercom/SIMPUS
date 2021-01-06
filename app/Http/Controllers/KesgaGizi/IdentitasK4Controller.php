<?php

namespace App\Http\Controllers\KesgaGizi;

use Exception;
use App\Models\IdentitasK4;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\KesgaGizi\IdentitasK1K4\IdentitasK4Val;

class IdentitasK4Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dataK4()
    {
        if (request()->ajax()) {
            $data = IdentitasK4::orderBy('created_at', 'DESC')->get();
            return DataTables::of($data)
                ->addColumn('nama_ibu', function ($s) {
                    return $s->nama_ibu . ' <div class="table-links"><a href="#">View</a><div class="bullet"></div><a href="' . route('editDataK4', ['id' => $s->id, 'type' => 'k4']) . '">Edit</a><div class="bullet"></div><form id="data-' . $s->id . '" action="' . route('destroyK4', ['id' => $s->id, 'type' => 'k4']) . '"   method="post"> ' . csrf_field() . ' ' . method_field('delete') . '</form>
                    <a href="javascript:" onclick="confirmDelete(' . $s->id . ' )" class="text-danger">Trash</a></div>';
                })
                ->addColumn('bulan', function ($s) {
                    return date('F', strtotime($s->created_at));
                })
                ->addColumn('umur', function ($s) {
                    return $s->umur . ' Th';
                })
                ->rawColumns(['nama_ibu', 'bulan', 'umur'])
                ->addIndexColumn()
                ->toJson();
        }
    }
    public function create()
    {
        return view('KesgaGizi.IdentitasK1K4.form.formK4', [
            'updateMode' => false,
        ]);
    }

    public function store(IdentitasK4Val $request)
    {
        try {
            IdentitasK4::insert([
                'bulan' => $request->bulan,
                'nama_ibu' => $request->nama_ibu,
                'umur' => $request->umur,
                'alamat' => $request->alamat,
                'nama_suami' => $request->nama_suami,
                'tgl_k4' => $request->tgl_k4,
                'masalah' => $request->masalah,
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Disimpan');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('createDataK4', ['type' => 'k4']);
    }

    public function edit($id)
    {
        return view('KesgaGizi.IdentitasK1K4.form.formK4', [
            'data' => IdentitasK4::findOrFail($id),
            'updateMode' => true
        ]);
    }

    public function update(IdentitasK4Val $request, $id)
    {
        try {
            $data = IdentitasK4::findOrFail($id);
            $data->update([
                'bulan' => $request->bulan,
                'nama_ibu' => $request->nama_ibu,
                'umur' => $request->umur,
                'alamat' => $request->alamat,
                'nama_suami' => $request->nama_suami,
                'tgl_k4' => $request->tgl_k4,
                'masalah' => $request->masalah,
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
            $data = IdentitasK4::destroy($id);
            session()->flash('type', 'success');
            session()->flash('message', 'Data Berhasil Dihapus');
        } catch (Exception $e) {
            session()->flash('type', 'error');
            session()->flash('message', $e);
        }
        return redirect()->route('identitasK1k4');
    }
}
