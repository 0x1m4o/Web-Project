@extends('layouts.main')
@section('content')
    <div class="container mt-5">
        <!-- Filter -->
        <div class="d-flex justify-content-between px-4">
            <div class="keranjang-title jcs">
                <a href="#" class="text-secondary mt-2  fs-5 jcs">
                    <iconify-icon icon="material-symbols:arrow-back-ios-new-rounded"></iconify-icon>
                </a>
                <h3 class="fw-semibold title-label p-0 m-0 mt-2 ms-2 ">Wishlist</h3>
            </div>
            <div class="jcs">
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
                        aria-expanded="false">Ulasan</a>
                    <div class="dropdown-menu dropdown-menu-center" style="color: #49516F; font-weight:400">
                        <a class="dropdown-item" href="#">Ulasan</a>
                        <a class="dropdown-item" href="#">Rating</a>
                        <a class="dropdown-item" href="#">Harga Tertinggi</a>
                        <a class="dropdown-item" href="#">Harga Terendah</a>

                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="row m-auto">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="text-decoration-none" href="/view-venue">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="/img/carousel2.png" alt="..." />
                            <button class="love">
                                <img src="/img/love.svg" alt="">
                            </button>
                            <span class="tema-outdoor">Outdoor</span>
                        </div>
                        <div class="card-body ms-2 mt-2">
                            <p style="color: #C4C4C4;">
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <h5 class="card-title fw-bold title-label">The Aesthetic</h5>
                            <p class="card-text mb-1 ms-1">
                                <i class="fas fa-regular fa-location-dot"></i>
                                Jakarta Selatan
                            </p>
                            <p class="card-text mb-1 fw-semibold">Rp 10.000.000</p>
                            <div class="btn-wrap">
                                <button class="jcc btn btn-success w-100 btn-maritory">Order</button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="text-decoration-none" href="/view-venue">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="/img/carousel2.png" alt="..." />
                            <button class="love">
                                <img src="/img/love.svg" alt="">
                            </button>
                            <span class="tema-indoor">Indoor</span>
                        </div>
                        <div class="card-body ms-2 mt-2">
                            <p style="color: #C4C4C4;">
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <h5 class="card-title fw-bold title-label">The Aesthetic</h5>
                            <p class="card-text mb-1 ms-1">
                                <i class="fas fa-regular fa-location-dot"></i>
                                Jakarta Selatan
                            </p>
                            <p class="card-text mb-1 fw-semibold">Rp 10.000.000</p>
                            <div class="btn-wrap">
                                <button class="jcc btn btn-success w-100 btn-maritory">Order</button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="text-decoration-none" href="/view-venue">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="/img/carousel2.png" alt="..." />
                            <button class="love">
                                <img src="/img/love.svg" alt="">
                            </button>
                            <span class="tema-outdoor">Outdoor</span>
                        </div>
                        <div class="card-body ms-2 mt-2">
                            <p style="color: #C4C4C4;">
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <h5 class="card-title fw-bold title-label">The Aesthetic</h5>
                            <p class="card-text mb-1 ms-1">
                                <i class="fas fa-regular fa-location-dot"></i>
                                Jakarta Selatan
                            </p>
                            <p class="card-text mb-1 fw-semibold">Rp 10.000.000</p>
                            <div class="btn-wrap">
                                <button class="jcc btn btn-success w-100 btn-maritory">Order</button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="text-decoration-none" href="/view-venue">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="/img/carousel2.png" alt="..." />
                            <button class="love">
                                <img src="/img/love.svg" alt="">
                            </button>
                            <span class="tema-outdoor">Outdoor</span>
                        </div>
                        <div class="card-body ms-2 mt-2">
                            <p style="color: #C4C4C4;">
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <h5 class="card-title fw-bold title-label">The Aesthetic</h5>
                            <p class="card-text mb-1 ms-1">
                                <i class="fas fa-regular fa-location-dot"></i>
                                Jakarta Selatan
                            </p>
                            <p class="card-text mb-1 fw-semibold">Rp 10.000.000</p>
                            <div class="btn-wrap">
                                <button class="jcc btn btn-success w-100 btn-maritory">Order</button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="text-decoration-none" href="/view-venue">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="/img/carousel2.png" alt="..." />
                            <button class="love">
                                <img src="/img/love.svg" alt="">
                            </button>
                            <span class="tema-outdoor">Outdoor</span>
                        </div>
                        <div class="card-body ms-2 mt-2">
                            <p style="color: #C4C4C4;">
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <h5 class="card-title fw-bold title-label">The Aesthetic</h5>
                            <p class="card-text mb-1 ms-1">
                                <i class="fas fa-regular fa-location-dot"></i>
                                Jakarta Selatan
                            </p>
                            <p class="card-text mb-1 fw-semibold">Rp 10.000.000</p>
                            <div class="btn-wrap">
                                <button class="jcc btn btn-success w-100 btn-maritory">Order</button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="text-decoration-none" href="/view-venue">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="/img/carousel2.png" alt="..." />
                            <button class="love">
                                <img src="/img/love.svg" alt="">
                            </button>
                            <span class="tema-outdoor">Outdoor</span>
                        </div>
                        <div class="card-body ms-2 mt-2">
                            <p style="color: #C4C4C4;">
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <h5 class="card-title fw-bold title-label">The Aesthetic</h5>
                            <p class="card-text mb-1 ms-1">
                                <i class="fas fa-regular fa-location-dot"></i>
                                Jakarta Selatan
                            </p>
                            <p class="card-text mb-1 fw-semibold">Rp 10.000.000</p>
                            <div class="btn-wrap">
                                <button class="jcc btn btn-success w-100 btn-maritory">Order</button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="text-decoration-none" href="/view-venue">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="/img/carousel2.png" alt="..." />
                            <button class="love">
                                <img src="/img/love.svg" alt="">
                            </button>
                            <span class="tema-outdoor">Outdoor</span>
                        </div>
                        <div class="card-body ms-2 mt-2">
                            <p style="color: #C4C4C4;">
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <h5 class="card-title fw-bold title-label">The Aesthetic</h5>
                            <p class="card-text mb-1 ms-1">
                                <i class="fas fa-regular fa-location-dot"></i>
                                Jakarta Selatan
                            </p>
                            <p class="card-text mb-1 fw-semibold">Rp 10.000.000</p>
                            <div class="btn-wrap">
                                <button class="jcc btn btn-success w-100 btn-maritory">Order</button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="text-decoration-none" href="/view-venue">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="/img/carousel2.png" alt="..." />
                            <button class="love">
                                <img src="/img/love.svg" alt="">
                            </button>
                            <span class="tema-outdoor">Outdoor</span>
                        </div>
                        <div class="card-body ms-2 mt-2">
                            <p style="color: #C4C4C4;">
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star stars"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <h5 class="card-title fw-bold title-label">The Aesthetic</h5>
                            <p class="card-text mb-1 ms-1">
                                <i class="fas fa-regular fa-location-dot"></i>
                                Jakarta Selatan
                            </p>
                            <p class="card-text mb-1 fw-semibold">Rp 10.000.000</p>
                            <div class="btn-wrap">
                                <button class="jcc btn btn-success w-100 btn-maritory">Order</button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="text-center my-3">
                <button class="btn btn-light rounded  border border-1">
                    <p class="text-success m-0 fw-bold">Muat Lebih Banyak</p>
                </button>
            </div>
        </div>
    </div>
@endsection
