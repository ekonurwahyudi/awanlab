<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
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
}
