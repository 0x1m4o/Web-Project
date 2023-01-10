{{-- Navbar After Login --}}
<link rel="stylesheet" href="/css/navbar2.css">


<div class="nav-wrapper">
    <nav class="navbar navbar-main navbar-expand-lg d-flex align-items-center">
        <div class="container-fluid">
            <!-- Offcanvas -->
            <div class="d-flex justify-content-start">
                <button class="nav-btn ham-btn navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <span class="fas fa-solid fa-bars"></span>
                </button>

                <!-- Logo -->
                <a class="navbar-brand" href="/">
                    <img src="/img/logos.png" alt="Logo" width="200" height="75" class="d-flex align-items-center" />
                </a>
            </div>

            <!-- Navbar Search Content -->

            <div id="navbarSearchContent" class="rounded me-4 navbar-collapse collapse container-fluid">
                <form class="d-flex nav-item search-form" role="search" action="{{ (request()->route()->getname()=='category') ? '' : '/category/venue' }}">
                <div class="item-content d-flex justify-content-between align-items-center mx-3 bg-white rounded w-100" style="height: 50px">
                        <button class="navbar-toggler" type="button" data-bs-target="#navbarSearchContent" data-bs-toggle="collapse">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                            <input class="search-bar ms-3 w-100" type="search" placeholder="Cari Vendor atau Lokasi..." name="search" aria-label="Search" value="{{ (request()->search) ? $searched : '' }}" />
                        

                        <div class="dropdown dropdown-hover ">
                            <a class="btn pt-2" href="#" role="button dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-calendar3 fs-4"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-center wrapper">
                                <header>
                                    <p class="current-date"></p>
                                    <div class="icons">
                                        <span id="prev" class="material-symbols-rounded"><i class="bi bi-arrow-left-circle"></i></span>
                                        <span id="next" class="material-symbols-rounded"><i class="bi bi-arrow-right-circle"></i></span>
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

                        <button class="btn text-light m-2 navbar-collapse d-none" style="background: #fdb662" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Navbar Supported Content -->
            <div id="navbarSupportedContent" class="d-flex justify-content-end navbar-collapse offcanvas-end d-none">
              <a
              class="btn btn-light mx-1"
              style="color: #fdb662; background: white;"
              role="button"
              href="/login"
              >Masuk</a
            >
      
            <a
              class="btn btn-light mx-1"
              style="background: #fdb662; color: white;"
              role="button"
              href="/signup"
              >Daftar</a
            >
            </div>
        </div>
    </nav>
</div>

<!-- Auto close  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(function () {
      $("body").click(function (e) {
        if (
          e.target.getAttribute("class") === "navbar-collapse" ||
          $(e.target).parents(".navbar-collapse").length > 0
        ) {
        } else {
          if ($(".navbar-collapse").hasClass("show") == true) {
            $(".navbar-toggler-search")[0].click();
          }
        }
      });
    });
  </script>