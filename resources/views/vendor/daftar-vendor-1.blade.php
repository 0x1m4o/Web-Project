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
            height: 100%;
        }

        .list-wrapper {
            text-align: center;

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
                        <div class="list-number mt-5"
                            style="background: #26A626;border-radius: 100%;width:35px; height:35px; ">
                            <p class="text-white " style="padding: 6px">1</p>
                        </div>

                        <div class="list-number mt-5"
                            style="background: #26A626;border-radius: 100%;width:35px; height:35px; ">
                            <p class="text-white " style="padding: 6px">2</p>
                        </div>
                        <div class="list-number mt-5"
                            style="background: #6E816E;border-radius: 100%;width:35px; height:35px; ">
                            <p class="text-white " style="padding: 6px">3</p>
                        </div>
                        <div class="list-number mt-5"
                            style="background: #6E816E;border-radius: 100%;width:35px; height:35px; ">
                            <p class="text-white " style="padding: 6px">4</p>
                        </div>
                        <div class="list-number mt-5"
                            style="background: #6E816E;border-radius: 100%;width:35px; height:35px; ">
                            <p class="text-white " style="padding: 6px">5</p>
                        </div>
                        <div class="list-number mt-5"
                            style="background: #6E816E;border-radius: 100%;width:35px; height:35px; ">
                            <p class="text-white " style="padding: 6px">6</p>
                        </div>
                    </div>

                </div>
                <div class="row ms-2">
                    <div class="pb-0 " style="width: 700px;">
                        <h5>Nama Anda*</h5>
                        <p>Mohon tulis nama lengkap anda</p>
                        <div class="mb-3" style="width: 100%">
                            <input type="text" placeholder="Vanessa" class="form-control input-form"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
