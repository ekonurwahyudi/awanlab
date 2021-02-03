<?php

namespace App\Http\Controllers;

use App\Models\Orderkalibrasi;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index(){
        $orders = Order::all();
        $users = User::all();
        return view('/dashboard-admin/index',['users' => $users])->with(compact(array( 'orders' )));
    }

    public function sertifikatselesai(Request $request){
        $order = Orderkalibrasi::where('order_id' ,$request->order_id);
        $order->update([
            'order_status' => $request->order_status,
        ]); 

        return redirect("/dashboard-admin");
    }
}
