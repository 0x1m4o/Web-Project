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
                          <a class="navbar-brand aktif" href="/profile">Profile</a>
                          <a class="navbar-brand" href="/biodatadiri">Biodata Diri</a>
                          <a class="navbar-brand" href="/maripay">MariPay</a>
                          <a class="navbar-brand" href="/daftarrekening">Daftar Rekening</a>
                          <a class="navbar-brand" href="/keamanan">Keamanan</a>
                        </div>
                      </nav>
                <div class="container">
                    <div class="row">
                        <div class="content col-sm-6">
                            <h3 style="font-weight: 900;color: #49516F;padding-bottom: 20px;">Profile</h3>
                            <img src="/img/Rectangle 35.png" alt="profile" style="border-radius: 50%;width: 70px;float: left;margin-right: 15px;">
                            <h3 style="color: #49516F;font-weight: 600;">Vanessa Oey</h3>
                            <h6 style="color: #49516F;font-weight:600;">087804842080</h6>
                            <h6 style="color: #49516F;font-weight:600;">vanessa.oey@gmail.com</h6>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3  style="font-weight: 900;color: #49516F;padding-bottom: 20px;">Pasangan</h3>
                                </div>
                                <div class="col-sm-6">
                                    <h3  style="font-weight: 900;padding-bottom: 20px;cursor: pointer;"><i class="bi bi-pencil-fill"></i></h3>
                                </div>
                            </div>
                            <img src="/img/laki.png" alt="profile" style="border-radius: 50%;width: 70px;float: left;margin-right: 15px;">
                            <h3 style="color: #49516F;font-weight: 600;">Gerald Tan</h3>
                            <h6 style="color: #49516F;font-weight:600;">082150506000</h6>
                            <h6 style="color: #49516F;font-weight:600;">gerald.tan@gmail.com</h6>
                        </div>
                    </div>
                <div class="content" style="padding-top: 100px;">
                    <div class="container saldo" style="width: 1200px;">
                        <h3 style="font-weight: 900;color: #49516F;">Saldo & Points</h3>
                        <div class="row" style="text-align: center;background: white;box-shadow: 0px 19px 19px -4px rgba(0,0,0,0.1);border-radius: 20px;color: #49516F;">
                            <div class="col-sm-2" style="line-height: 5px;">
                                <img src="/img/logo_saldo.png" alt="logo saldo" style="margin-left: 30px; margin-bottom: 10px;">
                                <p style="margin-left: 30px;text-align: center;font-size: 16px; font-weight: 600;">Rp. 30.000.000</p>
                                <p style="margin-left: 30px;text-align: center;font-size: 16px; font-weight: 600;">Saldo Maripay</p>
                            </div>
                            <div class="col-sm-2">
                                <img src="/img/line.png" alt="line">
                            </div>
                            <div class="col-sm-2" style="line-height: 5px;">
                                <img src="/img/logo_saldo.png" alt="logo saldo" style="margin-left: 30px; margin-bottom: 10px;">
                                <p style="margin-left: 30px;text-align: center;font-size: 16px; font-weight: 600;">Rp. 5.000.000</p>
                                <p style="margin-left: 30px;text-align: center;font-size: 16px; font-weight: 600;">Limit Saldo</p>
                            </div>
                            <div class="col-sm-2">
                                <img src="/img/line.png" alt="line">
                            </div>
                            <div class="col-sm-2" style="line-height: 5px;">
                                <img src="/img/logo_saldo.png" alt="logo saldo" style="margin-left: 30px; margin-bottom: 10px;">
                                <p style="margin-left: 30px;text-align: center;font-size: 16px; font-weight: 600;">Rp. 70.000.000</p>
                                <p style="margin-left: 30px;text-align: center;font-size: 16px; font-weight: 600;">Goals</p>
                            </div>
                            <div class="col-sm-2" style="cursor: pointer; color: black;">
                                <i class="bi bi-pencil-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn d-block container mt-4 mb-4" role="button" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%);box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 12px;font-weight: 900; color: white; font-size: 18px;width: 500px; text-align: center; border-none;">Simpan</a>
                </div>
                </div>
            </div>
          </div>
    </div>
@endsection 