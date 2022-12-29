@extends('layouts.main')
<link rel="stylesheet" href="/css/profile/profile.css">

@section('content')
    {{-- <h1>{{$user}}</h1> --}}
    {{-- <div class="container" style="width: 300px;border-radius: 10px;border: 1px solid black;"> --}}
        <style>
            body {
                background-color: #F4F4F4;
            }
            #menu a {
                /* color: #FFF; */
                opacity: 0.5;
                text-decoration: none;
                border-bottom: transparent solid 1px;
                padding-bottom: 5px;
                color: #49516F;
                font-weight: 900;
            }
            #menu .aktif {
                text-decoration: none;
                border-bottom: transparent solid 1px;
                padding-bottom: 5px;
                color: #237A57;
                font-weight: 900;
                opacity: 1;
                border-bottom: 5px solid;
                border-image: linear-gradient(90deg, #093028 0%, #237A57 100%) 1;
            }                       
            .profile {
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid gray;
            margin: 5px 0;
            }

            .container > * {
            padding: 10px;
            }

            .profile-image img {
            border-radius: 50%;
            }

            .profile-name a {
            font-weight: 600;
            font-size: 18px;
            margin-left: 15px;
            text-decoration: none;
            color: gray;
            letter-spacing: 0.5px;
            }

            .profile-name a:hover {
            text-decoration: none;
            color: black;
            }


            .dashboard {
                display: flex;
                justify-content: space-between;
                border-bottom: 1px solid gray;
            }

            .dashboard a {
                text-decoration: none;
                color: black;
            }

            .dashboard i {
                color: gray;
                margin-right: 5px;
            }


            .kotak-masuk {
                display: flex;
                align-items: center;
                font-size: 1.2rem;
                border-bottom: 1px solid gray;
            }

            .kotak-masuk i {
                margin-left: 15px;
                margin-right: 15px;
                font-size: 1.8rem;    
                color: gray;
            }

            .kotak-masuk span {
                font-weight: 600;
            }


            .contact {
                display: flex;
                justify-content: space-between;
                margin-bottom: 10px;
            }

            .contact-title a {
                text-decoration: none;
                color: #000;
            }

            .contact i {
                color: gray;
                margin-right: 5px;
            }



            .contact-data p {
                text-align: center;
                background-color: rgba(35, 66, 49, 1);
                color: white;
                padding: 0 5px;
                border-radius: 50%;
            }
            
            button:focus {
                outline: none;
                border: none;
            }

            .card {
                border-radius: 10px;
            }
        </style>
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
                            <a href="">
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
                            <a href="">
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
                            <div class="d-flex justify-content-between align-items-center mt-5">
                                <span class="fw-bold fs-5">Review Aktivitas</span>
                            </div>
                            <hr>
                            <a href="" class="fw-bold fs-5 text-decoration-none text-secondary" style="opacity: 0.5">Ubah Sandi</a>
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