<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;
use Illuminate\Contracts\Support\Jsonable;
use App;

class BerandaController extends Controller
{
    public function beranda(){
        // App::setLocale($locale);
        $artikels = Artikel::all();
        return view('index',['artikels'=>$artikels]);
    }

    public function sertifikat(){
        return view('sertifikat_iso');
    }

    public function artikel($artikel_id){
        $artikels = Artikel::find($artikel_id);
        $post = Artikel::all();
        return view('bacaartikel',['artikels'=>$artikels], ['post' => $post]);
    }
    public function allartikel(){
        $artikels = Artikel::paginate(3);
        return view('artikel',['artikels'=>$artikels]);
    }

    Public function struktur(){
        return view('struktur-organisasi');
    }

    public function hubungikami(){
        return view('hubungi-kami');
    }

    public function tentang(){
        // App::setLocale($locale);
        return view('tentang-kami');
    }
    public function konsultasi(){
        return view('konsultasi');
    }
    public function konsultasiproses(Request $request){
        $konsultasi = Konsultasi::insert([
            'konsultasi_nama' => $request->konsultasi_nama,
            'konsultasi_hp' => $request->konsultasi_hp,
            'konsultasi_email' => $request->konsultasi_email,
            'konsultasi_pesan' => $request->konsultasi_pesan
        ]);
        $nama = $_POST['konsultasi_nama'];
        $pesan = $_POST['konsultasi_pesan'];

        return redirect('https://api.whatsapp.com/send?phone=+628987088921&text=Halo,%20perkenalkan%20saya%20'.$nama.'%20saya%20ingin%20konsultasi%20tentang%20'.$pesan.'?');
    }
    public function labjakarta(){
        return view('labjakarta');
    }
    public function labmedan(){
        return view('labmedan');
    }
    public function labsurabaya(){
        return view('labsurabaya');
    }
    public function labmakassar(){
        return view('labmakassar');
    }
    public function kritik_saran(){
        return view('kritik-saran');
    }
}
