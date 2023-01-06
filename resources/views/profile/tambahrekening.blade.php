@extends('layouts.no_footer')
@section('content')
<link rel="stylesheet" href="/css/profile/profile.css">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="container" style="width: 300px; border-radius: 10px; margin-top: 60px;background-color: white;">
                    <section class="profile">
                        <div class="profile-image">
                            <a href="#">
                                <img src="/img/Rectangle 35.png"  />
                            </a>
                        </div>
                        <div class="profile-name">
                            <a href="#">Vanessa Oey</a>
                        </div>
                    </section>
                    <section class="dashboard">
                        <div class="dashboard-title">
                            <a href="/maripay">
                                <p><i class="bi bi-wallet"></i> Maripay</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-star"></i> Goal</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-file-bar-graph"></i> RAB</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-check-square"></i> Checklist</p>
                            </a>
                            <a href="/feed">
                                <p><i class="bi bi-images"></i> Feed</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-people-fill"></i> Following</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-gear"></i> Setting</p>
                            </a>
                        </div>
                        <div class="dashboard-data">
                            <p>Rp 60,000,000</p>
                            <p>Rp -40,000,000</p>
                        </div>
                    </section>
                    <section class="kotak-masuk">
                        <i class="bi bi-envelope"></i>
                        <span>Kotak Masuk</span>
                    </section>
                    <section class="contact">
                        <div class="contact-title">
                            <a href="">
                                <p><i class="bi bi-chat"></i> Chat</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-journal-text"></i> Ulasan</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-bell"></i> Notification</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-heart-pulse"></i> Maritory Care</p>
                            </a>
                            <a href="">
                                <strong><i class="bi bi-box-arrow-left"></i> Log Out</strong>
                            </a>
                        </div>
                        <div class="contact-data">
                            <p>5</p>
                            <p>1</p>
                            <p>10</p>
                            <p>2</p>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-9">
                <div class="container p-5" style="margin-top: 60px;border-radius: 10px;background: white;">
                    <h3 class="mb-3 fw-semibold">Tambah Rekening</h3>
                    <h5 class="fw-semibold ms-2">Nama Bank</h5>

                    <div class="row ">
                        <div class="col-10 ms-2 mb-5">
                            <h5 class="fw-semibold">Nomor Rekening</h5>
                            <div class="center d-flex align-items-center">
                            <div class="input-animation-tambahrekening ms-1 me-3">
                                <input class="effect-border fw-semibold" type="text" name="periksarekening" id="periksarekening" placeholder="1234567" style="border: none">
                                <span class="focus-border"></span>
                            </div>
                            <button class="btn text-white fw-bold" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%);
                            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                            border-radius: 12px; border: none; width: 110px;">Periksa</button>
                            </div>
                        </div>
                        <a href="#" class="btn text-white fw-bold mt-5 m-auto mb-3" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%);
                        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                        border-radius: 12px; border: none; width: 340px;"
                        >Submit
                         </a>
                    </div>
                </div>
            </div>
          </div>
    </div>
@endsection