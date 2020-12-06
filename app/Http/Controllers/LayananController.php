<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;
use Illuminate\Contracts\Support\Jsonable;

class LayananController extends Controller
{
    public function beranda(){
        $artikels = Artikel::all();
        return view('index',['artikels'=>$artikels]);
    }

    public function fiber(){
        return view('RL/fiber_optic');
    }
    public function listrik(){
        return view('RL/kelistrikan');
    }
    public function waktu(){
        return view('RL/frekuensi_waktu');
    }
    public function masuk(){
        return view('auth/masuk');
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
