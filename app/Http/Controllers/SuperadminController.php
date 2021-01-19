<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Roleuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class SuperadminController extends Controller
{
    public function user(){
        $users = User::all();
        
        // $users = DB::table('users')->get();
        // $roles = DB::table('model_has_roles')->get();
        return view('/awanlab/master-user/data-user',['users' => $users]);
    }
    
    public function tambah(){
        return view('/awanlab/master-user/tambah-user');
    }

    public function proses(Request $request){
        if($request->role_user == "superadmin"){
            $superadmin = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'lokasi_kerja' => $request->lokasi_kerja,
                'password' => Hash::make($request->password),
            ]);
    
            $superadmin->assignRole('superadmin');
    
            return redirect('/master-user');

        }elseif($request->role_user == "cs"){
            $cs = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'lokasi_kerja' => $request->lokasi_kerja,
                'password' => Hash::make($request->password),
            ]);
    
            $cs->assignRole('cs');
    
            return redirect('/master-user');
        }elseif($request->role_user == "kortek"){
            $kortek = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'lokasi_kerja' => $request->lokasi_kerja,
                'password' => Hash::make($request->password),
            ]);
    
            $kortek->assignRole('kortek');
    
            return redirect('/master-user');
        }elseif($request->role_user == "teknisi"){
            $teknisi = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'lokasi_kerja' => $request->lokasi_kerja,
                'password' => Hash::make($request->password),
            ]);
    
            $teknisi->assignRole('teknisi');
    
            return redirect('/master-user');

        }elseif($request->role_user == "admin"){
            $admin = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'lokasi_kerja' => $request->lokasi_kerja,
                'password' => Hash::make($request->password),
            ]);
    
            $admin->assignRole('admin');
    
            return redirect('/master-user');
        }else{
            $customer = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'lokasi_kerja' => $request->lokasi_kerja,
                'password' => Hash::make($request->password),
            ]);
    
            $customer->assignRole('customer');
    
            return redirect('/master-user');
        }
    }

    public function hapus($id){
        DB::table('users')->where('id',$id)->delete();
        DB::table('model_has_roles')->where('user_id',$id)->delete();
        return redirect('/master-user');
    }

    public function edit($id){
        $user = User::find($id);
        // $users = DB::table('users')->where('id',$id)->get();
        return view('/awanlab/master-user/edit-user',['user' => $user]);
    }

    public function update(Request $request){
        $updateuser = User::find($request->id);
        if($request->password == $updateuser->password){      
                $updateuser->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'alamat' => $request->alamat,
                    'no_hp' => $request->no_hp,
                    'lokasi_kerja' => $request->lokasi_kerja,
                ]);

                $updateuser->assignRole('admin');
                return redirect('/master-user');
        }else{
            $updateuser->update([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'lokasi_kerja' => $request->lokasi_kerja,
                'password' => Hash::make($request->password),
            ]);

            $updateuser->assignRole('cs');
            return redirect('/master-user');
        }
        
    }
}
