<?php

namespace App\View\Components;

use App\Models\Settings;
use Illuminate\View\Component;

class AppLayout extends Component
{

    public function render()
    {
        return view('layouts.app', [
            'title' => Settings::where('name', 'site_title')->first()->val,
            'icon' => Settings::where('name', 'site_logo')->first()->val
        ]);
    }
}
