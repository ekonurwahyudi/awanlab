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
    Route::get('/layanan-kalibrasi','LayananController@layanan');
    Route::get('/ruanglingkup','LayananController@ruanglingkup');
    Route::get('/fiberoptic','LayananController@fiber');
    Route::get('/kelistrikan','LayananController@listrik');
    Route::get('/frekuensiwaktu','LayananController@waktu');
    Route::get('/konsultasi','BerandaController@konsultasi');
    Route::post('/konsultasi-proses','BerandaController@konsultasiproses');
    Route::get('/labjakarta','BerandaController@labjakarta');
    Route::get('/labmedan','BerandaController@labmedan');
    Route::get('/labsurabaya','BerandaController@labsurabaya');
    Route::get('/labmakassar','BerandaController@labmakassar');
    Route::get('/kritik-saran','BerandaController@kritik_saran');
    Route::get('/sertifikat-iso','BerandaController@sertifikat');
    Route::get('/struktur-organisasi','BerandaController@struktur');
    Route::get('/hubungi-kami','BerandaController@hubungikami');
    Route::get('artikel/','BerandaController@allartikel');
});


//Route Translate

// Route::redirect('artikel','artikel/id');
// Route::redirect('tentang-kami','tentang-kami/id');

//Route Beranda
// Route::get('/{locale}','BerandaController@beranda');
Route::get('artikel/{artikel_id}','BerandaController@artikel');

// Route::get('tentang-kami/{locale}','BerandaController@tentang');
Route::get('chat', function(){
    return view('chat');
});

//Login + Pendaftaran
Auth::routes(['verify' => true]);
Route::get('/newregister','PerusahaanController@daftar');


//Route Untuk akses login
Route::middleware('role:customer')->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::redirect('/home','/dashboard');
Route::middleware('role:superadmin')->get('/awanlab', 'HomeController@awanlab')->name('awanlab');
Route::middleware('role:superadmin')->get('/pengaturan-web', 'HomeController@web')->name('pengaturan-web');

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

//Route Feedback
Route::post('/feedback-input','FeedbackController@input');
Route::get('/pengaturan/kritik-saran','FeedbackController@index');

//Route Master User
Route::middleware('role:superadmin')->get('/master-user','SuperadminController@user');
Route::get('/tambah-user','SuperadminController@tambah');
Route::post('/tambah-user/proses','SuperadminController@proses');
Route::post('/hapus-user/{id}','SuperadminController@hapus');
Route::get('/edit-user/{id}','SuperadminController@edit');
Route::post('/update-user/{id}','SuperadminController@update');

//Tambah Perusahaan
Route::post('/perusahaandaftar-proses','PerusahaanController@proses');

//Halaman Dashboard Customer
Route::middleware('role:customer')->get('/dashboard','HomeController@cus');
Route::get('/dashboard-order','OrderController@index');
Route::post('/order-proses','OrderController@proses');
Route::post('/sphcus','OrderController@sphcus');

//Halaman Dashboard Customer Service (CS)
Route::middleware('role:cs')->get('/dashboard-cs','CsController@index');
Route::get('/order-diproses','CsController@orderdiproses');
Route::get('/cetak-kup/{user_id}','CsController@kup');
Route::get('/cetak-pap/{user_id}','CsController@pap');
Route::post('/statustgl-proses/{order_id}','CsController@statustgl');
Route::post('/statusccl-proses/{order_id}','CsController@statusccl');
Route::get('/form-ba-{user_id}','CsController@form_ba');
Route::post('/cetak-ba-{user_id}','CsController@ba');
Route::get('/tessph','CsController@tessph');
Route::get('/inputsph-{user_id}','CsController@inputsph');
Route::post('/proses-inputsph/{user_id}','CsController@prosessph');
Route::post('/proses-revisisph/{user_id}','CsController@revisisph');
