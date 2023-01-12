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
                          <a class="navbar-brand" href="/biodatadiri">Biodata Diri</a>
                          <a class="navbar-brand" href="/maripay">MariPay</a>
                          <a class="navbar-brand" href="/daftarrekening">Daftar Rekening</a>
                          <a class="navbar-brand aktif" href="/keamanan">Keamanan</a>
                        </div>
                    </nav>
                    <div class="row mx-3 my-5">
                        <div class="col-6" style="color: #49516F;">
                            <div style="width: 400px; margin-bottom: 5em;">
                                <p class="fs-5 fw-bold">Hai {{ auth()->user()->name }}, tinjau aktivitasmu disini</p>
                            </div>
                            <a href="/keamanan-aktifitas" class="text-decoration-none text-decoration-none text-secondary" style="opacity: 0.5">     
                                <div class="d-flex justify-content-between align-items-center mt-5">
                                    <span class="fw-bold fs-5">Review Aktivitas</span>
                                </div>
                            </a>
                            <hr>
                            <a href="/keamanan-ubahsandi" class="fw-bold fs-5 text-decoration-none text-secondary" >
                                Ubah Sandi
                            </a>
                        </div>
                        <div class="col-6" style="color: #49516F;">
                            <div class="card" style="border: 1px solid #49516F; color: #49516F;">
                                <div style="width: 100%">
                                    <p class="fw-bold fs-5 px-3 py-2" style="border-bottom: 1px solid rgba(73, 81, 111, 0.3); ">Ubah Kata Sandi</p>    
                                </div>
                                <div class="row mx-4 mb-3 align-items-center">
                                    @if (Str::length(auth()->user()->password) == 10)
                                    <p>Jika Anda Login menggunakan Google gunakan default password berikut : <strong>{{ auth()->user()->password }}</strong></p>
                                    @endif
                                    <form method="post" action="{{ route('update.password') }}">
                                    @csrf
                                    <div class="pass-field">
                                        <div class="mb-3">
                                            <label for="current_password" class="form-label fw-bold">Kata Sandi saat ini</label>
                                            <span class="d-flex align-items-center justify-content-between form-control">
                                                <input id="current_password" placeholder="Masukan Password Lama" type="password" name="current_password" aria-describedby="emailHelp" value="" style="width: 95%; border: none">
                                                <i class="bi bi-eye-slash" id="togglePasswordcp" style="cursor: pointer"></i>
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="new_password" class="form-label fw-bold">Kata Sandi Baru</label>
                                            <span class="d-flex align-items-center justify-content-between form-control">
                                                <input id="new_password" placeholder="Masukan Password Baru" type="password" name="new_password" aria-describedby="emailHelp" value="" style="width: 95%; border: none">
                                                <i class="bi bi-eye-slash" id="togglePasswordnp" style="cursor: pointer"></i>
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="confirm_password" class="form-label fw-bold">Konfirmasi Kata Sandi Baru</label>
                                            <span class="d-flex align-items-center justify-content-between form-control">
                                                <input id="confirm_password" placeholder="Konfirmasi Password Baru" type="password" name="confirm_password" aria-describedby="emailHelp" value="" style="width: 95%; border: none">
                                                <i class="bi bi-eye-slash" id="togglePasswordcfm" style="cursor: pointer"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="requirements ms-1">
                                        <p class="fw-bold p-0 my-1" style="font-size: 12px">Password should meet the following requirements:</p>
                                            <div class="requirements-details d-flex align-items-center justify-content-start">
                                                <i class="text-secondary d-flex align-items-center text-center me-2" style="font-size: 11px;padding: 4px"><iconify-icon icon="maki:cross"></iconify-icon></i>
                                                <p class="fw-bold p-0 my-1 text-secondary" style="font-size: 11px">Length greater than or equal to 8 charactters</p>
                                            </div>
                                            <div class="requirements-details d-flex align-items-center justify-content-start">
                                                <i class="text-secondary d-flex align-items-center me-2" style="font-size: 11px; padding: 4px"><iconify-icon icon="maki:cross"></iconify-icon></i>
                                                <p class="fw-bold p-0 my-1 text-secondary" style="font-size: 11px">Upper case character</p>
                                            </div>
                                            <div class="requirements-details d-flex align-items-center justify-content-start">
                                                <i class="text-secondary d-flex align-items-center me-2 p-0" style="font-size: 0px"><iconify-icon icon="material-symbols:check-small-rounded" width="20"></iconify-icon></i>
                                                <p class="fw-bold p-0 my-1 text-success" style="font-size: 11px">Lower case character</p>
                                            </div>
                                            <div class="requirements-details d-flex align-items-center justify-content-start">
                                                <i class="text-secondary d-flex align-items-center me-2" style="font-size: 11px; padding: 4px"><iconify-icon icon="maki:cross"></iconify-icon></i>
                                                <p class="fw-bold p-0 my-1 text-secondary" style="font-size: 11px">Numeric character</p>
                                            </div>
                                            <div class="requirements-details d-flex align-items-center justify-content-start">
                                                <i class="text-secondary d-flex align-items-center me-2" style="font-size: 11px; padding: 4px"><iconify-icon icon="maki:cross"></iconify-icon></i>
                                                <p class="fw-bold p-0 my-1 text-secondary" style="font-size: 11px">Special character</p>
                                            </div>
                                            

                                        
                                    </div>
                                    <div class="d-flex justify-content-between mt-4">
                                        {{-- <a href="{{ route('password.request') }}" class="text-start text-decoration-none text-secondary" style="font-size: 14px">
                                            Lupa Kata Sandi?
                                        </a>    --}}
                                        <button type="submit" class="btn mx-auto" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%); color: white ">Ganti Password</button>
                                    </div>
                                    </form>

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