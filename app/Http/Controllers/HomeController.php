<?php

namespace App\Http\Controllers;

use App\Models\Orderkalibrasi;
use App\Models\User;
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
        return view('awanlab/index');
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
