@extends('layouts.main')

@section('content')
@include('partials.carousel')
<div class="container" style="margin-top: 50px;">
    <h4 style="font-weight: 600;">Spesial Paket Hanya di Maritory</h4>
    <div class="paket" style="background: rgba(204, 227, 216, 0.5);
    box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.25);padding: 10px;border-radius: 20px;display: flex;justify-content: center;align-content:space-between;margin-top: 50px;">
        <img src="/img/nikah.png" alt="paket nikah">
        <p style="margin: auto; font-size: 25px; width: 500px;text-align: center;">Pilih paket pernikahan yang sesuai keinginanmu!</p>
        <button class="btn btn-success" style="height: 60px;margin: auto;">
            <a href="/paket" style="text-decoration: none;color: white;">
                Lihat Selengkapnya
            </a>
        </button>
    </div>
</div>

{{-- <div class="container">
    <h2>Kategori</h2>
</div> --}}
<div class="container" style="margin-top: 50px;">
    <h4 style="font-weight: 600;">Populer di Maritory</h4>
</div>
@endsection