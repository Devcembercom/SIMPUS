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
    Route::get('kesga-gizi/files-identitas-persalinan', 'KesgaGizi\IdentitasPersalinanController@fileIdentitasPersalinan')->name('list.fileIdentitasPersalinan');
    Route::post('kesga-gizi/identitas-persalinan', 'KesgaGizi\IdentitasPersalinanController@uploadFile')->name('IdentitasPersalinan.uploadFile');

    Route::get('kesga-gizi/lap-pmt-bumil', 'KesgaGizi\PmtController@index')->name('lap-pmt-bumil');
    Route::get('kesga-gizi/lap-pmt-bumil/create', 'KesgaGizi\PmtController@create')->name('lap-pmt-bumil.create');
    Route::post('kesga-gizi/lap-pmt-bumil/store', 'KesgaGizi\PmtController@store')->name('lap-pmt-bumil.store');
    Route::get('kesga-gizi/lap-pmt-bumil/{id}/edit', 'KesgaGizi\PmtController@edit')->name('lap-pmt-bumil.edit');
    Route::patch('kesga-gizi/lap-pmt-bumil/{id}/update', 'KesgaGizi\PmtController@update')->name('lap-pmt-bumil.update');
    Route::delete('kesga-gizi/lap-pmt-bumil/{id}', 'KesgaGizi\PmtController@destroy')->name('lap-pmt-bumil.destroy');

    Route::get('kesga-gizi/lap-lb1', 'KesgaGizi\LB1Controller@index')->name('lap-lb1');
    Route::get('kesga-gizi/lap-lb12', 'KesgaGizi\LB1Controller@index')->name('lap-lb12');
    Route::get('kesga-gizi/lap-lb13', 'KesgaGizi\LB1Controller@index')->name('lap-lb13');
    Route::get('kesga-gizi/lap-lb14', 'KesgaGizi\LB1Controller@index')->name('lap-lb14');
    Route::get('kesga-gizi/lap-lb15', 'KesgaGizi\LB1Controller@index')->name('lap-lb15');
    Route::get('kesga-gizi/lap-lb16', 'KesgaGizi\LB1Controller@index')->name('lap-lb16');
    Route::get('kesga-gizi/lap-lb17', 'KesgaGizi\LB1Controller@index')->name('lap-lb17');
    Route::get('kesga-gizi/lap-lb18', 'KesgaGizi\LB1Controller@index')->name('lap-lb18');
    Route::get('kesga-gizi/lap-lb19', 'KesgaGizi\LB1Controller@index')->name('lap-lb19');
    Route::get('kesga-gizi/lap-lb110', 'KesgaGizi\LB1Controller@index')->name('lap-lb110');
    Route::get('kesga-gizi/lap-lb111', 'KesgaGizi\LB1Controller@index')->name('lap-lb111');
    Route::get('kesga-gizi/lap-lb112', 'KesgaGizi\LB1Controller@index')->name('lap-lb112');
    Route::get('kesga-gizi/lap-lb113', 'KesgaGizi\LB1Controller@index')->name('lap-lb113');
    Route::get('kesga-gizi/lap-lb114', 'KesgaGizi\LB1Controller@index')->name('lap-lb114');
    Route::get('kesga-gizi/lap-lb115', 'KesgaGizi\LB1Controller@index')->name('lap-lb115');
    Route::get('kesga-gizi/lap-lb116', 'KesgaGizi\LB1Controller@index')->name('lap-lb116');
    Route::get('kesga-gizi/lap-lb117', 'KesgaGizi\LB1Controller@index')->name('lap-lb117');
    Route::get('kesga-gizi/lap-lb118', 'KesgaGizi\LB1Controller@index')->name('lap-lb118');
    Route::get('kesga-gizi/lap-lb119', 'KesgaGizi\LB1Controller@index')->name('lap-lb119');
    Route::get('kesga-gizi/lap-lb120', 'KesgaGizi\LB1Controller@index')->name('lap-lb120');
    Route::get('kesga-gizi/lap-lb121', 'KesgaGizi\LB1Controller@index')->name('lap-lb121');
    Route::get('kesga-gizi/lap-lb122', 'KesgaGizi\LB1Controller@index')->name('lap-lb122');
    Route::get('kesga-gizi/lap-lb123', 'KesgaGizi\LB1Controller@index')->name('lap-lb123');
    Route::get('kesga-gizi/lap-lb124', 'KesgaGizi\LB1Controller@index')->name('lap-lb124');
    Route::get('kesga-gizi/lap-lb125', 'KesgaGizi\LB1Controller@index')->name('lap-lb125');
    Route::get('kesga-gizi/lap-lb126', 'KesgaGizi\LB1Controller@index')->name('lap-lb126');
    Route::get('kesga-gizi/lap-lb127', 'KesgaGizi\LB1Controller@index')->name('lap-lb127');
    Route::get('kesga-gizi/lap-lb128', 'KesgaGizi\LB1Controller@index')->name('lap-lb128');
    Route::get('kesga-gizi/lap-lb129', 'KesgaGizi\LB1Controller@index')->name('lap-lb129');
    Route::get('kesga-gizi/lap-lb130', 'KesgaGizi\LB1Controller@index')->name('lap-lb130');
    Route::get('kesga-gizi/lap-lb131', 'KesgaGizi\LB1Controller@index')->name('lap-lb131');
    Route::get('kesga-gizi/lap-lb132', 'KesgaGizi\LB1Controller@index')->name('lap-lb132');
    Route::get('kesga-gizi/lap-lb133', 'KesgaGizi\LB1Controller@index')->name('lap-lb133');
    Route::get('kesga-gizi/lap-lb134', 'KesgaGizi\LB1Controller@index')->name('lap-lb134');
    Route::get('kesga-gizi/lap-lb135', 'KesgaGizi\LB1Controller@index')->name('lap-lb135');
    Route::get('kesga-gizi/lap-lb136', 'KesgaGizi\LB1Controller@index')->name('lap-lb136');
    Route::get('kesga-gizi/lap-lb137', 'KesgaGizi\LB1Controller@index')->name('lap-lb137');
    Route::get('kesga-gizi/lap-lb138', 'KesgaGizi\LB1Controller@index')->name('lap-lb138');


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
    Route::get('laporan-promkes-kesling-pis-pk-lansia1', 'Promkes\PromkesController@index')->name('promkes1');
    Route::get('laporan-promkes-kesling-pis-pk-lansia2', 'Promkes\PromkesController@index')->name('promkes2');
    Route::get('laporan-promkes-kesling-pis-pk-lansia3', 'Promkes\PromkesController@index')->name('promkes3');
    Route::get('laporan-promkes-kesling-pis-pk-lansia4', 'Promkes\PromkesController@index')->name('promkes4');
    Route::get('laporan-promkes-kesling-pis-pk-lansia5', 'Promkes\PromkesController@index')->name('promkes5');
    Route::get('laporan-promkes-kesling-pis-pk-lansia6', 'Promkes\PromkesController@index')->name('promkes6');
    Route::get('laporan-promkes-kesling-pis-pk-lansia7', 'Promkes\PromkesController@index')->name('promkes7');
    Route::get('laporan-promkes-kesling-pis-pk-lansia8', 'Promkes\PromkesController@index')->name('promkes8');
    Route::get('laporan-promkes-kesling-pis-pk-lansia9', 'Promkes\PromkesController@index')->name('promkes9');
    Route::get('laporan-promkes-kesling-pis-pk-lansia10', 'Promkes\PromkesController@index')->name('promkes10');
    Route::get('laporan-promkes-kesling-pis-pk-lansia11', 'Promkes\PromkesController@index')->name('promkes11');
    Route::get('laporan-promkes-kesling-pis-pk-lansia12', 'Promkes\PromkesController@index')->name('promkes12');
    Route::get('laporan-promkes-kesling-pis-pk-lansia13', 'Promkes\PromkesController@index')->name('promkes13');
    Route::get('laporan-promkes-kesling-pis-pk-lansia14', 'Promkes\PromkesController@index')->name('promkes14');
    Route::get('laporan-promkes-kesling-pis-pk-lansia15', 'Promkes\PromkesController@index')->name('promkes15');
    Route::get('laporan-promkes-kesling-pis-pk-lansia16', 'Promkes\PromkesController@index')->name('promkes16');
    Route::get('laporan-promkes-kesling-pis-pk-lansia17', 'Promkes\PromkesController@index')->name('promkes17');
    Route::get('laporan-promkes-kesling-pis-pk-lansia18', 'Promkes\PromkesController@index')->name('promkes18');
    Route::get('laporan-promkes-kesling-pis-pk-lansia19', 'Promkes\PromkesController@index')->name('promkes19');
    Route::get('laporan-promkes-kesling-pis-pk-lansia20', 'Promkes\PromkesController@index')->name('promkes20');
    Route::get('laporan-promkes-kesling-pis-pk-lansia21', 'Promkes\PromkesController@index')->name('promkes21');
    Route::get('laporan-promkes-kesling-pis-pk-lansia22', 'Promkes\PromkesController@index')->name('promkes22');
    Route::get('laporan-promkes-kesling-pis-pk-lansia23', 'Promkes\PromkesController@index')->name('promkes23');
    Route::get('laporan-promkes-kesling-pis-pk-lansia24', 'Promkes\PromkesController@index')->name('promkes24');
    Route::get('laporan-promkes-kesling-pis-pk-lansia25', 'Promkes\PromkesController@index')->name('promkes25');
    Route::get('laporan-promkes-kesling-pis-pk-lansia26', 'Promkes\PromkesController@index')->name('promkes26');
    Route::get('laporan-promkes-kesling-pis-pk-lansia27', 'Promkes\PromkesController@index')->name('promkes27');
    Route::get('laporan-promkes-kesling-pis-pk-lansia28', 'Promkes\PromkesController@index')->name('promkes28');
    Route::get('laporan-promkes-kesling-pis-pk-lansia29', 'Promkes\PromkesController@index')->name('promkes29');
    Route::get('laporan-promkes-kesling-pis-pk-lansia30', 'Promkes\PromkesController@index')->name('promkes30');
    Route::get('laporan-promkes-kesling-pis-pk-lansia31', 'Promkes\PromkesController@index')->name('promkes31');
    Route::get('laporan-promkes-kesling-pis-pk-lansia32', 'Promkes\PromkesController@index')->name('promkes32');
    Route::get('laporan-promkes-kesling-pis-pk-lansia33', 'Promkes\PromkesController@index')->name('promkes33');
    Route::get('laporan-promkes-kesling-pis-pk-lansia34', 'Promkes\PromkesController@index')->name('promkes34');
    Route::get('laporan-promkes-kesling-pis-pk-lansia35', 'Promkes\PromkesController@index')->name('promkes35');
    Route::get('laporan-promkes-kesling-pis-pk-lansia36', 'Promkes\PromkesController@index')->name('promkes36');
    Route::get('laporan-promkes-kesling-pis-pk-lansia37', 'Promkes\PromkesController@index')->name('promkes37');
    Route::get('laporan-promkes-kesling-pis-pk-lansia38', 'Promkes\PromkesController@index')->name('promkes38');




    Route::get('promkes-kesling-pis-pk-lansia/list-promkes', 'Promkes\PromkesController@listPromkes')->name('list.promkes');
    Route::post('promkes-kesling-pis-pk-lansia/lap-promkes', 'Promkes\PromkesController@store')->name('promkes.uploadFile');
    Route::get('promkes-kesling-pis-pk-lansia/lap-promkes/download', 'Promkes\PromkesController@fileDownload')->name('promkes.download');

    Route::get('kesga-gizi/chart/kesga', 'chart@kesga')->name('chart-kesga');
    Route::get('kesga-gizi/chart/promkes', 'chart@promkes')->name('chart-promkes');
    Route::get('kesga-gizi/chart/lb1', 'chart@lb1')->name('chart-lb1');

    Route::get('kesga-gizi/jorong', 'KesgaGizi\jorong@index')->name('lap-jorong');


    Route::get('kesga-gizi/BGM', 'KesgaGizi\BGM@index')->name('lap-BGM');
    Route::get('kesga-gizi/MTBS2', 'KesgaGizi\MTBS2@index')->name('lap-MTBS2');
    Route::get('kesga-gizi/MTBS', 'KesgaGizi\MTBS@index')->name('lap-MTBS');
    Route::get('kesga-gizi/NIFAS', 'KesgaGizi\NIFAS@index')->name('lap-NIFAS');


    Route::get('settings', 'Settings\SettingsController@index')->name('settings.index');
    Route::post('settings/update', 'Settings\SettingsController@updateGeneral')->name('settings.updateGeneral');
    Route::post('settings/addNagari', 'Settings\SettingsController@addNagari')->name('settings.addNagari');
    Route::get('settings/delete/{id}', 'Settings\SettingsController@deleteNagari')->name('settings.deleteNagari');
});
