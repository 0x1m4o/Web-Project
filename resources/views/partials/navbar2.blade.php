<!-- Navbar before Login -->
<link rel="stylesheet" href="/css/navbar2.css">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg d-flex align-items-center" style="background: #1e6f5c">
  <div class="container-fluid">
    <!-- Offcanvas -->
    <div class="d-flex justify-content-start">
      <button class="nav-btn navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
        <span class="fas fa-solid fa-bars"></span>
      </button>

      <!-- Logo -->
      <a class="navbar-brand" href="/">
        <img src="/img/logos.png" alt="Logo" width="200" height="75" class="d-flex align-items-center" />
      </a>
    </div>

    <!-- Navbar Search Content -->
    <div id="navbarSearchContent" class="rounded navbar-collapse collapse">
      <div class="item-content w-90 d-flex justify-content-between bg-white rounded">
        <div class="item-placeholder d-flex justify-content-start">
          <form class="d-flex nav-item search-form" role="search">
            <input class="search-bar ms-3" style="width: 1250px;" type="search" placeholder="Cari Vendor atau lokasi.." aria-label="Search" />
          </form>
        </div>
        <div class="item-search d-flex justify-content-end">
          <div class="dropdown d-flex align-items-center">
            <button class="btn" href="#" role="button dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-calendar3 fs-4"></i>
            </button>

            <div class="dropdown-menu wrapper">
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
      </div>
    </div>

    <!-- Navbar Supported Content -->
    <div id="navbarSupportedContent" class="mx-4 d-flex justify-content-end navbar-collapse offcanvas-end d-none">
      <a class="btn btn-light mx-3" style="color: #fdb662; background: white; height:50px; width:105px; line-height:35px;" role="button" href="/login">Masuk</a>

      <a class="btn btn-light mx-1" style="background: #fdb662; color: white; height:50px; width:105px; line-height:35px;" role="button" href="/signup">Daftar</a>
    </div>
    <!-- Navbar Icons -->
    <button class="nav-btn navbar-toggler navbar-toggler-search" id="btn-search" data-bs-toggle="collapse" data-bs-target="#navbarSearchContent" type="button" aria-expanded="false" aria-controls="navbarSearchContent" aria-label="Toggle navigation">
      <i class="fas fa-solid fa-magnifying-glass"></i>
    </button>
  </div>
</nav>

<!-- Offcanvas -->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel" style="background-color: rgb(103, 100, 100); width: 70%">
  <div class="container d-flex mt-3 align-items-center ms-1">
    <button class="nav-btn navbar-toggler d-inline-block ms-2 mb-1" type="button" data-bs-dismiss="offcanvas">
      <span class="fas fa-solid fa-bars"></span>
    </button>
    <img src="/img/logos.png" alt="Logo" width="150" height="55" class="d-inline-block ms-2" />
  </div>
  <div class="offcanvas-body">
    <a class="btn btn-light btn-offcanvas w-100 mb-2" style="color: #ffffffc2; background: rgb(42, 42, 42)" role="button" href="/login">Masuk</a>

    <a class="btn btn-light btn-offcanvas w-100 mb-2" style="color: #ffffffb5; background: rgb(42, 42, 42)" role="button" href="/signup">Daftar</a>
  </div>
</div>

<!-- Auto close  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
  $(function() {
    $("body").click(function(e) {
      //   alert("Jquery Working");
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