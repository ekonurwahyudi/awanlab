<?php

use Illuminate\Support\Facades\Route;

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

//Route Beranda
Route::get('/','BerandaController@beranda');
// Route::get('/{locale}', 'BerandaController@bahasa');
Route::get('artikel/{artikel_id}','BerandaController@artikel');
Route::get('artikel/','BerandaController@allartikel');
Route::get('sertifikat-iso','BerandaController@sertifikat');
Route::get('struktur-organisasi','BerandaController@struktur');
Route::get('hubungi-kami','BerandaController@hubungikami');
Route::get('tentang-kami','BerandaController@tentang');
Route::get('konsultasi','BerandaController@konsultasi');
Route::post('konsultasi-proses','BerandaController@konsultasiproses');
Route::get('labjakarta','BerandaController@labjakarta');
Route::get('labmedan','BerandaController@labmedan');
Route::get('labsurabaya','BerandaController@labsurabaya');
Route::get('labmakassar','BerandaController@labmakassar');
Route::get('kritik-saran','BerandaController@kritik_saran');
Route::get('chat', function(){
    return view('chat');
});

//Route Layanan
Route::get('layanan-kalibrasi','LayananController@layanan');
Route::get('ruanglingkup','LayananController@ruanglingkup');
Route::get('fiberoptic','LayananController@fiber');
Route::get('kelistrikan','LayananController@listrik');
Route::get('frekuensiwaktu','LayananController@waktu');
Auth::routes();

//Route Untuk akses login
Route::middleware('role:customer')->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('role:admin')->get('/awanlab', 'HomeController@awanlab')->name('awanlab');
Route::middleware('role:admin')->get('/pengaturan-web', 'HomeController@web')->name('pengaturan-web');

//Route Untuk Pengaturan Web
// Route::middleware('role:admin')->get('/pengaturan/artikel', 'PengaturanwebController@artikel')->name('/pengaturan/artikel');
// Route::middleware('role:admin')->get('/pengaturan/tambah-artikel', 'PengaturanwebController@tambah_artikel')->name('/pengaturan/tambah-artikel');

//Route Untuk Artikel
Route::resource('/pengaturan/artikel',ArtikelController::class);

//Route Ruang Lingkup Crud
Route::get('/pengaturan/ruanglingkup','RuanglingkupController@index');
Route::get('/pengaturan/tambah-ruanglingkup','RuanglingkupController@tambah');
Route::post('/pengaturan/ruanglingkup-proses', 'RuanglingkupController@proses');
Route::get('/pengaturan/ruanglingkup-hapus/{ruanglingkup_id}', 'RuanglingkupController@delete');
Route::get('/pengaturan/ruanglingkup-edit/{ruanglingkup_id}', 'RuanglingkupController@edit');
Route::post('/pengaturan/ruanglingkup-update/{ruanglingkup_id}', 'RuanglingkupController@update');
