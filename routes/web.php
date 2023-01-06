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
})->name('login');

Route::get('/signup', function () {
    return view('auth.signup', [
        'title' => "Daftar"
    ]);
})->name('signup');

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
Route::get('/tambahrekening', function () {
    return view('profile.tambahrekening', [
        'title' => "Tambah Rekening",
    ]);
});

Route::get('/keamanan-aktifitas', function () {
    return view('profile.keamanan-aktifitas', [
        "title" => "Keamanan",
    ]);
});

Route::get('/keamanan-ubahsandi', function () {
    return view('profile.keamanan-ubahsandi', [
        "title" => "Ubah Sandi",
    ]);
});

Route::get('/app', function () {
    return view('app', [
        'title' => "Maritory App"
    ]);
});

Route::get('/marisaving', function () {
    return view('marisaving-dashboard', [
        'title' => "Marisaving Dashboard"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard', [
        'title' => "Dashboard"
    ]);
});

Route::get('/nabung', function () {
    return view('dashboard.nabung', [
        'title' => "Nabung"
    ]);
});

Route::get('/pasangan', function () {
    return view('dashboard.pasangan', [
        'title' => "Pasangan"
    ]);
});

Route::get('/transaksi', function () {
    return view('dashboard.transaksi', [
        'title' => "Transaksi"
    ]);
});

Route::get('/tariksaldo', function () {
    return view('dashboard.tariksaldo', [
        'title' => "Tarik Saldo"
    ]);
});


Route::get('/kategori-venue', function () {
    return view('kategori.venue', [
        'title' => "Kategori"
    ]);
});

Route::get('/keranjang', function () {
    return view('keranjang', [
        'title' => "Keranjang"
    ]);
});
Route::get('/berhasilnabung', function () {
    return view('dashboard.berhasilnabung', [
        'title' => "Berhasil Nabung"
    ]);
});

Route::get('/gagalnabung', function () {
    return view('dashboard.gagalnabung', [
        'title' => "Gagal Nabung"
    ]);
});    

Route::get('/loginvendor', function () {
    return view('auth.business.login', [
        'title' => "Login Vendor"
    ]);
});

Route::get('/registervendor', function () {
    return view('auth.business.register', [
        'title' => "Register Vendor"
    ]);
});

Route::get('/profilevendor', function () {
    return view('profile.iyan.profilevendor', [
        'title' => "Profile Vendor"
    ]);
});


Route::get('/feed', function () {
    return view('profile.feed', [
        'title' => "Feed"
    ]);
});

Route::get('/venue', function () {
    return view('profile.iyan.view-venue', [
        'title' => "Venue"
    ]);
});

Route::get('/mua', function () {
    return view('profile.iyan.view-mua', [
        'title' => "Mua"
    ]);
});

Route::get('/order', function () {
    return view('order', [
        'title' => "Order"
    ]);
});

Route::get('/chat', function () {
    return view('chat.chat', [
        'title' => "Chat"

    ]);
});

Route::get('/dashboard-admin', function () {
    return view('dashboard_cms.dashboard', [
        'title' => "Dashboard"

    ]);
});

Route::get('/checklist', function () {
    return view('profile.checklist', [
        'title' => "Checklist"

    ]);
});

Route::get('/chat', function () {
    return view('chat', [
        'title' => "Chat"

    ]);
});