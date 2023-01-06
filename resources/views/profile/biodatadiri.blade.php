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
                                <img src="/img/Rectangle 35.png"  />
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
                            <a href="">
                                <p><i class="bi bi-check-square"></i> Checklist</p>
                            </a>
                            <a href="/feed">
                                <p><i class="bi bi-images"></i> Feed</p>
                            </a>
                            <a href="">
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
                            <a href="">
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
                          <a class="navbar-brand aktif" href="/biodatadiri">Biodata Diri</a>
                          <a class="navbar-brand" href="/maripay">MariPay</a>
                          <a class="navbar-brand" href="/daftarrekening">Daftar Rekening</a>
                          <a class="navbar-brand" href="/keamanan-aktifitas">Keamanan</a>
                        </div>
                    </nav>
                    <div class="row p-5">
                        <div class="col-4">
                            <div class="card" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                                <img src="/img/profile.png" class="card-img-top p-3  m-auto" style="width: 250px;">
                                <div class="card-body text-center mb-3">
                                   <button class="btn btn-outline-dark">Pilih Foto</button> 
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                          <div class="container-fluid" style="border-bottom: 1px solid grey;">
                            <div class="row align-items-center">
                                <div class="col-11">
                                    <span class="mb-3 fs-4">
                                        Biodata Diri
                                    </span>
                                </div>
                                <div class="col-1">
                                        <i class="bi bi-pencil-fill fs-4"></i>
                                </div>
                            </div>
                            <div class="col-sm-2" style="cursor: pointer; color: black;">
                            </div>
                            <div class="row ms-2 my-3">
                                <div class="col-6">
                                    <p class="mb-4">Nama</p>
                                    <p class="mb-4">Tanggal Lahir</p>
                                    <p class="mb-4">Jenis Kelamin</p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-4">Vanessa Oey</p>
                                    <p class="mb-4">30 Desember 1993</p>
                                    <p class="mb-4">Wanita</p>
                                </div>
                            </div>
                          </div>  

                          <div class="container-fluid mt-3" style="border-bottom: 1px solid grey;">
                            <div class="row align-items-center">
                                <div class="col-11">
                                    <span class="mb-3 fs-4">
                                        Kontak
                                    </span>
                                </div>
                                <div class="col-1">
                                        <i class="bi bi-pencil-fill fs-4"></i>
                                </div>
                            </div>
                            <div class="col-sm-2" style="cursor: pointer; color: black;">
                            </div>
                            <div class="row ms-2 my-3">
                                <div class="col-6">
                                    <p class="mb-4">Nama</p>
                                    <p class="mb-4">Nomor HP</p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-4">vanessa.oey@gmail.com</p>
                                    <p class="mb-4">087804842080</p>
                                </div>
                            </div>
                          </div>
                            
                          <div class="container-fluid mt-3">
                            <div class="row align-items-center">
                                <div class="col-11">
                                    <span class="mb-3 fs-4">
                                        Sandi
                                    </span>
                                </div>
                                <div class="col-1">
                                        <i class="bi bi-pencil-fill fs-4"></i>
                                </div>
                            </div>
                            <div class="col-sm-2" style="cursor: pointer; color: black;">
                            </div>
                            <div class="row ms-2 my-3">
                                <div class="col-6">
                                    <p class="mb-4">Sandi</p>
                                    <p class="mb-4">Terakhir diubah</p >
                                </div>
                                <div class="col-6">
                                    <p class="mb-4">*************</p>
                                    <p class="mb-4">18 Januari 2021</p>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
          </div>
    </div>
@endsection