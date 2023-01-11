<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'date_of_birth' => '',
            'gender' => '',
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

        // dd('yeaaa');

        DB::table('users')
        ->where('id', auth()->user()->id)
        ->update([
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
        ]);

        return back();
    }
}
