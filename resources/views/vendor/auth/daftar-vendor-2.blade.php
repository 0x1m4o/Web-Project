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

        .input-form input,
        .input-form select {
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.204);
            border-radius: 11px;
        }

        #map {
            height: 200px;
            width: 50%;
        }

        a:hover i {
            transform: scale(1);
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
                            style="background: #26A626;margin-top:70px;border-radius: 100%;width:35px; height:35px; ">
                            <p class="text-white " style="padding: 6px">3</p>
                        </div>
                        <div class="list-number"
                            style="background: #6E816E;margin-top:130px;border-radius: 100%;width:35px; height:35px; ">
                            <p class="text-white " style="padding: 6px">4</p>
                        </div>
                        <div class="list-number"
                            style="background: #6E816E;margin-top:250px;border-radius: 100%;width:35px; height:35px; ">
                            <p class="text-white " style="padding: 6px">5</p>
                        </div>

                    </div>

                </div>
                <div class="row ms-2">
                    {{-- Kategori --}}
                    <div class="pb-0 " style="width: 700px;">
                        <h5>Kategori Bisnis*</h5>
                        <p class="mb-0" class="mb-0">Mohon tulis nama lengkap anda</p>
                        <div class="mb-3 input-form" style="width: 100%">
                            <input type="text" placeholder="Decoration" class="form-control fst-italic py-2 "
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>

                    {{-- Negara --}}
                    <div class="pb-0 pt-1 mt-3" style="width: 700px;">
                        <div class="row">
                            <div class="col-6">
                                <h5>Negara*</h5>
                                <div class="mb-3 input-form" style="width: 100%">
                                    <select class="form-select p-2 fst-italic text-secondary">
                                        <option value="Indonesia" selected>Indonesia</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Singapura">Singapura</option>
                                        <option value="Brunei">Brunei</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5>Kota*</h5>
                                <div class="mb-3 input-form " style="width: 100%">
                                    <select class="form-select p-2 fst-italic text-secondary">
                                        <option value="Jakarta" selected>Jakarta</option>
                                        <option value="Bogor">Bogor</option>
                                        <option value="Depok">Depok</option>
                                        <option value="Tanggerang">Tanggerang</option>
                                        <option value="Bekasi">Bekasi</option>
                                        <option value="Bandung">Bandung</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                    </div>
                    {{-- Kelurahan --}}
                    <div class="pb-0 pt-1 mt-3" style="width: 700px;">
                        <div class="row">
                            <div class="col-4">
                                <h5>Kecamatan*</h5>
                                <div class="mb-3 input-form " style="width: 100%">
                                    <select class="form-select p-2 fst-italic text-secondary">
                                        <option value="Cakung" selected>Cakung</option>
                                        <option value="Bogor">Bogor</option>
                                        <option value="Depok">Depok</option>
                                        <option value="Tanggerang">Tanggerang</option>
                                        <option value="Bekasi">Bekasi</option>
                                        <option value="Bandung">Bandung</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <h5>Kelurahan*</h5>
                                <div class="mb-3 input-form " style="width: 100%">
                                    <select class="form-select p-2 fst-italic text-secondary">
                                        <option value="Jakarta" selected>Jakarta</option>
                                        <option value="Jatinegara">Jatinegara</option>
                                        <option value="Depok">Depok</option>
                                        <option value="Tanggerang">Tanggerang</option>
                                        <option value="Bekasi">Bekasi</option>
                                        <option value="Bandung">Bandung</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3 input-form " style="width: 100%">
                                    <h5>Kode Pos*</h5>
                                    <input type="text" class="form-control me-2 py-2" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Alamat --}}
                    <div class="pb-0 mt-3"pt-1 style="width: 700px;">
                        <h5>Alamat*</h5>
                        <div class="mb-1 input-form d-flex">
                            <textarea class="box-shadow p-3" style="height: 200px;width: 100%"></textarea>
                        </div>
                    </div>
                    {{-- Pin Alamat --}}
                    <div class="pb-0 pt-1 mt-3" style="width: 700px;">
                        <h5>Pin Alamat*</h5>
                        <div class="mb-3 input-form" style="width: 100%">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666427101196!2d106.82292560912025!3d-6.175392383322756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sNational%20Monument!5e0!3m2!1sen!2sid!4v1673335506091!5m2!1sen!2sid"
                                width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    {{-- Password --}}

                    <div class="next-page d-flex justify-content-between align-items-center">
                        <a href="/daftar-vendor/1" class="text-decoration-none text-secondary jcs">
                            <i class="bi bi-arrow-left" style="font-size: 22px;"></i>
                            <p class="ms-2 m-0">Sebelumnya</p>
                        </a>
                        <p class="m-0 d-flex align-items-center">Step 2-2</p>
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
