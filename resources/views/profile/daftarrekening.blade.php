@extends('layouts.no_footer')
@section('content')
<link rel="stylesheet" href="/css/profile/profile.css">
    <div class="container-fluid">
        <div class="row">
            @include('partials.profilesidebar')
            <div class="col-9">
                <div class="container" style="margin-top: 60px;border-radius: 10px;background: white;">
                    <nav class="navbar navbar-expand-lg navbar-light" id="menu">
                        <div class="container-fluid" style="border-bottom: 1px solid #49516F;">
                          <a class="navbar-brand" href="/profile">Profile</a>
                          <a class="navbar-brand" href="/biodatadiri">Biodata Diri</a>
                          <a class="navbar-brand" href="/maripay">MariPay</a>
                          <a class="navbar-brand aktif" href="/daftarrekening">Daftar Rekening</a>
                          <a class="navbar-brand" href="/keamanan-aktifitas">Keamanan</a>
                        </div>
                      </nav>
                <div class="row border-bottom">
                    <div class="col-md-10 px-4 py-3">
                        <p class="fw-bold fs-5 mb-0" style="color: #49516F;">PT. BCA (BANK CENTRAL ASIA) TBK</p>
                        <p class="mb-0">70555334</p>
                        <p>A.N Vanessa Oey</p>
                    </div>
                    <div class="col-md-2 p-3">
                        <img src="/img/logo-bca.png" class="img-fluid">
                        <button class="btn text-white mt-5  fw-bold" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%);
                        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                        border-radius: 12px; border: none; width: 110px;">Hapus</button>
                    </div>
                </div>
                <div class="d-flex my-5">
                    <a href="/tambahrekening" class="btn text-white mt-5 fw-bold m-auto mb-3" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%);
                            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                            border-radius: 12px; border: none; width: 340px;"
                            >Tambah Rekening
                    </a>
                </div>
                </div>
            </div>
          </div>
    </div>
@endsection