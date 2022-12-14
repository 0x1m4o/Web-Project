@extends('layouts.main')

@section('content')
    <style>
        body{
            background-color: #F4F4F4;
        }
        .judul {
            margin-top: 60px;
            font-weight: 600;
            color: #49516F;
            font-size: 42px;
            margin-bottom: 45px;
        }
        .jumbotron {
            background-image: url('/img/marisaving-banner.png');
            background-position: center;
            background-repeat: no-repeat;
            width: 1377px;
            height: 386px;
        }
        .card {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            box-sizing: border-box;
        }
    </style>
    <div class="container-fluid my-4" style="max-width: 100%">
        <h3 class="judul container">MariSaving</h3>
        <div class="container-fluid my-4 d-flex justify-content-center">
            <div class="jumbotron jumbotron-fluid d-flex flex-column justify-content-evenly">
                <div class="ms-5">
                    <h3 class="fs-1 fw-bold mb-5" style="background: linear-gradient(to right,rgba(9, 48, 40, 1),rgba(35, 122, 87, 1)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Apa itu MariSaving?</h3>
                    <br><br>
                    <a class="btn btn-md text-white" href="#" role="button" style="background: linear-gradient(to right,rgba(9, 48, 40, 1),rgba(35, 122, 87, 1));">MariSaving Sekarang</a>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-around mb-5">
            <div class="card p-3 ps-5" style="width: 18rem;">
                <div class="d-flex mt-1">
                    <i class="bi bi-people me-3"></i>
                    <span class="fw-bold" style="background: linear-gradient(to right,rgba(9, 48, 40, 1),rgba(35, 122, 87, 1)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Nabung Bersama</span>
                </div>
            </div>
            <div class="card p-3 ps-5" style="width: 18rem;">
                <div class="d-flex mt-1 px-5">
                    <i class="bi bi-check2-square me-3"></i>
                    <span class="fw-bold" style="background: linear-gradient(to right,rgba(9, 48, 40, 1),rgba(35, 122, 87, 1)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">RAB</span>
                </div>
            </div>
            <div class="card p-3 ps-5" style="width: 18rem;">
                <div class="d-flex mt-1 px-5">
                    <i class="bi bi-pencil-fill me-3"></i>
                <span class="fw-bold" style="background: linear-gradient(to right,rgba(9, 48, 40, 1),rgba(35, 122, 87, 1)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Goals</span>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-around" style="margin-bottom: 15rem">
            <div class="card">
                <div class="img-content d-flex justify-content-center" style="padding: 70px 82px 70px 82px;">
                    <img src="/img/people.png" alt="card-img-top" alt="people" width="162" height="115">
                </div>
                <div class="card-body">
                    <p class="card-text text-center">Ayo menabung bersama <br> pasangan!</p>
                </div>
            </div>
            <div class="card">
                <div class="img-content d-flex justify-content-center" style="padding: 70px 82px 70px 82px;">
                    <img src="/img/checklist.png" class="card-img-top" alt="checklist" width="162" height="115">
                </div>
                <div class="card-body">
                    <p class="card-text text-center">Yuk rencanakan Biaya <br> Pernikahanmu!</p>
                </div>
            </div>
            <div class="card">
                <div class="img-content d-flex justify-content-center" style="padding: 70px 82px 70px 82px;">
                    <img src="/img/pencil.png" class="card-img-top" alt="pencil" width="162" height="115">
                </div>
                <div class="card-body">
                    <p class="card-text text-center">Wujudkan pernikahan <br> impianmu!</p>
                </div>
            </div>

    </div>
@endsection