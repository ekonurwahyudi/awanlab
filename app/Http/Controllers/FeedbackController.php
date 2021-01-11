<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use DB;

class FeedbackController extends Controller
{
    public function index(){
        $feedback = Feedback::all();
        return view('/awanlab/pengaturan-web/feedback/index', compact('feedback'));
    }

    public function input(Request $request){
        $pesan = [
            'required' => 'Wajib diisi'
        ];
        $this->validate($request,[
            'feedback_lab' => 'required',
            'feedback_pesan' => 'required',
        ], $pesan);

        $feedback = Feedback::insert([
            'feedback_nama' => $request->feedback_nama,
            'feedback_perusahaan' => $request->feedback_perusahaan,
            'feedback_lab' => $request->feedback_lab,
            'feedback_pesan' => $request->feedback_pesan
        ]);

        return redirect('/kritik-saran');
    }
}
