@extends('layouts.no_footer')

@section('content')

    <div class="container-fluid">
        <div class="row">
            @include('partials.profilesidebar')
            <div class="col-9">
                <div class="container" style="margin-top: 60px;border-radius: 10px;background: white;">
                    <nav class="navbar navbar-expand-lg navbar-light" id="menu">
                        <div class="container-fluid" style="border-bottom: 1px solid #49516F;">
                          <a class="navbar-brand" href="/profile">Profile</a>
                          <a class="navbar-brand" href="/biodatadiri">Biodata Diri</a>
                          <a class="navbar-brand aktif" href="/maripay">MariPay</a>
                          <a class="navbar-brand" href="/daftarrekening">Daftar Rekening</a>
                          <a class="navbar-brand" href="/keamanan-aktifitas">Keamanan</a>
                        </div>
                      </nav>
                      <div class="row mx-3 my-5">
                        <div class="col-6" style="color: #49516F;">
                            <div style="width: 300px; margin-bottom: 5em;">
                                <p class="fs-5 fw-bold">Hai Vanessa selamat datang di Halaman Maripay !</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-5">
                                <div class="input-animation-maripay mb-3">
                                    <input class="fw-bold fs-5 effect-border" placeholder="Maripay" style="border: none;">
                                    <span class="focus-border"></span>
                                </div>
                                <button class="btn text-white" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%); border: none;">Nabung</button>
                            </div>                            <span class="fw-bold fs-5 mt-3" style="opacity: 0.5">Kartu Kredit / Debit</span>
                        </div>
                        <div class="col-6" style="color: #49516F;">
                            <div class="card" style="border: 1px solid #49516F; color: #49516F;">
                                <div style="width: 100%">
                                    <p class="fw-bold fs-5 border-bottom px-3 py-2">Maripay</p>    
                                </div>
                                <div class="my-5 d-flex flex-column justify-content-center align-items-center" style="color: #49516F;">
                                    <img src="/img/maripay-card.png" class="img-fluid">
                                    <div class="mt-5" style="color: #49516F;">
                                        <span class="fw-bold text-left me-5">Limit Maripay</span>
                                        <span class="fw-bold">Rp 5.000.000</span>
                                        <p style="font-size: 9px; font-weight: 600; text-align: right; color: #49516F; opacity: 0.5">Tambah Limit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
          </div>
    </div>
@endsection