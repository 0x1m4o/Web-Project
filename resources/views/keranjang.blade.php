@extends('layouts.main')

@section('content')
<div class="container keranjang-container p-3 mt-5 mb-5 bg-white" style="width: 100%;border-radius:12px;">
    <div class="keranjang-title jcs">
        <a href="/" class="text-secondary mt-2 p-2 fs-5 jcs">
            <iconify-icon icon="material-symbols:arrow-back-ios-new-rounded"></iconify-icon>
        </a>
        <h3 class="fw-semibold title-label p-0 m-0 mt-2 ">Keranjang</h3>
    </div>
    <hr class="my-0">
    <div class="keranjang-body">
        <div class="form-check jcs">
            <input class="form-check-input mb-1 me-3" type="checkbox" value="" id="checkAll" name="selectall" autocomplete="off" onclick="eventCheckBoxAll()" />
            <label class="form-check-label title-label fw-semibold" for="flexCheckDefault">Pilih Semua</label>
        </div>
        <hr>

        {{-- Items --}}
        <div class="form-check jcs">
            <input class="form-check-input mb-1 me-3 checkallthis" type="checkbox" value="" id="check-TheAesthetic" />
            <div class="row">
                <div class="d-flex">
                    <label class="form-check-label title-label fw-semibold d-flex align-items-end mt-2" for="check-TheAesthetic">The Aesthetic</label>
                    <p class="text-center keranjang-kategori p-1 px-2 mb-2 d-flex align-items-center mb-3">Venue</p>
                </div>
                <h6 class="title-label fw-semibold d-inline-block mb-5">Kota Jakarta</h6>
            </div>
        </div>
        <div class="keranjang-konten d-flex justify-content-between mt-2">
            <div class="row">
                <div class="col-6">
                    <div class="konten-detail d-flex align-items-center">
                        <div class="form-check jcs">
                            <input class="form-check-input mb-1 me-3 checkallthis TheAesthetic" type="checkbox" value="" />
                        </div>
                        <img class="me-4" src="/img/The-Aesthetic.png" alt="">
                        <div class="row konten-row">
                            <h5 class="konten-title fw-semibold title-label">The Aesthetic</h5>
                            <h6 class="konten-price fw-semibold title-label">Rp. 100.000.000</h6>
                            <a href="/" class="text-decoration-none"><h6 class="konten-catatan mt-3">Tulis Catatan</h6></a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="konten-crud d-flex align-items-center">
                        <div class="row">
                            <h6 class="text-center konten-time title-label"><span class="preorder p-1">Pre-Order 30
                                    hari</span></h6>
                            <div class="crud">
                                <div class="count jcs text-secondary">
                                    <h5 class="fw-semibold m-0 p-2 pe-3 border-end">Pindahkan Ke Wishlist</h5>
                                    <a href="#" class="text-secondary mx-2 me-5 jcc" style="font-size: 22px">
                                        <iconify-icon icon="mdi:rubbish"></iconify-icon>
                                    </a>
                                    <div class="listnumber jcs border-bottom">
                                        <button class="btn btn-light jcc px-2 me-2 rounded-circle">
                                            <iconify-icon icon="ic:baseline-minus"></iconify-icon>
                                        </button>
                                        <h6 class="px-3 m-0">1</h6>
                                        <button class="btn btn-light jcc px-2 ms-2 rounded-circle">
                                            <iconify-icon icon="ic:outline-plus"></iconify-icon>
                                        </button>
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
        <div class="form-check jcs">
            <input class="form-check-input mb-1 me-3 checkallthis" type="checkbox" value="" id="check-LanghamSCBD" />
            <div class="row">
                <div class="d-flex">
                    <label class="form-check-label title-label fw-semibold d-flex align-items-end mt-2" for="check-LanghamSCBD">Langham SCBD</label>
                    <p class="text-center keranjang-kategori p-1 px-2 mb-2 d-flex align-items-center mb-3">Venue</p>
                </div>
                <h6 class="title-label fw-semibold d-inline-block mb-5">Kota Jakarta Selatan</h6>
            </div>
        </div>
        <div class="keranjang-konten d-flex justify-content-between mt-2">
            <div class="row">
                <div class="col-6">
                    <div class="konten-detail d-flex align-items-center">
                        <div class="form-check jcs">
                            <input class="form-check-input mb-1 me-3 checkallthis LanghamSCBD" type="checkbox" value="" />
                        </div>
                        <img class="me-4" src="/img/ballroommelbourne.png" alt="">
                        <div class="row konten-row">
                            <h5 class="konten-title fw-semibold title-label">Ballroom Melbourne</h5>
                            <h6 class="konten-price fw-semibold title-label">Rp. 300.000.000</h6>
                            <a href="" class="text-decoration-none"><h6 class="konten-catatan mt-3">Tulis Catatan</h6></a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="konten-crud d-flex align-items-center mx-0">
                        <div class="row">
                            <h6 class="text-center konten-time title-label"><span class="preorder p-1">Pre-Order 30
                                    hari</span></h6>
                            <div class="crud">
                                <div class="count jcs text-secondary">
                                    <h5 class="fw-semibold m-0 p-2 pe-3 border-end">Pindahkan Ke Wishlist</h5>
                                    <a href="#" class="text-secondary mx-2 me-5 jcc" style="font-size: 22px">
                                        <iconify-icon icon="mdi:rubbish"></iconify-icon>
                                    </a>
                                    <div class="listnumber jcs border-bottom">
                                        <button class="btn btn-light jcc px-2 me-2 rounded-circle">
                                            <iconify-icon icon="ic:baseline-minus"></iconify-icon>
                                        </button>
                                        <h6 class="px-3 m-0">1</h6>
                                        <button class="btn btn-light jcc px-2 ms-2 rounded-circle">
                                            <iconify-icon icon="ic:outline-plus"></iconify-icon>
                                        </button>
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
    <div class="ringkasan mb-1" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;">
        <div class="row text-center title-label">
            <h5 class="fw-semibold mb-2">Ringkasan Belanja</h5>
            <h6 class="fw-semibold"><span class="border-bottom px-5 pb-2">Total 3 Vendor </span></h6>
            <h6 class="fw-semibold mt-2">Total Harga</h6>
            <h6 class="fw-semibold mt-0">Rp. 400.000.000</h6>
        </div>
        <div class="btn-konfirmasi pt-0 jcc">
            <a class="btn btn-md text-white" href="/checkout" role="button" style="background: linear-gradient(to right,rgba(9, 48, 40, 1),rgba(35, 122, 87, 1));">Konfirmasi</a>
        </div>
    </div>
</div>
<script>
    $("#checkAll").click(function() {
        $(".checkallthis").prop('checked', $(this).prop('checked'));
    });
    $("#check-LanghamSCBD").click(function() {
        $(".LanghamSCBD").prop('checked', $(this).prop('checked'));
    });
    $("#check-TheAesthetic").click(function() {
        $(".TheAesthetic").prop('checked', $(this).prop('checked'));
    });
</script>
@endsection