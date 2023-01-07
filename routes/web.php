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

Route::get('/kategori-dekorasi', function () {
    return view('kategori.dekorasi', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-mua', function () {
    return view('kategori.mua', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-catering', function () {
    return view('kategori.catering', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-band', function () {
    return view('kategori.band', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-fotografi', function () {
    return view('kategori.fotografi', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-busana', function () {
    return view('kategori.busana', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-wo', function () {
    return view('kategori.wo', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-souvenir', function () {
    return view('kategori.souvenir', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-perhiasan', function () {
    return view('kategori.perhiasan', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-mc', function () {
    return view('kategori.mc', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-undangan', function () {
    return view('kategori.undangan', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-weddingp', function () {
    return view('kategori.weddingp', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-honeymoon', function () {
    return view('kategori.honeymoon', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-photobooth', function () {
    return view('kategori.photobooth', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-koreografi', function () {
    return view('kategori.koreografi', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-seserahan', function () {
    return view('kategori.seserahan', [
        'title' => "Kategori"
    ]);
});

Route::get('/kategori-lainnya', function () {
    return view('kategori.lainnya', [
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

Route::get('/view-venue', function () {
    return view('profile.iyan.view-venue', [
        'title' => "Venue"
    ]);
});

Route::get('/view-dekorasi', function () {
    return view('profile.iyan.view-dekor', [
        'title' => "Dekor"
    ]);
});


Route::get('/view-mua', function () {
    return view('profile.iyan.view-mua', [
        'title' => "Mua"
    ]);
});

Route::get('/view-catering', function () {
    return view('profile.iyan.view-catering', [
        'title' => "Catering"
    ]);
});

Route::get('/view-band', function () {
    return view('profile.iyan.view-band', [
        'title' => "band"
    ]);
});

Route::get('/view-fotografi', function () {
    return view('profile.iyan.view-fotografi', [
        'title' => "fotografi"
    ]);
});

Route::get('/view-busana', function () {
    return view('profile.iyan.view-busana', [
        'title' => "busana"
    ]);
});

Route::get('/view-wo', function () {
    return view('profile.iyan.view-wo', [
        'title' => "wo"
    ]);
});

Route::get('/view-souvenir', function () {
    return view('profile.iyan.view-souvenir', [
        'title' => "souvenir"
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

Route::get('/dashboard-admin-users', function () {
    return view('dashboard_cms.users', [
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


Route::get('/package-emerald', function () {
    return view('package.emerald', [
        'title' => "Emerald Package"
    ]);
});

Route::get('/package-gold', function () {
    return view('package.gold', [
        'title' => "Gold Package"
    ]);
});

Route::get('/package-silver', function () {
    return view('package.silver', [
        'title' => "Silver Package"
    ]);
});


Route::get('/following', function () {
    return view('profile.following', [
        'title' => "Following"

    ]);
});

Route::get('/pesan-bantuan', function () {
    return view('pesanbantuan', [
        'title' => "Pesan Bantuan"

    ]);
});