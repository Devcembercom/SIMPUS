<?php

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::create([
            'name' => 'site_title',
            'val' => 'SIMPUS',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Settings::create([
            'name' => 'site_logo',
            'val' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
