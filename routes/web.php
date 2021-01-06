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
    Route::get('kesga-gizi/list-lap-lb1', 'KesgaGizi\LB1Controller@listLb1')->name('list.lb1');
    Route::post('kesga-gizi/lap-lb1', 'KesgaGizi\LB1Controller@store')->name('lb1.uploadFile');
    Route::get('kesga-gizi/lap-lb1/download', 'KesgaGizi\LB1Controller@fileDownload')->name('lb1.download');

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

    Route::get('identitas-k1-&-k4', 'KesgaGizi\IdentitasK1Controller@index')->name('identitasK1k4');
    Route::get('data-identitas-k1', 'KesgaGizi\IdentitasK1Controller@dataK1')->name('dataK1');
    Route::get('data-identitas-k4', 'KesgaGizi\IdentitasK4Controller@dataK4')->name('dataK4');

    Route::get('identitas-k1/create', 'KesgaGizi\IdentitasK1Controller@create')->name('createDataK1');
    Route::get('identitas-k4/create', 'KesgaGizi\IdentitasK4Controller@create')->name('createDataK4');
    Route::post('identitas-k1-&-k4/storek1', 'KesgaGizi\IdentitasK1Controller@store')->name('storeK1');
    Route::post('identitas-k1-&-k4/storek4', 'KesgaGizi\IdentitasK4Controller@store')->name('storeK4');

    Route::get('identitas-k1-&-k4/{id}/editK1', 'KesgaGizi\IdentitasK1Controller@edit')->name('editDataK1');
    Route::get('identitas-k1-&-k4/{id}/editK4', 'KesgaGizi\IdentitasK4Controller@edit')->name('editDataK4');
    Route::post('identitas-k1-&-k4/{id}/updateK1', 'KesgaGizi\IdentitasK1Controller@update')->name('updateK1');
    Route::post('identitas-k1-&-k4/{id}/updateK4', 'KesgaGizi\IdentitasK4Controller@update')->name('updateK4');
    Route::delete('identitas-k1-&-k4/{id}/k1', 'KesgaGizi\IdentitasK1Controller@destroy')->name('destroyK1');
    Route::delete('identitas-k1-&-k4/{id}/k4', 'KesgaGizi\IdentitasK4Controller@destroy')->name('destroyK4');

    Route::get('laporan-promkes-kesling-pis-pk-lansia', 'Promkes\PromkesController@index')->name('promkes');

    Route::get('settings', 'Settings\SettingsController@index')->name('settings.index');
    Route::post('settings/update', 'Settings\SettingsController@updateGeneral')->name('settings.updateGeneral');
});
