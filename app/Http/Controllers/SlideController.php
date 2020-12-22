<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index(){
        return view('awanlab/pengaturan-web/slide/slide');
    }
    public function tambah(){
        return view('awanlab/pengaturan-web/slide/tambah-slide');
    }
}
