<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;
use Illuminate\Contracts\Support\Jsonable;

class BerandaController extends Controller
{
    public function beranda(){
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
}
