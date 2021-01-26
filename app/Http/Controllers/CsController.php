<?php

namespace App\Http\Controllers;

use App\Models\Orderkalibrasi;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use DB;

class CsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index(){
        $orders = Order::all();
        // $orders = Order::where('order_lokasilab', 'jakarta')->get();
        return view('/dashboard-cs/index')->with(compact(array( 'orders' )));
    }

    public function orderdiproses(){
        $orders = Order::all();
        return view('/dashboard-cs/order-diproses')->with(compact(array( 'orders' )));
    }

    public function kup(Request $request){
        $orders = Order::where('user_id', $request->user_id)->get();
        $users = User::where('id',  $request->user_id)->get();
        return view('/dashboard-cs/cetak-kup',['orders' => $orders],['users' => $users]);
    }

    public function pap(Request $request){
        $orders = Order::where('user_id', $request->user_id)->get();
        $users = User::where('id',  $request->user_id)->get();
        return view('/dashboard-cs/cetak-pap',['orders' => $orders],['users' => $users]);
    }

    public function statustgl(Request $request){
       $order = Orderkalibrasi::where('order_id',$request->order_id);
       $order->update([
           'order_status' => $request->order_status,
           'order_tglantar' => $request->order_tglantar,
       ]);

       return redirect('/order-diproses');
    }

    public function statusccl(Request $request){
        $order = Orderkalibrasi::where('order_id',$request->order_id);
        $order->update([
            'order_status' => $request->order_status,
            'order_ccl' => $request->order_ccl,
        ]);
 
        return redirect('/order-diproses');
    }
    
    public function tessph(){
        $makan = "makan";
        return view ('/dashboard-cs/tes',['makan' => $makan]);
    }

    public function form_ba(Request $request){
        $orders = Orderkalibrasi::where('user_id', $request->user_id)->get();
        $users = User::where('id', $request->user_id)->get();
        return view ('/dashboard-cs/form-ba',['orders' => $orders],['users' => $users]);
    }

    public function ba(Request $request){
        $orders = Orderkalibrasi::where('user_id', $request->user_id)->get();
        $users = User::where('id', $request->user_id)->get();
        $lab = $request->lab_kalibrasi;
        $alamat = $request->alamat;
        $telp = $request->telp;
        $nomor = $request->nomor;
        $tanggal = $request->tanggal;
        $ttd = $request->ttd;
        $nik = $request->nik;
        $ba = $request->ba;
        return view ('/dashboard-cs/cetak-ba',compact('orders','users','lab','alamat','telp','nomor','tanggal','ttd','nik','ba'));
    }

    public function inputsph(Request $request){
        $orders = Orderkalibrasi::where('user_id', $request->user_id)->get();
        return view ('/dashboard-cs/inputsph',['orders' => $orders]);
    }

}
