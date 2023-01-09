@extends('layouts.main')

@section('content')
    <div class="container keranjang-container p-3 mt-5 bg-white"
        style="width: 100%;border-radius:12px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
        <div class="keranjang-title jcs">
            <a href="#" class="text-secondary mt-2 p-2 fs-5 jcs">
                <iconify-icon icon="material-symbols:arrow-back-ios-new-rounded"></iconify-icon>
            </a>
            <h3 class="fw-semibold title-label p-0 m-0 mt-2 ">Konfirmasi Pesanan</h3>
        </div>
        <hr class="my-0">
        <div class="keranjang-body px-5">
            {{-- Judul Pesanan --}}
            <div class="row">
                <div class="d-flex">
                    <h5 class="fw-semibold d-flex align-items-end title-label">The Aesthetic</h5>
                    <button class="btn btn-success jcc keranjang-button me-3 mb-3">Venue</button>
                </div>
                <h6 class="title-label fw-semibold d-inline-block">Kota Jakarta</h6>
            </div>
            {{-- Konten Pesanan --}}
            <div class="keranjang-konten d-flex justify-content-between mt-2">
                <div class="row ">
                    <div class="col-6">
                        <div class="konten-detail d-flex align-items-center">
                            <img class="me-3" src="/img/The-Aesthetic.png" alt="">
                            <div class="row">
                                <h5 class="konten-title fw-semibold title-label">The Aesthetic</h5>
                                <h6 class="konten-price fw-semibold title-label">Rp. 100.000.000</h6>
                                <h6 class="konten-catatan text-success">Tulis Catatan</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="konten-crud d-flex align-items-center">
                            <div class="row">
                                <h6 class="text-center konten-time title-label"><span class="preorder p-1">Pre-Order 30
                                        hari</span></h6>
                                <div class="crud">
                                    <div class="count jcs text-secondary">
                                        <h5 class="fw-semibold m-0 p-2 pe-3 border-end">Pindahkan Ke Wishlist</h5>
                                        <a href="#" class="text-secondary mx-2 me-5 jcc" style="font-size: 22px">
                                            <iconify-icon icon="mdi:rubbish"></iconify-icon>
                                        </a>
                                        <div class="listnumber jcs border-bottom">
                                            <button class="btn btn-light jcc px-2 me-2 rounded-circle">
                                                <iconify-icon icon="ic:baseline-minus"></iconify-icon>
                                            </button>
                                            <h6 class="px-3 m-0">1</h6>
                                            <button class="btn btn-light jcc px-2 ms-2 rounded-circle">
                                                <iconify-icon icon="ic:outline-plus"></iconify-icon>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Pengiriman --}}
            <h5 class="fw-semibold title-label mt-3">Pengiriman</h5>
            {{-- Waktu --}}
            <div class="waktu">
                <div class="d-flex justify-content-start align-items-center">
                    <button class="btn btn-success jcc keranjang-button me-3">Waktu</button>
                    <h6 class="title-label fw-semibold m-0">30 September 2021, 9:00 WIB </h6>
                </div>
            </div>
            {{-- Alamat --}}
            <div class="d-flex justify-content-start align-items-start mt-3">
                <button class="btn btn-success jcc keranjang-button me-3">Alamat</button>
                <h6 class="title-label fw-semibold m-0">
                    The Aesthetic
                    <br>
                    Jl. Gatot Subroto No.10 Rt 06/01, RT.6/RW.1 Kuningan Bar, Kec. Mampang Prpt,
                    <br>
                    Kota Jakarta Utara Daerah Khusus Ibukota Jakarta 12710
                </h6>
            </div>

            {{-- Pembayaran --}}
            <div class="row">
                <h5 class="fw-semibold title-label mt-3">Pengiriman</h5>
                {{-- Bank --}}
                <div class="bank d-flex justify-content-start align-items-center">
                    <img src="/img/bca.png" alt="" style="width: 107px; height: 45px;">
                    <h6 class="fw-semibold title-label m-0 ms-3">BCA Virtual Account</h6>
                </div>


            </div>
            <select class="form-select" style="border: none; width: 300px;">
                <option selected>Pilih metode pembayaran</option>
                <option>BCA</option>
                <option>Mandiri</option>
                <option>Gopay</option>
            </select>


        </div>
    </div>
    <div class="container p-4 w-50 bg-white ringkasan mt-3 mb-5 m-auto"
        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;
        height: 333px;">
        <div class="d-flex justify-content-between align-items-center mt-5">
            <h5 class="fw-semibold title-label">Harga</h5>
            <h6 class="fw-light" style="color: #237A57;">100.000.000</h6>
        </div>
        <div class="d-flex justify-content-between align-items-center pt-0">
            <h5 class="fw-semibold title-label">Total Tagihan</h5>
            <h6 class="fw-semibold" style="color: #237A57;">100.000.000</h6>
        </div>
        <div class="btn-konfirmasi mt-4 jcc">
            <a class="btn btn-md text-white" href="#" role="button"
                style="background: linear-gradient(to right,rgba(9, 48, 40, 1),rgba(35, 122, 87, 1));">Bayar Sekarang</a>
        </div>
    </div>
@endsection
