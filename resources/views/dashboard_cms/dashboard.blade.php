@extends('layouts.dashboard-admin')

<style>
    .aktif {
        font-weight: bold;
    }
    * {
        font-family: 'Poppins', sans-serif;
        color: #49516F;  
    }
    
    .dashboard * {
        color: #ffffff;
    } 
</style>

@section('content')
    <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-2">
                    <div class="container mt-5 p-5 shadow" style="border-radius: 20px;background: linear-gradient(90deg, #093028 0%, #237A57 100%);">
                        <section class="dashboard">
                            <h3 class="text-white fw-bold">Dashboard</h3>
                            <div class="mt-5 fw-semibold lh-lg fs-5 ms-2">
                                <a href="/dashboard-admin" class="text-decoration-none aktif">
                                    <p><i class="bi bi-shop me-2"></i> Overview</p>
                                </a>
                                <a href="/dashboard-admin-users"  class="text-decoration-none">
                                    <p><i class="bi bi-people me-2"></i> Users</p>
                                </a>
                                <a href=""  class="text-decoration-none">
                                    <p><i class="bi bi-boxes me-2"></i> Products</p>
                                </a>
                                <a href=""  class="text-decoration-none">
                                    <p><i class="bi bi-bar-chart-fill me-2"></i> Analytics</p>
                                </a>
                                <a href=""  class="text-decoration-none">
                                    <p><i class="bi bi-gear me-2"></i> Setting</p>
                                </a>
                            </div>
                        </section>    
                    </div>
                </div>
                <div class="col-9 mt-5">
                    <div class="container bg-light shadow" style="border-radius: 20px;">
                        <section class="mx-auto p-5">
                            <div class="d-flex justify-content-center">
                                <img src="img/The-Aesthetic.png" width="100" style="border-radius: 20px;">
                                <div class="ms-5">
                                    <h1 class="fw-bolder">The Aestetic</h1>
                                    <p class="text-left fs-5">Verified 
                                        <i class="bi bi-patch-check-fill" style="color: #237A57;"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-evenly mt-5">
                                <div class="display-1 text-center bg-white shadow-sm p-5" style="border-radius: 20px;">
                                    <h2 class="mb-3">Users</h2>
                                    <i class="bi bi-people d-block mb-3"></i>
                                    <h3>10.000+</h3>
                                </div>
                                <div class="display-1 text-center bg-white shadow-sm p-5" style="border-radius: 20px;"">
                                    <h2 class="mb-3">Products</h2>
                                    <i class="bi bi-boxes d-block mb-3"></i>
                                    <h3>3000+</h3>
                                </div>
                            </div>
                        </section>
                    </div>
                    <p class="text-center mt-3">Powered by <a href="/" class="text-decoration-none fw-bold" style="color: #237A57">Maritory</a></p>
                </div>
            </div>
    </div>
@endsection