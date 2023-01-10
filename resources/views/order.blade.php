@extends('layouts.main')

@section('content')
<div class="container keranjang-container p-3 mt-5 bg-white mb-5" style="width: 100%;border-radius: 20px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); overflow: hidden;">
    <div class="keranjang-title jcs">
        <a href="#" class="text-secondary p-2 fs-5 jcs">
            <iconify-icon icon="material-symbols:arrow-back-ios new-rounded"></iconify-icon>
        </a>
        <div class="content d-flex">
            <a href="/keranjang" style="color: black;">
                <i class='bx bx-chevron-left' style="padding-top: 25px;font-size: 30px;"></i>
            </a>
            <div style="width: 1200px;">
                <a href="" class="text-decoration-none">
                    <h5 style="padding-top: 20px;font-weight: bold;font-size: 32px; color: #49516F;">Konfirmasi Pesanan
                    </h5>
                </a>
            </div>
        </div>
    </div>
    <hr class="my-0">
    <div class="row px-5">
        <div class="d-flex">
            <label class="form-check-label title-label fw-semibold d-flex align-items-end mt-2" for="check-TheAesthetic">The Aesthetic</label>
            <p class="text-center keranjang-kategori p-1 px-2 mb-2 d-flex align-items-center mb-3">Venue</p>
        </div>
        <h6 class="title-label fw-semibold d-inline-block mb-5">Kota Jakarta</h6>
    </div>
    <div class="keranjang-body px-5">
        {{-- Judul Pesanan --}}
        <div class="row">
            <div class="col-6">
                <div class="konten-detail d-flex align-items-center">
                    <img class="me-4" src="/img/The-Aesthetic.png" alt="">
                    <div class="row konten-row">
                        <h5 class="konten-title fw-semibold title-label">The Aesthetic</h5>
                        <h6 class="konten-price fw-semibold title-label">Rp. 100.000.000</h6>
                        <a href="/" class="text-decoration-none">
                            <h6 class="konten-catatan mt-3">Tulis Catatan</h6>
                        </a>
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
    <h5 class="fw-semibold title-label px-5" style="margin-top: 80px;font-size: 24px;">Pengiriman</h5>
    {{-- Waktu --}}
    <div class="waktu px-5" style="margin-top: 50px;">
        <div class="d-flex justify-content-start align-items-center">
            <button class="btn btn-success jcc keranjang-button me-3 fw-bold">Waktu</button>
            <h6 class="title-label fw-bold m-0">30 September 2021, 9:00 WIB </h6>
        </div>
    </div>
    {{-- Alamat --}}
    <div class="d-flex justify-content-start align-items-start px-5">
        <button class="btn btn-success jcc keranjang-button me-3 fw-bold" style="margin-top: 30px;">Alamat</button>
        <h6 class="title-label fw-semibold m-0" style="padding-top: 30px;">
            The Aesthetic
            <br><br>
            Jl. Gatot Subroto No.10 Rt 06/01, RT.6/RW.1 Kuningan Bar, Kec. Mampang Prpt,
            <br><br>
            Kota Jakarta Utara Daerah Khusus Ibukota Jakarta 12710
        </h6>
    </div>

    {{-- Pembayaran --}}
    <div class="row px-5">
        <h5 class="fw-semibold title-label" style="margin: 70px 0px 47px 0px;font-size: 24px;">Pembayaran</h5>
        {{-- Bank --}}
        <div class="bank d-flex justify-content-start align-items-center" style="margin-bottom: 40px;">
            <img src="/img/bca.png" alt="" style="width: 107px; height: 45px; pointer-events: none; margin: 0px 30px 0px 10px;">
            <h6 class="fw-semibold title-label m-0 ms-3">BCA Virtual Account</h6>
        </div>


    </div>
    <select class="form-select mx-5 mb-5" style="border: none; width: 300px;">
        <option selected>Ubah metode pembayaran</option>
        <option>BCA</option>
        <option>Mandiri</option>
        <option>Gopay</option>
    </select>
</div>


</div>
</div>
<div class="container p-4 w-50 bg-white ringkasan mt-3 mb-5 m-auto" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;
        height: 300px;">
    <div class="d-flex justify-content-between align-items-center mt-5">
        <h5 class="fw-semibold title-label" style="font-size: 24px;">Harga</h5>
        <h6 class="fw-light" style="color: #237A57;font-size: 18px;">100.000.000</h6>
    </div>
    <div class="d-flex justify-content-between align-items-center pt-0">
        <h5 class="fw-semibold title-label" style="font-size: 24px;">Total Tagihan</h5>
        <h6 class="fw-semibold" style="color: #237A57;font-size: 20px;">100.000.000</h6>
    </div>
    <div class="btn-konfirmasi mt-4 jcc">
        <a class="btn btn-md text-white" href="/checkout" role="button" style="background: linear-gradient(to right,rgba(9, 48, 40, 1),rgba(35, 122, 87, 1)); border: none; font-weight: bold;">Bayar
            Sekarang</a>
    </div>
</div>
{{-- . --}}
@endsection