@extends('layouts.main')
<link rel="stylesheet" href="/css/settings.css">
@section('content')
<link rel="stylesheet" href="/css/profile/profile.css">
    <div class="container-fluid">
            <div class="container">
                <div class="container" style="margin-top: 60px;border-radius: 10px;background: white;">
                    <nav class="navbar navbar-expand-lg navbar-light" id="menu">
                        <div class="container-fluid" style="border-bottom: 1px solid #49516F;">
                          <a class="navbar-brand aktif" href="/dashboard">Dashboard</a>
                          <a class="navbar-brand" href="/nabung">Nabung</a>
                          <a class="navbar-brand" href="/maripay">Pasangan</a>
                          <a class="navbar-brand" href="/daftarrekening">Transaksi</a>
                          <a class="navbar-brand" href="/keamanan">Tarik Saldo</a>
                        </div>
                    </nav>
                    <div class="container">
                        <div class="container" style="color: #49516F;">
                            <h1 style="font-weight: 900;">Statistik</h1>
                            <div class="d-flex justify-content-between">
                                <div style="background: #EEEEEE; padding: 20px;border-radius: 20px;border: 4px solid #FFFFFF;">
                                    <h6 style="font-weight: 700;">Saldo</h6>
                                    <h1 style="font-weight: 900">Rp 60.000.000</h1>
                                </div>
                                <div style="background: #EEEEEE; padding: 20px;border-radius: 20px;border: 4px solid #FFFFFF;">
                                    <h6 style="font-weight: 700;">Goals <i class='bx bx-pencil'></i></h6>
                                    <h1 style="font-weight: 900">Rp 100.000.000</h1>
                                </div>
                                <div style="background: #EEEEEE; padding: 20px;border-radius: 20px;border: 4px solid #FFFFFF;">
                                    <h6 style="font-weight: 700;">Selisih</h6>
                                    <h1 style="font-weight: 900">-40.000.000</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
@endsection