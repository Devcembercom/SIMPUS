<?php

namespace App\View\Components;

use App\Models\Settings;
use Illuminate\View\Component;

class GuestLayout extends Component
{
    public function render()
    {
        return view('layouts.guest', [
            'title' => Settings::where('name', 'site_title')->first()->val,
            'icon' => Settings::where('name', 'site_logo')->first()->val
        ]);
    }
}
