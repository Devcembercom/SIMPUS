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

    Route::get('kesga-gizi/lap-lb1', 'KesgaGizi\LB1Controller@index')->name('lap-lb1');

    Route::get('kesga-gizi/lap-mp', 'KesgaGizi\MpController@index')->name('lap-mp');
    Route::get('kesga-gizi/lap-mp/create', 'KesgaGizi\MpController@create')->name('lap-mp.create');
    Route::post('kesga-gizi/lap-mp/store', 'KesgaGizi\MpController@store')->name('lap-mp.store');
    Route::get('kesga-gizi/lap-mp/{id}/edit', 'KesgaGizi\MpController@edit')->name('lap-mp.edit');
    Route::patch('kesga-gizi/lap-mp/{id}/update', 'KesgaGizi\MpController@update')->name('lap-mp.update');
    Route::delete('kesga-gizi/lap-mp/{id}', 'KesgaGizi\MpController@destroy')->name('lap-mp.destroy');

    Route::get('kesga-gizi/lap-anemia', 'KesgaGizi\AnemiaController@index')->name('lap-anemia');
    Route::get('kesga-gizi/lap-anemia/create', 'KesgaGizi\AnemiaController@create')->name('lap-anemia.create');
    Route::post('kesga-gizi/lap-anemia/store', 'KesgaGizi\AnemiaController@store')->name('lap-anemia.store');
    Route::get('kesga-gizi/lap-anemia/{id}/edit', 'KesgaGizi\AnemiaController@edit')->name('lap-anemia.edit');
    Route::patch('kesga-gizi/lap-anemia/{id}/update', 'KesgaGizi\AnemiaController@update')->name('lap-anemia.update');
    Route::delete('kesga-gizi/lap-anemia/{id}', 'KesgaGizi\AnemiaController@destroy')->name('lap-anemia.destroy');

    Route::get('kesga-gizi/lap-bayi', 'KesgaGizi\BayiController@index')->name('lap-bayi');
    Route::get('kesga-gizi/lap-bayi/create', 'KesgaGizi\BayiController@create')->name('lap-bayi.create');
    Route::post('kesga-gizi/lap-bayi/store', 'KesgaGizi\BayiController@store')->name('lap-bayi.store');
    Route::get('kesga-gizi/lap-bayi/{id}/edit', 'KesgaGizi\BayiController@edit')->name('lap-bayi.edit');
    Route::patch('kesga-gizi/lap-bayi/{id}/update', 'KesgaGizi\BayiController@update')->name('lap-bayi.update');
    Route::delete('kesga-gizi/lap-bayi/{id}', 'KesgaGizi\BayiController@destroy')->name('lap-bayi.destroy');

    Route::get('kesga-gizi/pws-kia-nagari', 'KesgaGizi\PwsKiaNagariController@index')->name('PwsKiaNagari');

    Route::get('identitas-k1-&-k4', 'KesgaGizi\IdentitasK1K4Controller@index')->name('identitasK1k4');
    Route::get('data-identitas-k1', 'KesgaGizi\IdentitasK1K4Controller@dataK1')->name('dataK1');
    Route::get('data-identitas-k4', 'KesgaGizi\IdentitasK1K4Controller@dataK4')->name('dataK4');
    Route::get('identitas-k1-&-k4/create', 'KesgaGizi\IdentitasK1K4Controller@create')->name('createDatak1k4');
    Route::get('identitas-k1-&-k4/{id}/edit', 'KesgaGizi\IdentitasK1K4Controller@edit')->name('editDatak1k4');
    Route::post('identitas-k1-&-k4/storek1', 'KesgaGizi\IdentitasK1K4Controller@store')->name('storeK1k4');
    Route::post('identitas-k1-&-k4/{id}/update', 'KesgaGizi\IdentitasK1K4Controller@update')->name('updateK1k4');
    Route::delete('identitas-k1-&-k4/{id}', 'KesgaGizi\IdentitasK1K4Controller@destroy')->name('destroyK1k4');

    Route::get('settings', 'Settings\SettingsController@index')->name('settings.index');
    Route::post('settings/update', 'Settings\SettingsController@updateGeneral')->name('settings.updateGeneral');
});
