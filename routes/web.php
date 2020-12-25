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
});
