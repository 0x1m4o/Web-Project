<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;


class LoginController extends Controller
{
    public function index(){
        return view('auth.login', [
            'title' => 'Masuk',
        ]);        
    }

    // Login
    public function authenticate(Request $request){
        $loginWith = filter_var($request->hpEmail, FILTER_VALIDATE_EMAIL) ? 'email:dns' : 'phone';

        $validated = $request->validate([
            'hpEmail' => 'required|' . ($loginWith == 'email' ? '' : 'numeric'),
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

        if(Auth::guard('web')->attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Gagal!');
    }

    // Logout
    public function logout(Request $request){
        dd(Auth::guard('web')->name);
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    // Google Login
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    // Google Callback
    public function handleGoogleCallback(){
        $user = Socialite::driver('google')->user();

        $this->_registerOrLoginUser($user);
        return redirect()->intended('/');
    }

    // Facebook Login
    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    // Facebook Callback
    public function handleFacebookCallback(){
        $user = Socialite::driver('facebook')->user();

        $this->_registerOrLoginUser($user);
        return redirect()->intended('/');
    }

    protected function _registerOrLoginUser($data){
        $user = User::where('email', '=', $data->email)->first();
        if(!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->save();
        }

        Auth::login($user);
    }
}
