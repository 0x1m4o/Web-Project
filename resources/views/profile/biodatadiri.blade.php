@extends('layouts.no_footer')
@section('content')
<link rel="stylesheet" href="/css/profile/profile.css">
    <div class="container-fluid">
        <div class="row">
            @include('partials.profilesidebar')
            <div class="col-9">
                <div class="container" style="margin-top: 60px;border-radius: 10px;background: white;">
                    <nav class="navbar navbar-expand-lg navbar-light" id="menu">
                        <div class="container-fluid" style="border-bottom: 1px solid #49516F;">
                          <a class="navbar-brand" href="/profile">Profile</a>
                          <a class="navbar-brand aktif" href="/biodatadiri">Biodata Diri</a>
                          <a class="navbar-brand" href="/maripay">MariPay</a>
                          <a class="navbar-brand" href="/daftarrekening">Daftar Rekening</a>
                          <a class="navbar-brand" href="/keamanan-aktifitas">Keamanan</a>
                        </div>
                    </nav>
                    <div class="row p-5">   
                        <div class="col-4">
                            <div class="card" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                                <img src="{{ auth()->user()->avatar }}" class="card-img-top p-3  m-auto" style="width: 250px;">
                                <div class="card-body text-center mb-3">
                                    <label class="btn btn-outline-dark" for="upload">Pilih Foto</label> 
                                    <input type="file" id="upload" hidden accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="col-8"> 
                          <div class="container-fluid" style="border-bottom: 1px solid grey;">
                            <div class="row align-items-center">
                                <div class="col-11">
                                    <span class="mb-3 fs-4">
                                        Biodata Diri
                                    </span>
                                </div>
                                <div class="col-1">
                                        <i class="bi bi-pencil-fill fs-4" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Ubah Biodata Diri</h1>
                                                    <button type="button" class="btn-close d-block" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{ route('update.biodata') }}">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">Nama</label>
                                                            <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="date_of_birth" class="form-label">Tanggal Lahir</label>
                                                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ auth()->user()->date_of_birth }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <p>Jenis Kelamin</p>
                                                            <div class="d-flex align-items-center justify-content-around">
                                                                @if(auth()->user()->gender == "Laki-laki")
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="gender" value="Laki-laki" id="Laki-laki" checked>
                                                                    <label class="form-check-label fs-5" for="Laki-laki">
                                                                        Laki-laki
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="gender" value="Perempuan" id="Perempuan">
                                                                    <label class="form-check-label fs-5" for="Perempuan">
                                                                        Perempuan
                                                                    </label>
                                                                </div>
                                                                @elseif(auth()->user()->gender == "Perempuan")
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="gender" value="Laki-laki" id="Laki-laki">
                                                                    <label class="form-check-label fs-5" for="Laki-laki">
                                                                        Laki-laki
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="gender" value="Perempuan" id="Perempuan" checked>
                                                                    <label class="form-check-label fs-5" for="Perempuan">
                                                                        Perempuan
                                                                    </label>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white ">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>    
                                            </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-2" style="cursor: pointer; color: black;">
                            </div>
                            <div class="row ms-2 my-3">
                                <div class="col-6">
                                    <p class="mb-4">Nama</p>
                                    <p class="mb-4">Tanggal Lahir</p>
                                    <p class="mb-4">Jenis Kelamin</p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-4">{{ auth()->user()->name }}</p>
                                    <p class="mb-4">@if (auth()->user()->date_of_birth)
                                        {{ auth()->user()->date_of_birth }}
                                    @else
                                        -
                                    @endif</p>
                                    <p class="mb-4">@if (auth()->user()->gender)
                                        {{ auth()->user()->gender }}
                                    @else
                                        -
                                    @endif</p>
                                </div>
                            </div>
                          </div>  

                          <div class="container-fluid mt-3" style="border-bottom: 1px solid grey;">
                            <div class="row align-items-center">
                                <div class="col-11">
                                    <span class="mb-3 fs-4">
                                        Kontak
                                    </span>
                                </div>
                                <div class="col-1">
                                    <i class="bi bi-pencil-fill fs-4" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#staticBackdropkontak"></i>
                                    <div class="modal fade" id="staticBackdropkontak" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Ubah Kontak</h1>
                                                <button type="button" class="btn-close d-block" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="{{ route('update.kontak') }}">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ auth()->user()->email }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="phone" class="form-label">Nomor HP</label>
                                                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ auth()->user()->phone }}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white ">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>    
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2" style="cursor: pointer; color: black;">
                            </div>
                            <div class="row ms-2 my-3">
                                <div class="col-6">
                                    <p class="mb-4">Email</p>
                                    <p class="mb-4">Nomor HP</p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-4">{{ auth()->user()->email }}</p>
                                    <p class="mb-4">@if (auth()->user()->phone)
                                        {{ auth()->user()->phone }}
                                    @else
                                        -
                                    @endif</p>
                                </div>
                            </div>
                          </div>
                            
                          <div class="container-fluid mt-3">
                            <div class="row align-items-center">
                                <div class="col-11">
                                    <span class="mb-3 fs-4">
                                        Sandi
                                    </span>
                                </div>
                                <div class="col-1">
                                        <i class="bi bi-pencil-fill fs-4" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#staticBackdropsandi"></i>
                                        <div class="modal fade" id="staticBackdropsandi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Ubah Kata Sandi</h1>
                                                    <button type="button" class="btn-close d-block" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post">
                                                        <div class="mb-3">
                                                            <label for="current_password" class="form-label">Kata Sandi saat ini</label>
                                                            <span class="d-flex align-items-center justify-content-between form-control">
                                                                <input id="current_password" type="password" name="current_password" aria-describedby="emailHelp" value="" style="width: 95%; border: none">
                                                                <i class="bi bi-eye-slash" id="togglePasswordcp" style="cursor: pointer"></i>
                                                            </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="new_password" class="form-label">Kata Sandi Baru</label>
                                                            <span class="d-flex align-items-center justify-content-between form-control">
                                                                <input id="new_password" type="password" name="new_password" aria-describedby="emailHelp" value="" style="width: 95%; border: none">
                                                                <i class="bi bi-eye-slash" id="togglePasswordnp" style="cursor: pointer"></i>
                                                            </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="confirm_password" class="form-label">Konfirmasi Kata Sandi Baru</label>
                                                            <span class="d-flex align-items-center justify-content-between form-control">
                                                                <input id="confirm_password" type="password" name="current_password" aria-describedby="emailHelp" value="" style="width: 95%; border: none">
                                                                <i class="bi bi-eye-slash" id="togglePasswordcfm" style="cursor: pointer"></i>
                                                            </span>
                                                        </div>                                                  
                                                        <div class="modal-footer d-flex justify-content-between">
                                                            <a href="{{ route('password.request') }}" class="text-start text-decoration-none text-secondary" style="font-size: 14px">
                                                                Lupa Kata Sandi?
                                                            </a>        
                                                            <button type="submit" class="btn" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white ">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>    
                                            </div>
                                            </div>
                                        </div>                                        
                                </div>
                            </div>
                            <div class="col-sm-2" style="cursor: pointer; color: black;">
                            </div>
                            <div class="row ms-2 my-3">
                                <div class="col-6">
                                    <p class="mb-4">Sandi</p>
                                    <p class="mb-4">Terakhir diubah</p >
                                </div>
                                <div class="col-6">
                                    <p class="mb-4">*************</p>
                                    <p class="mb-4">18 Januari 2021</p>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
    <script>
        // Current Password
        const togglePassword = document.querySelector("#togglePasswordcp");
        const password = document.querySelector("#current_password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // New Password
        const togglePasswordnp = document.querySelector("#togglePasswordnp");
        const np = document.querySelector("#new_password");

        togglePasswordnp.addEventListener("click", function () {
            // toggle the type attribute
            const type = np.getAttribute("type") === "password" ? "text" : "password";
            np.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        //Confirm New Password
        const togglePasswordcfm = document.querySelector("#togglePasswordcfm");
        const cfm = document.querySelector("#confirm_password");

        togglePasswordcfm.addEventListener("click", function () {
            // toggle the type attribute
            const type = cfm.getAttribute("type") === "password" ? "text" : "password";
            cfm.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
    </script>
@endsection