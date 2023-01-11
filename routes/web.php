<?php

use App\Events\MessageCreated;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\vendor\auth\LoginVendorController;

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\SignUpController;
use App\Http\Controllers\auth\ForgotController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Categorycontent;

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

// Login User Required
Route::middleware(['auth:web'])->group(function () {
    // Logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // Profile
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

    Route::post('update/biodata', [ProfileController::class, 'update_biodata'])->name('update.biodata');
    Route::post('update/kontak', [ProfileController::class, 'update_kontak'])->name('update.kontak');
});

// Guest User Required
Route::middleware(['guest:web'])->group(function () {
    // Sign Up
    Route::get('/signup', [SignUpController::class, 'index'])->name('signup');
    Route::post('/signup', [SignUpController::class, 'store']);
    
    // Login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    
    // Google Login
    Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('/login/google/callback', [LoginController::class, 'handleGoogleCallback']);
    
    // Facebook Login
    Route::get('/login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
    Route::get('/login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);
    
});

// Forgot Password
Route::get('/forgot-password', [ForgotController::class, 'index'])->name('password.request');
Route::post('/forgot-password', [ForgotController::class, 'authenticate'])->name('password.email');

// Reset Password
Route::get('/reset-password/{token}', [ForgotController::class, 'reset_password'])->name('password.reset');
Route::post('/reset-password', [ForgotController::class, 'update_password'])->name('password.update');

// Login Vendor Required
Route::middleware(['auth:vendor'])->group(function () {
    Route::get('/vendor/profile', function () {
        return view('profilevendor', [
            'title' => "Profile Vendor"
        ]);
    });

    Route::get('/vendor/dashboard', function () {
        return view('vendor.dashboard-vendor', [
            'title' => "Dashboard Vendor"
        ]);
    });

    Route::get('/vendor/produk', function () {
        return view('vendor.produk', [
            'title' => "Manajemen Produk"
        ]);
    });

    // contoh produk 
    Route::get('/vendor/produk/tropical', function () {
        return view('vendor.show', [
            'title' => "Tropical"
        ]);
    });

    Route::get('/vendor/produk/create', function () {
        return view('vendor.create', [
            'title' => "Buat Produk Saya"
        ]);
    });

    Route::get('/vendor/ulasan', function () {
        return view('vendor.ulasan', [
            'title' => "Manajemen Ulasan"
        ]);
    });

    Route::get('/vendor/pesanan', function () {
        return view('vendor.pesanan', [
            'title' => "Manajemen Pesanan"
        ]);
    });

    Route::get('/vendor/chat', function () {
        return view('vendor.chat', [
            'title' => "Chat"
        ]);
    });
});

// Guest Vendor Required
Route::middleware(['guest:vendor'])->group(function () {
    Route::get('/vendor/signup/1', function () {
        return view('vendor.auth.daftar-vendor-1', [
            'title' => "Daftar Vendor Step 1"
        ]);
    });

    Route::get('/vendor/signup/2', function () {
        return view('vendor.auth.daftar-vendor-2', [
            'title' => "Daftar Vendor Step 2"
        ]);
    });

    Route::get('/vendor/login', [LoginVendorController::class, 'index'])->name('vendor.login');
    Route::post('/vendor/login', [LoginVendorController::class, 'authenticate']);
});



















Route::get('/category/{category:slug}', Categorycontent::class)->name('category');

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

Route::get('/feed', function () {
    return view('profile.feed', [
        'title' => "Feed"
    ]);
});

Route::get('/viewmaritory/venue', function () {
    return view('viewmaritory.venue', [
        'title' => "Venue"
    ]);
});

Route::get('/viewmaritory/dekor', function () {
    return view('viewmaritory.dekor', [
        'title' => "Dekor"
    ]);
});


Route::get('viewmaritory/mua', function () {
    return view('viewmaritory.mua', [
        'title' => "Mua"
    ]);
});

Route::get('/viewmaritory/catering', function () {
    return view('viewmaritory.catering', [
        'title' => "Catering"
    ]);
});

Route::get('/viewmaritory/band', function () {
    return view('viewmaritory.band', [
        'title' => "band"
    ]);
});

Route::get('/viewmaritory/fotografi', function () {
    return view('viewmaritory.fotografi', [
        'title' => "fotografi"
    ]);
});

Route::get('/viewmaritory/busana', function () {
    return view('viewmaritory.busana', [
        'title' => "busana"
    ]);
});

Route::get('/viewmaritory/wo', function () {
    return view('viewmaritory.wo', [
        'title' => "wo"
    ]);
});

Route::get('/viewmaritory/souvenir', function () {
    return view('viewmaritory.souvenir', [
        'title' => "souvenir"
    ]);
});

Route::get('/order', function () {
    return view('order', [
        'title' => "Order"
    ]);
});

Route::get('/checkout', function () {
    return view('checkout', [
        'title' => "Checkout"
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

// Route::get('/chat', function () {
//     MessageCreated::dispatch('lorem ipsum dolor sit amet');

//     return view('chat', [
//         'title' => "Chat"
//     ]);
// });


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

Route::get('/wishlist', function () {
    return view('wishlist', [
        'title' => "Wishlist"
    ]);
});


Route::get('/following', function () {
    return view('profile.following', [
        'title' => "Following"

    ]);
});

Route::get('/disekitarsaya', function () {
    return view('disekitarsaya', [
        'title' => "disekitarsaya"

    ]);
});

Route::get('/terbaru', function () {
    return view('terbaru', [
        'title' => "terbaru"

    ]);
});

Route::get('/populer', function () {
    return view('populer', [
        'title' => "populer"

    ]);
});

Route::get('/spesialoffer', function () {
    return view('specialoffer', [
        'title' => "specialoffer"

    ]);
});







Route::get('/notifikasi-transaksi', function () {
    return view('profile.notifikasi_tranksaksi', [
        'title' => "Notifikasi Transaksi"

    ]);
});

Route::get('/update-transaksi', function () {
    return view('profile.update_transaksi', [
        'title' => "Update Transaksi"
    ]);
});

Route::get('/pesan-bantuan', function () {
    return view('pesanbantuan', [
        'title' => "Pesan Bantuan"

    ]);
});

Route::get('/rab', function () {
    return view('rab', [
        'title' => "RAB"
    ]);
});