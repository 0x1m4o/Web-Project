{{-- Navbar After Login --}}
<link rel="stylesheet" href="/css/navbar.css">


<div class="nav-wrapper">
    <nav class="navbar navbar-main navbar-expand-lg d-flex align-items-center" style="background-color: white">
        <div class="container-fluid">
            <!-- Offcanvas -->
            <div class="d-flex justify-content-start">
                <button class="nav-btn ham-btn navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <span class="fas fa-solid fa-bars"></span>
                </button>

                <!-- Logo -->
                <a class="navbar-brand" href="/vendor-admin/dashboard-vendor">
                    <img src="/img/logo_vendor.png" alt="Logo" width="200" height="75"
                        class="d-flex align-items-center" />
                </a>
            </div>

            <!-- Navbar Search Content -->

            <div id="navbarSearchContent" class="rounded box-shadow me-2 navbar-collapse collapse container-fluid">
                <div class="item-content d-flex justify-content-between align-items-center mx-3 bg-white rounded w-100"
                    style="height: 50px">
                    <button class="navbar-toggler" type="button" data-bs-target="#navbarSearchContent"
                        data-bs-toggle="collapse">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <form class="d-flex nav-item search-form " role="search">
                        <input class="search-bar ms-3 w-100" type="search" placeholder="Cari Vendor atau Lokasi..."
                            aria-label="Search" />
                    </form>

                    <div class="dropdown ">
                        <button class="btn pt-2 text-secondary" href="#" role="button dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-calendar3 fs-4"></i>
                        </button>

                        <div class="dropdown-menu dropdown-menu-center wrapper">
                            <header>
                                <p class="current-date"></p>
                                <div class="icons">
                                    <span id="prev" class="material-symbols-rounded"><i
                                            class="bi bi-arrow-left-circle"></i></span>
                                    <span id="next" class="material-symbols-rounded"><i
                                            class="bi bi-arrow-right-circle"></i></span>
                                </div>
                            </header>
                            <div class="calendar">
                                <ul class="weeks">
                                    <li>Sun</li>
                                    <li>Mon</li>
                                    <li>Tue</li>
                                    <li>Wed</li>
                                    <li>Thu</li>
                                    <li>Fri</li>
                                    <li>Sat</li>
                                </ul>
                                <ul class="days"></ul>
                            </div>
                        </div>
                    </div>

                    <button class="btn text-light m-2 navbar-collapse d-none" style="background: #979797ab"
                        type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>

            <!-- Navbar Supported Content -->
            <div id="navbarSupportedContent"
                class="mt-1 d-flex align-items-center navbar-collapse offcanvas-end d-none">

                <!-- Chat -->
                <div class="dropdown">
                    <a class="me-3 jcc text-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style="font-size: 25px">
                        <iconify-icon icon="material-symbols:mail-rounded"></iconify-icon>
                    </a>
                    <div class="dropdown-menu dropdown-menu-center">
                        <div class="container m-3" style="width: 250px; border: none">
                            <div class="card-body d-flex justify-content-between align-items-center mx-2">
                                <h5><a href="/chat" class="text-decoration-none text-black">Chat Inbox</a></h5>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <div class="container d-flex justify-content-start align-items-center">
                                <div class="row w-100">
                                    <div class="col-3 d-flex justify-content-end align-items-center">
                                        <img class="rounded-circle" src="/img/The-Aesthetic.png"
                                            style="width: 30px; height: 30px" />
                                    </div>
                                    <div class="col-9 p-0 d-flex justify-content-between align-items-center">
                                        <p class="fs-6 my-0 mb-1">The Aesthetic</p>
                                        <div class="container-xsm-img text-secondary">5</div>
                                    </div>
                                </div>
                            </div>
                            <div class="container d-flex justify-content-start align-items-center">
                                <div class="row w-100">
                                    <div class="col-3 d-flex justify-content-end align-items-center">
                                        <img class="rounded-circle" src="/img/Gerald.png"
                                            style="width: 30px; height: 30px" alt="" />
                                    </div>
                                    <div class="col-9 p-0 d-flex align-items-center">
                                        <p class="fs-6 my-0 mb-1">Gerald Tan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container d-flex justify-content-start align-items-center">
                                <div class="row w-100">
                                    <div class="col-3 d-flex justify-content-end align-items-center">
                                        <img class="rounded-circle" style="width: 30px; height: 30px"
                                            src="/img/Gerald.png" alt="" />
                                    </div>
                                    <div class="col-9 p-0 d-flex align-items-center">
                                        <p class="fs-6 my-0 mb-1">Iyan Siagian</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container d-flex justify-content-start align-items-center mb-3">
                                <div class="row w-100">
                                    <div class="col-3 d-flex justify-content-end align-items-center">
                                        <img class="rounded-circle" src="/img/Gerald.png"
                                            style="
                        width: 30px;
                        height: 30px;
                        background-size: cover;
                      "
                                            alt="" />
                                    </div>
                                    <div class="col-9 p-0 d-flex justify-content-between align-items-center">
                                        <p class="fs-6 my-0 mb-1">Ridwan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Tabungan --}}
                <div class="dropdown ">
                    <a class="me-3 jcc text-secondary dropdown-toggle" role="button" style="font-size: 25px"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <iconify-icon icon="mingcute:wallet-4-fill"></iconify-icon>
                    </a>
                    <div class="dropdown-menu dropdown-menu-start">
                        <div class="container d-flex align-items-center justify-content-center">
                            <div class="container m-1" style="width: 400px">
                                <div class="card-body d-flex justify-content-between align-items-center mx-2">
                                    <a href="/dashboard" class="text-decoration-none text-dark">
                                        <h5>Tabungan</h5>
                                    </a>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                                <div class="container d-flex justify-content-start align-items-center mb-3">
                                    <div class="row w-100">
                                        <div class="col-3 d-flex justify-content-end align-items-center">
                                            <div class="container-img">
                                                <i class="fa-regular fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-9 p-0">
                                            <p class="fs-6 my-0 mb-1">Gerald baru saja menabung</p>
                                            <h5 class="fs-6 fw-bold">Rp5.000.000</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="container d-flex justify-content-start align-items-center mb-3">
                                    <div class="row w-100">
                                        <div class="col-3 d-flex justify-content-end align-items-center">
                                            <div class="container-img">
                                                <i class="fa-regular fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-9 p-0">
                                            <p class="fs-6 my-0 mb-1">Vanessa baru saja menabung</p>
                                            <h5 class="fs-6 fw-bold">Rp3.000.000</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="container d-flex justify-content-start align-items-center mb-3">
                                    <div class="row w-100">
                                        <div class="col-3 d-flex justify-content-end align-items-center">
                                            <div class="container-img">
                                                <i class="fa-regular fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-9 p-0">
                                            <p class="fs-6 my-0 mb-1">Gerald baru saja menabung</p>
                                            <h5 class="fs-6 fw-bold">Rp2.000.000</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="container d-flex justify-content-start align-items-center mb-3">
                                    <div class="row w-100">
                                        <div class="col-3 d-flex justify-content-end align-items-center">
                                            <div class="container-img">
                                                <i class="fa-regular fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-9 p-0">
                                            <p class="fs-6 my-0 mb-1">Vanessa baru saja menabung</p>
                                            <h5 class="fs-6 fw-bold">Rp5.000.000</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="container d-flex justify-content-end align-items-center mb-3"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown ">
                    <a href="/profile" class="p-2 px-3"
                        style="width: 20px; height: 20px; border-radius: 100%;background-color: #237A57;">
                        <img src="/img/avatar.png" style="width: 10px; height:10px" alt="" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-start">
                        <div class="container container-profile">
                            <section class="profile">
                                <div class="profile-image">
                                    <a href="#">
                                        <img src="/img/profile.png" />
                                    </a>
                                </div>
                                <div class="profile-name">
                                    <a href="#">Vanessa Oey</a>
                                </div>
                            </section>
                            <section class="dashboard">
                                <div class="dashboard-title">
                                    <a href="/maripay">
                                        <p><i class="bi bi-wallet"></i> Maripay</p>
                                    </a>
                                    <a href="">
                                        <p><i class="bi bi-star"></i> Goal</p>
                                    </a>
                                    <a href="">
                                        <p><i class="bi bi-file-bar-graph"></i> RAB</p>
                                    </a>
                                    <a href="/checklist">
                                        <p><i class="bi bi-check-square"></i> Checklist</p>
                                    </a>
                                    <a href="/feed">
                                        <p><i class="bi bi-images"></i> Feed</p>
                                    </a>
                                    <a href="/following">
                                        <p><i class="bi bi-people-fill"></i> Following</p>
                                    </a>
                                    <a href="">
                                        <p><i class="bi bi-gear"></i> Setting</p>
                                    </a>
                                </div>
                                <div class="dashboard-data">
                                    <p>Rp 60,000,000</p>
                                    <p>Rp -40,000,000</p>
                                </div>
                            </section>
                            <section class="kotak-masuk">
                                <i class="bi bi-envelope"></i>
                                <span>Kotak Masuk</span>
                            </section>
                            <section class="contact">
                                <div class="contact-title">
                                    <a href="/chat">
                                        <p><i class="bi bi-chat"></i> Chat</p>
                                    </a>
                                    <a href="">
                                        <p><i class="bi bi-journal-text"></i> Ulasan</p>
                                    </a>
                                    <a href="/notifikasi-transaksi">
                                        <p><i class="bi bi-bell"></i> Notification</p>
                                    </a>
                                    <a href="">
                                        <p><i class="bi bi-heart-pulse"></i> Maritory Care</p>
                                    </a>
                                    <a href="">
                                        <strong><i class="bi bi-box-arrow-left"></i> Log Out</strong>
                                    </a>
                                </div>
                                <div class="contact-data">
                                    <p>5</p>
                                    <p>1</p>
                                    <p>10</p>
                                    <p>2</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar Icons -->
            <div class="nav-icons d-flex align-items-center">
                <button class="nav-btn navbar-toggler navbar-toggler-search text-secondary"
                    style="width: 30px; height: 30px" id="btn-search" data-bs-toggle="collapse"
                    data-bs-target="#navbarSearchContent" type="button" aria-expanded="false"
                    aria-controls="navbarSearchContent" aria-label="Toggle navigation">
                    <iconify-icon icon="mingcute:search-3-line"></iconify-icon>
                </button>

                <button class="nav-btn tabungan-btn navbar-toggler text-secondary" style="width: 30px; height: 30px">
                    <iconify-icon icon="mingcute:wallet-4-fill"></iconify-icon>
                </button>
                <button class="nav-btn keranjang-btn navbar-toggler text-secondary" style="width: 30px; height: 30px">
                    <iconify-icon icon="carbon:shopping-cart"></iconify-icon>
                </button>
                <button class="nav-btn chat-btn navbar-toggler text-secondary" style="width: 30px; height: 30px">
                    <iconify-icon icon="material-symbols:mail-rounded"></iconify-icon>
                </button>
                <div class="dropdown ">
                    <button class="nav-btn navbar-toggler">
                        <img src="/img/profile.png" class="rounded-circle" style="width: 30px; height: 30px" />
                    </button>
                    <div class="dropdown-menu dropdown-menu-start">
                        <div class="container container-profile">
                            <section class="profile">
                                <div class="profile-image">
                                    <a href="#">
                                        <img src="/img/profile.png" />
                                    </a>
                                </div>
                                <div class="profile-name">
                                    <a href="#">Vanessa Oey</a>
                                </div>
                            </section>
                            <section class="dashboard">
                                <div class="dashboard-title">
                                    <a href="">
                                        <p><i class="bi bi-wallet"></i> Maripay</p>
                                    </a>
                                    <a href="">
                                        <p><i class="bi bi-star"></i> Goal</p>
                                    </a>
                                    <a href="">
                                        <p><i class="bi bi-file-bar-graph"></i> RAB</p>
                                    </a>
                                    <a href="">
                                        <p><i class="bi bi-check-square"></i> Checklist</p>
                                    </a>
                                    <a href="">
                                        <p><i class="bi bi-images"></i> Feed</p>
                                    </a>
                                    <a href="">
                                        <p><i class="bi bi-people-fill"></i> Following</p>
                                    </a>
                                    <a href="">
                                        <p><i class="bi bi-gear"></i> Setting</p>
                                    </a>
                                </div>
                                <div class="dashboard-data">
                                    <p>Rp 60,000,000</p>
                                    <p>Rp -40,000,000</p>
                                </div>
                            </section>
                            <section class="kotak-masuk">
                                <i class="bi bi-envelope"></i>
                                <span>Kotak Masuk</span>
                            </section>
                            <section class="contact">
                                <div class="contact-title">
                                    <a href="">
                                        <p><i class="bi bi-chat"></i> Chat</p>
                                    </a>
                                    <a href="">
                                        <p><i class="bi bi-journal-text"></i> Ulasan</p>
                                    </a>
                                    <a href="">
                                        <p><i class="bi bi-bell"></i> Notification</p>
                                    </a>
                                    <a href="">
                                        <p><i class="bi bi-heart-pulse"></i> Maritory Care</p>
                                    </a>
                                    <a href="">
                                        <strong><i class="bi bi-box-arrow-left"></i> Log Out</strong>
                                    </a>
                                </div>
                                <div class="contact-data">
                                    <p>5</p>
                                    <p>1</p>
                                    <p>10</p>
                                    <p>2</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>


