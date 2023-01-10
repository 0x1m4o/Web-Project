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
                            <a href="">
                                <p><i class="bi bi-bag"></i> Pesanan</p>
                            </a>
                            <a href="/vendor-admin/ulasan">
                                <p><i class="bi bi-reply"></i> Ulasan</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-info-circle"></i> Pesan Bantuan</p>
                            </a>

                            <a href="">
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
                    <h3 style="font-weight: bold; padding-top: 20px;">Manajemen Pesanan</h3>
                    <div class="container">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th style="font-size: 10px;">Produk</th>
                                <th style="font-size: 10px; width: 85px;">Jumlah Total</th>
                                <th style="font-size: 10px;">Alamat</th>
                                <th style="font-size: 10px;">Tindakan</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="padding-top: 15px">
                                    <div class="d-flex" style="margin-bottom: 10px;border-bottom: 1px solid #D8D9CF;">
                                        <img src="/img/profile.png" alt="" style="border-radius: 50%;" width="30" height="30">
                                      <a href="" style="padding-left: 5px;font-size: 10px; width: 100px;text-decoration: none; align-self: center;">Vanessa Oey</a>
                                      <i class='bx bxs-message-rounded-dots align-self-center' style="color: #0d6efd;"></i>
                                      <a style="padding-left: 5px;font-size: 10px; width: 80px;text-decoration: none; align-self: center; color: black; font-weight: bold;">(1 Produk)</a>
                                      <a href="" style="color: black; font-size: 10px; align-self: center; text-decoration: none; width: 100px;">Nomor Pesanan:  <span style="color: #0d6efd;">1032976643970636</span></a>
                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <div class="col-2">
                                            <img src="/img/produk1.png" alt="" width="50" height="50">
                                        </div>
                                        <div class="col">
                                            <p style="font-size: 10px; color: #4f5669; font-weight: bold; line-height: 0px; padding-left: 10px;">Tropical</p>
                                            <p style="font-size: 10px; width: 200px; padding-top: 0; padding-left: 10px;">Tampilan: Indoor</p>
                                            <p style="font-size: 10px; width: 200px; padding-top: 0; line-height: 0px;font-weight: bold; padding-left: 10px;">Rp. 71.051</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p style="color: #0d6efd; text-align: center;font-weight: bold;">x 1</p>
                                </td>
                                <td style="padding-top: 15px">
                                    <p style="font-size: 14px;" class="text-secondary">Jl. Gatot Subroto No.10 Rt 06/01, RT.6/RW.1 Kuningan Bar, Kec. Mampang Prpt, Kota Jakarta Utara Daerah Khusus Ibukota Jakarta 12710</p>
                                </td>
                                <td style="padding-top: 15px">
                                    <a href="" role="button" class="btn btn-primary">
                                        <i class='bx bxs-printer' ></i>
                                    </a>
                                </td>
                              </tr>
                              
                            </tbody>
                          </table>
                        
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
