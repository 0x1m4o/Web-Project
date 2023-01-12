<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Stmt\ElseIf_;

class ProfileController extends Controller
{
    public function update_biodata(Request $request)
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

        DB::table('users')
        ->where('id', auth()->user()->id)
        ->update([
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
        ]);

        return back();
    }

    public function update_kontak(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns' . ($request->email == auth()->user()->email ? '' : '|unique:users'),
            'phone' => 'required|numeric|min_digits:10|max_digits:13' . ($request->phone == auth()->user()->phone ? '' : '|unique:users')
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

        DB::table('users')
        ->where('id', auth()->user()->id)
        ->update([
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return back();
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
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

        if(Hash::check($request->current_password, auth()->user()->password)) {
            DB::table('users')
            ->where('id', auth()->user()->id)
            ->update([
                'password' => Hash::make($request->new_password)
            ]);
            return back();
        }
        elseif($request->current_password == auth()->user()->password){
            DB::table('users')
            ->where('id', auth()->user()->id)
            ->update([
                'password' => Hash::make($request->new_password)
            ]);
            return back();
        }

        throw ValidationException::withMessages([
            'current_password' => 'Kata Sandi Anda saat ini tidak cocok dengan data kami'
        ]);
    }

    public function update_avatar(Request $request)
    {
        $request->validate([
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg,jfif',
        ],[
            'mimes' => 'Avatar harus merupakan sebuah gambar!',
        ]);

        if($request->hasFile('avatar')) {
            $filename = $request->avatar->getClientOriginalName();
            $avatar = $request->avatar->storeAs('avatar', $filename, 'public');
            DB::table('users')
            ->where('id', auth()->user()->id)
            ->update([
                'avatar' => 'storage/' . $avatar
            ]);     
        }
        return back();
    }
}
