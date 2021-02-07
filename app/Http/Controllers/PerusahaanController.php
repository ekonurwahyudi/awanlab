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
        $namaperusahaan = $request->nama_perusahaan;
        $fotonpwp = $request->file('fotonpwp');
        $extension = $request->file('fotonpwp')->getClientOriginalExtension();
        $fotonpwp = 'NPWP_'.$namaperusahaan.'.'.$extension; 
        $path_id = $request->file('fotonpwp')->storeAs('public/npwp', $fotonpwp);

        $perusahaan = Perusahaan::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat_perusahaan' => $request->alamat_perusahaan,
            'telepon_perusahaan' => $request->telepon_perusahaan,
            'npwp_perusahaan' => $request->npwp_perusahaan,
            'fotonpwp' => $fotonpwp,
        ]);

        return redirect('/newregister');
    }
}
