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
                <div class="container mt-5 mb-5" style="border-radius: 20px; background-color: white;">
                    <h3 class="fw-bold" style="padding-top: 20px;">Tropical</h3>
                    <div class="container">
                        <a class="btn btn-success" role="button" href="/vendor-admin/produk">
                            <i class="bi bi-box-arrow-in-left"></i>
                            Kembali ke Produk Saya
                        </a>
                        <a class="btn btn-primary" role="button">
                            <i class="bi bi-pencil-square"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger" role="button">
                            <i class="bi bi-trash-fill"></i>
                            Hapus
                        </a>
                    </div>
                    <div class="container" style="color: #49516F;">
                        <img src="/img/carouselfotografi.png" alt="" style="border-radius: 20px;">
                        <div class="deskripsi-produk">
                            Khayra Photography merupakan suatu usaha yang bergerak di bidang dokumentasi dan dekorasi. Sudah lebih dari 5 thn kami berkarya di bidang dokumentasi. Dengan mewujudkan impian para klien kami menciptakan sebuah website untuk menyuguhkan hasil karya kami.
                        </div>
                        <div class="detail-produk">
                            <h4 style="font-weight: bold;">Detail</h4>
                            <p>1 fotographer & 1 Videographer</p>
                            <p>Durasi: <br></p>
                            <p>4 Jam Di Gedung / Hotel / Resto / Rumah <br></p>
                            <p>Hasil yang didapat <br></p>
                            <p>1 Pcs Album Koper & 1 Pcs Foto Uk. 40×60 + Frame
                            </p>
                            <p>Video Shooting Full Edit</p>
                            <p>Flashdisc 16 Gb – All File Foto & Video</p>
                            <p>foto Uk. 30×40 Plus Frame</p>
                            <p>Bonus : All Foto Edit With Color Balance</p>
    
                            <h4 style="font-weight: bold;padding-top: 20px;">Fasilitas</h4>
                            <div class="row">
                                <div class="col-3">
                                    <div class="my-2">
                                        <img src="/img/listrik.png" alt="">
                                        <p class="d-inline-block mx-1">Listrik: 2500 kilowatt</p>
        
                                    </div>
        
                                    <div class="my-2">
                                        <img src="/img/panggung.png" alt="">
                                        <p class="d-inline-block mx-1">panggung</p>
                                    </div>
        
                                    <div>
                                        <img src="/img/sound.png" alt="">
                                        <p class="d-inline-block mx-1">sound system</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="my-2">
                                        <img src="/img/projektor.png" alt="">
                                        <p class="d-inline-block mx-1">projektor</p>
                                    </div>
        
                                    <div class="my-2">
                                        <img src="/img/table.png" alt="">
                                        <p class="d-inline-block mx-1">round table</p>
                                    </div>
        
                                    <div>
                                        <img src="/img/vip.png" alt="">
                                        <p class="d-inline-block mx-1">VIP seats</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="my-2">
                                        <img src="/img/wifi.png" alt="">
                                        <p class="d-inline-block"> WIFI</p>
                                    </div>
                                </div>
                            </div>
                            <h5 class="fw-bolder" style="color: #49516F; padding-top: 20px;">Luas</h5>
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
    
                                        <p>total : 2500m2</p>
                                        <p>ruang ganti : 2500 m2</p>
    
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
