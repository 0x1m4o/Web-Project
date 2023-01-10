@extends('layouts.no_footer')

@section('content')
<link rel="stylesheet" href="/css/profile/profile.css">
    <div class="container-fluid">
        <div class="row">
            @include('partials.profilesidebar')
            <div class="col-9">
                <div class="container" style="margin-top: 60px;border-radius: 10px;background: white;">
                    <nav class="navbar navbar-expand-lg navbar-light" id="menu">
                        <div class="container-fluid" style="border-bottom: 1px solid #49516F;">
                            <a class="navbar-brand" href="/profile">Profile</a>
                            <a class="navbar-brand" href="/biodatadiri">Biodata Diri</a>
                            <a class="navbar-brand" href="/maripay">MariPay</a>
                            <a class="navbar-brand" href="/daftarrekening">Daftar Rekening</a>
                            <a class="navbar-brand aktif" href="/keamanan-aktifitas">Keamanan</a>
                        </div>
                    </nav>
                    <div class="row mx-3 my-5">
                        <div class="col-6" style="color: #49516F;">
                            <div style="width: 400px; margin-bottom: 5em;">
                                <p class="fs-5 fw-bold">Hai Vanessa, tinjau aktivitasmu disini</p>
                            </div>
                            <a href="/keamanan-aktifitas" class="text-decoration-none text-decoration-none text-secondary" >     
                                <div class="d-flex justify-content-between align-items-center mt-5">
                                    <span class="fw-bold fs-5">Review Aktivitas</span>
                                </div>
                            </a>
                            <hr>
                            <a href="/keamanan-ubahsandi" class="fw-bold fs-5 text-decoration-none text-secondary" style="opacity: 0.5" >
                                Ubah Sandi
                            </a>
                        </div>
                        <div class="col-6" style="color: #49516F;">
                            <div class="card" style="border: 1px solid #49516F; color: #49516F;">
                                <div style="width: 100%">
                                    <p class="fw-bold fs-5 px-3 py-2" style="border-bottom: 1px solid rgba(73, 81, 111, 0.3); ">Aktivitas Login</p>    
                                </div>
                                <p class="text-center text-dark px-2 ">Bila terdapat aktivitas tidak dikenal, segera klik "Keluar" dan ubah kata sandi.
                                </p>
                                <div class="row mx-4 mb-3 align-items-center border-bottom">
                                    <p class="fw-bold">Aktivitas Login</p>
                                    <span class="text-center" style="font-weight: 600;font-size: 11px;color: #1B8231;opacity: 0.8;">Sedang Aktif</span>
                                    <div class="col-2 me-3">
                                        <i class="bi bi-display " style="font-size: 4.5em"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0 fw-bold" style="color: #49516F;opacity: 0.5;">Tanggerang Selatan, Banten</p>
                                        <p class="fw-bold" style="color: #49516F;">Chrome di Windows 10</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mx-4 mb-3">
                                    <span class="text-center" style="font-weight: 600;font-size: 11px;opacity: 0.8;">Telah Logout</span>
                                    <div class="col-2 me-3">
                                        <i class="bi bi-phone" style="font-size: 4.5em"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0 fw-bold" style="color: #49516F;opacity: 0.5;">Tanggerang Selatan, Banten</p>
                                        <p class="fw-bold" style="color: #49516F;">Chrome di Android</p>
                                    </div>
                                </div>
                                <hr>
                                <button class="btn mb-3">Keluar dari semua perangkat</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection