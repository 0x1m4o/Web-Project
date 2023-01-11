@extends('layouts.no_footer')
@section('styles')
<style>
    .tanggal_transaksi a {
        color: #49516F;
        background: white;
        border-radius: 12px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .waktu-nabung p {
        font-weight: bold;
        font-size: 12px;
    }

    .bayar-nabung h6 {
        color: #26A626;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="container" style="margin-top: 60px;border-radius: 10px;background: white; margin-bottom: 50px;">
            <nav class="navbar navbar-expand-lg navbar-light" id="menu">
                <div class="container-fluid" style="border-bottom: 1px solid #49516F;">
                    <a class="navbar-brand" href="/dashboard">Dashboard</a>
                    <a class="navbar-brand" href="/nabung">Nabung</a>
                    <a class="navbar-brand" href="/pasangan">Pasangan</a>
                    <a class="navbar-brand aktif" href="/transaksi">Transaksi</a>
                    <a class="navbar-brand" href="/tariksaldo">Tarik Saldo</a>
                </div>
            </nav>
            <div class="container" style="margin-top: 30px; width: 1036px;">
                <div class="tanggal_transaksi">
                    <a class="btn" style="margin-right: 40px;" role="button" href="#">Semua Tanggal <span class="bi bi-calendar3" style="color: #979797;"></span></a>
                    <a class="btn" role="button">Semua Transaksi</a>
                </div>
                <div class="transaksi_nabung d-flex justify-content-between" style="color: #49516F; margin-top: 45px;">
                    <div class="waktu-nabung">
                        <h6>Senin, 14 April 2022</h6>
                        <div class="waktu-nabung-img" style="margin-top: 15px;">
                            <img src="/img/dollar.png" alt="dollar" style="float: left;">
                            <h6>Nabung</h6>
                        </div>
                        <p style="margin-top: 15px; opacity: 0.7;">08:42 WIB</p>
                    </div>
                    <div class="bayar-nabung align-self-center">
                        <h6>Rp. 1.300.000</h6>
                    </div>
                </div>
                <hr>
                <div class="transaksi_nabung d-flex justify-content-between" style="color: #49516F; margin-top: 5px;">
                    <div class="waktu-nabung">
                        <h6>Senin, 14 April 2022</h6>
                        <div class="waktu-nabung-img" style="margin-top: 15px;">
                            <img src="/img/dollar.png" alt="dollar" style="float: left;">
                            <h6>Nabung</h6>
                        </div>
                        <p style="margin-top: 15px; opacity: 0.7;">08:42 WIB</p>
                    </div>
                    <div class="bayar-nabung align-self-center">
                        <h6>Rp. 1.300.000</h6>
                    </div>
                </div>
                <hr>
                <div class="transaksi_nabung d-flex justify-content-between" style="color: #49516F; margin-top: 5px;">
                    <div class="waktu-nabung">
                        <h6>Senin, 14 April 2022</h6>
                        <div class="waktu-nabung-img" style="margin-top: 15px;">
                            <img src="/img/dollar.png" alt="dollar" style="float: left;">
                            <h6>Nabung</h6>
                        </div>
                        <p style="margin-top: 15px; opacity: 0.7;">08:42 WIB</p>
                    </div>
                    <div class="bayar-nabung align-self-center">
                        <h6>Rp. 1.300.000</h6>
                    </div>
                </div>
                <hr>
                <div class="transaksi_nabung d-flex justify-content-between" style="color: #49516F; margin-top: 5px;">
                    <div class="waktu-nabung">
                        <h6>Senin, 14 April 2022</h6>
                        <div class="waktu-nabung-img" style="margin-top: 15px;">
                            <img src="/img/dollar.png" alt="dollar" style="float: left;">
                            <h6>Nabung</h6>
                        </div>
                        <p style="margin-top: 15px; opacity: 0.7;">08:42 WIB</p>
                    </div>
                    <div class="bayar-nabung align-self-center">
                        <h6>Rp. 1.300.000</h6>
                    </div>
                </div>
                <a href="#" role="button" class="btn selengkapnya" style="color: #237A57; display: flex;justify-content: center;margin-top:50px; ">Muat Lebih Banyak
                    <style>
                        .selengkapnya {
                            color: #237A57;
                            text-decoration: none #1E9264;


                        }

                        .selengkapnya:hover {
                            text-decoration: underline #1E9264;
                            transition: 0.4s ease-in-out;

                        }
                    </style>

                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>@endsection