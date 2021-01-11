<?php

namespace App\Http\Controllers;

use App\Models\Orderkalibrasi;
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
        return view('awanlab/index');
    }

    public function web(){
        return view('awanlab/pengaturan-web/index');
    }

    public function cus(){
        $orders = Orderkalibrasi::all();
        return view('/dashboarduser/index',compact('orders'));
    }
}
