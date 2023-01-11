<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email:dns|unique:users',
            'phone' => 'required|numeric|unique:users|min_digits:10|max_digits:13',
            'password' => 'required|min:8',
        ],[
            'required' => 'Kolom tidak boleh kosong!',
            'email' => 'Kolom harus berisi email yang valid!',
            'numeric' => 'Nomor HP harus berupa angka!',

            'name.min' => 'Nama harus memiliki minimal 3 karakter!',

            'phone.min_digits' => 'No HP harus memiliki minimal 10 digit!',
            'phone.max_digits' => 'No HP harus memiliki maksimal 13 digit!',
            'password.min' => 'Kata Sandi harus memiliki minimal 8 digit!',

            'email.unique' => 'Email sudah terdaftar!',
            'phone.unique' => 'Nomor HP sudah terdaftar!',
        ]);

        auth()->user()->update($attr);
    }
}
