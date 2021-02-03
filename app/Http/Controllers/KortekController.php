<?php

namespace App\Http\Controllers;

use App\Models\Orderkalibrasi;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use DB;

class KortekController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index(){
        $orders = Order::all();
        $users = User::all();
        return view('/dashboard-kortek/index',['users' => $users])->with(compact(array( 'orders' )));
    }

    public function monitoring(){
        $orders = Orderkalibrasi::all();
        return view('/dashboard-kortek/monitoring-order',['orders' => $orders]);
    }

    public function pilihteknisi(Request $request){
        $order = Orderkalibrasi::where('order_id' ,$request->order_id);
        $order->update([
            'order_teknisi' => $request->teknisi,
            'order_status' => "Alat ke teknisi",
        ]); 

        return redirect("/monitoring-order");
    }
}
