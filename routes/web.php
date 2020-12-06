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



Route::get('/','LayananController@beranda');
// Route::get('artikel/{{artikel_id}}','LayananController@bacaartikel');
Route::get('artikel/{artikel_id}','LayananController@artikel');
Route::get('artikel/','LayananController@allartikel');

Route::get('tentang-kami',function(){
    return view('tentang-kami');
});

//Route Layanan
Route::get('fiberoptic','LayananController@fiber');
Route::get('kelistrikan','LayananController@listrik');
Route::get('frekuensiwaktu','LayananController@waktu');
Route::get('masuk','LayananController@masuk');
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
// Route::get('/pengaturan/tambah-artikel','ArtikelController@create');