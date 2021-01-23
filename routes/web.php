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
    Route::get('kesga-gizi/identitas-persalinan/download', 'KesgaGizi\IdentitasPersalinanController@fileDownload')->name('IdentitasPersalinan.download');

    Route::get('kesga-gizi/lap-pmt-bumil', 'KesgaGizi\PmtController@index')->name('lap-pmt-bumil');
    Route::get('kesga-gizi/lap-pmt-bumil/create', 'KesgaGizi\PmtController@create')->name('lap-pmt-bumil.create');
    Route::post('kesga-gizi/lap-pmt-bumil/store', 'KesgaGizi\PmtController@store')->name('lap-pmt-bumil.store');
    Route::get('kesga-gizi/lap-pmt-bumil/{id}/edit', 'KesgaGizi\PmtController@edit')->name('lap-pmt-bumil.edit');
    Route::patch('kesga-gizi/lap-pmt-bumil/{id}/update', 'KesgaGizi\PmtController@update')->name('lap-pmt-bumil.update');
    Route::delete('kesga-gizi/lap-pmt-bumil/{id}', 'KesgaGizi\PmtController@destroy')->name('lap-pmt-bumil.destroy');
    Route::get('kesga-gizi/files-pmt-bumil', 'KesgaGizi\PmtController@filePmt')->name('list.filePmt');
    Route::post('kesga-gizi/pmt-bumil', 'KesgaGizi\PmtController@uploadFile')->name('Pmt.uploadFile');
    Route::get('kesga-gizi/pmt-bumil/download', 'KesgaGizi\PmtController@fileDownload')->name('pmt.download');

    Route::get('kesga-gizi/lap-lb1', 'KesgaGizi\LB1Controller@index')->name('lap-lb1');
    Route::get('nagari/kesga-gizi', 'KesgaGizi\Nagari@kesga')->name('lap-kesga-nagari');
    Route::get('nagari/promkes', 'KesgaGizi\Nagari@promkes')->name('lap-promkes-nagari');
    Route::get('nagari/lb1', 'KesgaGizi\Nagari@lb1')->name('lap-lb1-nagari');

    Route::get('kesga-gizi/list-lap-lb1', 'KesgaGizi\LB1Controller@listLb1')->name('list.lb1');
    Route::post('kesga-gizi/lap-lb1', 'KesgaGizi\LB1Controller@store')->name('lb1.uploadFile');
    Route::get('kesga-gizi/lap-lb1/download', 'KesgaGizi\LB1Controller@fileDownload')->name('lb1.download');

    Route::get('kesga-gizi/lap-mp', 'KesgaGizi\MpController@index')->name('lap-mp');
    Route::get('kesga-gizi/lap-mp/files-mp', 'KesgaGizi\MpController@fileMp')->name('fileMp');
    Route::post('kesga-gizi/lap-mp/mp', 'KesgaGizi\MpController@uploadFile')->name('mp.uploadFile');
    Route::get('kesga-gizi/lap-mp/mp/download', 'KesgaGizi\MpController@fileDownload')->name('mp.download');

    Route::get('kesga-gizi/lap-anemia', 'KesgaGizi\AnemiaController@index')->name('lap-anemia');
    Route::get('kesga-gizi/lap-anemia/files-anemia', 'KesgaGizi\AnemiaController@fileAnemia')->name('fileAnemia');
    Route::post('kesga-gizi/lap-anemia/anemia', 'KesgaGizi\AnemiaController@uploadFile')->name('anemia.uploadFile');
    Route::get('kesga-gizi/lap-anemia/anemia/download', 'KesgaGizi\AnemiaController@fileDownload')->name('anemia.download');


    Route::get('kesga-gizi/lap-bayi', 'KesgaGizi\BayiController@index')->name('lap-bayi');
    Route::get('kesga-gizi/lap-bayi/files-bayi', 'KesgaGizi\BayiController@filebayi')->name('fileBayi');
    Route::post('kesga-gizi/lap-bayi/bayi', 'KesgaGizi\BayiController@uploadFile')->name('bayi.uploadFile');
    Route::get('kesga-gizi/lap-bayi/download', 'KesgaGizi\BayiController@fileDownload')->name('bayi.download');

    Route::get('kesga-gizi/pws-kia-nagari', 'KesgaGizi\PwsKiaNagariController@index')->name('PwsKiaNagari');
    Route::get('kesga-gizi/files-kia', 'KesgaGizi\PwsKiaNagariController@filekia')->name('list.fileKia');
    Route::post('kesga-gizi/kia', 'KesgaGizi\PwsKiaNagariController@uploadFile')->name('kia.uploadFile');
    Route::get('kesga-gizi/kia/download', 'KesgaGizi\PwsKiaNagariController@fileDownload')->name('kia.download');


    Route::get('identitas-k1-&-k4', 'KesgaGizi\IdentitasK1Controller@index')->name('identitasK1k4');
    Route::get('data-identitas-k1', 'KesgaGizi\IdentitasK1Controller@dataK1')->name('dataK1');
    Route::get('data-identitas-k4', 'KesgaGizi\IdentitasK4Controller@dataK4')->name('dataK4');
    Route::get('data-identitas-k4/files-k1k4', 'KesgaGizi\IdentitasK1Controller@filek1k4')->name('list.fileK1K4');
    Route::post('data-identitas-k4/k1k4', 'KesgaGizi\IdentitasK1Controller@uploadFile')->name('k1k4.uploadFile');
    Route::get('data-identitas-k4/k1k4/download', 'KesgaGizi\IdentitasK1Controller@fileDownload')->name('k1k4.download');

    Route::get('laporan-promkes-kesling-pis-pk-lansia', 'Promkes\PromkesController@index')->name('promkes');

    Route::get('promkes-kesling-pis-pk-lansia/list-promkes', 'Promkes\PromkesController@listPromkes')->name('list.promkes');
    Route::post('promkes-kesling-pis-pk-lansia/lap-promkes', 'Promkes\PromkesController@store')->name('promkes.uploadFile');
    Route::get('promkes-kesling-pis-pk-lansia/lap-promkes/download', 'Promkes\PromkesController@fileDownload')->name('promkes.download');

    Route::get('kesga-gizi/chart/kesga', 'chart@kesga')->name('chart-kesga');
    Route::get('kesga-gizi/chart/promkes', 'chart@promkes')->name('chart-promkes');
    Route::get('kesga-gizi/chart/lb1', 'chart@lb1')->name('chart-lb1');

    Route::get('kesga-gizi/jorong', 'KesgaGizi\jorong@index')->name('lap-jorong');


    Route::get('kesga-gizi/BGM', 'KesgaGizi\BGM@index')->name('lap-BGM');
    Route::get('kesga-gizi/BGM/files-bgm', 'KesgaGizi\BGM@fileBgm')->name('fileBgm');
    Route::post('kesga-gizi/BGM/bgm', 'KesgaGizi\BGM@uploadFile')->name('bgm.uploadFile');
    Route::get('kesga-gizi/BGM/download', 'KesgaGizi\BGM@fileDownload')->name('bgm.download');

    Route::get('kesga-gizi/MTBS2', 'KesgaGizi\MTBS2@index')->name('lap-MTBS2');
    Route::get('kesga-gizi/MTBS2/files-MTBS2', 'KesgaGizi\MTBS2@fileMtbs2')->name('fileMtbs2');
    Route::post('kesga-gizi/MTBS2/MTBS2', 'KesgaGizi\MTBS2@uploadFile')->name('Mtbs2.uploadFile');
    Route::get('kesga-gizi/MTBS2/download', 'KesgaGizi\MTBS2@fileDownload')->name('Mtbs2.download');

    Route::get('kesga-gizi/MTBS', 'KesgaGizi\MTBS@index')->name('lap-MTBS');
    Route::get('kesga-gizi/MTBS/files-MTBS', 'KesgaGizi\MTBS@fileMtbs')->name('fileMtbs');
    Route::post('kesga-gizi/MTBS/MTBS', 'KesgaGizi\MTBS@uploadFile')->name('Mtbs.uploadFile');
    Route::get('kesga-gizi/MTBS/download', 'KesgaGizi\MTBS@fileDownload')->name('Mtbs.download');

    Route::get('kesga-gizi/NIFAS', 'KesgaGizi\NIFAS@index')->name('lap-NIFAS');
    Route::get('kesga-gizi/NIFAS/files-NIFAS', 'KesgaGizi\NIFAS@fileNIFAS')->name('fileNIFAS');
    Route::post('kesga-gizi/NIFAS', 'KesgaGizi\NIFAS@uploadFile')->name('NIFAS.uploadFile');
    Route::get('kesga-gizi/NIFAS/download', 'KesgaGizi\NIFAS@fileDownload')->name('NIFAS.download');

    Route::get('kesga-gizi/penyuluhan', 'KesgaGizi\penyuluhan@index')->name('lap-penyuluhan');
    Route::get('kesga-gizi/kesgaz', 'KesgaGizi\Kesgaz@index')->name('lap-kesgaz');
    Route::get('kesga-gizi/lansia', 'KesgaGizi\Lansia@index')->name('lap-lansia');
    Route::get('kesga-gizi/p2p', 'KesgaGizi\P2P@index')->name('lap-p2p');
    Route::get('kesga-gizi/penjaringan', 'KesgaGizi\Penjaringan@index')->name('lap-penjaringan');
    Route::get('kesga-gizi/diare', 'KesgaGizi\Diare@index')->name('lap-diare');
    Route::get('kesga-gizi/jiwa', 'KesgaGizi\Jiwa@index')->name('lap-jiwa');
    Route::get('kesga-gizi/pasien', 'KesgaGizi\Pasien@index')->name('lap-pasien');
    Route::get('kesga-gizi/kematian', 'KesgaGizi\Kematian@index')->name('lap-kematian');
    Route::get('kesga-gizi/ukk', 'KesgaGizi\Ukk@index')->name('lap-ukk');
    Route::get('kesga-gizi/perkesmas', 'KesgaGizi\perkesmas@index')->name('lap-perkesmas');
    Route::get('kesga-gizi/LPLPO', 'KesgaGizi\LPLPO@index')->name('lap-LPLPO');
    Route::get('kesga-gizi/kunjungan', 'KesgaGizi\Kunjungan@index')->name('lap-kunjungan');


    Route::get('settings', 'Settings\SettingsController@index')->name('settings.index');
    Route::post('settings/update', 'Settings\SettingsController@updateGeneral')->name('settings.updateGeneral');
    Route::post('settings/addNagari', 'Settings\SettingsController@addNagari')->name('settings.addNagari');
    Route::get('settings/delete/{id}', 'Settings\SettingsController@deleteNagari')->name('settings.deleteNagari');
});
