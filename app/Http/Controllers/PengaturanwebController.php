<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanwebController extends Controller
{
    public function artikel(){
        return view('awanlab/pengaturan-web/all-artikel');
    }

    public function tambah_artikel(){
        return view('awanlab/pengaturan-web/tambah_artikel');
    }
}
