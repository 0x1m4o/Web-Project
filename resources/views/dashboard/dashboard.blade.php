@extends('layouts.no_footer')
@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="container" style="margin-top: 60px;border-radius: 10px;background: white; margin-bottom: 50px;">
            <nav class="navbar navbar-expand-lg navbar-light" id="menu">
                <div class="container-fluid" style="border-bottom: 1px solid #49516F;">
                    <a class="navbar-brand aktif" href="/dashboard">Dashboard</a>
                    <a class="navbar-brand" href="/nabung">Nabung</a>
                    <a class="navbar-brand" href="/pasangan">Pasangan</a>
                    <a class="navbar-brand" href="/transaksi">Transaksi</a>
                    <a class="navbar-brand" href="/tariksaldo">Tarik Saldo</a>
                </div>
            </nav>
            <div class="container">
                <div class="container" style="color: #49516F;">
                    <h1 style="font-weight: 900; color:#333">Statistik</h1>
                    <div class="d-flex justify-content-between">
                        <div style="background: #EEEEEE; padding: 20px;border-radius: 20px;border: 4px solid #FFFFFF;">
                            <h6 style="font-weight: 700; color:#333"">Saldo</h6>
                                <h1 style=" font-weight: 900; color:#333">Rp 60.000.000</h1>
                        </div>
                        <div style="background: #EEEEEE; padding: 20px;border-radius: 20px;border: 4px solid #FFFFFF;">
                            <h6 style="font-weight: 700;color:#333">Goals <i class='bx bxs-pencil' style="cursor: pointer;"></i></h6>
                            <h1 style="font-weight: 900;color:#333">Rp 100.000.000</h1>
                        </div>
                        <div style="background: #EEEEEE; padding: 20px;border-radius: 20px;border: 4px solid #FFFFFF;">
                            <h6 style="font-weight: 700;color:#333">Selisih</h6>
                            <h1 style="font-weight: 900;color:#333">-40.000.000</h1>
                        </div>
                    </div>
                </div>
                <div class="container" style="margin-top: 50px;">
                    <div class="d-flex justify-content-between">
                        <div class="grafik-dashboard">
                            <div style="background: #EEEEEE; padding: 20px;border-radius: 20px;border: 4px solid #FFFFFF; width: 400px; margin: 0 0 20px 0;">
                                <h6 style="font-weight: 700;">Goals</h6>
                                <h1 style="font-weight: 900">Rp 3.000.000</h1>
                            </div>
                            <div style="background: #EEEEEE; padding: 20px;border-radius: 20px;border: 4px solid #FFFFFF; width: 400px; margin: 0 0 20px 0;">
                                <h6 style="font-weight: 700;">Year to Date</h6>
                                <h1 style="font-weight: 900">Rp 20.000.000</h1>
                            </div>
                            <div style="background: #EEEEEE; padding: 20px;border-radius: 20px;border: 4px solid #FFFFFF; width: 400px; margin: 0 0 20px 0;">
                                <h6 style="font-weight: 700;">Years to Date Goals</h6>
                                <h1 style="font-weight: 900">-Rp 5.000.000</h1>
                            </div>
                        </div>
                        <div class="chart" style="text-align:end;">
                            <div class="chart-text" style="margin-bottom: 60px; color:#333">
                                <h5 class="fw-bold">IN THE LAST 1 YEAR</h5>
                                <p style="color:#333">23 Januari - 23 Januari</p>
                            </div>
                            <img src="/img/chart.png" alt="chart" style="pointer-events: none;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection