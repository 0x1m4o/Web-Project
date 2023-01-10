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
                    <h3 style="font-weight: bold; padding-top: 20px;">Manajemen Produk</h3>
                    <div class="container">
                        <a href="/vendor-admin/produk/create" role="button" class="btn btn-primary mb-3">Buat Produk</a>
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Gambar Produk</th>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Tindakan</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="padding-top: 15px">1</td>
                                <td><img src="/img/produk1.png" alt="produk" width="50" height="50"></td>
                                <td style="padding-top: 15px"><a href="" style="text-decoration: none; color: black;">Tropical</a></td>
                                <td style="padding-top: 15px"><a href="" style="text-decoration: none; color: black;">MUA</a></td>
                                <td>
                                    <a class="btn btn-primary" role="button">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a class="btn btn-success" role="button" href="/vendor-admin/produk/tropical">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a class="btn btn-danger" role="button">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                              </tr>
                              <tr>
                                <td style="padding-top: 15px">2</td>
                                <td><img src="/img/produk2.png" alt="produk" width="50" height="50"></td>
                                <td style="padding-top: 15px"><a href="" style="text-decoration: none; color: black;">Tropical</a></td>
                                <td style="padding-top: 15px"><a href="" style="text-decoration: none; color: black;">BUSANA</a></td>
                                <td>
                                    <a class="btn btn-primary" role="button">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a class="btn btn-success" role="button" href="/vendor-admin/produk/tropical">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a class="btn btn-danger" role="button">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                              </tr>
                              <tr>
                                <td style="padding-top: 15px">3</td>
                                <td><img src="/img/produk3.png" alt="produk" width="50" height="50"></td>
                                <td style="padding-top: 15px"><a href="" style="text-decoration: none; color: black;">Tropical</a></td>
                                <td style="padding-top: 15px"><a href="" style="text-decoration: none; color: black;">VENUE</a></td>
                                <td>
                                    <a class="btn btn-primary" role="button">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a class="btn btn-success" role="button" href="/vendor-admin/produk/tropical">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a class="btn btn-danger" role="button">
                                        <i class="bi bi-trash-fill"></i>
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
