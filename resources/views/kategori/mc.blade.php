@extends('layouts.main')
@section('content')
    <style>
        .nav-filter a {
            color: #49516F;
            font-weight: 600;
        }

        .view {
            padding: 8px;
            border-radius: 10px;
        }

        .dropdown button {
            border: none;
        }

        .category-section {
            width: 100%;
            font-weight: 500;
        }

        .category {
            margin: 0px auto;
            border-radius: 10px;
            padding: 5px;
            border: none;
        }

        .category:hover {
            background-color: #ffffff;
        }

        .drop {
            width: 700%;
            height: auto;
            margin-left: -500%;
            margin-top: 100%;
            background-color: #e5e5e5;
        }

        .all:hover {
            background-color: #ffffff;
            padding: 4px 10px 4px 8px;
            border-radius: 10px;
            transition: 200ms;
        }

        .all a {
            text-decoration: none;
        }

        .all p {
            text-transform: capitalize;
        }

        .card img {
            border-radius: 10%;
            filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.158));
            width: 270px;
            height: 270px;
            object-fit: cover;
        }

        .card-body {
            padding: 0;
            margin: 0;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>

    <div class="content" style="background-color:#E5E5E5;">
        <div class="container navbar navbar-expand-lg text-capitalizes category-section mt-4" id="kategori">
            <button onclick="window.location.href='/kategori-venue'" class="btn text-secondary text-capitalize category">
                <img src="/img/venue.png" alt="" class='ms-1' />
                <p class="d-inline-block p-1 mb-0 text-dark">venue</p>
            </button>
            <button onclick="window.location.href='/kategori-dekorasi'" class="btn text-secondary text-capitalize category">
                <img src="/img/dekorasi.png" alt="" class='ms-1' />
                <p class="d-inline-block p-1 mb-0 text-dark">dekorasi</p>
            </button>
            <button onclick="window.location.href='/kategori-mua'" class="btn text-secondary text-capitalize category">
                <img src="/img/mua.png" alt="" class='ms-1' />
                <p class="d-inline-block p-1 mb-0 text-dark">MUA</p>
            </button>
            <button onclick="window.location.href='/kategori-catering'" class="btn text-secondary text-capitalize category">
                <img src="/img/catering.png" alt="" class='ms-1' />
                <p class="d-inline-block p-1 mb-0 text-dark">catering</p>
            </button>
            <button onclick="window.location.href='/kategori-band'" class="btn text-secondary text-capitalize category">
                <img src="/img/band.png" alt="" class='ms-1' />
                <p class="d-inline-block p-1 mb-0 text-dark">band</p>
            </button>
            <button onclick="window.location.href='/kategori-fotografi'"
                class="btn text-secondary text-capitalize category">
                <img src="/img/fotografi.png" alt="" class='ms-1' />
                <p class="d-inline-block p-1 mb-0 text-dark">fotografi</p>
            </button>
            <button onclick="window.location.href='/kategori-busana'" class="btn text-secondary text-capitalize category">
                <img src="/img/busana.png" alt="" class='ms-1' />
                <p class="d-inline-block p-1 mb-0 text-dark">busana</p>
            </button>
            <button onclick="window.location.href='/kategori-wo'" class="btn text-secondary text-capitalize category">
                <img src="/img/wo.png" alt="" class='ms-1' />
                <p class="d-inline-block p-1 mb-0 text-dark">W.O</p>
            </button>
            <button onclick="window.location.href='/kategori-mc'"
                class="btn text-secondary text-capitalize category aktif mx-2">
                <img src="/img/souvenir.png" alt="" class='ms-1' />
                <p class="d-inline-block p-1 mb-0 text-dark">MC</p>
            </button>

            <div class="dropdown dropdown-hover">
                <button type="button" class="dropdown-toggle text-capitalize view" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <p class="d-inline-block p-2 mb-0 text-dark">view all</p>
                </button>
                <div class="container dropdown-menu drop mt-3 rounded">
                    <div class="navbar-navbar navbar-expand-xl">
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-4">
                                    {{-- Venue --}}
                                    <div class="m-3 all ">
                                        <a href="/kategori-venue">
                                            <img src="/img/venue.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">venue</p>
                                        </a>
                                    </div>

                                    <div class="m-3 all">
                                        <a href="/kategori-catering">
                                            <img src="/img/catering.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">
                                                catering
                                            </p>
                                        </a>
                                    </div>

                                    <div class="m-3 all">
                                        <a href="/kategori-busana">
                                            <img src="/img/busana.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">busana</p>
                                        </a>
                                    </div>

                                    <div class="m-3 all">
                                        <a href="/kategori-perhiasan">
                                            <img src="/img/perhiasan.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">
                                                perhiasan
                                            </p>
                                        </a>
                                    </div>

                                    <div class="m-3 all">
                                        <a href="/kategori-weddingp">
                                            <img src="/img/wedding.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">
                                                wedding planner
                                            </p>
                                        </a>
                                    </div>

                                    <div class="m-3 all">
                                        <a href="/kategori-koreografi">
                                            <img src="/img/koreografi.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">
                                                koreografi
                                            </p>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="m-3 all">
                                        <a href="/kategori-dekorasi">
                                            <img src="/img/dekorasi.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">
                                                dekorasi
                                            </p>
                                        </a>
                                    </div>

                                    <div class="m-3 all">
                                        <a href="/kategori-band">
                                            <img src="/img/band.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">band</p>
                                        </a>
                                    </div>

                                    <div class="m-3 all">
                                        <a href="/kategori-wo">
                                            <img src="/img/wo.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">W.O</p>
                                        </a>
                                    </div>

                                    <div class="m-3 all">
                                        <a href="/kategori-mc">
                                            <img src="/img/mc.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">MC</p>
                                        </a>
                                    </div>

                                    <div class="m-3 all">
                                        <a href="/kategori-honeymoon">
                                            <img src="/img/honeymoon.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">
                                                honey moon
                                            </p>
                                        </a>
                                    </div>

                                    <div class="m-3 all">
                                        <a href="/kategori-seserahan">
                                            <img src="/img/seserahan.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">
                                                seserahan
                                            </p>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="m-3 all">
                                        <a href="/kategori-mua">
                                            <img src="/img/mua.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">MUA</p>
                                        </a>
                                    </div>

                                    <div class="m-3 all">
                                        <a href="/kategori-fotografi">
                                            <img src="/img/fotografi.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">
                                                fotografi
                                            </p>
                                        </a>
                                    </div>

                                    <div class="m-3 all">
                                        <a href="/kategori-souvenir">
                                            <img src="/img/souvenir.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">
                                                souvenir
                                            </p>
                                        </a>
                                    </div>

                                    <div class="m-3 all">
                                        <a href="/kategori-undangan">
                                            <img src="/img/undangan.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">
                                                undangan
                                            </p>
                                        </a>
                                    </div>

                                    <div class="m-3 all">
                                        <a href="/kategori-photobooth">
                                            <img src="/img/photo.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">
                                                photo booth
                                            </p>
                                        </a>
                                    </div>

                                    <div class="m-3 all">
                                        <a href="/kategori-lainnya">
                                            <img src="/img/lainnya.png" alt="" />
                                            <p class="d-inline-block p-1 mb-1 text-dark">lainnya</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Filter -->
        <div class="container px-5 nav-filter d-flex justify-content-between" id="filter">
            <div>
                <a href="/disekitarsaya" class="text-decoration-none aktif p-2 me-2 ">Di sekitar saya</a>
                <a href="/terbaru" class="text-decoration-none p-2">Terbaru</a>
                <a href="/populer" class="text-decoration-none p-2">Populer</a>
                <a href="/spesialoffer" class="text-decoration-none p-2">Spesial Offer!</a>
            </div>
            <div class="d-flex justify-content-start">
                <div class="dropdown dropdown-hover">
                    <a href="#" class="btn btn-white border border-1 mx-2 dropdown-toggle bg-white"
                        style="box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.149)" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Filter</a>
                    <div class="dropdown-menu dropdown-menu-center">
                        <div class="container p-3 " style="width: 352px;">
                            <h6 class="fw-bold">Tema</h6>
                            <select class="ms-2 form-select" aria-label="Default select example" style="width: 95%">
                                <option selected>Indoor</option>
                                <option value="2">Outdoor</option>
                            </select>
                            <h6 class="fw-bold mt-2 m-0">Lokasi</h6>
                            <select class="ms-2 form-select" aria-label="Default select example" style="width: 95%">
                                <option selected>Jakarta</option>
                                <option value="2">Bogor</option>
                                <option value="3">Bekasi</option>
                            </select>
                            <h6 class="fw-bold mt-2 pb-0 m-0">Batas Harga (Rp)</h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <input class="bts-harga text-secondary text-center" type="text" name=""
                                    id="minimal" value="Minimal" style="width: 45%">
                                <input class="bts-harga text-secondary text-center" type="text" name=""
                                    id="minimal" value="Maksimal" style="width: 45%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown dropdown-hover">
                    <a href="#" class="btn btn-white border border-1 mx-2 dropdown-toggle bg-white"
                        style="box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.149)" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Sort By</a>
                    <div class="dropdown-menu dropdown-menu-center" style="color: #49516F; font-weight:400">
                        <a class="dropdown-item" href="#">Ulasan</a>
                        <a class="dropdown-item" href="#">Rating</a>
                        <a class="dropdown-item" href="#">Harga Tertinggi</a>
                        <a class="dropdown-item" href="#">Harga Terendah</a>

                    </div>
                </div>
                <div class="dropdown dropdown-hover">
                    <a href="" class="btn btn-white border border-1 mx-2 bg-white"
                        style="box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.149)">
                        <iconify-icon icon="akar-icons:arrow-up-down"></iconify-icon>
                        <span class="ms-2 dropdown-toggle"></span>
                    </a>
                    <div class="dropdown-menu">

                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="container row m-auto">
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <a class="text-decoration-none" href="/venue">
                    <div class="card card-kategori">
                        <img src="/img/Tropical.png" class="card-img-top" alt="..." />
                        <div class="card-body ms-2 mt-2">
                            <p class="stars">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i>
                            </p>
                            <h5 class="card-title fw-bold">The Aesthetic</h5>
                            <p class="card-text mb-1" style="color: #ba9543">Rp 10.000.000</p>
                            <p class="card-text">
                                <i class="fas fa-regular fa-location-dot"></i>
                                Jakarta Selatan
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <div class="card card-kategori">
                    <img src="/img/Tropical.png" class="card-img-top" alt="..." />
                    <div class="card-body ms-2 mt-2">
                        <p class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                        <h5 class="card-title fw-bold">Tropical</h5>
                        <p class="card-text mb-1" style="color: #ba9543">Rp 10.000.000</p>
                        <p class="card-text">
                            <i class="fas fa-regular fa-location-dot"></i>
                            Jakarta Selatan
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <div class="card card-kategori">
                    <img src="/img/Tropical.png" class="card-img-top" alt="..." />
                    <div class="card-body ms-2 mt-2">
                        <p class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                        <h5 class="card-title fw-bold">Tropical</h5>
                        <p class="card-text mb-1" style="color: #ba9543">Rp 10.000.000</p>
                        <p class="card-text">
                            <i class="fas fa-regular fa-location-dot"></i>
                            Jakarta Selatan
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <div class="card card-kategori">
                    <img src="/img/Tropical.png" class="card-img-top" alt="..." />
                    <div class="card-body ms-2 mt-2">
                        <p class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                        <h5 class="card-title fw-bold">Tropical</h5>
                        <p class="card-text mb-1" style="color: #ba9543">Rp 10.000.000</p>
                        <p class="card-text">
                            <i class="fas fa-regular fa-location-dot"></i>
                            Jakarta Selatan
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <div class="card card-kategori">
                    <img src="/img/Tropical.png" class="card-img-top" alt="..." />
                    <div class="card-body ms-2 mt-2">
                        <p class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                        <h5 class="card-title fw-bold">Tropical</h5>
                        <p class="card-text mb-1" style="color: #ba9543">Rp 10.000.000</p>
                        <p class="card-text">
                            <i class="fas fa-regular fa-location-dot"></i>
                            Jakarta Selatan
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <div class="card card-kategori">
                    <img src="/img/Tropical.png" class="card-img-top" alt="..." />
                    <div class="card-body ms-2 mt-2">
                        <p class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                        <h5 class="card-title fw-bold">Tropical</h5>
                        <p class="card-text mb-1" style="color: #ba9543">Rp 10.000.000</p>
                        <p class="card-text">
                            <i class="fas fa-regular fa-location-dot"></i>
                            Jakarta Selatan
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <div class="card card-kategori">
                    <img src="/img/Tropical.png" class="card-img-top" alt="..." />
                    <div class="card-body ms-2 mt-2">
                        <p class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                        <h5 class="card-title fw-bold">Tropical</h5>
                        <p class="card-text mb-1" style="color: #ba9543">Rp 10.000.000</p>
                        <p class="card-text">
                            <i class="fas fa-regular fa-location-dot"></i>
                            Jakarta Selatan
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <div class="card card-kategori">
                    <img src="/img/Tropical.png" class="card-img-top" alt="..." />
                    <div class="card-body ms-2 mt-2">
                        <p class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </p>
                        <h5 class="card-title fw-bold">Tropical</h5>
                        <p class="card-text mb-1" style="color: #ba9543">Rp 10.000.000</p>
                        <p class="card-text">
                            <i class="fas fa-regular fa-location-dot"></i>
                            Jakarta Selatan
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center my-3">
                <button class="btn btn-light rounded  border border-1">
                    <p class="text-success m-0 fw-bold">Muat Lebih Banyak</p>
                </button>
            </div>
        </div>
    </div>
@endsection
