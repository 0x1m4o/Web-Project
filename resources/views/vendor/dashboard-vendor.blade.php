@extends('layouts.dashboard-vendor')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 p-0">
                <div class="container mt-5" style="width: 300px; border-radius: 20px;background-color: white;">
                    <section class="profile">
                        <a href="/profile" class="rounded-circle p-2 px-3" style="background-color: #237A57;font-size: 20px">
                            <img src="/img/avatar.png" style="width: 17px; height: 17px" alt="" />
                        </a>
                        <div class="profile-name">
                            <a href="#">The Aesthetic</a>
                        </div>
                    </section>
                    <section class="dashboard">
                        <div class="dashboard-title">
                            <a href="/maripay">
                                <p><i class="bi bi-wallet"></i> Maripay</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-file-bar-graph"></i>Followers</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-check-square"></i>Availibility</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-gear"></i> Setting</p>
                            </a>
                        </div>
                        <div class="dashboard-data">
                            <p class="text-end">Rp 30,000,000</p>
                            <p class="text-end">10</p>
                        </div>
                    </section>
                    <section class="kotak-masuk">
                        <i class="bi bi-envelope"></i>
                        <span>Kotak Masuk</span>
                    </section>
                    <section class="contact">
                        <div class="contact-title">
                            <a href="/vendor-admin/chat">
                                <p><i class="bi bi-chat"></i> Chat</p>
                            </a>
                            <a href="/vendor-admin/produk">
                                <p>
                                    <i class="bi bi-box">

                                    </i>
                                    Produk
                                </p>
                            </a>
                            <a href="/vendor-admin/pesanan">
                                <p><i class="bi bi-bag"></i> Pesanan</p>
                            </a>
                            <a href="/vendor-admin/ulasan">
                                <p><i class="bi bi-reply"></i> Ulasan</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-info-circle"></i> Pesan Bantuan</p>
                            </a>

                            <a href="{{ route('vendor.logout') }}">
                                <strong><i class="bi bi-box-arrow-left"></i> Log Out</strong>
                            </a>
                        </div>
                        <div>
                            <p>5</p>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-8 p-0">
                <div class="container mt-5" style="border-radius: 20px; background-color: white;">
                    <h3 class="fw-semibold">Pesanan</h3>
                    <div class="row">
                        <div class="col-2 p-3 mx-2"
                            style="background-color: #EEEEEE;
                        height: 120px;
                        border: 4px solid #FFFFFF;
                        border-radius: 30px;">
                            <p class="m-0" style="font-size:14px">Pesanan Baru</p>
                            <h3 class="fw-semibold">
                                0
                            </h3>
                        </div>
                        <div class="col-2 p-3 mx-2"
                            style="background-color: #EEEEEE;
                        border: 4px solid #FFFFFF;
                        border-radius: 30px;">
                            <p class="m-0" style="font-size:14px">Siap Dikirim</p>
                            <h3 class="fw-semibold">
                                0
                            </h3>
                        </div>
                        <div class="col-2 p-3 mx-2"
                            style="background-color: #EEEEEE;
                        border: 4px solid #FFFFFF;
                        border-radius: 30px;">
                            <p class="m-0" style="font-size:14px">Chat Baru</p>
                            <h3 class="fw-semibold">
                                0
                            </h3>
                        </div>
                        <div class="col-2 p-3 mx-2"
                            style="background-color: #EEEEEE;
                        border: 4px solid #FFFFFF;
                        border-radius: 30px;">
                            <p class="m-0" style="font-size:14px">Ulasan Baru</p>
                            <h3 class="fw-semibold">
                                0
                            </h3>
                        </div>
                        <div class="col-2 p-3 mx-2"
                            style="background-color: #EEEEEE;
                        border: 4px solid #FFFFFF;
                        border-radius: 30px;">
                            <p class="m-0" style="font-size:14px">Komplain</p>
                            <h3 class="fw-semibold">
                                0
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h3>Statistics</h3>
                            <div class="row">
                                <div class="col-6 p-0">
                                    <div class="p-3"
                                        style="background-color: #EEEEEE;
                                height: 120px;
                                border: 4px solid #FFFFFF;
                                border-radius: 30px;">
                                        <p class="m-0" style="font-size:14px">Pendapatan
                                            Bersih Baru</p>
                                        <h3 class="fw-semibold">
                                            0
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-6 p-0">
                                    <div class="p-3"
                                        style="background-color: #EEEEEE;
                                height: 120px;
                                border: 4px solid #FFFFFF;
                                border-radius: 30px;">
                                        <p class="m-0" style="font-size:14px">Produk Dilihat</p>
                                        <h3 class="fw-semibold">
                                            0
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 p-0">
                                    <div class="p-3"
                                        style="background-color: #EEEEEE;
                                height: 120px;
                                border: 4px solid #FFFFFF;
                                border-radius: 30px;">
                                        <p class="m-0" style="font-size:14px">Produk Terjual</p>
                                        <h3 class="fw-semibold">
                                            0
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-6 p-0">
                                    <div class="p-3"
                                        style="background-color: #EEEEEE;
                                height: 120px;
                                border: 4px solid #FFFFFF;
                                border-radius: 30px;">
                                        <p class="m-0" style="font-size:14px">Ulasan</p>
                                        <h3 class="fw-semibold">
                                            0
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="row">
                                <div class="date-range jce">
                                    <select class="form-select pb-0" style="border: none; width:45%" aria-label="">
                                        <option selected>IN THE LAST 30 DAYS</option>
                                        <option value="1">IN THE LAST 7 DAYS</option>
                                        <option value="2">IN THE LAST YEARS</option>
                                        <option value="3">ALL YEARS</option>
                                    </select>
                                </div>
                                <p class="text-secondary jce pt-2" style="font-size: 10px;padding-right: 30px">23 JANUARI
                                    - 21
                                    FEBRUARI</p>
                                <img src="/img/chart.png" alt="chart" style="pointer-events: none;">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
