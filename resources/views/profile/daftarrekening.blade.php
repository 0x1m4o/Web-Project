@extends('layouts.no_footer')
@section('content')
<link rel="stylesheet" href="/css/profile/profile.css">
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
                          <a class="navbar-brand" href="/maripay">MariPay</a>
                          <a class="navbar-brand aktif" href="/daftarrekening">Daftar Rekening</a>
                          <a class="navbar-brand" href="/keamanan-aktifitas">Keamanan</a>
                        </div>
                      </nav>
                <div class="row border-bottom">
                    <div class="col-md-10 px-4 py-3">
                        <p class="fw-bold fs-5 mb-0" style="color: #49516F;">PT. BCA (BANK CENTRAL ASIA) TBK</p>
                        <p class="mb-0">70555334</p>
                        <p>A.N Vanessa Oey</p>
                    </div>
                    <div class="col-md-2 p-3">
                        <img src="/img/logo-bca.png" class="img-fluid">
                        <button class="btn text-white mt-5  fw-bold" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%);
                        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                        border-radius: 12px; border: none; width: 110px;">Hapus</button>
                    </div>
                </div>
                <div class="d-flex my-5">
                    <a href="/tambahrekening" class="btn text-white mt-5 fw-bold m-auto mb-3" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%);
                            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                            border-radius: 12px; border: none; width: 340px;"
                            >Tambah Rekening
                    </a>
                </div>
                </div>
            </div>
          </div>
    </div>
@endsection