@extends('layouts.no_footer')
@section('styles')
<style>
    .submit {
        background-color: #237A57;
        border-radius: 12px;
        color: white;
        padding: 5px 30px;
        font-weight: bold;
    }

    .submit:hover {
        background: linear-gradient(90deg, #093028 0%, #237A57 100%);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 12px;
        color: white;
        padding: 5px 30px;
        font-weight: bold;
        transition: 0.3s ease-out;

    }

    .uang:hover {
        background: linear-gradient(90deg, #093028 0%, #237A57 100%);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        color: white;
        transition: 0.4s ease-in-out;
    }

    .input-nabung input[type=text] {
        width: 100%;
        /* padding: 30px 20px; */
        /* margin: 8px 0; */
        box-sizing: border-box;
        border: 1px solid #49516F;
        border-radius: 12px;
        -webkit-transition: 0.5s;
        transition: 0.3s;
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

    .pembayaran-nabung-debit .custom-radio-btn input:checked+.checkmark {
        opacity: 1;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="container" style="margin-top: 60px;border-radius: 10px;background: white; margin-bottom: 50px;">
            <nav class="navbar navbar-expand-lg navbar-light" id="menu">
                <div class="container-fluid" style="border-bottom: 1px solid #49516F;">
                    <a class="navbar-brand" href="/dashboard">Dashboard</a>
                    <a class="navbar-brand" href="/nabung">Nabung</a>
                    <a class="navbar-brand" href="/pasangan">Pasangan</a>
                    <a class="navbar-brand" href="/transaksi">Transaksi</a>
                    <a class="navbar-brand aktif" href="/tariksaldo">Tarik Saldo</a>
                </div>
            </nav>
            <div class="container mt-3" style="color: #49516F;width: 932px;">
                <h3 style="font-weight: 900">Mau tarik saldo berapa?</h3>
                <div class="input-nabung d-flex align-items-center container-fluid rounded-3 px-3" style="border: 1px solid black;">
                    <span class="me-2 fw-bold">Rp</span>
                    <input type="text" style="border: none;">
                </div>
                <div class="row d-flex justify-content-between mt-4">
                    <button class="btn uang col-sm-3 nabung">Rp. 10.000</button>
                    <button class="btn uang col-sm-3 nabung">Rp. 50.000</button>
                    <button class="btn uang col-sm-3 nabung">Rp. 100.000</button>
                    <button class="btn uang col-sm-3 nabung">Rp. 100.000</button>
                </div>
                <div class="row d-flex justify-content-between">
                    <button class="btn uang col-sm-3 nabung">Rp. 500.000</button>
                    <button class="btn uang col-sm-3 nabung nabung-aktif">Rp. 1.000.000</button>
                    <button class="btn uang col-sm-3 nabung">Rp. 2.000.000</button>
                    <button class="btn uang col-sm-3 nabung">Rp. 5.000.000</button>
                </div>
                <hr class="mt-4 mb-4">
                <div class="pembayaran-nabung d-flex justify-content-between">
                    <div class="pembayaran-nabung-debit">
                        <h5 style="font-weight: 900; margin-bottom: 40px;">Pilih Nomor Rekening</h5>
                        <label class="custom-radio-btn" style="float: left; margin-right: 10px;">
                            <input type="radio" name="radio" />
                            <span class="checkmark"></span>
                        </label>
                        <h5 style="font-size: 20px;font-weight: bold; color: #49516F;">Transfer ATM</h5>
                        <h6 style="font-size: 13px; width: 685px; color: #49516F; font-weight: bold;opacity: 0.5;">Internet banking, transfer, e-wallet</h6>
                    </div>
                    <div class="direct-debit-mandiri" style="margin-top: 40px;text-align: end;">
                        <select id="debit" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%);width: 217px; height: 43px;border-radius: 12px; border: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px;" class="text-white">
                            <option value="direct" style="text-align: center;">BCA 70555334</option>
                        </select>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn submit" style="margin-top:20px;" role="button">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection