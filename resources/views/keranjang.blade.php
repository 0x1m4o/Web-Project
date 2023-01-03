@extends('layouts.main')

@section('content')
    <div class="container bg-white" style="width: 100%">
        <div class="keranjang-title jcs">
            <a href="/" class="text-secondary p-2 fs-5 jcs"><iconify-icon icon="material-symbols:arrow-back-ios-new-rounded"></iconify-icon></a>
            <h3 class="fw-semibold title-label p-0 m-0">Keranjang</h3>
        </div>
        <div class="keranjang-body">
            <div class="form-check jcs" >
                <input class="form-check-input mb-1 me-3" type="checkbox" value="" id="flexCheckDefault-PilihSemua"/>
                <label class="form-check-label title-label fw-semibold" for="flexCheckDefault">Pilih Semua</label>
            </div>
            <hr>

            {{-- Items --}}
            <div class="form-check jcs" >
                <input class="form-check-input mb-1 me-3" type="checkbox" value="" id="flexCheckDefault-TheAesthetic"/>
                <div class="row">
                    <div class="d-flex">
                        <label class="form-check-label title-label fw-semibold d-flex align-items-end" for="flexCheckDefault-TheAesthetic">The Aesthetic</label>
                        <h6 class="text-center keranjang-kategori p-1 px-2 mb-2 d-flex align-items-center mb-3">Venue</h6>
                    </div>
                        <h6 class="title-label fw-semibold d-inline-block">Kota Jakarta</h6>
                </div>
            </div>
            <div class="keranjang-konten d-flex justify-content-between mt-2">
                <div class="row">
                    <div class="col-6">
                        <div class="konten-detail d-flex align-items-center">
                            <div class="form-check jcs" >
                            <input class="form-check-input mb-1 me-3" type="checkbox" value="" id="flexCheckDefault-TheAesthetic"/>
                            </div>
                            <img class="me-2" src="/img/The-Aesthetic.png" alt="">
                            <div class="row">
                                <h5 class="konten-title fw-semibold title-label">The Aesthetic</h5>
                                <h6 class="konten-price fw-semibold title-label">Rp. 100.000.000</h6>
                                <h6 class="konten-catatan text-success">Tulis Catatan</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="konten-crud d-flex align-items-center">
                            <div class="row">
                                <h6 class="text-center konten-time title-label"><span  class="preorder p-1">Pre-Order 30 hari</span></h6>
                                <div class="crud">
                                    <div class="count jcs text-secondary">
                                        <h5 class="fw-semibold m-0 p-2 pe-3 border-end">Pindahkan Ke Wishlist</h5>
                                        <a href="#" class="text-secondary mx-2 me-5 jcc" style="font-size: 22px"><iconify-icon icon="mdi:rubbish"></iconify-icon></a>
                                        <div class="listnumber jcs border-bottom">
                                            <button class="btn btn-light jcc px-2 me-2 rounded-circle"><iconify-icon icon="ic:baseline-minus"></iconify-icon></button>
                                            <h6 class="px-3 m-0">1</h6>
                                            <button class="btn btn-light jcc px-2 ms-2 rounded-circle"><iconify-icon icon="ic:outline-plus"></iconify-icon></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>

                    </div>
                </div>
            </div>
            <hr>
            {{-- Items --}}
            <div class="form-check jcs" >
                <input class="form-check-input mb-1 me-3" type="checkbox" value="" id="flexCheckDefault-TheAesthetic"/>
                <div class="row">
                    <div class="d-flex">
                        <label class="form-check-label title-label fw-semibold d-flex align-items-end" for="flexCheckDefault-TheAesthetic">The Aesthetic</label>
                        <h6 class="text-center keranjang-kategori p-1 px-2 mb-2 d-flex align-items-center mb-3">Venue</h6>
                    </div>
                        <h6 class="title-label fw-semibold d-inline-block">Kota Jakarta</h6>
                </div>
            </div>
            <div class="keranjang-konten d-flex justify-content-between mt-2">
                <div class="row">
                    <div class="col-6">
                        <div class="konten-detail d-flex align-items-center">
                            <div class="form-check jcs" >
                            <input class="form-check-input mb-1 me-3" type="checkbox" value="" id="flexCheckDefault-TheAesthetic"/>
                            </div>
                            <img class="me-2" src="/img/The-Aesthetic.png" alt="">
                            <div class="row">
                                <h5 class="konten-title fw-semibold title-label">The Aesthetic</h5>
                                <h6 class="konten-price fw-semibold title-label">Rp. 100.000.000</h6>
                                <h6 class="konten-catatan text-success">Tulis Catatan</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="konten-crud d-flex align-items-center">
                            <div class="row">
                                <h6 class="text-center konten-time title-label"><span  class="preorder p-1">Pre-Order 30 hari</span></h6>
                                <div class="crud">
                                    <div class="count jcs text-secondary">
                                        <h5 class="fw-semibold m-0 p-2 pe-3 border-end">Pindahkan Ke Wishlist</h5>
                                        <a href="#" class="text-secondary mx-2 me-5 jcc" style="font-size: 22px"><iconify-icon icon="mdi:rubbish"></iconify-icon></a>
                                        <div class="listnumber jcs border-bottom">
                                            <button class="btn btn-light jcc px-2 me-2 rounded-circle"><iconify-icon icon="ic:baseline-minus"></iconify-icon></button>
                                            <h6 class="px-3 m-0">1</h6>
                                            <button class="btn btn-light jcc px-2 ms-2 rounded-circle"><iconify-icon icon="ic:outline-plus"></iconify-icon></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>

                    </div>
                </div>
            </div>
            <hr>

        </div>
    </div>
@endsection