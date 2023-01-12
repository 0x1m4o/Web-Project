@extends('layouts.no_footer')
@section('content')
<link rel="stylesheet" href="/css/profile/profile.css">
<div class="container-fluid mb-3">
    <div class="row">
        @include('partials.profilesidebar')
        <div class="col-9">
            <div class="container" style="margin-top: 60px;border-radius: 10px;background: white;">
                <nav class="navbar navbar-expand-lg navbar-light" id="menu">
                    <div class="container-fluid" style="border-bottom: 1px solid #49516F;">
                        <a class="navbar-brand aktif" href="/profile">Profile</a>
                        <a class="navbar-brand" href="/biodatadiri">Biodata Diri</a>
                        <a class="navbar-brand" href="/maripay">MariPay</a>
                        <a class="navbar-brand" href="/daftarrekening">Daftar Rekening</a>
                        <a class="navbar-brand" href="/keamanan-aktifitas">Keamanan</a>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="content col-sm-6">
                            <h3 style="font-weight: 900;color: #49516F;padding-bottom: 20px;">Profile</h3>
                            <img src="{{ auth()->user()->avatar }}" alt="profile" width="70px" height="70px" style="border-radius: 50%;float: left;margin-right: 15px; object-fit: cover;">
                            <h3 style="color: #49516F;font-weight: 600;">{{ auth()->user()->name }}</h3>
                            <h6 style="color: #49516F;font-weight:600;">@if (auth()->user()->phone)
                                {{ auth()->user()->phone }}
                            @else
                                -
                            @endif</h6>
                            <h6 style="color: #49516F;font-weight:600;">{{ auth()->user()->email }}</h6>
                        </div>
                        <div class="col-sm-6" style="position: relative;">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 style="font-weight: 900;color: #49516F;padding-bottom: 20px; padding-left: 50px;">Pasangan</h3>
                                </div>
                                <div class="col-sm-6" style="position: relative">
                                    <i class="bi bi-pencil-fill" style="position: absolute;  right: 0; top: 0; left: 120px; cursor: pointer;"></i>
                                </div>
                            </div>
                            <img src="/img/laki.png" alt="profile" style="border-radius: 50%;width: 70px;float: left;margin-right: 15px;margin-left: 50px;">
                            <h3 style="color: #49516F;font-weight: 600;margin-left: 50px;">Gerald Tan</h3>
                            <h6 style="color: #49516F;font-weight:600;margin-left: 50px;">082150506000</h6>
                            <h6 style="color: #49516F;font-weight:600;margin-left: 50px;">gerald.tan@gmail.com</h6>
                        </div>
                    </div>
                </div>
                <div class="content" style="padding-top: 100px;">
                    <div class="container saldo" style="width: 900px;">
                        <h3 style="font-weight: 900;color: #49516F;">Saldo & Points</h3>
                        <div class="row" style="text-align: center;background: white;box-shadow: 0px 19px 19px -4px rgba(0,0,0,0.1);border-radius: 20px;color: #49516F;">
                            <div class="col-sm-3" style="line-height: 5px;">
                                <img src="/img/logo_saldo.png" alt="logo saldo" style="margin-left: 30px; margin-bottom: 10px;">
                                {{-- <p style="margin-left: 30px;text-align: center;font-size: 16px; font-weight: 600;">Rp. 30.000.000</p>
                                <p style="margin-left: 30px;text-align: center;font-size: 16px; font-weight: 600;">Saldo Maripay</p> --}}
                                <p style="margin-left: 30px;font-size: 12px; font-weight: bold; color: #49516F;">Rp. 30.000.000</p>
                                <p style="margin-left: 30px;font-size: 12px; font-weight: bold; color: #49516F;">Saldo Maripay</p>
                            </div>
                            <div class="col-sm-2">
                                <img src="/img/line.png" alt="line">
                            </div>
                            <div class="col-sm-2" style="line-height: 5px;">
                                <img src="/img/logo_saldo.png" alt="logo saldo" style="margin-left: 30px; margin-bottom: 10px;">
                                <p style="margin-left: 30px;font-size: 12px; font-weight: bold; color: #49516F;">Rp. 5.000.000</p>
                                <p style="margin-left: 30px;font-size: 12px; font-weight: bold; color: #49516F;">Limit Saldo</p>
                            </div>
                            <div class="col-sm-2">
                                <img src="/img/line.png" alt="line">
                            </div>
                            <div class="col-sm-2" style="line-height: 5px;">
                                <img src="/img/logo_saldo.png" alt="logo saldo" style="margin-left: 30px; margin-bottom: 10px;">
                                <p style="margin-left: 30px;font-size: 12px; font-weight: bold; color: #49516F;">Rp. 70.000.000</p>
                                <p style="margin-left: 30px;font-size: 12px; font-weight: bold; color: #49516F;">Goals</p>
                            </div>
                            <div class="col-sm-1" style="cursor: pointer; color: black; position: relative;">
                                <i class="bi bi-pencil-fill" style="position: absolute; right: 0; top: 0; left: 30px; padding-top: 20px;"></i>
                            </div>
                        </div>
                        <a href="#" class="btn d-block container mt-4 mb-4" role="button" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%);box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 12px;font-weight: 900; color: white; font-size: 18px;width: 500px; text-align: center; border: none;">Simpan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection