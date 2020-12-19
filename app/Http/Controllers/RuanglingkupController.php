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

        $pesan = [
            'required' => 'Kolom Wajib di isi'
        ];
        $this->validate($request,[
            'ruanglingkup_lokasi' => 'required',
            'ruanglingkup_kelompokukur' => 'required',
            'ruanglingkup_instrument' => 'required',
            'ruanglingkup_frekuensi' => 'required',
            'ruanglingkup_rentangukur' => 'required',
            'ruanglingkup_ketidakpastian' => 'required'
        ], $pesan);

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

    public function delete($ruanglingkup_id){
        DB::table('ruanglingkups')->where('ruanglingkup_id',$ruanglingkup_id)->delete();
        return redirect('pengaturan/ruanglingkup/');
    }
    public function edit($ruanglingkup_id){
        $ruanglingkup = DB::table('ruanglingkups')->where('ruanglingkup_id',$ruanglingkup_id)->get();
        
        return view('awanlab/pengaturan-web/ruanglingkup/edit-ruanglingkup',['ruanglingkup' => $ruanglingkup]);
    }

    public function update (Request $request){
        
        $ruanglingkup = DB::table('ruanglingkups')->where('ruanglingkup_id',$request->ruanglingkup_id)->update([
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
