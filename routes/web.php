<?php

use App\Model\Laporan\Gangguan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $gangguan = Gangguan::where('id_user',Auth::user()->id)->orderBy('created_at','DESC')->get();
    $judul = 'beranda';
    $menu = '<i class="fa fa-pencil-square-o"></i>';
    $urlmenu = 'http://simalin.payakumbuhkota.go.id/lapor-gangguan';
    return view('welcome', compact('judul','menu','urlmenu','gangguan'));
})->name('/')->middleware('auth');

//Auth::routes();

Route::get('/masuk', 'Auth\LoginController@tampilFormMasuk')->name('login');

Route::post('/masuk', 'Auth\LoginController@login')->name('submit.masuk');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth');

Route::get('/daftar', 'Auth\RegisterController@tampilFormDaftar')->name('tampil.daftar');

Route::post('/daftar', 'Auth\RegisterController@register')->name('submit.daftar');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/lapor-gangguan', 'Gangguan\LaporController@create')->name('lapor-gangguan')->middleware('auth');

Route::post('/lapor-gangguan','Gangguan\LaporController@konfirmasi')->name('konfirmasi-lapor-gangguan')->middleware('auth');

Route::post('/konfirmasi-laporan','Gangguan\LaporController@store')->name('lapor-gangguan-store')->middleware('auth');

Route::match(['GET','POST'],'/cek/{notrack}','Gangguan\LaporController@tracking')->name('cek-track')->middleware('auth');

Route::get('/data-jaringan', 'Gangguan\LaporController@dataJar')->middleware('auth');

Route::get('/data-aplikasi','Gangguan\LaporController@dataApp')->middleware('auth');

Route::get('/data-kategori-jaringan','Gangguan\LaporController@dataKatJar')->middleware('auth');

Route::get('/data-kategori-aplikasi','Gangguan\LaporController@dataKatApp')->middleware('auth');

/*Route::get('tes', function (){
    $user = \App\User::all();
    $gangguan = Gangguan::all();
    return view('tes',compact('gangguan','user'));
});*/

Route::prefix('admin')->group(function(){
    Route::get('/list-skpd','data\AsalController@index')->name('list.skpd');
    Route::get('/tambah-skpd','data\AsalController@create');
    Route::post('/tambah-skpd','data\AsalController@store')->name('simpan.asal');
    Route::get('/masuk','Auth\Admin\LoginController@showLoginForm')->name('admin.login')->middleware('guest');
    Route::POST('/masuk','Auth\Admin\LoginController@login')->name('admin.login.submit')->middleware('guest');
    Route::get('/','Admin\BerandaController@index')->name('admin.beranda');
    Route::get('/detail/{status}','Gangguan\DetailController@detail')->name('detail.laporan');
    Route::get('/hasil/{status}','Gangguan\DetailController@detailHasil')->name('detail.hasil');
    Route::get('/pdf/formulir-tindak-lanjut/{gangguan}','PDF\FormTindakLanjutController@formulirTindakLanjutPDF')->name('pdf.formulir.laporan');
    Route::get('/berkas/formulir/list/', 'PDF\FormTindakLanjutController@index')->name('pdf.formulir.list');
    Route::get('/pdf/surat-tugas/{gangguan}','PDF\SuratTugasController@suratTugasPDF')->name('pdf.surat.laporan');
    Route::get('/berkas/surat/list/', 'PDF\SuratTugasController@index')->name('pdf.surat.list');
    Route::POST('/penanganan/offline/','Gangguan\PenangananController@offlineStore')->name('penanganan.offline.simpan');
    Route::POST('/penanganan/online/','Gangguan\PenangananController@onlineStore')->name('penanganan.online.simpan');
    Route::MATCH(['GET','POST'],'/petugas/offline/{gangguan}','Gangguan\PetugasController@petugasOffline')->name('petugas.offline.view');
    Route::MATCH(['GET','POST'],'/petugas/online/{gangguan}','Gangguan\PetugasController@petugasOnline')->name('petugas.online.view');
    //Route::POST('/petugas-gangguan','AdminController@petugasGangguan')->name('petugas.gangguan');
    //Route::get('/berkas/{gangguan}','AdminController@berkas')->name('berkas.gangguan');
    Route::get('/update/gangguan/{gangguan}','Gangguan\PerbaikanController@updateShow')->name('update.gangguan');
    Route::post('/update/gangguan/','Gangguan\PerbaikanController@updateStore')->name('update.simpan');
    //Route::post('/tracking/','AdminController@tracking')->name('admin.track');
    Route::get('/list-penanganan/online','Admin\BerandaController@indexOnline')->name('admin.beranda.online');
    Route::get('/list-penanganan/offline','Admin\BerandaController@indexOffline')->name('admin.beranda.offline');
    Route::get('/list-penanganan/teratasi','Admin\BerandaController@indexTeratasi')->name('admin.beranda.teratasi');
});
