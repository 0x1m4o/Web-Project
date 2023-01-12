@extends('layouts.main')
@section('content')
    <style>
        body {
            background-color: #F4F4F4;
        }
    </style>
    <div class="container mt-5 mb-5" style="background: white;padding: 20px 0 10px 20px;border-radius: 20px;">
        <span
            style="width: 40px; height: 40px; background: white;display: inline-flex;align-items: center; justify-content: center; cursor: pointer;border-radius: 50%;box-shadow: -1px 2px 12px 4px rgba(17, 17, 26, 0.18);">
            <a href="javascript:history.back()" class="text-dark">
                <i class="bi bi-arrow-left-short" style="font-size: 40px;"></i>
            </a>
        </span>

        <div class="row container my-4" style="display: flex;justify-content: center; align-content:space-between;">
            <div class="col-sm-4"
                style="padding-top: 20px;background: white; width: 400px; height: 210px;border-radius: 20px;margin-right: 15px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);display: flex;justify-content: center;align-content:space-between;">
                <span>
                    <h3 style="color: #979797;font-weight: 600">Silver 75Jt</h3>
                    <p style="color: #979797;">Paket pernikahan lengkap yang berkesan dalam hidupmu</p>
                    <button class="btn" style="background: #979797;color: white;"
                        onclick="window.location='/package-silver';">Pilih Sekarang</button>
                </span>
                <img src="/img/paket1.png" alt="paket1" width="150" height="150">
            </div>
            <div class="col-sm-4"
                style="padding-top: 20px;background: white; width: 400px; height: 210px;border-radius: 20px;margin-right: 15px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);display: flex;justify-content: center;align-content:space-between;">
                <span>
                    <h3 style="color: #BA9543;font-weight: 600">Gold 150Jt</h3>
                    <p style="color: #BA9543;">Paket pernikahan terindah yang tak akan dilupa</p>
                    <button class="btn" style="background: #BA9543;color: white;"
                        onclick="window.location='/package-gold';">Pilih Sekarang</button>
                </span>
                <img src="/img/paket2.png" alt="paket2" width="200" height="150">
            </div>
            <div class="col-sm-4"
                style="padding-top: 20px;background: white; width: 400px; height: 210px;border-radius: 20px;margin-right: 15px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);display: flex;justify-content: center;align-content:space-between;">
                <span>
                    <h3 style="color: #237A57;font-weight: 600">Emerald 150Jt< </h3>
                            <p style="color: #237A57;">Paket pernikahan dan bulan madu terbaik yang kamu <br> impikan</p>
                            <button class="btn" style="background: #237A57;color: white;"
                                onclick="window.location='/package-emerald';">Pilih Sekarang</button>
                </span>
                <img src="/img/paket3.png" alt="paket3" width="150" height="150">
            </div>
        </div>
    </div>
@endsection
