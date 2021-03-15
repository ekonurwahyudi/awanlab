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
            'user_id'  => $request->user_id,
            'order_namaalat'  => $request->order_namaalat,
            'order_merek'  => $request->order_merek,
            'order_model'  => $request->order_model,
            'order_sn'  => $request->order_sn,
            'order_jumlah'  => $request->order_jumlah,
            'order_lokasilab'  => $request->order_lokasilab,
            'order_jeniskal'  => $request->order_jeniskal,
            'order_namaser'  => $request->order_namaser,
            'order_status'  => "orderan baru",
            'order_alamatser'  => $request->order_alamatser
        ]);

        return redirect('/dashboard');
    }

    public function sph(Request $request){
        $orders = Orderkalibrasi::where('user_id', $request->user_id)->get();
        $countsph = ['user_id' => $request->user_id, 'order_statussph' => NULL];
        $revisisph = ['user_id' => $request->user_id , 'order_statussph' => "ditolak"];
        $filepo = ['user_id' => $request->user_id , 'order_statussph' => "diterima",'order_filepo' => NULL];
        $count = Orderkalibrasi::where($countsph)->count();
        $count2 = Orderkalibrasi::where($revisisph)->count();
        $count3 = Orderkalibrasi::where($filepo)->count();
        return view('/dashboarduser/sph',['orders' => $orders])->with('count2', $count2)->with('count', $count)->with('count3', $count3);
    }

    public function statussph(Request $request){
        $sph = ['user_id' => $request->user_id, 'order_statussph' => NULL];
        if($order = Orderkalibrasi::where($sph)){
            $order->update([
                'order_statussph' => $request->order_statussph,
                'order_alasansph' => $request->alasansph,
            ]);
            return redirect('/dashboard-sph-'.$request->user_id);
        }
    }

    public function inputpo(Request $request){
        $namaperusahaan = $request->order_namaperusahaan;
        $order_filepo = $request->file('order_filepo');
        $filepo = 'PO_'.$namaperusahaan.'_'.time().'.pdf'; 
        $path_id = $request->file('order_filepo')->storeAs('public/PO', $filepo);
        $po = ['user_id' => $request->user_id, 'order_filepo' => NULL];
        if($order = Orderkalibrasi::where($po)){
                $order->update([
                    'order_filepo' => $filepo,
                ]);
                return redirect('/dashboard');
        }
    }
}
