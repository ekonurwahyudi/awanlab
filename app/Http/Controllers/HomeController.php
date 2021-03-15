<?php

namespace App\Http\Controllers;

use App\Models\Orderkalibrasi;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    
     public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    public function index()
    {
        return view('home');
    }

    public function masuk(){
        return view('masuk');
    }

    public function awanlab(){
        $orders = Order::all();
        
        $labjakarta = Orderkalibrasi::where('order_lokasilab', "Lab Jakarta")->get();
        $on_labjakarta = Orderkalibrasi::where('order_lokasilab',"Lab Jakarta")->whereNotIn('order_status',["selesai"])->get();
        $labsurabaya = Orderkalibrasi::where('order_lokasilab', "Lab Surabaya")->get();
        $on_labsurabaya = Orderkalibrasi::where('order_lokasilab', "Lab Surabaya")->whereNotIn('order_status',["selesai"])->get();
        $labmedan = Orderkalibrasi::where('order_lokasilab', "Lab Medan")->get();
        $on_labmedan = Orderkalibrasi::where('order_lokasilab', "Lab Medan")->whereNotIn('order_status',["selesai"])->get();
        $labmakassar = Orderkalibrasi::where('order_lokasilab', "Lab Makassar")->get();
        $on_labmakassar = Orderkalibrasi::where('order_lokasilab', "Lab Makassar")->whereNotIn('order_status',["selesai"])->get();
        return view('awanlab/index')->with(compact(array( 'orders', 'labjakarta','on_labjakarta','labsurabaya','on_labsurabaya','labmedan','on_labmedan','labmakassar','on_labmakassar' )));
    }

    public function web(){
        return view('awanlab/pengaturan-web/index');
    }

    public function cus(){
        $orders = Orderkalibrasi::all();
        return view('/dashboarduser/index',compact('orders'));
    }

    public function profilcus(){
        return view('/dashboarduser/profil');
    }

    public function updateuser(Request $request){
        $user = User::find($request->user_id);
        if($request->password == $user->password){
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
            ]);
            return redirect('/dashboard-profil');
        }else{
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'password' => Hash::make($request->password),
            ]);
            return redirect('/dashboard-profil');
        }
    }

    public function feedback(){
        return view('/dashboarduser/feedback');
    }
}
