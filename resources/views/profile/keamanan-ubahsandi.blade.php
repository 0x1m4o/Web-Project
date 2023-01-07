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
                            <a href="">
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
                            <a href="">
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
                          <a class="navbar-brand" href="/daftarrekening">Daftar Rekening</a>
                          <a class="navbar-brand aktif" href="/keamanan">Keamanan</a>
                        </div>
                    </nav>
                    <div class="row mx-3 my-5">
                        <div class="col-6" style="color: #49516F;">
                            <div style="width: 400px; margin-bottom: 5em;">
                                <p class="fs-5 fw-bold">Hai Vanessa, tinjau aktivitasmu disini</p>
                            </div>
                            <a href="/keamanan-aktifitas" class="text-decoration-none text-decoration-none text-secondary" style="opacity: 0.5">     
                                <div class="d-flex justify-content-between align-items-center mt-5">
                                    <span class="fw-bold fs-5">Review Aktivitas</span>
                                </div>
                            </a>
                            <hr>
                            <a href="/keamanan-ubahsandi" class="fw-bold fs-5 text-decoration-none text-secondary" >
                                Ubah Sandi
                            </a>
                        </div>
                        <div class="col-6" style="color: #49516F;">
                            <div class="card" style="border: 1px solid #49516F; color: #49516F;">
                                <div style="width: 100%">
                                    <p class="fw-bold fs-5 px-3 py-2" style="border-bottom: 1px solid rgba(73, 81, 111, 0.3); ">Ubah Kata Sandi</p>    
                                </div>
                                <div class="row mx-4 mb-3 align-items-center">
                                    <div class="pass-field">
                                        <p class="fw-bold p-0 my-1">Password Lama</p>
                                        <input type="password" placeholder="Masukan Password Lama" class="rounded mb-3 w-100 ps-2" id="passwordlama">
                                        <p class="fw-bold p-0 my-1">Password Baru</p>
                                        <input type="password" placeholder="Masukan Password Baru" class="rounded mb-3 w-100 ps-2" id="passwordbaru">
                                        <p class="fw-bold p-0 my-1">Konfirmasi Password Baru</p>
                                        <input type="password" placeholder="Konfirmasi Password Baru" class="rounded mb-1 w-100 ps-2" id="konfirmasipasswordbaru" style="border-color: red">
                                        <p class="fw-bold p-0 mb-2 text-danger" style="font-size: 12px">Password does not meet the defined requirements</p>
                                    </div>

                                    <div class="requirements ms-1">
                                        <p class="fw-bold p-0 my-1" style="font-size: 12px">Password should meet the following requirements:</p>
                                            <div class="requirements-details d-flex align-items-center justify-content-start">
                                                <i class="text-secondary d-flex align-items-center text-center me-2" style="font-size: 11px;padding: 4px"><iconify-icon icon="maki:cross"></iconify-icon></i>
                                                <p class="fw-bold p-0 my-1 text-secondary" style="font-size: 11px">Length greater than or equal to 8 charactters</p>
                                            </div>
                                            <div class="requirements-details d-flex align-items-center justify-content-start">
                                                <i class="text-secondary d-flex align-items-center me-2" style="font-size: 11px; padding: 4px"><iconify-icon icon="maki:cross"></iconify-icon></i>
                                                <p class="fw-bold p-0 my-1 text-secondary" style="font-size: 11px">Upper case character</p>
                                            </div>
                                            <div class="requirements-details d-flex align-items-center justify-content-start">
                                                <i class="text-secondary d-flex align-items-center me-2 p-0" style="font-size: 0px"><iconify-icon icon="material-symbols:check-small-rounded" width="20"></iconify-icon></i>
                                                <p class="fw-bold p-0 my-1 text-success" style="font-size: 11px">Lower case character</p>
                                            </div>
                                            <div class="requirements-details d-flex align-items-center justify-content-start">
                                                <i class="text-secondary d-flex align-items-center me-2" style="font-size: 11px; padding: 4px"><iconify-icon icon="maki:cross"></iconify-icon></i>
                                                <p class="fw-bold p-0 my-1 text-secondary" style="font-size: 11px">Numeric character</p>
                                            </div>
                                            <div class="requirements-details d-flex align-items-center justify-content-start">
                                                <i class="text-secondary d-flex align-items-center me-2" style="font-size: 11px; padding: 4px"><iconify-icon icon="maki:cross"></iconify-icon></i>
                                                <p class="fw-bold p-0 my-1 text-secondary" style="font-size: 11px">Special character</p>
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