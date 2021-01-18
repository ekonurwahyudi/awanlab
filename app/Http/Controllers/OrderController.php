<?php

namespace App\Http\Controllers;

use App\Models\Orderkalibrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;

class OrderController extends Controller
{
    public function index(){
        return view('/dashboarduser/orderkalibrasi');
    }

    public function proses(Request $request){
        $pesan =[
            'required' => 'Kolom wajib diisi',
        ];

        $this->validate($request,[
            'order_namaalat' => 'required',
            'order_model' => 'required',
            'order_merek' => 'required',
            'order_sn' => 'required',
            'order_jumlah' => 'required',
            'order_lokasilab' => 'required',
            'order_jeniskal' => 'required',
        ], $pesan);

        $order = Orderkalibrasi::create([
            'order_namaalat'  => $request->order_namaalat,
            'order_merek'  => $request->order_merek,
            'order_model'  => $request->order_model,
            'order_sn'  => $request->order_sn,
            'order_jumlah'  => $request->order_jumlah,
            'order_lokasilab'  => $request->order_lokasilab,
            'order_jeniskal'  => $request->order_jeniskal,
            'order_namaser'  => $request->order_namaser,
            'order_alamatser'  => $request->order_alamatser
        ]);

        return redirect('/dashboard');
    }

    public function sphcus(Request $request){
        $statussph = DB::table('orderkalibrasis')->where('order_id',$request->order_id)->update([
            'order_merek' => $request->order_merek,
        ]);

        return redirect('/dashboard');
    }
}
