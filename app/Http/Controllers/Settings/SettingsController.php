<?php

namespace App\Http\Controllers\Settings;

use Carbon\Carbon;
use App\Models\Nagari;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public $path;
    public $dimensions;

    public function __construct()
    {
        $this->middleware('auth');
        $this->path = storage_path('app/public/images');
        $this->dimensions = ['50', '245', '300', '500'];
    }

    public function index()
    {
        $siteTitle = Settings::where('name', 'site_title')->first();
        $datas = null;
        if (request()->tab == 'nagari') {
            $datas = Nagari::paginate(20);
        }
        return view('settings.index', compact('siteTitle','datas'));
    }

    public function updateGeneral(Request $request)
    {
        $request->validate([
            'site_title' => 'required|string|max:13'
        ]);
        $data = new Settings();
        if ($request->file('site_logo')) {
            $request->validate([
                'site_logo' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            if (!File::isDirectory($this->path)) {
                File::makeDirectory($this->path);
            }

            $file = $request->file('site_logo');
            $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            Image::make($file)->save($this->path . '/' . $fileName);

            foreach ($this->dimensions as $row) {
                $canvas = Image::canvas($row, $row);
                $resizeImage  = Image::make($file)->resize($row, $row, function ($constraint) {
                    $constraint->aspectRatio();
                });

                if (!File::isDirectory($this->path . '/' . $row)) {
                    File::makeDirectory($this->path . '/' . $row);
                }

                $canvas->insert($resizeImage, 'center');
                $canvas->save($this->path . '/' . $row . '/' . $fileName);
            }
            $data->where('name', 'site_logo')->update(['val' => $fileName]);
        }
        $data->where('name', 'site_title')->update(['val' => $request->site_title]);

        session()->flash('type', 'success');
        session()->flash('message', 'Data Berhasil Disimpan');
        return redirect()->route('settings.index', ['tab' => 'general']);
    }

    public function addNagari(Request $request)
    {
        $request->validate([
            'nagari' => 'required|string|max:100',
        ]);
        Nagari::insert([
            'nama' => $request->nagari,
        ]);

        session()->flash('type', 'success');
        session()->flash('message', 'Data Berhasil Disimpan');
        return redirect()->route('settings.index', ['tab' => 'nagari']);

    }

    public function deleteNagari($id)
    {
        Nagari::find($id)->delete();
        session()->flash('type', 'success');
        session()->flash('message', 'Data Berhasil dihapus');
        return redirect()->route('settings.index', ['tab' => 'nagari']);
    }
}
