    @extends('layouts.main')
    @section('styles')
        <style>
            .profile-checklist .profile-checklist-image img {
                border-radius: 50%;
            }

            .profile-checklist-name {
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .profile-checklist-name a {
                text-decoration: none;
                color: #49516F;
                font-weight: bold;
                margin-left: 15px;
            }

            .checklist-custom-wedding .custom-radio-btn {
            width: 37px;
            height: 33px;
            border: 1px solid #49516F;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            }
            
            .checklist-custom-wedding .custom-radio-btn .checkmark {
                width: calc(90% - 7px);
                height: calc(90% - 7px);
                border-radius: 50%;
                background: linear-gradient(90deg, #093028 0%, #237A57 100%);
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                display: inline-block;
                opacity: 0;
                transition: opacity 0.5s ease;
            }

            .checklist-custom-wedding .custom-radio-btn input {
                display: none;
            }

            .checklist-custom-wedding .custom-radio-btn input:checked + .checkmark {
                opacity: 1;
            }
        </style>
    @endsection
    @section('content')
    <div class="content-checklist" style="overflow-x: hidden;">
    <div class="row mb-5">
        <div class="col-10 checklist-profile mx-5 mt-5" style="width: 300px; height: 
        350px; padding: 20px; border-radius: 20px; background-color: white;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
            <div class="profile-checklist d-flex" style="border-bottom: 1px solid #C4C4C4; margin: 10px 10px 10px 10px; ">
                <div class="profile-checklist-image">
                    <a href="#">
                        <img src="/img/Rectangle 35.png" />
                    </a>
                </div>
                <div class="profile-checklist-name" style="padding-bottom: 20px;">
                    <a href="#">The Wedding of <br> Vanessa & Gerald</a>
                </div>
            </div>
            <div class="many-checklist">
                <div class="tanggal-pernikahan d-flex justify-content-start p-2" style="position: relative">
                    <i class="bi bi-calendar3" style="padding-right: 10px; font-size: 30px; color: #979797;"></i>
                    <h6 style="padding-right: 30px; font-weight: bold; color: #49516F; align-self: center; ">Tanggal Pernikahan</h6>
                    <i class='bx bxs-pencil' style="position: absolute; left: 235px; padding-top: 5px;"></i>
                </div> 
                <div class="lokasi-pernikahan d-flex justify-content-start p-2">
                    <i class='bx bx-current-location' style="padding-right: 10px; font-size: 30px; color: #979797;"></i>
                    <h6 style="padding-right: 30px; font-weight: bold; color: #49516F; align-self: center;">Lokasi Pernikahan</h6>
                    <i class='bx bxs-pencil' style="position: absolute; left: 290px;"></i>
                </div> 
                <div class="budget-pernikahan d-flex justify-content-start p-2">
                    <img src="/img/budget.png" alt="budget" width="30" height="30" style="margin-right: 10px">
                    <h6 style="padding-right: 30px; font-weight: bold; color: #49516F; align-self: center;">Budget Pernikahan</h6>
                    <i class='bx bxs-pencil' style="position: absolute; left: 290px;"></i>
                </div> 
                <div class="tamu-pernikahan d-flex justify-content-start p-2">
                    <i class='bi bi-people-fill' style="padding-right: 10px; font-size: 30px; color: #979797;"></i>
                    <h6 style="padding-right: 30px; font-weight: bold; color: #49516F; align-self: center;">Tamu Undangan</h6>
                    <i class='bx bxs-pencil' style="position: absolute; left: 290px;"></i>
                </div> 
            </div>
        </div> 
        <div class="mt-5" style="width: 1000px; background-color: white;border-radius: 20px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border: 4px solid #FFFFFF; padding-top: 20px;">
            <h3 style="text-align: center; font-weight: bold; color: #49516F;">Wedding Checklist</h3>
            <div class="bagikan" style="display: flex; justify-content: end; border-bottom: 1px solid #C4C4C4">
                <i class='bx bxs-share-alt' style="font-size: 30px; color: #979797;"></i>
            </div>

            {{-- 1 --}}
            <div class="wedding d-flex justify-content-between mt-3">
                <h4 style="color: rgba(0, 0, 0, 0.7); font-weight: bold;">Pre-Wedding Photo/Video Shoot</h4>
                <button style="padding: 5px 10px;background: #FFFFFF; border: 1px solid #FFFFFF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; font-size: 20px; color: #237A57; font-weight: bold;"><i class='bx bx-plus'></i>  Tambah Checklist</button>
            </div>
            <div class="waktu-wedding">
                <h5 style="font-weight: bold; color: #49516F;">Agustus 2023</h5>
                <div class="checklist-custom-wedding d-flex justify-content-between mt-3" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; border: 1px solid #FFFFFF; padding: 5px 10px;">
                    <label class="custom-radio-btn" style="float: left; margin-right: 10px;">
                        <input type="checkbox" name="checkbox" />     
                        <span class="checkmark"></span>
                    </label>
                    <div class="container-fluid">
                        <h5 style="font-size:18px;font-weight: bold; color: #49516F;">Sewa atau siapkan busana untuk sesi foto & video pre-wedding</h5>
                    </div>
                    <i class='bx bx-dots-horizontal-rounded align-self-center' style="font-size: 30px;" ></i>
                </div>
                <div class="checklist-custom-wedding d-flex justify-content-between mt-4" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; border: 1px solid #FFFFFF; padding: 5px 10px;">
                    <label class="custom-radio-btn" style="float: left; margin-right: 10px;">
                        <input type="checkbox" name="checkbox" />     
                        <span class="checkmark"></span>
                    </label>
                    <div class="container-fluid">
                        <h5 style="font-size:18px;font-weight: bold; color: #49516F;">Tentukan lokasi atau studio pilihan Anda untuk sesi foto & video pre-wedding</h5>
                    </div>
                    <i class='bx bx-dots-horizontal-rounded align-self-center' style="font-size: 30px;" ></i>
                </div>
            </div>
            <div class="waktu-wedding mt-4">
                <h5 style="font-weight: bold; color: #49516F;">September 2023</h5>
                <div class="checklist-custom-wedding d-flex justify-content-between mt-3" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; border: 1px solid #FFFFFF; padding: 5px 10px;">
                    <label class="custom-radio-btn" style="float: left; margin-right: 10px;">
                        <input type="checkbox" name="checkbox" />     
                        <span class="checkmark"></span>
                    </label>
                    <div class="container-fluid">
                        <h5 style="font-size:18px;font-weight: bold; color: #49516F;">Pesan fotografer untuk sesi foto & video pre-wedding 📸</h5>
                    </div>
                    <i class='bx bx-dots-horizontal-rounded align-self-center' style="font-size: 30px;" ></i>
                </div>
                <div class="checklist-custom-wedding d-flex justify-content-between mt-4" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; border: 1px solid #FFFFFF; padding: 5px 10px;">
                    <label class="custom-radio-btn" style="float: left; margin-right: 10px;">
                        <input type="checkbox" name="checkbox" />     
                        <span class="checkmark"></span>
                    </label>
                    <div class="container-fluid">
                        <h5 style="font-size:18px;font-weight: bold; color: #49516F;">Pesan videografer untuk sesi foto & video pre-wedding 🎥</h5>
                    </div>
                    <i class='bx bx-dots-horizontal-rounded align-self-center' style="font-size: 30px;" ></i>
                </div>
                <h6 style="color: #237A57; font-weight: bold; margin-top: 20px; cursor: pointer;">Lihat Semua Checklist (6) <img src="/img/arrow_bottom.png" alt=""></h6>
            </div>

            {{-- 2 --}}
            <div class="wedding d-flex justify-content-between mt-3">
                <h4 style="color: rgba(0, 0, 0, 0.7); font-weight: bold;">Akad Nikah</h4>
                <button style="padding: 5px 10px;background: #FFFFFF; border: 1px solid #FFFFFF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; font-size: 20px; color: #237A57; font-weight: bold;"><i class='bx bx-plus'></i>  Tambah Checklist</button>
            </div>
            <div class="waktu-wedding">
                <h5 style="font-weight: bold; color: #49516F;">September 2023</h5>
                <div class="checklist-custom-wedding d-flex justify-content-between mt-3" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; border: 1px solid #FFFFFF; padding: 5px 10px;">
                    <label class="custom-radio-btn" style="float: left; margin-right: 10px;">
                        <input type="checkbox" name="checkbox" />     
                        <span class="checkmark"></span>
                    </label>
                    <div class="container-fluid">
                        <h5 style="font-size:18px;font-weight: bold; color: #49516F;">Cari venue yang sesuai dengan kapasitas tamu Anda</h5>
                    </div>
                    <i class='bx bx-dots-horizontal-rounded align-self-center' style="font-size: 30px;" ></i>
                </div>
                <div class="checklist-custom-wedding d-flex justify-content-between mt-4" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; border: 1px solid #FFFFFF; padding: 5px 10px;">
                    <label class="custom-radio-btn" style="float: left; margin-right: 10px;">
                        <input type="checkbox" name="checkbox" />     
                        <span class="checkmark"></span>
                    </label>
                    <div class="container-fluid">
                        <h5 style="font-size:18px;font-weight: bold; color: #49516F;">Cek kapasitas listrik di lokasi acara resepsi pernikahan</h5>
                    </div>
                    <i class='bx bx-dots-horizontal-rounded align-self-center' style="font-size: 30px;" ></i>
                </div>
            </div>
            <div class="waktu-wedding mt-4">
                <div class="checklist-custom-wedding d-flex justify-content-between mt-3" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; border: 1px solid #FFFFFF; padding: 5px 10px;">
                    <label class="custom-radio-btn" style="float: left; margin-right: 10px;">
                        <input type="checkbox" name="checkbox" />     
                        <span class="checkmark"></span>
                    </label>
                    <div class="container-fluid">
                        <h5 style="font-size:18px;font-weight: bold; color: #49516F;">Cek ketersediaan sound system di lokasi acara resepsi pernikahan</h5>
                    </div>
                    <i class='bx bx-dots-horizontal-rounded align-self-center' style="font-size: 30px;" ></i>
                </div>
                <div class="checklist-custom-wedding d-flex justify-content-between mt-4" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; border: 1px solid #FFFFFF; padding: 5px 10px;">
                    <label class="custom-radio-btn" style="float: left; margin-right: 10px;">
                        <input type="checkbox" name="checkbox" />     
                        <span class="checkmark"></span>
                    </label>
                    <div class="container-fluid">
                        <h5 style="font-size:18px;font-weight: bold; color: #49516F;">Pesan vendor katering untuk acara resepsi pernikahan 🍴</h5>
                    </div>
                    <i class='bx bx-dots-horizontal-rounded align-self-center' style="font-size: 30px;" ></i>
                </div>
                <h6 style="color: #237A57; font-weight: bold; margin-top: 20px; cursor: pointer;">Lihat Semua Checklist (16) <img src="/img/arrow_bottom.png" alt=""></h6>
            </div>

            {{-- 3 --}}
            <div class="wedding d-flex justify-content-between mt-3">
                <h4 style="color: rgba(0, 0, 0, 0.7); font-weight: bold;">Resepsi</h4>
                <button style="padding: 5px 10px;background: #FFFFFF; border: 1px solid #FFFFFF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; font-size: 20px; color: #237A57; font-weight: bold;"><i class='bx bx-plus'></i>  Tambah Checklist</button>
            </div>
            <div class="waktu-wedding">
                <h5 style="font-weight: bold; color: #49516F;">November 2023</h5>
                <div class="checklist-custom-wedding d-flex justify-content-between mt-3" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; border: 1px solid #FFFFFF; padding: 5px 10px;">
                    <label class="custom-radio-btn" style="float: left; margin-right: 10px;">
                        <input type="checkbox" name="checkbox" />     
                        <span class="checkmark"></span>
                    </label>
                    <div class="container-fluid">
                        <h5 style="font-size:18px;font-weight: bold; color: #49516F;">Cari venue yang sesuai dengan kapasitas tamu Anda</h5>
                    </div>
                    <i class='bx bx-dots-horizontal-rounded align-self-center' style="font-size: 30px;" ></i>
                </div>
                <div class="checklist-custom-wedding d-flex justify-content-between mt-3" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; border: 1px solid #FFFFFF; padding: 5px 10px;">
                    <label class="custom-radio-btn" style="float: left; margin-right: 10px;">
                        <input type="checkbox" name="checkbox" />     
                        <span class="checkmark"></span>
                    </label>
                    <div class="container-fluid">
                        <h5 style="font-size:18px;font-weight: bold; color: #49516F;">Cari venue yang sesuai dengan kapasitas tamu Anda</h5>
                    </div>
                    <i class='bx bx-dots-horizontal-rounded align-self-center' style="font-size: 30px;" ></i>
                </div>
            </div>
            <div class="waktu-wedding mt-4">
                <div class="checklist-custom-wedding d-flex justify-content-between mt-3" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; border: 1px solid #FFFFFF; padding: 5px 10px;">
                    <label class="custom-radio-btn" style="float: left; margin-right: 10px;">
                        <input type="checkbox" name="checkbox" />     
                        <span class="checkmark"></span>
                    </label>
                    <div class="container-fluid">
                        <h5 style="font-size:18px;font-weight: bold; color: #49516F;">Cek ketersediaan sound system di lokasi acara resepsi pernikahan</h5>
                    </div>
                    <i class='bx bx-dots-horizontal-rounded align-self-center' style="font-size: 30px;" ></i>
                </div>
            </div>

            <div class="waktu-wedding mt-4">
                <h5 style="font-weight: bold; color: #49516F;">Desember 2023</h5>
                <div class="checklist-custom-wedding d-flex justify-content-between mt-4" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; border: 1px solid #FFFFFF; padding: 5px 10px;">
                    <label class="custom-radio-btn" style="float: left; margin-right: 10px;">
                        <input type="checkbox" name="checkbox" />     
                        <span class="checkmark"></span>
                    </label>
                    <div class="container-fluid">
                        <h5 style="font-size:18px;font-weight: bold; color: #49516F;">Pesan vendor katering untuk acara resepsi pernikahan 🍴</h5>
                    </div>
                    <i class='bx bx-dots-horizontal-rounded align-self-center' style="font-size: 30px;" ></i>
                </div>
                <h6 style="color: #237A57; font-weight: bold; margin-top: 20px; cursor: pointer;">Lihat Semua Checklist (16) <img src="/img/arrow_bottom.png" alt=""></h6>
            </div>

            {{-- end --}}
        </div>
    </div>   
</div>
    @endsection