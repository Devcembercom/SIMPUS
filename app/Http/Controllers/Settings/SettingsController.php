<?php

namespace App\Http\Controllers\Settings;

use Carbon\Carbon;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SettingsController extends Controller
{
    public $path;
    public $dimensions;

    public function __construct()
    {
        $this->middleware('auth');
        $this->path = storage_path('app/public/images');
        $this->dimensions = ['245', '300', '500'];
    }

    public function index()
    {
        return view('settings.index');
    }

    public function updateGeneral(Request $request)
    {
        return abort('404');
        // $request->validate([
        //     'site_title' => 'required|string|max:13'
        // ]);
        // $data = new Settings();
        // if ($request->site_logo) {
        //     $request->validate([
        //         'site_logo' => 'image|mimes:jpeg,png,jpg,gif,svg,fill|max:2048'
        //     ]);
        //     if (!File::isDirectory($this->path)) {
        //         File::makeDirectory($this->path);
        //     }

        //     $file = $request->file('site_logo');
        //     $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        //     Image::make($file)->save($this->path . '/' . $fileName);

        //     foreach ($this->dimensions as $row) {
        //         $canvas = Image::canvas($row, $row);
        //         $resizeImage  = Image::make($file)->resize($row, $row, function ($constraint) {
        //             $constraint->aspectRatio();
        //         });

        //         if (!File::isDirectory($this->path . '/' . $row)) {
        //             File::makeDirectory($this->path . '/' . $row);
        //         }

        //         $canvas->insert($resizeImage, 'center');
        //         $canvas->save($this->path . '/' . $row . '/' . $fileName);
        //     }
        //     $data->site_logo = $fileName;
        // }
        // $data->name = $request->site_title;
        // $data->firstOrNew();

        // session()->flash('type', 'success');
        // session()->flash('message', 'Data Berhasil Disimpan');
        // return redirect()->route('settings.index', ['tab' => 'general']);
    }
}
