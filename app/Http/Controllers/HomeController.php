<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function masuk(){
        return view('masuk');
    }

    public function awanlab(){
        return view('awanlab/index');
    }

    public function web(){
        return view('awanlab/pengaturan-web');
    }

    public function beranda(){
        $artikels = Artikel::all();
        return view('index',['artikels'=>$artikels]);
    }

    public function bacaartikel($artikel_id){
        $artikels = Artikel::find($artikel->artikel_id);
        return view('artikel',['artikels'=>$artikels]);

    }
    public function artikel(){
        return view('artikel');
    }
}
