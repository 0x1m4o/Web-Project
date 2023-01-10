@extends('layouts.vendor')

@section('styles_vendor')
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: #F4F4F4
        }

        .fa-google {
            background: linear-gradient(to bottom left, transparent 49%, #fbbc05 50%) 0 25%/48% 40%,
                linear-gradient(to top left, transparent 49%, #fbbc05 50%) 0 75%/48% 40%,
                linear-gradient(-40deg, transparent 53%, #ea4335 54%),
                linear-gradient(45deg, transparent 46%, #4285f4 48%), #34a853;
            background-repeat: no-repeat;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            -webkit-text-fill-color: transparent;
        }

        .bi-facebook {
            color: #3b5998;
            background-image: linear-gradient(to bottom,
                    transparent 20%,
                    white 20%,
                    white 93%,
                    transparent 93%);
            background-size: 55%;
            background-position: 70% 0;
            background-repeat: no-repeat;
        }

        .social {
            padding: 10px 0;
        }

        .social i {
            margin-right: 5px;
        }

        .input {
            width: 100%;
            padding: 6px;
            border-radius: 5px;
            border: 1px solid grey;
        }

        .input:focus {
            outline-color: rgba(35, 122, 87, 1);
            outline-offset: 2px;
        }

        .submit {
            border: none;
            width: 100%;
            padding: 8px;
        }

        @media (max-width: 768px) {
            .card {
                border: none;
            }

            .container {
                width: 80%;
            }
        }

        .nav-item,
        .keunggulan_mitra {
            display: none
        }

        .list-span {
            background: #8b968b93;
            z-index: -1;
            display: inline-block;
            padding: 2px;
            height: 103%;
        }

        .list-wrapper {
            text-align: center;

        }

        .input-form input {
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.204);
            border-radius: 11px;
        }
    </style>
@endsection

@section('content')
    @include('partials.messages')

    <div class="container mt-5 text-secondary" style="margin-bottom: 10px;">
        <div class="row">
            <div class="col-4">
                <h5 class="text-dark fw-semibold">Bergabunglah bersama kami !</h5>
            </div>
            <div class="col-8 d-flex">
                <div class="" style="width: fit-content;">
                    <div class="list-wrapper py-3" style="position: relative; ">
                        <span class="list-span" style="position: absolute; right: 43%"></span>
                        <div class="list-number"
                            style="background: #26A626;margin-top:40px;border-radius: 100%;width:35px; height:35px; ">
                            <p class="text-white " style="padding: 6px">1</p>
                        </div>

                        <div class="list-number"
                            style="background: #26A626;margin-top:80px;border-radius: 100%;width:35px; height:35px; ">
                            <p class="text-white " style="padding: 6px">2</p>
                        </div>
                        <div class="list-number"
                            style="background: #6E816E;margin-top:80px;border-radius: 100%;width:35px; height:35px; ">
                            <p class="text-white " style="padding: 6px">3</p>
                        </div>
                        <div class="list-number"
                            style="background: #6E816E;margin-top:80px;border-radius: 100%;width:35px; height:35px; ">
                            <p class="text-white " style="padding: 6px">4</p>
                        </div>
                        <div class="list-number"
                            style="background: #6E816E;margin-top:110px;border-radius: 100%;width:35px; height:35px; ">
                            <p class="text-white " style="padding: 6px">5</p>
                        </div>
                        <div class="list-number"
                            style="background: #6E816E;margin-top:100px;border-radius: 100%;width:35px; height:35px; ">
                            <p class="text-white " style="padding: 6px">6</p>
                        </div>
                    </div>

                </div>
                <div class="row ms-2">
                    {{-- Nama Anda --}}
                    <div class="pb-0 " style="width: 700px;">
                        <h5>Nama Anda*</h5>
                        <p class="mb-0" class="mb-0">Mohon tulis nama lengkap anda</p>
                        <div class="mb-3 input-form" style="width: 100%">
                            <input type="text" placeholder="Vanessa" class="form-control fst-italic "
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>

                    {{-- Nama Bisnis --}}
                    <div class="pb-0 pt-1" style="width: 700px;">
                        <h5>Nama Bisnis*</h5>
                        <p class="mb-0">Pastikan nama bisnis sudah ditulis dengan benar</p>
                        <div class="mb-3 input-form" style="width: 100%">
                            <input type="text" placeholder="Maritory" class="form-control  py-2 fst-italic"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    {{-- Nomor HP --}}
                    <div class="pb-0 pt-1" style="width: 700px;">
                        <h5>Nomor Handphone*</h5>
                        <p class="mb-0">Mohon tulis nomor handphone anda</p>
                        <div class="mb-3 input-form d-flex" style="width: 100%">
                            <input type="text" class="form-control  me-2 py-2" style="width: 30%" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <input type="text" class="form-control  box-shadow"
                                style="width: 70%;
                                " id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    {{-- Nomor Telepon --}}
                    <div class="pb-0"pt-1 style="width: 700px;">
                        <h5>Nomor Telepon Bisnis*</h5>
                        <p class="mb-0">Pastikan nama bisnis sudah ditulis dengan benar</p>
                        <div class="mb-1 input-form d-flex" style="width: 100%">
                            <input type="text" class="form-control  me-2 py-2" style="width: 30%" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <input type="text" class="form-control me-2 py-2 box-shadow"
                                style="width: 33%;
                                " id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <input type="text" class="form-control box-shadow"
                                style="width: 33%;
                                " id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 ms-2 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Gunakan Nomor Telepon Saya</label>
                        </div>
                    </div>
                    {{-- Email --}}
                    <div class="pb-0 pt-1" style="width: 700px;">
                        <h5>Alamat Email*</h5>
                        <p class="mb-0">Pastikan alamat email sudah ditulis dengan benar</p>
                        <div class="mb-3 input-form" style="width: 100%">
                            <input type="text" class="form-control  py-2" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    {{-- Password --}}
                    <div class="pb-0 pt-1" style="width: 700px;">
                        <h5>Kata Sandi*</h5>
                        <div class="mb-3 input-form" style="width: 100%">
                            <input type="text" class="form-control  py-2" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="pb-0 pt-1" style="width: 700px;">
                        <h5>Konfirmasi Kata Sandi*</h5>
                        <div class="mb-3 input-form" style="width: 100%">
                            <input type="text" class="form-control  py-2" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>

                    <div class="next d-flex justify-content-between align-items-center">
                        <a href="/loginvendor" class="text-decoration-none text-secondary d-flex align-items-center">
                            <i class="bi bi-arrow-left me-2" style="font-size: 22px"></i>
                            <p class="m-0">Sebelumnya</p>
                        </a>
                        <p class="m-0 d-flex align-items-center">Step 1-2</p>
                        <a class="btn btn-success px-4 mb-2"
                            style="
                        background: linear-gradient(90deg, #093028 0%, #237A57 100%);
                        border-radius: 10px;">Lanjut</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
