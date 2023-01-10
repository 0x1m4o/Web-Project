<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class ForgotController extends Controller
{
    // Password.request
    public function index(){
        return view('auth.forgot_password', [
            'title' => 'Lupa Kata Sandi',
        ]);
    }

    // Password.email
    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required|email:dns|exists:users|',
        ],
        [
            'required' => 'Kolom tidak boleh kosong!',
            'email.email' => 'Kolom ini harus berisi Email yang valid atau Nomor HP',
            'email.numeric' => 'Kolom ini harus berisi Email yang valid atau Nomor HP',
            'email.exists' => 'Kami tidak dapat menemukan pengguna dengan email tersebut.',
        ]);

        $status = Password::sendResetLink($request->only('email'));
        
        return $status === Password::RESET_LINK_SENT
                    ? redirect('/forgot-password')->with(['email' => $request->email])
                    : back()->withErrors(['email' => __($status)]);
    }

    // Password.reset
    public function reset_password(Request $request, $token){
        $check_email = DB::table('password_resets')
            ->where(['email'=>$request->email])
            ->where('created_at','>',Carbon::now()->subHours(1))
            ->first();

        if($check_email){
            if(Hash::check($token, $check_email->token)){
                return view('auth.reset_password', [
                    'title' => 'Reset Password',
                    'token' => $token,
                    'email' => $request->email,
                ]);
            } else{
                return response('invalid token<br><a href="/">back to home</a>');
            }
        } else{
            return response('invalid token<br><a href="/">back to home</a>');
        }
    }

    // Password.update
    public function update_password(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ],[
            'required' => 'Kolom tidak boleh kosong!',
            'same' => 'Kolom Kata Sandi dan Konfirmasi harus sama!',
            'email' => 'Kolom harus berisi email yang valid!',

            'password.min' => 'Kata Sandi harus memiliki minimal 8 digit!',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password)
                ]);

                $user->save();

                event(new PasswordReset($user));
            }
        );

        if($status === Password::PASSWORD_RESET){
            DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();

            return redirect('/login')->with('changePassword', 'Kata Sandi anda telah diubah!');
        } else{
            back()->with('tokenInvalid', __($status));
        }
    }
}