<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;

class SlideController extends Controller
{
    public function index(){
        $slides = Slide::all();
        return view('awanlab/pengaturan-web/slide/slide', compact('slides'));
    }
    public function tambah(){
        return view('awanlab/pengaturan-web/slide/tambah-slide');
    }
    public function store(Request $request){
        $pesan = [
            'required' => 'Kolom Wajib di isi',
            'mimes' => 'Format gambar harus PNG'
        ];
        $this->validate($request,[
            'slide_judul' => 'required',
            'slide_gambar_id' => 'required|image|mimes:png,jpg,jpeg',
            'slide_gambar_en' => 'required|image|mimes:png,jpg,jpeg'
        ], $pesan);

        
        $slide_judul = ['slide_judul' => $request->slide_judul];

        // $slide_id = $request->'slide_id');
        
        $slide_gambar_id = $request->file('slide_gambar_id');
        $extension = $request->file('slide_gambar_id')->getClientOriginalExtension();
        $filenameSimpan_id = 'slideid_'.$slide_judul['slide_judul'].'.png'; 
        $path_id = $request->file('slide_gambar_id')->storeAs('public/slides', $filenameSimpan_id);
        // $slide_gambar_id->storeAs('public/slides',$slide_gambar_id->hashName());

        $slide_gambar_en = $request->file('slide_gambar_en');
        $extension = $request->file('slide_gambar_en')->getClientOriginalExtension();
        $filenameSimpan_en = 'slideen_'.$slide_judul['slide_judul'].'.png';
        $path_en = $request->file('slide_gambar_en')->storeAs('public/slides', $filenameSimpan_en);
        // $slide_gambar_en->storeAs('public/slides',$slide_gambar_en->hashName());

        $slide = Slide::create([
            'slide_judul' => $request->slide_judul,
            'slide_gambar_id' => $filenameSimpan_id,
            'slide_gambar_en' => $filenameSimpan_en,
            'slide_link' => $request->slide_link,
        ]);

        return redirect('/pengaturan/slide');
    }

    public function edit($slide_id){
        $slide = DB::table('slides')->where('slide_id',$slide_id)->get();
        return view('awanlab/pengaturan-web/slide/edit-slide',['slide' => $slide]);
    }

    public function update(Request $request, $slide_id){
        $pesan = [
            'required' => 'Kolom Wajib di isi',
            'mimes' => 'Format gambar harus PNG'
        ];
        $this->validate($request,[
            'slide_judul' => 'required',
            'slide_gambar_id' => 'image|mimes:png,jpg,jpeg',
            'slide_gambar_en' => 'image|mimes:png,jpg,jpeg'
        ], $pesan);

        //dapatkan data dari slide
        $slide = DB::table('slides')->where('slide_id',$slide_id)->get();
        if($request->file('slide_gambar_id') == ""){
            $slide_judul = ['slide_judul' => $request->slide_judul];

            // $extension = $request->file('slide_gambar_en')->getClientOriginalExtension();
            \Storage::disk('local')->delete('public/slides/'.'slideen_'.$slide_judul['slide_judul'].'.png');

            $slide_gambar_en = $request->file('slide_gambar_en');
            $extension = $request->file('slide_gambar_en')->getClientOriginalExtension();
            $filenameSimpan_en = 'slideen_'.$slide_judul['slide_judul'].'.png';
            $path_en = $request->file('slide_gambar_en')->storeAs('public/slides', $filenameSimpan_en);

            $slide = DB::table('slides')->where('slide_id',$request->slide_id)->update([
                'slide_judul' => $request->slide_judul,
                'slide_gambar_en' => $filenameSimpan_en,
                'slide_link' => $request->slide_link,
            ]);
        }elseif($request->file('slide_gambar_en') == ""){
            $slide_judul = ['slide_judul' => $request->slide_judul];
            \Storage::disk('local')->delete('public/slides/'.'slideid_'.$slide_judul['slide_judul'].'.png');

            $slide_gambar_id = $request->file('slide_gambar_id');
            $extension = $request->file('slide_gambar_id')->getClientOriginalExtension();
            $filenameSimpan_id = 'slideid_'.$slide_judul['slide_judul'].'.png';
            $path_id = $request->file('slide_gambar_id')->storeAs('public/slides', $filenameSimpan_id);

            $slide = DB::table('slides')->where('slide_id',$request->slide_id)->update([
                'slide_judul' => $request->slide_judul,
                'slide_gambar_id' => $filenameSimpan_id,
                'slide_link' => $request->slide_link
            ]);

        }else{
            $slide_judul = ['slide_judul' => $request->slide_judul];
            \Storage::disk('local')->delete('public/slides/'.'slideen_'.$slide_judul['slide_judul'].'.png');
            \Storage::disk('local')->delete('public/slides/'.'slideid_'.$slide_judul['slide_judul'].'.png');

            $slide_gambar_en = $request->file('slide_gambar_en');
            $extension = $request->file('slide_gambar_en')->getClientOriginalExtension();
            $filenameSimpan_en = 'slideen_'.$slide_judul['slide_judul'].'.png';
            $path_en = $request->file('slide_gambar_en')->storeAs('public/slides', $filenameSimpan_en);

            $slide_gambar_id = $request->file('slide_gambar_id');
            $extension = $request->file('slide_gambar_id')->getClientOriginalExtension();
            $filenameSimpan_id = 'slideid_'.$slide_judul['slide_judul'].'.png';
            $path_id = $request->file('slide_gambar_id')->storeAs('public/slides', $filenameSimpan_id);

            $slide = DB::table('slides')->where('slide_id',$request->slide_id)->update([
                'slide_judul' => $request->slide_judul,
                'slide_gambar_en' => $filenameSimpan_en,
                'slide_gambar_id' => $filenameSimpan_id,
                'slide_link' => $request->slide_link,
            ]);
        }
        return redirect('/pengaturan/slide');
    }

    public function destroy($slide_id){
        $slide = Slide::findOrFail($slide_id);
        $slide->delete();
        // DB::table('slides')->where('slide_id',$slide_id)->delete();
        \Storage::disk('local')->delete('public/slides/'.'slideen_'.$slide->slide_judul.'.png');
        \Storage::disk('local')->delete('public/slides/'.'slideid_'.$slide->slide_judul.'.png');
        return redirect('/pengaturan/slide');
    }
}
