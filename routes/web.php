<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes(['register' => true, 'reset' => false]);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::get('kesga-gizi/identitas-persalinan', 'KesgaGizi\IdentitasPersalinanController@index')->name('identitas-persalinan');
    Route::get('kesga-gizi/identitas-persalinan/create', 'KesgaGizi\IdentitasPersalinanController@create')->name('identitas-persalinan.create');
    Route::post('kesga-gizi/identitas-persalinan/store', 'KesgaGizi\IdentitasPersalinanController@store')->name('identitas-persalinan.store');
    Route::get('kesga-gizi/identitas-persalinan/{id}/edit', 'KesgaGizi\IdentitasPersalinanController@edit')->name('identitas-persalinan.edit');
    Route::patch('kesga-gizi/identitas-persalinan/{id}/update', 'KesgaGizi\IdentitasPersalinanController@update')->name('identitas-persalinan.update');
    Route::delete('kesga-gizi/identitas-persalinan/{id}', 'KesgaGizi\IdentitasPersalinanController@destroy')->name('identitas-persalinan.destroy');


    Route::get('kesga-gizi/lap-pmt-bumil', 'KesgaGizi\PmtController@index')->name('lap-pmt-bumil');
    Route::get('kesga-gizi/lap-pmt-bumil/create', 'KesgaGizi\PmtController@create')->name('lap-pmt-bumil.create');
    Route::post('kesga-gizi/lap-pmt-bumil/store', 'KesgaGizi\PmtController@store')->name('lap-pmt-bumil.store');
    Route::get('kesga-gizi/lap-pmt-bumil/{id}/edit', 'KesgaGizi\PmtController@edit')->name('lap-pmt-bumil.edit');
    Route::patch('kesga-gizi/lap-pmt-bumil/{id}/update', 'KesgaGizi\PmtController@update')->name('lap-pmt-bumil.update');
    Route::delete('kesga-gizi/lap-pmt-bumil/{id}', 'KesgaGizi\PmtController@destroy')->name('lap-pmt-bumil.destroy');

    Route::get('settings', 'Settings\SettingsController@index')->name('settings.index');
    Route::post('settings/update', 'Settings\SettingsController@updateGeneral')->name('settings.updateGeneral');
});
