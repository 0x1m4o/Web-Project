@extends('layouts.dashboard-vendor')
@section('styles')
    <style>
        .switch {
 --button-width: 3.5em;
 --button-height: 2em;
 --toggle-diameter: 1.5em;
 --button-toggle-offset: calc((var(--button-height) - var(--toggle-diameter)) / 2);
 --toggle-shadow-offset: 10px;
 --toggle-wider: 3em;
 --color-grey: #cccccc;
 --color-green: #4296f4;
}

.slider {
 display: inline-block;
 width: var(--button-width);
 height: var(--button-height);
 background-color: var(--color-grey);
 border-radius: calc(var(--button-height) / 2);
 position: relative;
 transition: 0.3s all ease-in-out;
}

.slider::after {
 content: "";
 display: inline-block;
 width: var(--toggle-diameter);
 height: var(--toggle-diameter);
 background-color: #fff;
 border-radius: calc(var(--toggle-diameter) / 2);
 position: absolute;
 top: var(--button-toggle-offset);
 transform: translateX(var(--button-toggle-offset));
 box-shadow: var(--toggle-shadow-offset) 0 calc(var(--toggle-shadow-offset) * 4) rgba(0, 0, 0, 0.1);
 transition: 0.3s all ease-in-out;
}

.switch input[type="checkbox"]:checked + .slider {
 background-color: var(--color-green);
}

.switch input[type="checkbox"]:checked + .slider::after {
 transform: translateX(calc(var(--button-width) - var(--toggle-diameter) - var(--button-toggle-offset)));
 box-shadow: calc(var(--toggle-shadow-offset) * -1) 0 calc(var(--toggle-shadow-offset) * 4) rgba(0, 0, 0, 0.1);
}

.switch input[type="checkbox"] {
 display: none;
}

.switch input[type="checkbox"]:active + .slider::after {
 width: var(--toggle-wider);
}

.switch input[type="checkbox"]:checked:active + .slider::after {
 transform: translateX(calc(var(--button-width) - var(--toggle-wider) - var(--button-toggle-offset)));
}

    </style>
@endsection
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
                <div class="container mt-5" style="border-radius: 20px; background-color: white;">
                    <h3 style="font-weight: bold; padding-top: 20px;">Manajemen Ulasan</h3>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Konten</th>
                            <th>Rating</th>
                            <th>Gambar Produk</th>
                            <th>Tampilkan pada Feed</th>
                            <th>Tindakan</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td style="padding-top: 15px">
                                <p style="font-size: 15px;">Nomor Pesanan: <a href="" style="text-decoration: none;">1032976643970636</a></p>
                                <p style="font-size: 12px; font-weight: bold;">Main Review:</p>
                                <p style="font-size: 12px;">ok mantap</p>
                                <img src="/img/Tropical.png" alt="produk" width="50" height="50" style="border-radius: 10px;">
                                <p style="padding-top: 10px; font-size: 12px;">Created: 09 Jan 2023</p>
                              </td>
                              <td>
                                <a href="" class="text-warning text-decoration-none" style="font-size: 15px;">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
            
                                </a>
                              </td>
                              <td style="padding-top: 15px">
                                <img src="/img/produk1.png" alt="produk" width="50" height="50">
                              </td>
                              <td style="padding-top: 15px">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                  </label>
                                </td>
                              <td>
                                  <div class="d-flex" style="margin-bottom: 10px;">
                                    <img src="/img/profile.png" alt="" style="border-radius: 50%;" width="30" height="30">
                                  <a href="" style="padding-left: 5px;font-size: 10px; width: 80px;text-decoration: none; align-self: center;">Vanessa Oey</a>
                                  <i class='bx bxs-message-rounded-dots align-self-center' style="color: #0d6efd;"></i>
                                  </div>

                                  <button class="btn btn-primary"><i class='bx bxs-edit-alt'></i> Balas</button>
                              </td>
                            </tr>
                            
                          </tbody>
                      </table>
                </div>

            </div>

        </div>

    </div>
@endsection
