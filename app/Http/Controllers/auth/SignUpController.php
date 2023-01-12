<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SignUpController extends Controller
{
    public function index(){
        return view('auth.signup', [
            'title' => 'Daftar',
        ]);        
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email:dns|unique:users',
            'phone' => 'required|numeric|unique:users|min_digits:10|max_digits:13',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ],[
            'required' => 'Kolom tidak boleh kosong!',
            'same' => 'Kolom Kata Sandi dan Konfirmasi Kata Sandi harus sama!',
            'email' => 'Kolom harus berisi email yang valid!',
            'numeric' => 'Nomor HP harus berupa angka!',

            'name.min' => 'Nama harus memiliki minimal 3 karakter!',

            'phone.min_digits' => 'No HP harus memiliki minimal 10 digit!',
            'phone.max_digits' => 'No HP harus memiliki maksimal 13 digit!',
            'password.min' => 'Kata Sandi harus memiliki minimal 8 digit!',

            'email.unique' => 'Email sudah terdaftar!',
            'phone.unique' => 'Nomor HP sudah terdaftar!',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/login')->with('signupSuccess', 'Pendaftaran berhasil, silahkan login!');
    }
}
