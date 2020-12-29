<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;

class FaqController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $faqs = Faq::all();
        return view('/awanlab/pengaturan-web/faq/index', compact('faqs'));
    }
    public function tambah(){
        return view('/awanlab/pengaturan-web/faq/tambah-faq');
    }

    public function proses(Request $request){
        $pesan =[
            'required' => 'Wajib diisi'
        ];
        $this->validate($request,[
            'faq_pertayaan' => 'required',
            'faq_jawaban' => 'required',
        ],$pesan);

        $faq = Faq::create([
            'faq_pertayaan' => $request->faq_pertayaan,
            'faq_jawaban' => $request->faq_jawaban,
        ]);

        return redirect('/pengaturan/faq/');
    }

    public function destroy($faq_id){
        DB::table('faqs')->where('faq_id',$faq_id)->delete();
        return redirect('/pengaturan/faq');
    }

    public function edit($faq_id){
        $faq = DB::table('faqs')->where('faq_id',$faq_id)->get();
        
        return view('awanlab/pengaturan-web/faq/edit-faq',['faq' => $faq]);
    }

    public function update(Request $request){
        $faq = DB::table('faqs')->where('faq_id',$request->faq_id)->update([
            'faq_pertayaan' => $request->faq_pertayaan,
            'faq_jawaban' => $request->faq_jawaban
        ]);
        return redirect('/pengaturan/faq');
    }

    public function pertayaan(){
        $konsultasis = Konsultasi::all();
        return view('/awanlab/pengaturan-web/faq/pertayaan-customer', compact('konsultasis'));
    }
}
