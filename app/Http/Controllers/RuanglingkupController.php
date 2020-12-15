<?php

namespace App\Http\Controllers;

use App\Models\Ruanglingkup;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;

class RuanglingkupController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $ruanglingkups = Ruanglingkup::all();
        return view('awanlab/pengaturan-web/ruanglingkup/ruanglingkup', compact('ruanglingkups'));
    }

    public function tambah(){
        return view('awanlab/pengaturan-web/ruanglingkup/tambah-ruanglingkup');
    }
    public function proses(Request $request){
        $this->validate($request,[
            'ruanglingkup_lokasi' => 'required',
            'ruanglingkup_kelompokukur' => 'required'
        ]);

        $ruanglingkup = Ruanglingkup::create([
            'ruanglingkup_lokasi' => $request->ruanglingkup_lokasi,
            'ruanglingkup_kelompokukur' => $request->ruanglingkup_kelompokukur,
            'ruanglingkup_instrument' => $request->ruanglingkup_instrument,
            'ruanglingkup_frekuensi' => $request->ruanglingkup_frekuensi,
            'ruanglingkup_rentangukur' => $request->ruanglingkup_rentangukur,
            'ruanglingkup_ketidakpastian' => $request->ruanglingkup_ketidakpastian
        ]);

        return redirect('pengaturan/ruanglingkup/');
    }
}
