<?php

namespace App\Http\Controllers;

use App\Models\Orderkalibrasi;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use DB;

class TeknisiController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index(){
        $orders = Order::all();
        $users = User::all();
        return view('/dashboard-teknisi/index',['users' => $users])->with(compact(array( 'orders' )));
    }

    public function proseskalibrasi(){
        $orders = Order::all();
        $users = User::all();
        return view('/dashboard-teknisi/proses-kalibrasi',['users' => $users])->with(compact(array( 'orders' )));
    }

    public function mulaikalibrasi(Request $request){
        $order = Orderkalibrasi::where('order_id' ,$request->order_id);
        $order->update([
            'order_status' => $request->order_status,
        ]); 

        return redirect("/proses-kalibrasi");
    }

    public function cetaksertifikat(Request $request){
        $order = Orderkalibrasi::where('order_id' ,$request->order_id);
        $order->update([
            'order_status' => $request->order_status,
        ]); 

        return redirect("/proses-kalibrasi");
    }

    public function riwayatkalibrasi(){
        $orders = Order::all();
        $users = User::all();
        return view('/dashboard-teknisi/riwayat-kalibrasi',['users' => $users])->with(compact(array( 'orders' )));
    }

    public function feedback(){
        return view('/dashboard-teknisi/feedback');
    }
}
