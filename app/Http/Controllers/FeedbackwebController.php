<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Feedbackweb;
use DB;

class FeedbackwebController extends Controller
{
    
    public function inputfeedback(Request $request){
       
        
        if($request->ss_error == ""){
            if($request->role == "2"){
                $feedback = Feedbackweb::create([
                    'nama' => $request->nama,
                    'role' => "Customer",
                    'kategori' => $request->kategori,
                    'isifeedback' => $request->isifeedback,
                ]);
    
                if($feedback){
                    //redirect dengan pesan sukses
                    return redirect('/feedback')->with(['success' => 'Feedback Berhasil dikirim!']);
                }else{
                    //redirect dengan pesan error
                    return redirect('/feedback')->with(['error' => 'Feedback Gagal dikirim!']);
                }
            }elseif($request->role == "3"){
                $feedback = Feedbackweb::create([
                    'nama' => $request->nama,
                    'role' => "CS",
                    'kategori' => $request->kategori,
                    'isifeedback' => $request->isifeedback,
                ]);
    
                if($feedback){
                    //redirect dengan pesan sukses
                    return redirect('/feedbackcs')->with(['success' => 'Feedback Berhasil dikirim!']);
                }else{
                    //redirect dengan pesan error
                    return redirect('/feedbackcs')->with(['error' => 'Feedback Gagal dikirim!']);
                }
            }elseif($request->role == "4"){
                $feedback = Feedbackweb::create([
                    'nama' => $request->nama,
                    'role' => "Koordinasi Teknik",
                    'kategori' => $request->kategori,
                    'isifeedback' => $request->isifeedback,
                ]);
    
                if($feedback){
                    //redirect dengan pesan sukses
                    return redirect('/feedbackkortek')->with(['success' => 'Feedback Berhasil dikirim!']);
                }else{
                    //redirect dengan pesan error
                    return redirect('/feedbackkortek')->with(['error' => 'Feedback Gagal dikirim!']);
                }
            }elseif($request->role == "5"){
                $feedback = Feedbackweb::create([
                    'nama' => $request->nama,
                    'role' => "Teknisi",
                    'kategori' => $request->kategori,
                    'isifeedback' => $request->isifeedback,
                ]);
    
                if($feedback){
                    //redirect dengan pesan sukses
                    return redirect('/feedbackteknisi')->with(['success' => 'Feedback Berhasil dikirim!']);
                }else{
                    //redirect dengan pesan error
                    return redirect('/feedbackteknisi')->with(['error' => 'Feedback Gagal dikirim!']);
                }
            }elseif($request->role == "6"){
                $feedback = Feedbackweb::create([
                    'nama' => $request->nama,
                    'role' => "Admin",
                    'kategori' => $request->kategori,
                    'isifeedback' => $request->isifeedback,
                ]);
    
                if($feedback){
                    //redirect dengan pesan sukses
                    return redirect('/feedbackadmin')->with(['success' => 'Feedback Berhasil dikirim!']);
                }else{
                    //redirect dengan pesan error
                    return redirect('/feedbackadmin')->with(['error' => 'Feedback Gagal dikirim!']);
                }
            }
        }else{
            $sserror = $request->file('ss_error');
            $namess = 'SS_Error_'.time().'.'.$sserror->getClientOriginalExtension();
            $path_id = $request->file('ss_error')->storeAs('public/SS_Error', $namess);

            if($request->role == "2"){
                $feedback = Feedbackweb::create([
                    'nama' => $request->nama,
                    'role' => "Customer",
                    'ss_error' => $namess,
                    'kategori' => $request->kategori,
                    'isifeedback' => $request->isifeedback,
                ]);
    
                if($feedback){
                    //redirect dengan pesan sukses
                    return redirect('/feedback')->with(['success' => 'Feedback Berhasil dikirim!']);
                }else{
                    //redirect dengan pesan error
                    return redirect('/feedback')->with(['error' => 'Feedback Gagal dikirim!']);
                }
            }elseif($request->role == "3"){
                $feedback = Feedbackweb::create([
                    'nama' => $request->nama,
                    'role' => "CS",
                    'ss_error' => $namess,
                    'kategori' => $request->kategori,
                    'isifeedback' => $request->isifeedback,
                ]);
    
                if($feedback){
                    //redirect dengan pesan sukses
                    return redirect('/feedbackcs')->with(['success' => 'Feedback Berhasil dikirim!']);
                }else{
                    //redirect dengan pesan error
                    return redirect('/feedbackcs')->with(['error' => 'Feedback Gagal dikirim!']);
                }
            }elseif($request->role == "4"){
                $feedback = Feedbackweb::create([
                    'nama' => $request->nama,
                    'role' => "Koordinasi Teknik",
                    'ss_error' => $namess,
                    'kategori' => $request->kategori,
                    'isifeedback' => $request->isifeedback,
                ]);
    
                if($feedback){
                    //redirect dengan pesan sukses
                    return redirect('/feedbackkortek')->with(['success' => 'Feedback Berhasil dikirim!']);
                }else{
                    //redirect dengan pesan error
                    return redirect('/feedbackkortek')->with(['error' => 'Feedback Gagal dikirim!']);
                }
            }elseif($request->role == "5"){
                $feedback = Feedbackweb::create([
                    'nama' => $request->nama,
                    'role' => "Teknisi",
                    'ss_error' => $namess,
                    'kategori' => $request->kategori,
                    'isifeedback' => $request->isifeedback,
                ]);
    
                if($feedback){
                    //redirect dengan pesan sukses
                    return redirect('/feedbackteknisi')->with(['success' => 'Feedback Berhasil dikirim!']);
                }else{
                    //redirect dengan pesan error
                    return redirect('/feedbackteknisi')->with(['error' => 'Feedback Gagal dikirim!']);
                }
            }elseif($request->role == "6"){
                $feedback = Feedbackweb::create([
                    'nama' => $request->nama,
                    'role' => "Admin",
                    'ss_error' => $namess,
                    'kategori' => $request->kategori,
                    'isifeedback' => $request->isifeedback,
                ]);
    
                if($feedback){
                    //redirect dengan pesan sukses
                    return redirect('/feedbackadmin')->with(['success' => 'Feedback Berhasil dikirim!']);
                }else{
                    //redirect dengan pesan error
                    return redirect('/feedbackadmin')->with(['error' => 'Feedback Gagal dikirim!']);
                }
            }
        }
        
    }
}
