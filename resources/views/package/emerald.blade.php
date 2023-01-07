@extends('layouts.main')

@section('content')
    <div class="container p-3 mt-5 bg-white b-shdw mb-5" style="width: 100%;border-radius:12px;">
        <div class="jcs">
            <a href="/paket" class="text-secondary mt-2 p-2 fs-5 jcs">
                <iconify-icon icon="material-symbols:arrow-back-ios-new-rounded"></iconify-icon>
            </a>
            <h3 class="fw-semibold package-label p-0 m-0 mt-2">Emerald Package
            </h3>
            <a href="#" class="text-secondary rounded-circle p-1 ms-1 mb-3 question" style="background: #C4C4C4;">
                <iconify-icon class="d-flex align-items-center" icon="material-symbols:question-mark-rounded">
                </iconify-icon>
            </a>
            <div class="budget box-shadow px-3 ms-2">
                <h6 class="m-0">
                    Range Budget <br>
                    > 150 Jt </h6>
            </div>
        </div>
        <div class="wrapper-package px-5 my-4">
            <div class="package-kategori d-flex justify-content-between align-items-center px-3 ">
                <img src="/img/package/package-1.png" alt="">
                <img src="/img/package/package-2.png" alt="">
                <img src="/img/package/package-3.png" alt="">
                <img src="/img/package/package-4.png" alt="">
                <img src="/img/package/package-5.png" alt="">
                <img src="/img/package/package-6.png" alt="">
                <img src="/img/package/package-7.png" alt="">
                <img src="/img/package/package-8.png" alt="">
                <img src="/img/package/package-9.png" alt="">
                <img src="/img/package/package-10.png" alt="">
                <img src="/img/package/package-11.png" alt="">
            </div>
        </div>

        <div class="package-body px-5 my-3">
            <h3 class="title-label fw-semibold">Pilih Venue</h3>
            <div class="fasil-content jcs">
                <img class="img-fasil p-0" src="/img/package/the-aesthetic.png" alt="">
                <div class="row p-3 w-100">
                    <div class="col-5 pb-0 ">
                        <button class="btn btn-light jcs box-shadow fw-bold mt-2"
                            style="color: #CE2525;width: 167px;
                        height: 40px;
                        ">
                            <span class="mx-2 jcc">
                                <iconify-icon icon="ic:baseline-minus"></iconify-icon>
                            </span>
                            Hapus
                        </button>

                        <div class="p-3 mt-3 box-shadow">
                            <div class="venue-title d-flex">
                                <h5 class="title-label fw-semibold m-0 my-1 ">The Aesthetic</h5>
                                <img src="/img/package/check.svg" alt="">
                                <h6 class="jcc m-0 ms-1 px-2 py-1 location mb-2">Outdoor</h6>
                            </div>
                            <div class="row mt-3 mb-1">
                                <div class="col-4 ">
                                    <h6 class="title-label fw-normal ">Harga</h6>
                                </div>
                                <div class="col-8 jce">
                                    <h6 class="title-label fw-semibold">Rp 20,000,000</h6>
                                </div>
                            </div>
                            <hr class="m-0 p-0">
                            <div class="row mt-2">
                                <div class="col-7">
                                    <h6 class="title-label fw-normal">Jumlah Tamu</h6>
                                </div>
                                <div class="col-4 jcc">
                                    <h6 class="title-label fw-semibold">100</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 box-shadow">
                        <div class="row">
                            <div class="col-6 border-end">
                                <h6 class="title-label text-center">Fasilitas</h6>
                                <div class="fasilitas-detail">
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/listrik.svg" alt="">
                                        <h6 class="title-label m-0">Listrik: xxx kilowatt</h6>
                                    </div>
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/mic.svg" alt="">
                                        <h6 class="title-label m-0">Sound System</h6>
                                    </div>
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/proyektor.svg" alt="">
                                        <h6 class="title-label m-0">Projektor</h6>
                                    </div>
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/wifi.svg" alt="">
                                        <h6 class="title-label m-0">WIFI</h6>
                                    </div>
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/r-ganti.svg" alt="">
                                        <h6 class="title-label m-0">Ruang Ganti</h6>
                                    </div>
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/r-table.svg" alt="">
                                        <h6 class="title-label m-0">Round Table</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h6 class="title-label m-0 jcc">Luas</h6>
                                <div class="fasil-total d-flex justify-content-between px-2 mt-3">
                                    <h6 class="title-label m-0">Total :</h6>
                                    <h6 class="title-label m-0">2500 m<sup>2</sup></h6>
                                </div>
                                <div class="fasil-total d-flex justify-content-between px-2 mt-3">
                                    <h6 class="title-label m-0">Ruang Ganti :</h6>
                                    <h6 class="title-label m-0">1000 m<sup>2</sup></h6>
                                </div>
                                <a href="/the-aesthetic" class="text-decoration-none ">
                                    <h6 class="title-label text-center text-success" style="margin-top: 65px">Lihat
                                        Selengkapnya</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="fasil-content jcs">
                <img class="img-fasil p-0 " src="/img/package/the-aesthetic.png" alt="">
                <div class="row p-3 w-100">
                    <div class="col-5 pb-0 ">
                        <button class="btn btn-light jcs box-shadow fw-bold mt-2"
                            style="color: #237A57;width: 167px;
                        height: 40px;
                        ">
                            <span class="mx-2 jcc">
                                <iconify-icon icon="ic:baseline-plus"></iconify-icon>
                            </span>
                            Tambahkan
                        </button>

                        <div class="p-3 mt-3 box-shadow">
                            <div class="venue-title d-flex">
                                <h5 class="title-label fw-semibold m-0 my-1 ">The Aesthetic</h5>
                                <img src="/img/package/check.svg" alt="">
                                <h6 class="jcc m-0 ms-1 px-2 py-1 location mb-2">Outdoor</h6>
                            </div>
                            <div class="row mt-3 mb-1">
                                <div class="col-4 ">
                                    <h6 class="title-label fw-normal ">Harga</h6>
                                </div>
                                <div class="col-8 jce">
                                    <h6 class="title-label fw-semibold">Rp 20,000,000</h6>
                                </div>
                            </div>
                            <hr class="m-0 p-0">
                            <div class="row mt-2">
                                <div class="col-7">
                                    <h6 class="title-label fw-normal">Jumlah Tamu</h6>
                                </div>
                                <div class="col-4 jcc">
                                    <h6 class="title-label fw-semibold">100</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 box-shadow">
                        <div class="row">
                            <div class="col-6 border-end">
                                <h6 class="title-label text-center">Fasilitas</h6>
                                <div class="fasilitas-detail">
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/listrik.svg" alt="">
                                        <h6 class="title-label m-0">Listrik: xxx kilowatt</h6>
                                    </div>
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/mic.svg" alt="">
                                        <h6 class="title-label m-0">Sound System</h6>
                                    </div>
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/proyektor.svg" alt="">
                                        <h6 class="title-label m-0">Projektor</h6>
                                    </div>
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/wifi.svg" alt="">
                                        <h6 class="title-label m-0">WIFI</h6>
                                    </div>
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/r-ganti.svg" alt="">
                                        <h6 class="title-label m-0">Ruang Ganti</h6>
                                    </div>
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/r-table.svg" alt="">
                                        <h6 class="title-label m-0">Round Table</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h6 class="title-label m-0 jcc">Luas</h6>
                                <div class="fasil-total d-flex justify-content-between px-2 mt-3">
                                    <h6 class="title-label m-0">Total :</h6>
                                    <h6 class="title-label m-0">2500 m<sup>2</sup></h6>
                                </div>
                                <div class="fasil-total d-flex justify-content-between px-2 mt-3">
                                    <h6 class="title-label m-0">Ruang Ganti :</h6>
                                    <h6 class="title-label m-0">1000 m<sup>2</sup></h6>
                                </div>
                                <a href="/the-aesthetic" class="text-decoration-none ">
                                    <h6 class="title-label text-center text-success" style="margin-top: 65px">Lihat
                                        Selengkapnya</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="fasil-content jcs">
                <img class="img-fasil p-0 " src="/img/package/the-aesthetic.png" alt="">
                <div class="row p-3 w-100">
                    <div class="col-5 pb-0 ">
                        <button class="btn btn-light jcs box-shadow fw-bold mt-2"
                            style="color: #237A57;width: 167px;
                        height: 40px;
                        ">
                            <span class="mx-2 jcc">
                                <iconify-icon icon="ic:baseline-plus"></iconify-icon>
                            </span>
                            Tambahkan
                        </button>

                        <div class="p-3 mt-3 box-shadow">
                            <div class="venue-title d-flex">
                                <h5 class="title-label fw-semibold m-0 my-1 ">The Aesthetic</h5>
                                <img src="/img/package/check.svg" alt="">
                                <h6 class="jcc m-0 ms-1 px-2 py-1 location mb-2">Outdoor</h6>
                            </div>
                            <div class="row mt-3 mb-1">
                                <div class="col-4 ">
                                    <h6 class="title-label fw-normal ">Harga</h6>
                                </div>
                                <div class="col-8 jce">
                                    <h6 class="title-label fw-semibold">Rp 20,000,000</h6>
                                </div>
                            </div>
                            <hr class="m-0 p-0">
                            <div class="row mt-2">
                                <div class="col-7">
                                    <h6 class="title-label fw-normal">Jumlah Tamu</h6>
                                </div>
                                <div class="col-4 jcc">
                                    <h6 class="title-label fw-semibold">100</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 box-shadow">
                        <div class="row">
                            <div class="col-6 border-end">
                                <h6 class="title-label text-center">Fasilitas</h6>
                                <div class="fasilitas-detail">
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/listrik.svg" alt="">
                                        <h6 class="title-label m-0">Listrik: xxx kilowatt</h6>
                                    </div>
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/mic.svg" alt="">
                                        <h6 class="title-label m-0">Sound System</h6>
                                    </div>
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/proyektor.svg" alt="">
                                        <h6 class="title-label m-0">Projektor</h6>
                                    </div>
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/wifi.svg" alt="">
                                        <h6 class="title-label m-0">WIFI</h6>
                                    </div>
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/r-ganti.svg" alt="">
                                        <h6 class="title-label m-0">Ruang Ganti</h6>
                                    </div>
                                    <div class="jcs">
                                        <img class="p-1" src="/img/package/r-table.svg" alt="">
                                        <h6 class="title-label m-0">Round Table</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h6 class="title-label m-0 jcc">Luas</h6>
                                <div class="fasil-total d-flex justify-content-between px-2 mt-3">
                                    <h6 class="title-label m-0">Total :</h6>
                                    <h6 class="title-label m-0">2500 m<sup>2</sup></h6>
                                </div>
                                <div class="fasil-total d-flex justify-content-between px-2 mt-3">
                                    <h6 class="title-label m-0">Ruang Ganti :</h6>
                                    <h6 class="title-label m-0">1000 m<sup>2</sup></h6>
                                </div>
                                <a href="/the-aesthetic" class="text-decoration-none ">
                                    <h6 class="title-label text-center text-success" style="margin-top: 65px">Lihat
                                        Selengkapnya</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
