<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $artikels = Artikel::all();
        return view('awanlab/pengaturan-web/all-artikel', compact('artikels'));
    }

    public function create(){
        return view('awanlab/pengaturan-web/tambah_artikel');
    }

    public function store(Request $request){
        $this->validate($request,[
            'artikel_gambar' => 'required|image|mimes:png,jpg,jpeg',
            'artikel_judul' => 'required',
            'artikel_date' => 'required'
        ]);

        $artikel_gambar = $request->file('artikel_gambar');
        $artikel_gambar->storeAs('public/artikels',$artikel_gambar->hashName());

        $artikel = Artikel::create([
            'artikel_judul' => $request->artikel_judul,
            'artikel_deskripsi' => $request->artikel_deskripsi,
            'artikel_date' => $request->artikel_date,
            'artikel_gambar' => $artikel_gambar->hashName(),
            'artikel_editor' => 'admin'
        ]);

        if($artikel){
            return redirect()->route('artikel.index')->with(['success' => 'Data berhasil disimpan']);
        }else{
            return redirect()->route('artikel.index')->with(['error' => 'Data gagal disimpan']);
        }

    }

    public function edit(Artikel $artikel){
        return view('awanlab/pengaturan-web/edit-artikel', compact('artikel'));
    }

    public function update(Request $request, Artikel $artikel){
        $this->validate($request,[
            'artikel_judul' => 'required',
            'artikel_date' => 'required'
        ]);
        
        //dapatkan data dari artikel
        $artikel = Artikel::findOrFail($artikel->artikel_id);
        if($request->file('artikel_gambar') == ""){
            $artikel->update([
                'artikel_judul' => $request->artikel_judul,
                'artikel_deskripsi' => $request->artikel_deskripsi,
                'artikel_date' => $request->artikel_date
            ]);
        }else {
            //Hapus data lama
            Storage::disk('local')->delete('public/artikels/'.$artikel->artikel_gambar);

            //Upload foto baru
            $artikel = $request->file('artikel_gambar');
            $artikel->storeAs('public/artikels', $image->hashName());

            $artikel->update([
                'artikel_judul' => $request->artikel_judul,
                'artikel_deskripsi' => $request->artikel_deskripsi,
                'artikel_date' => $request->artikel_date,
                'artikel_gambar' => $request->hashName(),
                'artikel_editor' => 'admin'
            ]);
        }

        if($artikel){
            return redirect()->route('artikel.index')->with(['success' => 'Data berhasil disimpan']);
        }else{
            return redirect()->route('artikel.index')->with(['error' => 'Data gagal disimpan']);
        }
    }
}
