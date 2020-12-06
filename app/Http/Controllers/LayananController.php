<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;

class LayananController extends Controller
{
    public function ruanglingkup(){
        return view('RL/master');
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
}
