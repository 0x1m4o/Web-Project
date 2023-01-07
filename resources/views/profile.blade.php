@extends('layouts.no_footer')
@section('content')
<link rel="stylesheet" href="/css/profile/profile.css">
<div class="container-fluid mb-3">
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
                        <a class="navbar-brand" href="/keamanan-aktifitas">Keamanan</a>
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
                        <div class="col-sm-6" style="position: relative;">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 style="font-weight: 900;color: #49516F;padding-bottom: 20px; padding-left: 50px;">Pasangan</h3>
                                </div>
                                <div class="col-sm-6" style="position: relative">
                                    <i class="bi bi-pencil-fill" style="position: absolute;  right: 0; top: 0; left: 120px; cursor: pointer;"></i>
                                </div>
                            </div>
                            <img src="/img/laki.png" alt="profile" style="border-radius: 50%;width: 70px;float: left;margin-right: 15px;margin-left: 50px;">
                            <h3 style="color: #49516F;font-weight: 600;margin-left: 50px;">Gerald Tan</h3>
                            <h6 style="color: #49516F;font-weight:600;margin-left: 50px;">082150506000</h6>
                            <h6 style="color: #49516F;font-weight:600;margin-left: 50px;">gerald.tan@gmail.com</h6>
                        </div>
                    </div>
                <div class="content" style="padding-top: 100px;">
                    <div class="container saldo" style="width: 1100px;">
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
                        <a href="#" class="btn d-block container mt-4 mb-4" role="button" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%);box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 12px;font-weight: 900; color: white; font-size: 18px;width: 500px; text-align: center; border: none;">Simpan</a>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection