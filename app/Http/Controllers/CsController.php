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
}
