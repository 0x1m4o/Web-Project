@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="content d-flex">
            <a href="/profile" style="color: black;">
                <i class='bx bx-chevron-left' style="padding-top: 25px;font-size: 30px;"></i>
            </a>
            <div style="border-bottom: 1px solid #C4C4C4; width: 1200px;">
                <h5 style="padding-top: 20px;font-weight: bold;font-size: 32px; color: #49516F; margin-bottom: 40px;">Notifikasi</h5>
            </div>
        </div>
        <div class="container" style="margin-left: 40px; background-color: white;border-radius: 20px; margin-bottom: 42px; ">
            {{-- navbar notifikasi --}}
            <nav class="navbar navbar-expand-lg navbar-light" id="menu">
                <div class="container-fluid" style="border-bottom: 1px solid #C4C4C4;font-size: 24px;">
                    {{-- <a class="navbar-brand aktif" href="/notifikasi-transaksi">Transaksi</a>
                    <a class="navbar-brand" href="/update-transaksi">Update</a> --}}
                    <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link aktif" aria-current="page" href="/notifikasi-transaksi" style="margin-right: 60px;">Transaksi</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/update-transaksi">Update</a>
                        </li>
                      </ul>
                </div>
            </nav>

            {{-- notifikasi transaksi --}}
            <div class="container" style="border-bottom: 1px solid #C4C4C4;">
                <div class="d-flex">
                    <img src="/img/wallet.png" alt="Wallet" class="align-self-center" style="margin-right: 10px;">
                    <p style="margin-top: 15px; margin-right: 10px; font-size: 20px;">Booking</p>
                    <img src="/img/vertikal.png" alt="Line" class="align-self-center" style="margin-right: 10px;">
                    <p style="margin-top: 15px; font-size: 20px;">17 Feb - 16.45 WIB</p>
                </div>
                <div style="color: #FF0000;">
                    <h6 style="font-weight: bold;font-size: 24px;">Pembayaran gagal dilakukan</h6>
                    <h6 style="font-weight: bold;font-size: 24px;">Pembayaran senilai Rp. 1.000.000 gagal  dilakukan karena melebihi batas waktu</h6>
                </div>
            </div>

            <div class="container" style="border-bottom: 1px solid #C4C4C4;">
                <div class="d-flex">
                    <img src="/img/wallet.png" alt="Wallet" class="align-self-center" style="margin-right: 10px;">
                    <p style="margin-top: 15px; margin-right: 10px; font-size: 20px;">Nabung</p>
                    <img src="/img/vertikal.png" alt="Line" class="align-self-center" style="margin-right: 10px;">
                    <p style="margin-top: 15px; font-size: 20px;">20 Jan - 10.11 WIB</p>
                </div>
                <div style="color: #49516F;">
                    <h6 style="font-weight: bold;font-size: 24px;">Yay, top up MariPay BERHASIL!</h6>
                    <h6 style="font-weight: bold;font-size: 24px;">Top up saldo MariPay BERHASIL Rp. 15.000.000. Total saldo Rp. 34.000.000</h6>
                </div>
            </div>

            <div class="container" style="border-bottom: 1px solid #C4C4C4;">
                <div class="d-flex">
                    <img src="/img/wallet.png" alt="Wallet" class="align-self-center" style="margin-right: 10px;">
                    <p style="margin-top: 15px; margin-right: 10px; font-size: 20px;">Booking</p>
                    <img src="/img/vertikal.png" alt="Line" class="align-self-center" style="margin-right: 10px;">
                    <p style="margin-top: 15px; font-size: 20px;">1 Jan - 08.35 WIB</p>
                </div>
                <div style="color: #49516F;">
                    <h6 style="font-weight: bold;font-size: 24px;">Yay, booking vendor The Aesthetic BERHASIL!</h6>
                    <h6 style="font-weight: bold;font-size: 24px;">Booking vendor BERHASIL Rp. -10.000.000. Total saldo Rp. 19.000.000</h6>
                </div>
            </div>

            <div class="container" style="border-bottom: 1px solid #C4C4C4;">
                <div class="d-flex">
                    <img src="/img/wallet.png" alt="Wallet" class="align-self-center" style="margin-right: 10px;">
                    <p style="margin-top: 15px; margin-right: 10px; font-size: 20px;">MariPoints</p>
                    <img src="/img/vertikal.png" alt="Line" class="align-self-center" style="margin-right: 10px;">
                    <p style="margin-top: 15px; font-size: 20px;">1 Jan - 08.35 WIB</p>
                </div>
                <div style="color: #49516F;">
                    <h6 style="font-weight: bold;font-size: 24px;">Yay, kamu dapat 5.600 Points</h6>
                    <h6 style="font-weight: bold;font-size: 24px;">Booking vendor BERHASIL Rp. -10.000.000. Total saldo Rp. 19.000.000</h6>
                </div>
            </div>

            <div class="container" style="border-bottom: 1px solid #C4C4C4;">
                <div class="d-flex">
                    <img src="/img/wallet.png" alt="Wallet" class="align-self-center" style="margin-right: 10px;">
                    <p style="margin-top: 15px; margin-right: 10px; font-size: 20px;">Maripoints</p>
                    <img src="/img/vertikal.png" alt="Line" class="align-self-center" style="margin-right: 10px;">
                    <p style="margin-top: 15px; font-size: 20px;">30 Des - 10.11 WIB</p>
                </div>
                <div style="color: #49516F;">
                    <h6 style="font-weight: bold;font-size: 24px;">Yay, kamu dapat 5.600 Points</h6>
                    <h6 style="font-weight: bold;font-size: 24px;">MariPoints senilai Rp.5600 bisa dipakai untuk potongan transaksimu selanjutnya.</h6>
                </div>
            </div>
            <p style="color: #237A57; font-size: 18px; text-align: center; margin: 30px 0px 38px 0px;">Lihat Berikutnya</p>
        </div>
    </div>
@endsection