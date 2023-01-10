<?php

namespace App\Http\Controllers\auth\business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Vendor;

class LoginVendorController extends Controller
{
    public function index(){
        return view('auth.business.login', [
            'title' => 'Masuk Vendor',
        ]);
    }

    public function authenticate(Request $request){
        $loginWith = filter_var($request->hpEmail, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        $validated = $request->validate([
            'hpEmail' => 'required|' . ($loginWith == 'email' ? 'email:dns' : 'numeric'),
            'password' => 'required',
        ],
        [
            'required' => 'Kolom tidak boleh kosong!',
            'hpEmail.email' => 'Kolom ini harus berisi Email yang valid atau Nomor HP',
            'hpEmail.numeric' => 'Kolom ini harus berisi Email yang valid atau Nomor HP',
        ]);

        $credentials = [
            ($loginWith == 'email' ? 'email' : 'phone') => $validated['hpEmail'],
            'password' => $validated['password'],
        ];

        $remember = $request->remember;

        if(Auth::guard('vendor')->attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect('/business/dashboard');
        }

        return back()->with('loginError', 'Login Gagal!');
    }
}
