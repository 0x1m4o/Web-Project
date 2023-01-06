@extends('layouts.no_footer')

@section('styles')
    <style>
        .download a {
            color: #237A57;
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 10px;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
            <div class="container">
                <div class="container" style="margin-top: 60px;border-radius: 10px;background: white; margin-bottom: 30px;">
                    <nav class="navbar navbar-expand-lg navbar-light" id="menu">
                        <div class="container-fluid" style="border-bottom: 1px solid #49516F;">
                          <a class="navbar-brand" href="/dashboard">Dashboard</a>
                          <a class="navbar-brand" href="/nabung">Nabung</a>
                          <a class="navbar-brand aktif" href="/pasangan">Pasangan</a>
                          <a class="navbar-brand" href="/transaksi">Transaksi</a>
                          <a class="navbar-brand" href="/tariksaldo">Tarik Saldo</a>
                        </div>
                    </nav>
                    <div class="container d-flex justify-content-between" style="margin-top: 50px;">
                        <div class="download">
                            <a class="btn" role="button">Download</a>
                        </div>
                        <div class="maripay-chart-img">
                            <img src="/img/maripay_chart.png" alt="Maripay Chart" style="pointer-events: none;">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
@endsection