<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use DB;

class PerusahaanController extends Controller
{

    public function daftar(){
        $perusahaans = Perusahaan::all(); 
        return view('/auth/register', compact('perusahaans'));
    }

    public function proses(Request $request){
        $perusahaan = Perusahaan::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat_perusahaan' => $request->alamat_perusahaan,
            'telepon_perusahaan' => $request->telepon_perusahaan,
            'npwp_perusahaan' => $request->npwp_perusahaan,
        ]);

        return redirect('/newregister');
    }
}
