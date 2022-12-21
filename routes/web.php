<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => "Homepage",
    ]);
});

Route::get('/paket', function () {
    return view('paket', [
        'title' => "Paket"
    ]);
});

Route::get('/login', function () {
    return view('auth.login', [
        'title' => "Login"
    ]);
});

Route::get('/signup', function () {
    return view('auth.signup', [
        'title' => "Daftar"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => "Profile",
    ]);
});

Route::get('/biodatadiri', function () {
    return view('profile.biodatadiri', [
        'title' => "Biodata Diri",
    ]);
});

Route::get('/maripay', function () {
    return view('profile.maripay', [
        'title' => "MariPay",
    ]);
});

Route::get('/daftarrekening', function () {
    return view('profile.daftarrekening', [
        'title' => "Daftar Rekening",
    ]);
});

Route::get('/keamanan', function () {
    return view('profile.keamanan', [
        "title" => "Keamanan",
    ]);
});

Route::get('/app', function () {
    return view('app', [
        'title' => "Maritory App"
    ]);
});