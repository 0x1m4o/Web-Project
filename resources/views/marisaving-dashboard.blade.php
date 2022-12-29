@extends('layouts.main')

@section('content')
    <style>
        body{
            background-color: #F4F4F4;
        }
        .judul {
            font-weight: 600;
            color: #49516F;
            margin-left: 4em;
        }
        .jumbotron {
            background-image: url('/img/marisaving-banner.png');
            width: 1377px;
            height: 386px;
        }
    </style>
    <div class="container-fluid my-4">
        <h3 class="judul">MariSaving</h3>
        <div class="container-fluid my-4 d-flex justify-content-center">
            <div class="jumbotron jumbotron-fluid d-flex flex-column justify-content-evenly">
                <div class="ms-5">
                    <h3 class="fs-1 fw-bold mb-5" style="background: linear-gradient(to right,rgba(9, 48, 40, 1),rgba(35, 122, 87, 1)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Apa itu MariSaving?</h3>
                    <br><br>
                    <a class="btn btn-md text-white" href="#" role="button" style="background: linear-gradient(to right,rgba(9, 48, 40, 1),rgba(35, 122, 87, 1));">MariSaving Sekarang</a>
                </div>
            </div>
        </div>
    </div>
@endsection