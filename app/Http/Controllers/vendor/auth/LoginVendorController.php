<?php

namespace App\Http\Controllers\vendor\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginVendorController extends Controller
{
    protected $redirectTo = '/vendor/dashboard';

    public function index(){
        return view('vendor.auth.login', [
            'title' => "Login Vendor"
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
            return redirect('/vendor/dashboard');
        }

        return back()->with('loginError', 'Login Gagal!');
    }

    public function logout(Request $request){
        Auth::guard('vendor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/vendor/login');
    }
}
