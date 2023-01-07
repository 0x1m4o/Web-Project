@extends('layouts.main')
@section('content')


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <style>

        body {
            color: #49516F;
        }

        pre {
            font-family: 'Inter', sans-serif;
        }

        .pesan {
            border-top: 1px solid #C4C4C4;
            border-bottom: 1px solid #C4C4C4;
            border-left: 3px solid #093028;
        }
    </style>

    <div class="container shadow my-5 py-3 px-5" style="border-radius: 20px; height: 1389px;">
        <div class="d-flex align-items-center border-bottom mb-5">
            <a href="" class="text-decoration-none" style="color: #49516F">
                <i class="bi bi-chevron-left fs-3"></i>
            </a>
            <h2 class="ms-3 fw-bold">Pesan Bantuan</h2>
        </div>
        <div class="row">
            <div class="col-5">
                <h4 class="fw-bold">Maritory Care</h4>
                <div class="mt-4 py-3 px-3 pesan">
                    <span class="d-block text-end">25 Nov 2021</span>
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="fw-bold">Top Up Gagal Masuk</h5>
                            <p class="text-uppercase">TICKET ID : X12D93HI23</p>
                        </div>
                        <div class="mt-2">
                            <a href="" class="text-decoration-none text-white px-4 py-1 fs-5 fw-bold" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%);
                            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                            border-radius: 20px;">Open</a>
                        </div>
                    </div>
                </div>
                <div class="px-3 py-3" style="border-bottom: 1px solid #C4C4C4;">
                    <div class="d-flex justify-content-between">
                        <div class="mt-4">
                            <h5 class="fw-bold">Top Up Gagal Masuk</h5>
                            <p class="text-uppercase">TiCKET ID : X12D93HI23</p>
                        </div>
                        <div class="mt-4">
                            <span class="d-block text-end">15 Nov 2021</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <p class="text-uppercase mb-0">TICKET ID : X12D93HI23</p>
                <h5 class="fw-bold">Top Up Gagal Masuk</h5>
                <div>
                    <pre>
Tim Maritory Care
25 Nov 2021
Terima kasih telah memilih layanan Maritory untuk bertransaksi 

Email ini merupakan notifikasi yang dikirim secara otomatis (sistem) untuk
menginformasikan kepada Anda, terkait transaksi Anda dengan nomor invoice
IVR/20210110/XXI/I/607643848 saat ini sedang dalam proses penerusan cashback.  
Proses ini membutuhkan waktu maksimal 1x24 jam.

Apabila lewat dari kurun waktu tersebut kami akan mengirimkan informasi kembali
kepada Anda, silakan cek kotak masuk secara berkala.

Terima kasih.
Tim Maritory Care
                    </pre>
                </div>
            </div>
        </div>
    </div>
@endsection