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
                          <a class="navbar-brand aktif" href="/biodatadiri">Biodata Diri</a>
                          <a class="navbar-brand" href="/maripay">MariPay</a>
                          <a class="navbar-brand" href="/daftarrekening">Daftar Rekening</a>
                          <a class="navbar-brand" href="/keamanan-aktifitas">Keamanan</a>
                        </div>
                    </nav>
                    <div class="row p-5">
                        <div class="col-4">
                            <div class="card" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                                <img src="{{ auth()->user()->avatar }}" class="card-img-top p-3  m-auto" style="width: 250px;">
                                <div class="card-body text-center mb-3">
                                   <label class="btn btn-outline-dark" for="upload">Pilih Foto</label> 
                                   <input type="file" id="upload" hidden accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                          <form method="post" enctype="multipart/form-data">
                          <div class="container-fluid" style="border-bottom: 1px solid grey;">
                            <div class="row align-items-center">
                                <div class="col-11">
                                    <span class="mb-3 fs-4">
                                        Biodata Diri
                                    </span>
                                </div>
                                <div class="col-1">
                                        <i class="bi bi-pencil-fill fs-4"></i>
                                </div>
                            </div>
                            <div class="col-sm-2" style="cursor: pointer; color: black;">
                            </div>
                            <div class="row ms-2 my-3">
                                <div class="col-6">
                                    <p class="mb-4">Nama</p>
                                    <p class="mb-4">Tanggal Lahir</p>
                                    <p class="mb-4">Jenis Kelamin</p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-4">{{ auth()->user()->name }}</p>
                                    <p class="mb-4">@if (auth()->user()->date_of_birth)
                                        {{ auth()->user()->date_of_birth }}
                                    @else
                                        -
                                    @endif</p>
                                    <p class="mb-4">@if (auth()->user()->gender)
                                        {{ auth()->user()->gender }}
                                    @else
                                        -
                                    @endif</p>
                                </div>
                            </div>
                          </div>  

                          <div class="container-fluid mt-3" style="border-bottom: 1px solid grey;">
                            <div class="row align-items-center">
                                <div class="col-11">
                                    <span class="mb-3 fs-4">
                                        Kontak
                                    </span>
                                </div>
                                <div class="col-1">
                                        <i class="bi bi-pencil-fill fs-4"></i>
                                </div>
                            </div>
                            <div class="col-sm-2" style="cursor: pointer; color: black;">
                            </div>
                            <div class="row ms-2 my-3">
                                <div class="col-6">
                                    <p class="mb-4">Email</p>
                                    <p class="mb-4">Nomor HP</p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-4">{{ auth()->user()->email }}</p>
                                    <p class="mb-4">@if (auth()->user()->phone)
                                        {{ auth()->user()->phone }}
                                    @else
                                        -
                                    @endif</p>
                                </div>
                            </div>
                          </div>
                            
                          <div class="container-fluid mt-3">
                            <div class="row align-items-center">
                                <div class="col-11">
                                    <span class="mb-3 fs-4">
                                        Sandi
                                    </span>
                                </div>
                                <div class="col-1">
                                        <i class="bi bi-pencil-fill fs-4"></i>
                                </div>
                            </div>
                            <div class="col-sm-2" style="cursor: pointer; color: black;">
                            </div>
                            <div class="row ms-2 my-3">
                                <div class="col-6">
                                    <p class="mb-4">Sandi</p>
                                    <p class="mb-4">Terakhir diubah</p >
                                </div>
                                <div class="col-6">
                                    <p class="mb-4">*************</p>
                                    <p class="mb-4">18 Januari 2021</p>
                                </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-success">Update</button
                          </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
@endsection