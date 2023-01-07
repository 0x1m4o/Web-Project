@extends('layouts.main')

@section('styles')
    <style>
        .input-nabung input[type=text] {
            width:100%;
            box-sizing: border-box;
            border: none;
            border-radius: 12px;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
        }

        .input-nabung {
            border: none;
        }

        .input-nabung input[type=text]:focus {
            outline: none;
        }

        .input-nabung input::placeholder {
            font-weight: bold;
            color: #49516F;
        }

        .nabung {
            width: 200px;
            height: 50px;
            border: none;
        }
    </style>
@endsection

@section('content')
    <div class="container mt-5 mb-5" style="background-color: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;">
        <div class="content d-flex">
            <i class='bx bx-chevron-left' style="padding-top: 25px;font-size: 30px;"></i>
            <div style="border-bottom: 1px solid #C4C4C4; width: 1200px;">
                <h5 style="padding-top: 20px;font-weight: bold;font-size: 32px; color: #49516F; margin-bottom: 40px;">Following</h5>
            </div>
        </div>
        <div class="row d-flex justify-content-between">
            <div class="bg-white rounded-3 mb-3 col-3" style="margin-left: 20px; margin-top: 40px;width: 626px; height: 62px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
              <div class="input-nabung d-flex">
                  <input type="text" placeholder="Cari Nama Vendor..." class="nabung container-fluid" style="opacity: 0.7; padding-top: 10px;">
                  <button class="btn" style="height: 35px; width: 35px; margin: auto; border-radius: 12px; background: #979797; margin-top: 15px; margin-right: 10px;"><i class='bx bx-search' style="color: white; font-size: 18px; display: flex; justify-content: center"></i></button>
              </div>
            </div>
            <div class="sub-select col-3">
                <div class="filter-vendor" style="margin-top: 40px;">
                  <select id="filter" style="width: 117px; height: 43px;border-radius: 12px; border: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px; margin-right: 20px; margin-top: 10px;">
                      <option value="filter" style="text-align: center;">Filter</option>
                    </select>
                    <select id="filter" style="width: 117px; height: 43px;border-radius: 12px; border: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px;">
                        <option value="semua" style="text-align: center;">Semua</option>
                      </select>
              </div>
            </div>
        </div>

        {{-- MUA --}}
        <div class="container" style="border-bottom: 1px solid #C4C4C4;">
            <h5 style="font-weight: bold;color: #49516F;">MUA</h5>
            <div class="container d-flex justify-content-between">
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 75px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold;margin: auto;">MUA</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa </p>
                    </div>
                </div>
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 75px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold;margin: auto;">MUA</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud. </p>
                    </div>
                </div>
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 75px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold;margin: auto;">MUA</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud.</p>
                    </div>
                </div>
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 75px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold;margin: auto;">MUA</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud.</p>
                    </div>
                </div>
            </div>
            <div class="container row">
                <div class="content" style="margin-left: 10px; background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 75px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold;margin: auto;">MUA</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud.</p>
                    </div>
                </div>
                <div class="content" style="margin-left: 22px; background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 75px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold;margin: auto;">MUA</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud.</p>
                    </div>
                </div>
            </div>
            
        </div>

        {{-- Venue --}}
        <div class="container" style="border-bottom: 1px solid #C4C4C4;">
            <h5 style="font-weight: bold;color: #49516F;">VENUE</h5>
            <div class="container d-flex justify-content-between">
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 90px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold; margin: auto;">VENUE</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud.</p>
                    </div>
                </div>
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 90px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold; margin: auto;">VENUE</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud. </p>
                    </div>
                </div>
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 90px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold; margin: auto;">VENUE</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud. </p>
                    </div>
                </div>
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 90px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold; margin: auto;">VENUE</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud.</p>
                    </div>
                </div>
            </div>

            
        </div>

        {{-- BAND --}}
        <div class="container" style="border-bottom: 1px solid #C4C4C4;">
            <h5 style="font-weight: bold;color: #49516F;">BAND</h5>
            <div class="container d-flex justify-content-between">
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 85px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold; margin: auto;">BAND</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud.</p>
                    </div>
                </div>
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 85px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold; margin: auto;">BAND</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud. </p>
                    </div>
                </div>
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 85px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold; margin: auto;">BAND</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud. </p>
                    </div>
                </div>
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 85px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold; margin: auto;">BAND</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud.</p>
                    </div>
                </div>
            </div>

            
        </div>

        {{-- DEKORASI --}}
        <div class="container">
            <h5 style="font-weight: bold;color: #49516F;">DEKORASI</h5>
            <div class="container d-flex justify-content-between">
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold; margin: auto;">DEKORASI</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud.</p>
                    </div>
                </div>
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold; margin: auto;">DEKORASI</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud. </p>
                    </div>
                </div>
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold; margin: auto;">DEKORASI</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud. </p>
                    </div>
                </div>
                <div class="content" style="background-color: white; width: 300px;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <div class="comment-toko d-flex justify-content-between" style="border-bottom: 1px solid #C4C4C4; ">
                            <img src="/img/logo_profile.png" alt="Logo Profile" width="60" height="60" style="margin-right: 10px;">
                            <div class="judul-toko">
                                <h6 style="font-weight: bold; color: #49516F;font-size: 18px;">The Aesthetic</h6>
                                <p style="font-weight: bold; color: #49516F;font-size: 12px;">Jakarta</p>
                            </div>
                        <div class="judul-following">
                            <div style="width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; font-weight: bold; margin: auto;">DEKORASI</div>
                            <div style="margin-top: 10px; width: 115px; height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px 20px; border-radius: 12px; background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white; font-weight: bold;">Following</div>
                        </div>
                    </div>
                    <div class="komentar-toko" style="margin-top: 10px; font-size: 10px;">
                        <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud.</p>
                    </div>
                </div>
            </div>

            
        </div>

        <h5 style="color: #237A57; text-align: center;font-size: 18px; padding: 38px 0px 40px 0px;">Lihat Berikutnya</h5>
    </div>
@endsection