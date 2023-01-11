<?php

namespace App\Http\Controllers\vendor\auth\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;

class SignUpVendorController extends Controller
{
    public function index(){
        return view('auth.business.signup', [
            'title'=> 'Daftar Vendor'
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'business_name' => 'required|min:3',
            'phone' => 'required|numeric|unique:vendors|min_digits:10|max_digits:13',
            'business_phone' => 'required|numeric|unique:vendors|min_digits:10|max_digits:13',
            'email' => 'required|email:dns|unique:vendors',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'category' => 'required',
            'address' => 'required',
        ],[
            'required' => 'Kolom tidak boleh kosong!',
            'same' => 'Kolom Kata Sandi dan Konfirmasi Kata Sandi harus sama!',
            'email' => 'Kolom harus berisi email yang valid!',
            'numeric' => 'Nomor Handphone harus berupa angka!',

            'name.min' => 'Nama harus memiliki minimal 3 karakter!',

            'phone.min_digits' => 'No HP harus memiliki minimal 10 digit!',
            'phone.max_digits' => 'No HP harus memiliki maksimal 13 digit!',
            'password.min' => 'Kata Sandi harus memiliki minimal 8 digit!',

            'email.unique' => 'Email sudah terdaftar!',
            'phone.unique' => 'Nomor HP sudah terdaftar!',
        ]);

        Vendor::create([
            'name' => $request->name,
            'business_name' => $request->business_name,
            'phone' => $request->phone,
            'business_phone' => $request->business_phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'category' => $request->category,
            'address' => $request->address,
        ]);

        return redirect('/business/login')->with('signupSuccess', 'Pendaftaran berhasil, silahkan login!');
    }
}
