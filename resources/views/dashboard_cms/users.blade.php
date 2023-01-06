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
                                <a href="/dashboard-admin" class="text-decoration-none">
                                    <p><i class="bi bi-shop me-2"></i> Overview</p>
                                </a>
                                <a href="/dashboard-admin-users"  class="text-decoration-none aktif">
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
                    <div class="container bg-light shadow p-5" style="border-radius: 20px;">
                        <h1 class="fw-bold display-3 text-center mb-3">Followers</h1>
                        <h2 class="display-3 text-center">2.000</h2>
                        <div class="row justify-content-center text-center mt-5">
                            <h3 class="fs-2 mb-5 fw-bold">This Month</h3>
                            <div class="col-6">
                                <h4 class="display-2 mb-3" style="color: #2f8f68">+ 250</h4>
                                <i class="bi bi-people fs-3"></i>
                                <span class="fst-italic ms-3 fs-4"> Start following</span>
                            </div>
                            <div class="col-6 v">
                                <h4 class="display-2 mb-3" style="color: #2f8f68">+ 100</h4>
                                <i class="bi bi-heart-fill fs-3" style="color: red"></i>
                                <span class="fst-italic ms-3 fs-3"> Likes</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-center mt-3">Powered by <a href="/" class="text-decoration-none fw-bold" style="color: #237A57">Maritory</a></p>   
                </div>
            </div>
    </div>
@endsection