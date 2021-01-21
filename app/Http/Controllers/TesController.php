<?php


namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class TesController extends Controller
{
    use AuthenticatesUsers;
    
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    	// menampilkan isi session
    public function tampilkanSession(Request $req) {
            echo "Hai ". Auth::user()->name;
	}
 
	// membuat session
	public function buatSession(Request $request) {
		$request->session()->put('nama','Diki Alfarabi Hadi');
		echo "Data telah ditambahkan ke session.";
	}
 
	// menghapus session
	public function hapusSession(Request $request) {
		$request->session()->forget('nama');
		echo "Data telah dihapus dari session.";
	}
}