<!-- Offcanvas -->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel" style="background-color: rgb(103, 100, 100); width: 70%">
    <div class="container d-flex mt-3 align-items-center ms-1">
        <button class="nav-btn navbar-toggler d-inline-block ms-2 mb-1" type="button" data-bs-dismiss="offcanvas">
            <span class="fas fa-solid fa-bars"></span>
        </button>
        <img src="./img/logos.png" alt="Logo" width="150" height="55" class="d-inline-block ms-2" />
    </div>
    <div class="offcanvas-body">
        <a class="btn btn-light btn-offcanvas w-100 mb-2" style="color: #ffffffc2; background: rgb(42, 42, 42)"
            role="button" href="/login">Masuk</a>

        <a class="btn btn-light btn-offcanvas w-100 mb-2" style="color: #ffffffb5; background: rgb(42, 42, 42)"
            role="button" href="/signup">Daftar</a>
    </div>
</div>

<!-- Auto close  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(function() {
        $("body").click(function(e) {
            if (
                e.target.getAttribute("class") === "navbar-collapse" ||
                $(e.target).parents(".navbar-collapse").length > 0
            ) {} else {
                if ($(".navbar-collapse").hasClass("show") == true) {
                    $(".navbar-toggler-search")[0].click();
                }
            }
        });
    });
</script>
