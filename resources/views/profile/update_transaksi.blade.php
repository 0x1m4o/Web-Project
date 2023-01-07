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
                          <a class="nav-link" aria-current="page" href="/notifikasi-transaksi" style="margin-right: 60px;">Transaksi</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link aktif" href="/update-transaksi">Update</a>
                        </li>
                      </ul>
                </div>
            </nav>

            {{-- notifikasi transaksi --}}
            <div class="container" style="border-bottom: 1px solid #C4C4C4;">
                <div class="d-flex">
                    <i class="bi bi-heart" class="align-self-center" style="margin-right: 10px; font-size: 30px; padding-top: 10px;"></i>
                    <p style="margin-top: 15px; margin-right: 10px; font-size: 20px;">Nabung</p>
                    <img src="/img/vertikal.png" alt="Line" class="align-self-center" style="margin-right: 10px;">
                    <p style="margin-top: 15px; font-size: 20px;">17 Feb - 16.45 WIB</p>
                </div>
                <div style="color: #49516F;">
                    <h6 style="font-weight: bold;font-size: 24px;">Pasanganmu BERHASIL top up MariPay sebesar Rp. 5.000.000</h6>
                    <h6 style="font-weight: bold;font-size: 24px;">Total saldo MariPay kalian Rp.60.000.000. Kurang Rp.40.000.000 untuk mencapai goals</h6>
                </div>
            </div>

            <div class="container" style="border-bottom: 1px solid #C4C4C4;">
                <div class="d-flex">
                    <i class="bi bi-heart" class="align-self-center" style="margin-right: 10px; font-size: 30px; padding-top: 10px;"></i>
                    <p style="margin-top: 15px; margin-right: 10px; font-size: 20px;">Nabung</p>
                    <img src="/img/vertikal.png" alt="Line" class="align-self-center" style="margin-right: 10px;">
                    <p style="margin-top: 15px; font-size: 20px;">15 Feb - 10.45 WIB</p>
                </div>
                <div style="color: #49516F;">
                    <h6 style="font-weight: bold;font-size: 24px;">Pasanganmu BERHASIL top up MariPay sebesar Rp. 3.000.000</h6>
                    <h6 style="font-weight: bold;font-size: 24px;">Total saldo MariPay kalian Rp.55.000.000. Kurang Rp.45.000.000 untuk mencapai goals</h6>
                </div>
            </div>

            <div class="container" style="border-bottom: 1px solid #C4C4C4;">
                <div class="d-flex">
                    <i class="bx bx-left-arrow-alt" class="align-self-center" style="margin-right: 10px; font-size: 30px; padding-top: 15px;"></i>
                    <p style="margin-top: 15px; margin-right: 10px; font-size: 20px;">Tarik Saldo</p>
                    <img src="/img/vertikal.png" alt="Line" class="align-self-center" style="margin-right: 10px;">
                    <p style="margin-top: 15px; font-size: 20px;">10 Feb - 16.45 WIB</p>
                </div>
                <div style="color: #49516F;">
                    <h6 style="font-weight: bold;font-size: 24px;">Pasanganmu BERHASIL tarik saldo MariPay sebesar Rp. 2.000.000</h6>
                    <h6 style="font-weight: bold;font-size: 24px;">Total saldo MariPay kalian Rp.52.000.000. Kurang Rp.48.000.000 untuk mencapai goals</h6>
                </div>
            </div>

            <div class="container" style="border-bottom: 1px solid #C4C4C4;">
                <div class="d-flex">
                    <i class="bi bi-heart" class="align-self-center" style="margin-right: 10px; font-size: 30px; padding-top: 10px;"></i>
                    <p style="margin-top: 15px; margin-right: 10px; font-size: 20px;">Nabung</p>
                    <img src="/img/vertikal.png" alt="Line" class="align-self-center" style="margin-right: 10px;">
                    <p style="margin-top: 15px; font-size: 20px;">15 Feb - 10.45 WIB</p>
                </div>
                <div style="color: #49516F;">
                    <h6 style="font-weight: bold;font-size: 24px;">Pasanganmu BERHASIL top up MariPay sebesar Rp. 3.000.000</h6>
                    <h6 style="font-weight: bold;font-size: 24px;">Total saldo MariPay kalian Rp.55.000.000. Kurang Rp.45.000.000 untuk mencapai goals</h6>
                </div>
            </div>

            <div class="container" style="border-bottom: 1px solid #C4C4C4;">
                <div class="d-flex">
                    <i class="bi bi-heart" class="align-self-center" style="margin-right: 10px; font-size: 30px; padding-top: 10px;"></i>
                    <p style="margin-top: 15px; margin-right: 10px; font-size: 20px;">Nabung</p>
                    <img src="/img/vertikal.png" alt="Line" class="align-self-center" style="margin-right: 10px;">
                    <p style="margin-top: 15px; font-size: 20px;">15 Feb - 10.45 WIB</p>
                </div>
                <div style="color: #49516F;">
                    <h6 style="font-weight: bold;font-size: 24px;">Pasanganmu BERHASIL top up MariPay sebesar Rp. 3.000.000</h6>
                    <h6 style="font-weight: bold;font-size: 24px;">Total saldo MariPay kalian Rp.55.000.000. Kurang Rp.45.000.000 untuk mencapai goals</h6>
                </div>
            </div>
            <p style="color: #237A57; font-size: 18px; text-align: center; margin: 30px 0px 38px 0px;">Lihat Berikutnya</p>
        </div>
    </div>
@endsection