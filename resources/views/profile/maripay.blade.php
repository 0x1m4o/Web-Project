@extends('layouts.no_footer')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="container" style="width: 300px; border-radius: 10px; margin-top: 60px;background-color: white;">
                    <section class="profile">
                        <div class="profile-image">
                            <a href="#">
                                <img src="/img/Rectangle 35.png" />
                            </a>
                        </div>
                        <div class="profile-name">
                            <a href="#">Vanessa Oey</a>
                        </div>
                    </section>
                    <section class="dashboard">
                        <div class="dashboard-title">
                            <a href="/maripay">
                                <p><i class="bi bi-wallet"></i> Maripay</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-star"></i> Goal</p>
                            </a>
                            <a href="/rab">
                                <p><i class="bi bi-file-bar-graph"></i> RAB</p>
                            </a>
                            <a href="/checklist">
                                <p><i class="bi bi-check-square"></i> Checklist</p>
                            </a>
                            <a href="/feed">
                                <p><i class="bi bi-images"></i> Feed</p>
                            </a>
                            <a href="/following">
                                <p><i class="bi bi-people-fill"></i> Following</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-gear"></i> Setting</p>
                            </a>
                        </div>
                        <div class="dashboard-data">
                            <p>Rp 60,000,000</p>
                            <p>Rp -40,000,000</p>
                        </div>
                    </section>
                    <section class="kotak-masuk">
                        <i class="bi bi-envelope"></i>
                        <span>Kotak Masuk</span>
                    </section>
                    <section class="contact">
                        <div class="contact-title">
                            <a href="/chat">
                                <p><i class="bi bi-chat"></i> Chat</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-journal-text"></i> Ulasan</p>
                            </a>
                            <a href="/notifikasi-transaksi">
                                <p><i class="bi bi-bell"></i> Notification</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-heart-pulse"></i> Maritory Care</p>
                            </a>
                            <a href="">
                                <strong><i class="bi bi-box-arrow-left"></i> Log Out</strong>
                            </a>
                        </div>
                        <div class="contact-data">
                            <p>5</p>
                            <p>1</p>
                            <p>10</p>
                            <p>2</p>
                        </div>
                    </section>
                </div>
            </div>
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
                                <div class="input-animation-maripay">
                                    <input class="fw-bold fs-5 effect-border" placeholder="Maripay" style="border: none;">
                                    <span class="focus-border"></span>
                                </div>
                                <button class="btn text-white" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%); border: none;">Nabung</button>
                            </div>                            <span class="fw-bold fs-5" style="opacity: 0.5">Kartu Kredit / Debit</span>
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