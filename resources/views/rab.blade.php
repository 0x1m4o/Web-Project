@extends('layouts.main')
@section('content')
    <img style="margin-top: 25px;" src="/img/rab.png" class="w-100" alt="">
    <div class="row">
        <div class="profile-wrap col-3">
            <div class="container" style="background-color: white; width: 300px;border-radius: 12px;">
                <section class="profile">
                    <div class="profile-image">
                        <a href="#">
                            <img src="/img/Rectangle 35.png" />
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
                        <a href="/checklist">
                            <p><i class="bi bi-check-square"></i> Checklist</p>
                        </a>
                        <a href="/feed">
                            <p><i class="bi bi-images"></i> Feed</p>
                        </a>
                        <a href="/following">
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
                        <a href="/chat">
                            <p><i class="bi bi-chat"></i> Chat</p>
                        </a>
                        <a href="">
                            <p><i class="bi bi-journal-text"></i> Ulasan</p>
                        </a>
                        <a href="/notifikasi-transaksi">
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
        <div class="col-8 my-2" style="background-color: white;border-radius: 12px;">
            <div class="button jce mt-2">
                <button class="btn btn-light mx-2 jcs box-shadow p-2 ">
                    <span class="jcc" style="color: #237A57; font-size: 25px;">
                        <iconify-icon icon="ic:baseline-plus"></iconify-icon>
                    </span>
                </button>
                <button class="btn btn-light mx-2 jcs box-shadow p-2 ">
                    <span class="jcc" style="color: #CE2525; font-size: 25px;">
                        <iconify-icon icon="ic:baseline-minus"></iconify-icon>
                    </span>
                </button>
                <button class="btn btn-light mx-2 jcs box-shadow p-2 ">
                    <span class="jcc" style="color:#020202; font-size: 25px;">
                        <iconify-icon icon="mdi:pencil"></iconify-icon>
                    </span>
                </button>
                <button class="btn btn-light mx-2 jcs box-shadow p-2 ">
                    <span class="jcc" style="color:#0B082B;font-size: 25px;">
                        <iconify-icon icon="akar-icons:arrow-up-down"></iconify-icon>
                    </span>
                </button>
            </div>

            {{-- 100% --}}
            <div class="row mt-5">
                <div class="col-2 d-flex justify-content-center">
                    <h4 class="title-label fw-semibold m-0 pt-1">Venue</h4>
                </div>
                <div class="col-7 ">
                    <div class="percentage-wrapper box-shadow">
                        <span class="jce percentage-rab-100 w-100 pe-3">100 %</span>
                    </div>
                    <div class="row mt-2">
                        <div class="col-5 jcs pt-1">
                            <a class="title-label ms-3" href="#">Mulai Sekarang</a>
                        </div>
                        <div class="col-2 jcc pt-1">
                            <div class="form-check mb-0 jcs ">
                                <input class="bg-input" type="radio" name="venue" id="venue-book-radio">
                                <label class="m-0 ms-1 title-label h6" for="venue-book-radio">
                                    Book
                                </label>
                            </div>
                        </div>
                        <div class="col-3 jcc">
                            <select class="form-select box-shadow pt-1 title-label"
                                style="border: none; width: 112px; height: 30px; margin-top:2px"
                                aria-label="Default select example">
                                <option selected>DP 25%</option>
                                <option value="1">DP 50%</option>
                                <option value="2">DP 75%</option>
                                <option value="3">DP 100%</option>
                            </select>
                        </div>
                        <div class="col-2 jcs pt-1">
                            <div class="form-check jcs">
                                <input class="bg-input" type="radio" name="venue" id="venue-lunas-radio" checked>
                                <label class="m-0 ms-1 title-label" for="venue-lunas-radio">
                                    Lunas
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-around">
                    <i class="fas fa-star stars ps-3 pt-1" style="font-size: 24px"></i>
                    <h5 class="title-label fw-normal m-0 pt-1">Rp 40,000,000</h5>
                </div>
            </div>

            {{-- 100% --}}
            <div class="row mt-5">
                <div class="col-2 d-flex justify-content-center">
                    <h4 class="title-label fw-semibold m-0 pt-1">Dekor</h4>
                </div>
                <div class="col-7 ">
                    <div class="percentage-wrapper box-shadow">
                        <span class="jce percentage-rab-100 w-100 pe-3">100 %</span>
                    </div>
                    <div class="row mt-2">
                        <div class="col-5 jcs pt-1">
                            <a class="title-label ms-3" href="#">Mulai Sekarang</a>
                        </div>
                        <div class="col-2 jcc pt-1">
                            <div class="form-check mb-0 jcs ">
                                <input class="bg-input" type="radio" name="dekor" id="dekor-book-radio">
                                <label class="m-0 ms-1 title-label h6" for="dekor-book-radio">
                                    Book
                                </label>
                            </div>
                        </div>
                        <div class="col-3 jcc">
                            <select class="form-select box-shadow pt-1 title-label"
                                style="border: none; width: 112px; height: 30px; margin-top:2px"
                                aria-label="Default select example">
                                <option selected>DP 25%</option>
                                <option value="1">DP 50%</option>
                                <option value="2">DP 75%</option>
                                <option value="3">DP 100%</option>
                            </select>
                        </div>
                        <div class="col-2 jcs pt-1">
                            <div class="form-check jcs">
                                <input class="bg-input" type="radio" name="dekor" id="dekor-lunas-radio" checked>
                                <label class="m-0 ms-1 title-label" for="dekor-lunas-radio">
                                    Lunas
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-around">
                    <i class="fas fa-star stars ps-3 pt-1" style="font-size: 24px"></i>
                    <h5 class="title-label fw-normal m-0 pt-1">Rp 40,000,000</h5>
                </div>
            </div>

            {{-- 50% --}}
            <div class="row mt-5">
                <div class="col-2 d-flex justify-content-center">
                    <h4 class="title-label fw-semibold m-0 pt-1">Katering</h4>
                </div>
                <div class="col-7 ">
                    <div class="percentage-wrapper box-shadow">
                        <span class="jce percentage-rab w-50 pe-3">50 %</span>
                    </div>
                    <div class="row mt-2">
                        <div class="col-5 jcs pt-1">
                            <a class="title-label ms-3" href="#">Mulai Sekarang</a>
                        </div>
                        <div class="col-2 jcc pt-1">
                            <div class="form-check mb-0 jcs ">
                                <input class="bg-input" type="radio" name="katering" id="katering-book-radio">
                                <label class="m-0 ms-1 title-label h6" for="katering-book-radio">
                                    Book
                                </label>
                            </div>
                        </div>
                        <div class="col-3 jcc">
                            <select class="form-select box-shadow pt-1 title-label"
                                style="border: none; width: 112px; height: 30px; margin-top:2px"
                                aria-label="Default select example">
                                <option selected>DP 25%</option>
                                <option value="1">DP 50%</option>
                                <option value="2">DP 75%</option>
                                <option value="3">DP 100%</option>
                            </select>
                        </div>
                        <div class="col-2 jcs pt-1">
                            <div class="form-check jcs">
                                <input class="bg-input" type="radio" name="katering" id="katering-lunas-radio">
                                <label class="m-0 ms-1 title-label" for="katering-lunas-radio">
                                    Lunas
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-around">
                    <i class="fas fa-star stars ps-3 pt-1" style="font-size: 24px"></i>
                    <h5 class="title-label fw-normal m-0 pt-1">Rp 25,000,000</h5>
                </div>
            </div>

            {{-- 0 % --}}
            <div class="row mt-5">
                <div class="col-2 d-flex justify-content-center">
                    <h4 class="title-label fw-semibold m-0 pt-1">Band</h4>
                </div>
                <div class="col-7 ">
                    <div class="percentage-wrapper box-shadow">
                        <div class="jcs percentage-rab-0 fw-semibold">0%</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-5 jcs pt-1">
                            <a class="title-label ms-3" href="#">Mulai Sekarang</a>
                        </div>
                        <div class="col-2 jcc pt-1">
                            <div class="form-check mb-0 jcs ">
                                <input class="bg-input" type="radio" name="band" id="band-book-radio" checked>
                                <label class="m-0 ms-1 title-label h6" for="band-book-radio">
                                    Book
                                </label>
                            </div>
                        </div>
                        <div class="col-3 jcc">
                            <select class="form-select box-shadow pt-1 title-label"
                                style="border: none; width: 112px; height: 30px; margin-top:2px"
                                aria-label="Default select example">
                                <option selected>DP 25%</option>
                                <option value="1">DP 50%</option>
                                <option value="2">DP 75%</option>
                                <option value="3">DP 100%</option>
                            </select>
                        </div>
                        <div class="col-2 jcs pt-1">
                            <div class="form-check jcs">
                                <input class="bg-input" type="radio" name="band" id="band-lunas-radio">
                                <label class="m-0 ms-1 title-label" for="band-lunas-radio">
                                    Lunas
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-around">
                    <i class="fas fa-star stars ps-3 pt-1" style="font-size: 24px"></i>
                    <h5 class="title-label fw-normal m-0 pt-1">Rp 40,000,000</h5>
                </div>
            </div>

            {{-- 100% --}}
            <div class="row mt-5">
                <div class="col-2 d-flex justify-content-center">
                    <h4 class="title-label fw-semibold m-0 pt-1">Gaun</h4>
                </div>
                <div class="col-7 ">
                    <div class="percentage-wrapper box-shadow">
                        <span class="jce percentage-rab-100 w-100 pe-3">100 %</span>
                    </div>
                    <div class="row mt-2">
                        <div class="col-5 jcs pt-1">
                            <a class="title-label ms-3" href="#">Mulai Sekarang</a>
                        </div>
                        <div class="col-2 jcc pt-1">
                            <div class="form-check mb-0 jcs ">
                                <input class="bg-input" type="radio" name="venue" id="venue-book-radio">
                                <label class="m-0 ms-1 title-label h6" for="venue-book-radio">
                                    Book
                                </label>
                            </div>
                        </div>
                        <div class="col-3 jcc">
                            <select class="form-select box-shadow pt-1 title-label"
                                style="border: none; width: 112px; height: 30px; margin-top:2px"
                                aria-label="Default select example">
                                <option selected>DP 25%</option>
                                <option value="1">DP 50%</option>
                                <option value="2">DP 75%</option>
                                <option value="3">DP 100%</option>
                            </select>
                        </div>
                        <div class="col-2 jcs pt-1">
                            <div class="form-check jcs">
                                <input class="bg-input" type="radio" name="venue" id="venue-lunas-radio" checked>
                                <label class="m-0 ms-1 title-label" for="venue-lunas-radio">
                                    Lunas
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-around">
                    <i class="fas fa-star stars ps-3 pt-1" style="font-size: 24px"></i>
                    <h5 class="title-label fw-normal m-0 pt-1">Rp 40,000,000</h5>
                </div>
            </div>

            {{-- 100% --}}
            <div class="row mt-5">
                <div class="col-2 d-flex justify-content-center">
                    <h4 class="title-label fw-semibold m-0 pt-1">Souvenir</h4>
                </div>
                <div class="col-7 ">
                    <div class="percentage-wrapper box-shadow">
                        <span class="jce percentage-rab-100 w-100 pe-3">100 %</span>
                    </div>
                    <div class="row mt-2">
                        <div class="col-5 jcs pt-1">
                            <a class="title-label ms-3" href="#">Mulai Sekarang</a>
                        </div>
                        <div class="col-2 jcc pt-1">
                            <div class="form-check mb-0 jcs ">
                                <input class="bg-input" type="radio" name="dekor" id="dekor-book-radio">
                                <label class="m-0 ms-1 title-label h6" for="dekor-book-radio">
                                    Book
                                </label>
                            </div>
                        </div>
                        <div class="col-3 jcc">
                            <select class="form-select box-shadow pt-1 title-label"
                                style="border: none; width: 112px; height: 30px; margin-top:2px"
                                aria-label="Default select example">
                                <option selected>DP 25%</option>
                                <option value="1">DP 50%</option>
                                <option value="2">DP 75%</option>
                                <option value="3">DP 100%</option>
                            </select>
                        </div>
                        <div class="col-2 jcs pt-1">
                            <div class="form-check jcs">
                                <input class="bg-input" type="radio" name="dekor" id="dekor-lunas-radio" checked>
                                <label class="m-0 ms-1 title-label" for="dekor-lunas-radio">
                                    Lunas
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-around">
                    <i class="fas fa-star stars ps-3 pt-1" style="font-size: 24px"></i>
                    <h5 class="title-label fw-normal m-0 pt-1">Rp 40,000,000</h5>
                </div>
            </div>

            {{-- 50% --}}
            <div class="row mt-5">
                <div class="col-2 d-flex justify-content-center">
                    <h4 class="title-label fw-semibold m-0 pt-1">MC</h4>
                </div>
                <div class="col-7 ">
                    <div class="percentage-wrapper box-shadow">
                        <span class="jce percentage-rab w-50 pe-3">50 %</span>
                    </div>
                    <div class="row mt-2">
                        <div class="col-5 jcs pt-1">
                            <a class="title-label ms-3" href="#">Mulai Sekarang</a>
                        </div>
                        <div class="col-2 jcc pt-1">
                            <div class="form-check mb-0 jcs ">
                                <input class="bg-input" type="radio" name="katering" id="katering-book-radio">
                                <label class="m-0 ms-1 title-label h6" for="katering-book-radio">
                                    Book
                                </label>
                            </div>
                        </div>
                        <div class="col-3 jcc">
                            <select class="form-select box-shadow pt-1 title-label"
                                style="border: none; width: 112px; height: 30px; margin-top:2px"
                                aria-label="Default select example">
                                <option selected>DP 25%</option>
                                <option value="1">DP 50%</option>
                                <option value="2">DP 75%</option>
                                <option value="3">DP 100%</option>
                            </select>
                        </div>
                        <div class="col-2 jcs pt-1">
                            <div class="form-check jcs">
                                <input class="bg-input" type="radio" name="katering" id="katering-lunas-radio">
                                <label class="m-0 ms-1 title-label" for="katering-lunas-radio">
                                    Lunas
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-around">
                    <i class="fas fa-star stars ps-3 pt-1" style="font-size: 24px"></i>
                    <h5 class="title-label fw-normal m-0 pt-1">Rp 25,000,000</h5>
                </div>
            </div>

            {{-- 0 % --}}
            <div class="row my-4">
                <div class="col-2 d-flex justify-content-center">
                    <h4 class="title-label fw-semibold m-0 pt-1">Gaun</h4>
                </div>
                <div class="col-7 ">
                    <div class="percentage-wrapper box-shadow">
                        <div class="jcs percentage-rab-0 fw-semibold">0%</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-5 jcs pt-1">
                            <a class="title-label ms-3" href="#">Mulai Sekarang</a>
                        </div>
                        <div class="col-2 jcc pt-1">
                            <div class="form-check mb-0 jcs ">
                                <input class="bg-input" type="radio" name="band" id="band-book-radio" checked>
                                <label class="m-0 ms-1 title-label h6" for="band-book-radio">
                                    Book
                                </label>
                            </div>
                        </div>
                        <div class="col-3 jcc">
                            <select class="form-select box-shadow pt-1 title-label"
                                style="border: none; width: 112px; height: 30px; margin-top:2px"
                                aria-label="Default select example">
                                <option selected>DP 25%</option>
                                <option value="1">DP 50%</option>
                                <option value="2">DP 75%</option>
                                <option value="3">DP 100%</option>
                            </select>
                        </div>
                        <div class="col-2 jcs pt-1">
                            <div class="form-check jcs">
                                <input class="bg-input" type="radio" name="band" id="band-lunas-radio">
                                <label class="m-0 ms-1 title-label" for="band-lunas-radio">
                                    Lunas
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-around">
                    <i class="fas fa-star stars ps-3 pt-1" style="font-size: 24px"></i>
                    <h5 class="title-label fw-normal m-0 pt-1">Rp 40,000,000</h5>
                </div>
            </div>

        </div>
    </div>
@endsection
