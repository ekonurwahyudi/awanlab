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


//Route Translate
// Route::redirect('/','/id');
Route::group(['prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function()
{
    Route::get('/','BerandaController@beranda');
    Route::get('/tentang-kami','BerandaController@tentang');
    Route::get('layanan-kalibrasi','LayananController@layanan');
    Route::get('ruanglingkup','LayananController@ruanglingkup');
    Route::get('fiberoptic','LayananController@fiber');
    Route::get('kelistrikan','LayananController@listrik');
    Route::get('frekuensiwaktu','LayananController@waktu');
    Route::get('konsultasi','BerandaController@konsultasi');
    Route::post('konsultasi-proses','BerandaController@konsultasiproses');
    Route::get('labjakarta','BerandaController@labjakarta');
    Route::get('labmedan','BerandaController@labmedan');
    Route::get('labsurabaya','BerandaController@labsurabaya');
    Route::get('labmakassar','BerandaController@labmakassar');
    Route::get('kritik-saran','BerandaController@kritik_saran');
});


//Route Translate

// Route::redirect('artikel','artikel/id');
// Route::redirect('tentang-kami','tentang-kami/id');

//Route Beranda
// Route::get('/{locale}','BerandaController@beranda');
Route::get('artikel/{artikel_id}','BerandaController@artikel');
Route::get('artikel/','BerandaController@allartikel');
Route::get('sertifikat-iso','BerandaController@sertifikat');
Route::get('struktur-organisasi','BerandaController@struktur');
Route::get('hubungi-kami','BerandaController@hubungikami');
// Route::get('tentang-kami/{locale}','BerandaController@tentang');
Route::get('chat', function(){
    return view('chat');
});

//Route Layanan

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
Route::redirect('/pengaturan/artikel/create', '../../pengaturan/tambah-artikel');
Route::get('/pengaturan/tambah-artikel','ArtikelController@create');

//Route Ruang Lingkup Crud
Route::get('/pengaturan/ruanglingkup','RuanglingkupController@index');
Route::get('/pengaturan/tambah-ruanglingkup','RuanglingkupController@tambah');
Route::post('/pengaturan/ruanglingkup-proses', 'RuanglingkupController@proses');
Route::get('/pengaturan/ruanglingkup-hapus/{ruanglingkup_id}', 'RuanglingkupController@delete');
Route::get('/pengaturan/ruanglingkup-edit/{ruanglingkup_id}', 'RuanglingkupController@edit');
Route::post('/pengaturan/ruanglingkup-update/{ruanglingkup_id}', 'RuanglingkupController@update');

//Route Slide Crud
Route::get('/pengaturan/slide','SlideController@index');
Route::get('/pengaturan/tambah-slide','SlideController@tambah');
Route::post('/pengaturan/slide-proses','SlideController@store');
Route::get('/pengaturan-slide-edit/{slide_id}/', 'SlideController@edit');
Route::post('/pengaturan/slide-update/{slide_id}', 'SlideController@update');
Route::get('/pengaturan/slide-hapus/{slide_id}', 'SlideController@destroy');

//Route Faq Crud
Route::get('/pengaturan/faq', 'FaqController@index');
Route::get('/pengaturan/tambah-faq','FaqController@tambah');
Route::post('/pengaturan/faq-proses','FaqController@proses');
Route::get('/pengaturan/faq-hapus/{faq_id}', 'FaqController@destroy');
Route::get('/pengaturan-edit-faq/{faq_id}', 'FaqController@edit');
Route::post('/pengaturan/faq-update/{faq_id}', 'FaqController@update');
Route::get('/pengaturan/pertayaan-customer/','FaqController@pertayaan');
