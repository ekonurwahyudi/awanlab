<?php

namespace App\Http\Controllers;

use App\Models\Orderkalibrasi;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
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
        $notifsph = Orderkalibrasi::where('order_statussph', "ditolak")->distinct('user_id')->count();
        $isinotif = Order::paginate(5)->unique('user_id');
        // $orders = Order::where('order_lokasilab', 'jakarta')->get();
        return view('/dashboard-cs/index')->with(compact(array( 'orders','notifsph','isinotif' )));
    }

    public function orderdiproses(){
        $orders = Order::all(); 
        $notifsph = Orderkalibrasi::where('order_statussph', "ditolak")->distinct('user_id')->count();
        $isinotif = Order::paginate(5)->unique('user_id');
        return view('/dashboard-cs/order-diproses')->with(compact(array( 'orders','notifsph','isinotif' )));
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

    public function form_ba(Request $request){
        $orders = Orderkalibrasi::where('user_id', $request->user_id)->get();
        $users = User::where('id', $request->user_id)->get();
        $notifsph = Orderkalibrasi::where('order_statussph', "ditolak")->distinct('user_id')->count();
        $isinotif = Order::paginate(5)->unique('user_id');
        return view ('/dashboard-cs/form-ba',['orders' => $orders],['users' => $users])->with(compact(array('notifsph','isinotif')));
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
        $users = User::where('id', $request->user_id)->get();
        $countsph = ['user_id' => $request->user_id, 'order_statussph' => NULL, 'order_filesph' => NULL];
        $sedangsph = ['user_id' => $request->user_id, 'order_statussph' => NULL];
        $revisisph = ['user_id' => $request->user_id, 'order_statussph' => "ditolak"];
        $po = ['user_id' => $request->user_id];
        $count = Orderkalibrasi::where($countsph)->count();
        $count2 = Orderkalibrasi::where($revisisph)->count();
        $count3 = DB::table('orderkalibrasis')
                    ->where($sedangsph)
                    ->whereNotNull('order_filesph')
                    ->count();
        $count4 = DB::table('orderkalibrasis')
                    ->where($po)
                    ->whereNotNull('order_filepo')
                    ->count();
        $notifsph = Orderkalibrasi::where('order_statussph', "ditolak")->distinct('user_id')->count();
        $isinotif = Order::paginate(5)->unique('user_id');
        return view ('/dashboard-cs/inputsph',['orders' => $orders],['users' => $users])->with('count', $count)->with('count2', $count2)->with('count3', $count3)->with('count4', $count4)->with(compact(array('notifsph','isinotif')));
    }

    public function prosessph(Request $request){
        $namaperusahaan = $request->order_namaperusahaan;
        $order_filesph = $request->file('order_filesph');
        $extension = $request->file('order_filesph')->getClientOriginalExtension();
        $filesph = 'SPH_'.$namaperusahaan.'_'.time().'.pdf'; 
        $path_id = $request->file('order_filesph')->storeAs('public/sph', $filesph);

        $sph = ['user_id' => $request->user_id, 'order_statussph' => NULL,'order_status' => "order diproses",'order_filesph' => NULL];
        if($order = Orderkalibrasi::where($sph)){
                $order->update([
                    'order_filesph' => $filesph,
                ]);
                return redirect('/inputsph-'.$request->user_id);
        }
    }

    public function revisisph(Request $request){
        $namaperusahaan = $request->order_namaperusahaan;
        $order_filesph = $request->file('order_filesph');
        $extension = $request->file('order_filesph')->getClientOriginalExtension();
        $filesph = 'SPH_'.$namaperusahaan.'_'.time().'.pdf'; 
        $path_id = $request->file('order_filesph')->storeAs('public/sph', $filesph);

        $sph = ['user_id' => $request->user_id, 'order_statussph' => "ditolak"];
        if($order = Orderkalibrasi::where($sph)){
                $order->update([
                    'order_filesph' => $filesph,
                    'order_statussph' => NULL,
                ]);
                return redirect('/inputsph-'.$request->user_id);
        }
    }

    public function riwayatorder(){
        $orders = Order::all();
        $notifsph = Orderkalibrasi::where('order_statussph', "ditolak")->distinct('user_id')->count();
        $isinotif = Order::paginate(5)->unique('user_id');
        return view('/dashboard-cs/riwayat-order')->with(compact(array( 'orders','notifsph','isinotif' )));
    }

    public function profilcs(){
        $orders = Order::all();
        $notifsph = Orderkalibrasi::where('order_statussph', "ditolak")->distinct('user_id')->count();
        $isinotif = Order::paginate(5)->unique('user_id');
        return view('/dashboard-cs/profil')->with(compact(array('orders','notifsph','isinotif')));
    }

    public function updateprofilcs(Request $request){
        $user = User::find($request->user_id);
        if($request->password == $user->password){
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
            ]);
            return redirect('/profilcs');
        }else{
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'password' => Hash::make($request->password),
            ]);
            return redirect('/profilcs');
        }
    }

    public function notifikasi(){
        $notifsph = Orderkalibrasi::where('order_statussph', "ditolak")->distinct('user_id')->count();
        $isinotif = Order::paginate(3)->unique('user_id');
        $notifikasi = Order::where('order_statussph', "ditolak")->get()->unique('user_id');
        $notifikasipo = Orderkalibrasi::all()->unique('user_id');
        return view('/dashboard-cs/notifikasi',compact('notifikasipo'))->with(compact(array('notifsph','isinotif','notifikasi')));
    }

    public function feedback(){
        $notifsph = Orderkalibrasi::where('order_statussph', "ditolak")->distinct('user_id')->count();
        $isinotif = Order::paginate(3)->unique('user_id');
        return view('/dashboard-cs/feedback')->with(compact(array('notifsph','isinotif')));
    }

}
