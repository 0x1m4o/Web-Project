@extends('layouts.vendor')

@section('styles_vendor')
    <style>
        * {
            font-family: "Poppins", sans-serif;
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
    </style>
@endsection

@section('content')
    @include('partials.messages')

    <div class="container mt-5 text-secondary" style="margin-bottom: 10px; width: 35%">
        <div class="row justify-content-center align-items-center">
            <div class="row mb-5 fw-bold">
                <div class="col text-center">
                    <span class="text-dark fs-3">Login Vendor <sup class="fw-light" style="color: rgba(10, 50, 12, 0.4);">for
                            business</sup></span>
                </div>
            </div>

            <form method="POST">
                @csrf
                <div class="mb-3 text-center">
                    <label for="hpEmail" class="form-label">Nomor HP atau Email</label>
                    <input type="text" class="input form-control @error('hpEmail') is-invalid @enderror" id="hpEmail"
                        placeholder="vanessa.oey@gmail.com" name="hpEmail" value="{{ old('hpEmail') }}" required>
                    @error('hpEmail')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 text-center">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="input form-control @error('password') is-invalid @enderror" id="password"
                        placeholder="************" name="password" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row mb-3">
                    <div class="text-end">
                        <div class="mb-3">
                            <a href="" class="text-decoration-none text-secondary" style="font-size: 14px">
                                Lupa Kata Sandi?
                            </a>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn submit text-white mb-5 d-block mx-auto"
                    style="background: linear-gradient(to right, rgba(9, 48, 40, 1)
        , rgba(35, 122, 87, 1)); width: 60%">Masuk</button>
            </form>

            <hr>

            <span class="text-center mt-3" style="font-size: 12px">Tidak memiliki akun?
                <a href="" class="text-decoration-none" style="color:rgba(35, 122, 87, 1)">Daftar Sekarang</a>
            </span>
        </div>
    </div>
@endsection
