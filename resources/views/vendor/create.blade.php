@extends('layouts.dashboard-vendor')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 p-0">
                <div class="container mt-5" style="width: 300px; border-radius: 20px;background-color: white;">
                    <section class="profile">
                        <a href="/profile" class="rounded-circle p-2 px-3" style="background-color: #237A57;font-size: 20px">
                            <img src="/img/avatar.png" style="width: 17px; height: 17px" alt="" />
                        </a>
                        <div class="profile-name">
                            <a href="#">The Aesthetic</a>
                        </div>
                    </section>
                    <section class="dashboard">
                        <div class="dashboard-title">
                            <a href="/maripay">
                                <p><i class="bi bi-wallet"></i> Maripay</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-file-bar-graph"></i>Followers</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-check-square"></i>Availibility</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-gear"></i> Setting</p>
                            </a>
                        </div>
                        <div class="dashboard-data">
                            <p class="text-end">Rp 30,000,000</p>
                            <p class="text-end">10</p>
                        </div>
                    </section>
                    <section class="kotak-masuk">
                        <i class="bi bi-envelope"></i>
                        <span>Kotak Masuk</span>
                    </section>
                    <section class="contact">
                        <div class="contact-title">
                            <a href="/vendor-admin/chat">
                                <p><i class="bi bi-chat"></i> Chat</p>
                            </a>
                            <a href="/vendor-admin/produk">
                                <p>
                                    <i class="bi bi-box">

                                    </i>
                                    Produk
                                </p>
                            </a>
                            <a href="/vendor-admin/pesanan">
                                <p><i class="bi bi-bag"></i> Pesanan</p>
                            </a>
                            <a href="/vendor-admin/ulasan">
                                <p><i class="bi bi-reply"></i> Ulasan</p>
                            </a>
                            <a href="">
                                <p><i class="bi bi-info-circle"></i> Pesan Bantuan</p>
                            </a>

                            <a href="">
                                <strong><i class="bi bi-box-arrow-left"></i> Log Out</strong>
                            </a>
                        </div>
                        <div>
                            <p>5</p>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-8 p-0">
                <div class="container mt-5 mb-5" style="border-radius: 20px; background-color: white;">
                    <h4 style="font-weight: bold; text-align: center; padding-top: 20px;">Buat Produk Saya</h4>
                    <form action="/vendor-admin/produk" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar Produk</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Produk </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama produk anda" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Kategory Produk </label>
                            <select name="category_id" class="form-control">
                                <option value="">Venue</option>
                                <option value="">Dekorasi</option>
                                <option value="">MUA</option>
                                <option value="">Catering</option>
                                <option value="">Band</option>
                                <option value="">W.O.</option>
                                <option value="">Busana</option>
                                <option value="">Souvenir</option>
                                <option value="">Perhiasan</option>
                                <option value="">MC</option>
                                <option value="">Undangan</option>
                                <option value="">Wedding Planner</option>
                                <option value="">Honey Moon</option>
                                <option value="">Photo Booth</option>
                                <option value="">Koreografi</option>
                                <option value="">Seserahan</option>
                            </select>
                        </div>
                        <p>Fasilitas: </p>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                              <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                            </div>
                            <input type="text" class="form-control"  placeholder="Masukkaan Fasilitas Listrik Anda" aria-label="Text input with checkbox">
                        </div>
                        <div class="row" style="margin-left: 1px; margin-bottom: 30px;">
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="check1" name="option1" value="panggung">
                                    <label class="form-check-label" style="padding-left: 20px; padding-top: 5px; font-size: 18px">Panggung</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="check1" name="option1" value="panggung">
                                    <label class="form-check-label" style="padding-left: 20px; padding-top: 5px; font-size: 18px">Sound System</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="check1" name="option1" value="panggung">
                                    <label class="form-check-label" style="padding-left: 20px; padding-top: 5px; font-size: 18px">Proyektor</label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="check1" name="option1" value="panggung">
                                    <label class="form-check-label" style="padding-left: 20px; padding-top: 5px; font-size: 18px">Round Table</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="check1" name="option1" value="panggung">
                                    <label class="form-check-label" style="padding-left: 20px; padding-top: 5px; font-size: 18px">VIP Seats</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="check1" name="option1" value="panggung">
                                    <label class="form-check-label" style="padding-left: 20px; padding-top: 5px; font-size: 18px">WIFI</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Total Luas </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan ukuran luas total luas" name="luas-total">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Total Luas Ruang Ganti </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan ukuran luas ruang ganti" name="luas-ruang-ganti">
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Buat Produk</button>
                    </form>
                </div> 

            </div>

        </div>

    </div>
@endsection
