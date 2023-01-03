@extends('layouts.main')
@section('styles')
    <style>
        .input-nabung input[type=text] {
        width: 100%;
        padding: 30px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #49516F;
        border-radius: 12px;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
        }

        .input-nabung input[type=text]:focus {
        border: 3px solid #555;
        }

        .input-nabung input::placeholder {
        font-weight: bold;
        color: #49516F;
        }

        .nabung {
            width: 200px;
            height: 50px;
            background: #fff;
            border: 1px solid #49516F;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nabung-aktif {
            background: linear-gradient(90deg, #093028 0%, #237A57 100%);
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            color: white;
        }

        /* .pembayaran-nabung-debit input[type=radio] {
            width: 35px;
            height: 35px;
        }   
        .pembayaran-nabung-debit input:checked ~ .checkmark {
            background: linear-gradient(90deg, #093028 0%, #237A57 100%);
        } */

        .pembayaran-nabung-debit .custom-radio-btn {
            width: 33px;
            height: 33px;
            border: 1px solid #49516F;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .pembayaran-nabung-debit .custom-radio-btn .checkmark {
            width: calc(90% - 6px);
            height: calc(90% - 6px);
            border-radius: 50%;
            background: linear-gradient(90deg, #093028 0%, #237A57 100%);
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            display: inline-block;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .pembayaran-nabung-debit .custom-radio-btn input {
            display: none;
        }

        .pembayaran-nabung-debit .custom-radio-btn input:checked + .checkmark {
            opacity: 1;
        }
    </style>
@endsection
@section('content')
<link rel="stylesheet" href="/css/profile/profile.css">
    <div class="container mt-5 bg-white rounded-4">
        <div class="container mx-5">
            <div class="row justify-content-around mt-3">
                <div class="col-10 d-flex">
                    <div class="col-6 fw-bold" style="font-weight: 600;font-size: 18px;color: #49516F;">
                        <h6 class="fw-bold" style="color: rgba(73, 81, 111, 0.5);">
                            Batas Akhir Pembayaran
                        </h6>
                        <p>
                            Rabu,23 Feb 2022 11:51 WIB
                        </p>
                    </div>
                    <div class="col-2 ms-auto">
                        <p class="mt-4" style="font-weight: 600;font-size: 18px;color: #F75656;">
                            23:51:20
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container bg-white rounded-4" style="margin-bottom: 7rem">
        <div class="container mx-5">
            <div class="row justify-content-around mt-3">
                <div class="col-10">
                    <div class="d-flex align-items-center">
                        <div class="col-6 fw-bold" style="font-weight: 600;font-size: 18px;color: #49516F;">
                            <p>
                                BCA Virtual Account 
                            </p>
                        </div>
                        <div class="col-2 ms-auto mb-4">
                            <img src="/img/logo-bca.png" alt="">
                        </div>
                    </div>
                    <hr style="width: 960px">
                    <div class="d-flex align-items-center my-3">
                        <div class="col-6 fw-bold" style="font-weight: 600;font-size: 18px;color: #49516F;">
                            <h6 class="fw-bold" style="color: rgba(73, 81, 111, 0.5);">
                                Nomor Virtual Account
                            </h6>
                            <p>
                                85322087804884221 
                            </p>
                        </div>
                        <div class="col-2 ms-auto mb-4">
                            <button class="btn bg-white l px-4 py-2 fw-bold" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);color: #49516F;border-radius:20px;">Salin</button>
                        </div>
                    </div>
                    <div class="d-flex align-items-center my-3">
                        <div class="col-6 fw-bold" style="font-weight: 600;font-size: 18px;color: #49516F;">
                            <h6 class="fw-bold" style="color: rgba(73, 81, 111, 0.5);">
                                Total Pembayaran
                            </h6>
                            <p>
                                Rp1.000.000 
                            </p>
                        </div>
                        <div class="col-2 ms-auto mb-4">
                            <button class="btn bg-white l px-4 py-2 fw-bold" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);color: #49516F;border-radius:20px;">Salin</button>
                        </div>
                    </div>
                    <hr style="width: 960px">
                </div>
                <div class="d-flex flex-column">
                    <a href="" class="text-center text-decoration-none fw-bold" style="color: #237A57;">Lihat Cara Pembayaran</a>
                    <a href="/home" class="text-center text-decoration-none fw-bold text-white py-2 mt-5 mb-4 mx-auto" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%);
                    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                    border-radius: 10px;width: 250px">Kembali ke Home</a>
                    <a href="" class="text-center text-decoration-none fw-bold bg-white py-2 mb-3 mx-auto" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                    border-radius: 10px;width: 250px;color: #237A57;">Kembali ke Nabung</a>
                </div>
            </div>
        </div>
    </div>
@endsection