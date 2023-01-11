<style>
    .main {
        background-color: #f4f4f4;
    }

    .font-color {
        color: #49516F;
    }

    .back {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background-color: #ffffff;
        opacity: 0.5;
    }

    .back:hover {
        opacity: 1;
        transition: 0.2s;
    }

    .carousel-inner img {
        border-radius: 30px;
    }

    .kategori1 {
        background-color: #237A57;
        padding: 0px 20px;
        height: 35px;
        line-height: 35px;
        border-radius: 20px;

    }

    .kategori2 {
        background-color: #5465FF;
        padding: 1px 20px;
        height: 35px;
        line-height: 35px;
        border-radius: 20px;
    }

    .rev-wrap {
        padding: 15px;
        border-radius: 50%;
        background-color: #237A57;
    }

    .rev-wrap2 {
        padding: 15px;
        border-radius: 50%;
        background-color: #979797;
    }

    .follow {
        padding: 3px 10px;
        border-radius: 20px;
    }

    .profile {
        margin: 0px 0px 0px 10px;
    }

    .maps {
        width: 350px;
        height: 250px;
    }

    .alamat {
        margin: 90px 70px 90px 0px;
    }

    .ulasan {
        width: 110px;
    }


    .play-png {
        width: 40px;
        height: 40px;
    }

    .play-btn {
        position: absolute;
        background-color: transparent;
        top: 50px;
        left: 40px;
    }

    .rekom-png {
        width: 250px;
        height: 150px;
        border-radius: 20px;

    }

    .kategori {
        position: absolute;
        bottom: 90px;
        left: 25px;
        width: 60px;
        height: 20px;
        border-radius: 30px;
        background-color: #5465FF;
    }

    .kategori p {
        font-size: 12px;
    }

    .button1 {
        width: 400px;
        height: 80px;
        border-radius: 15px;
        background-color: #1E9264;
    }

    .button1:hover {
        width: 400px;
        height: 80px;
        border-radius: 15px;
        background-color: #237A57;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        transition: 0.3s ease-in-out;

    }

    .button2 {
        width: 400px;
        height: 80px;
        border-radius: 15px;
        background-color: #ffffff;
    }

    .button2:hover {
        width: 400px;
        height: 80px;
        border-radius: 15px;
        background-color: #e7e7e7;
        transition: 0.3s ease-in-out;
    }

    .tg-button {
        font-size: 20px;
        font-weight: 600;
        color: #ffffff;
    }

    .tw-button {
        font-size: 20px;
        font-weight: 600;
        color: #49516F;
    }

    .tw-button2 {
        font-size: 20px;
        font-weight: 400;
        color: #49516F;
    }

    .hj-button {
        width: 400px;
        height: 60px;
        border-radius: 15px;
        background-color: #237A57;
    }

    .plus-minus-input {
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .plus-minus-input .input-group-field {
        width: 55px;
        height: 30px;
        text-align: center;
    }

    .plus-minus-input .input-group-field::-webkit-inner-spin-button,
    .plus-minus-input .input-group-field ::-webkit-outer-spin-button {
        -webkit-appearance: none;
        appearance: none;
    }

    .wrap {
        width: 400px;
        height: 60px;
        border-radius: 15px;
        background-color: #f4f4f4;
    }

    .jumlah {
        width: 400px;
        height: 80px;
        border-radius: 15px;
        background-color: #ffffff;
    }

    .tombol1 {
        width: 50px;
        height: 50px;
        padding-top: 5px;
        text-decoration: none;
        background-color: white;
        color: #49516F;
    }

    .tombol1:hover {
        width: 50px;
        height: 50px;
        padding-top: 5px;
        text-decoration: none;
        color: red;
        background-color: #e7e7e7;
        transition: 0.3s ease-in-out;
    }

    .tombol2 {
        width: 50px;
        height: 50px;
        padding-top: 5px;
        text-decoration: none;
        background-color: white;
        color: #49516F;
    }

    .tombol2:hover {
        width: 50px;
        height: 50px;
        padding-top: 5px;
        text-decoration: none;
        color: #237A57;
        background-color: #e7e7e7;
        transition: 0.3s ease-in-out;
    }

    .etc:hover {
        box-shadow: 3px #49516F;
    }
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view venue</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,200&display=swap" rel="stylesheet">

<body class="main">
    <div class="container">

        <div class="row">
            <div class="col-8">

                <a href="/kategori-venue">
                    <button class="back mt-4 mb-2">

                        <img src="/img/back.png" alt="">

                    </button>
                </a>
                <!-- Carousel -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/carousel1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/carousel1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/carousel1.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="container mt-5 text-capitalize mr-5">
                    <div class="row">
                        <div class="col-5">
                            <h1 class="d-inline-block fw-700">the aesthetic</h1>
                            <img class="mx-1 pb-5" src="/img/ceklis.png" alt="">

                        </div>

                        <div class="col-4 mt-3">
                            <a class="d-inline-block mx-3 kategori1 text-decoration-none text-white" href="">
                                <p>venue</p>
                            </a>
                            <a class="d-inline-block kategori2 text-decoration-none text-white" href="">
                                <p>outdoor</p>
                            </a>

                        </div>

                        <div class="col-3 mt-3 text-end">
                            <div class="d-inline-block">

                                <a class="text-decoration-none text-white" href="">
                                    <img src="/img/like.png" alt="">
                                </a>

                                <a class="text-decoration-none text-white mx-3" href="">
                                    <img src="/img/share1.png" alt="">
                                </a>

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-5">
                            <div class="row">
                                <div class="col-2">
                                    <a href="" class="rev-wrap mx-auto d-inline-block">
                                        <img src="/img/rev.png" alt="Card image cap">
                                    </a>
                                </div>

                                <div class="col-6">
                                    <div class=" profile p-0">
                                        <style>
                                            .pv {
                                                color: #49516F;
                                                text-decoration: none #9FA6B2;
                                            }

                                            .pv:hover {
                                                text-decoration: underline #9FA6B2;
                                                transition: 0.4s ease-in-out;

                                            }
                                        </style>
                                        <a href="/profilevendor" class="pv">
                                            <h6 class="pv"> The Aesthetic</h6>
                                        </a>
                                        <p class="">online</p>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <p class="follow text-capitalize text-center text-secondary border border-dark d-inline-block"> + follow </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-3">
                    <p>Ingin menikah di Bali atau venue yang berlokasi di pantai? Sebenarnya tidak perlu sampai harus ke Bali juga, sih. Di The Aesthetic, Ancol, Jakarta Utara, kamu bisa mengikat janji dengan si dia. Di Pantai Karnaval Ancol, resepsi pernikahan berlatar pemandangan pantai yang cantik dapat terwujud.</p>
                </div>


                <div class="container mt-5">
                    <h4 class="text-capitalize fw-bolder" style="color: #49516F">fasilitas</h4>
                    <div class="row text-capitalize">
                        <div class="col-3">
                            <div class="my-2">
                                <img src="/img/listrik.png" alt="">
                                <p class="d-inline-block mx-1">Listrik: 2500 kilowatt</p>

                            </div>

                            <div class="my-2">
                                <img src="/img/panggung.png" alt="">
                                <p class="d-inline-block mx-1">panggung</p>
                            </div>

                            <div>
                                <img src="/img/sound.png" alt="">
                                <p class="d-inline-block mx-1">sound system</p>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="my-2">
                                <img src="/img/projektor.png" alt="">
                                <p class="d-inline-block mx-1">projektor</p>
                            </div>

                            <div class="my-2">
                                <img src="/img/table.png" alt="">
                                <p class="d-inline-block mx-1">round table</p>
                            </div>

                            <div>
                                <img src="/img/vip.png" alt="">
                                <p class="d-inline-block mx-1">VIP seats</p>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="my-2">
                                <img src="/img/wifi.png" alt="">
                                <p class="d-inline-block"> WIFI</p>
                            </div>
                        </div>

                        <div class="text-capitalize mt-5">

                            <h5 class="fw-bolder" style="color: #49516F">luas</h5>
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">

                                        <p>total : 2500m2</p>
                                        <p>ruang ganti : 2500 m2</p>

                                    </div>

                                    <div class="col-6">

                                        <img src="/img/denah.png" alt="">
                                        <p class="d-inline-block">download denah</p>
                                    </div>
                                </div>
                            </div>



                            <hr>


                            <div class="my-3">
                                <h5 class="text-capitalize fw-bolder" style="color: #49516F">lokasi</h5>
                                <div class="container bg-white">
                                    <div class="row">
                                        <div class="col-6">
                                            <img class="maps my-3" src="/img/maps.png" alt="">

                                        </div>

                                        <div class="col-6">
                                            <p class="alamat fw-bolder" style="color: #49516F; font-size:15px">Jl. Gatot Subroto No.10 Rt 06/01, RT.6/RW.1
                                                Kuningan Bar, Kec. Mampang Prpt, Kota
                                                Jakarta Utara Daerah Khusus Ibukota Jakarta 12710</p>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <hr>

                <div class="my-3">
                    <h5 class="text-capitalize fw-bolder" style="color: #49516F">ulasan</h5>
                    <h1 style=" color: #49516F;">4.5</h1>
                    <a href="" class="text-warning text-decoration-none fs-5">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>

                    </a>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img class="ulasan my-3" src="/img/ulasan1.png" alt="">
                            <button class="play-btn border-0">
                            </button>

                        </div>

                        <div class="col-2">
                            <img class="ulasan my-3" src="/img/ulasan2.png" alt="">
                            <button class="play-btn border-0">
                            </button>

                        </div>

                        <div class="col-2 position-relative">
                            <img class="ulasan my-3" src="/img/ulasan3.png" alt="">
                            <button class="play-btn border-0">
                                <img class="play-png" src="/img/play.png" alt="">
                            </button>

                        </div>

                        <div class="col-2 position-relative">
                            <img class="ulasan my-3" src="/img/ulasan4.png" alt="">
                            <button class="play-btn border-0">
                                <img class="play-png" src="/img/play.png" alt="">
                            </button>
                        </div>

                        <div class="col-2 position-relative">
                            <img class="ulasan my-3" src="/img/ulasan5.png" alt="">
                            <button class="play-btn border-0">
                                <img class="play-png" src="/img/play.png" alt="">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mt-5 text-capitalize mr-5">
                    <div class="row">
                        <div class="col-5">
                            <div class="row">
                                <div class="col-2">
                                    <a href="" class="rev-wrap2 mx-auto d-inline-block">
                                        <img src="/img/rev.png" alt="Card image cap">
                                    </a>
                                </div>

                                <div class="col-5">
                                    <div class=" profile">
                                        <h6 class="">Yuni</h6>
                                        </h6>
                                        <a href="" class="text-warning text-decoration-none">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>

                                        </a>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <p class="text-capitalize mt-4"> 5 bulan lalu </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-3">
                    <p>Akses gampang, nyaman, semua fasilitas disediakan dengan lengkap dari pihak hotel.</p>
                </div>

                <div class="mt-1">
                    <h5 class="text-capitalize fw-bolder my-4" style="color: #49516F">rekomendasi lainnya</h5>
                    <div class="row text-capitalize">
                        <div class="col-4 position-relative">
                            <img class="rekom-png" src="/img/rekomendasi1.png" alt="">
                            <a class="kategori text-decoration-none text-white" href="">
                                <p class="text-center">outdoor</p>
                            </a>
                            <h6 class="fw-semibold my-2" style="color: #49516F; font-size:20px">resonances</h6>
                            <img src="/img/lokasi.png" alt="" style="width: 10px; height:17px">
                            <p class="d-inline-block mx-1">bekasi, jawa barat</p>

                        </div>

                        <div class="col-4 position-relative">
                            <img class="rekom-png" src="/img/rekomendasi2.png" alt="">
                            <a class="kategori text-decoration-none text-white" href="">
                                <p class="text-center">outdoor</p>
                            </a>
                            <h6 class="fw-semibold my-2" style="color: #49516F; font-size:20px">nomade</h6>
                            <img src="/img/lokasi.png" alt="" style="width: 10px; height:17px">
                            <p class="d-inline-block mx-1">bekasi, jawa barat</p>

                        </div>

                        <div class="col-4 position-relative">
                            <img class="rekom-png" src="/img/rekomendasi3.png" alt="">
                            <a class="kategori text-decoration-none text-white" href="">
                                <p class="text-center">outdoor</p>
                            </a>
                            <h6 class="fw-semibold my-2" style="color: #49516F; font-size:20px">tropical</h6>
                            <img src="/img/lokasi.png" alt="" style="width: 10px; height:17px">
                            <p class="d-inline-block mx-1">bekasi, jawa barat</p>
                        </div>

                    </div>
                </div>
            </div>



            <div class="container col-4 mt-5 ">
                <button class="button1 mt-4 mx-4 border-0 shadow">
                    <img class="mx-3 pb-2" src="/img/tour.png" alt="" style="width: 20px; height:35px">
                    <p class="tg-button text-capitalize text-center d-inline-block mt-2">tour virtual 360</p>
                </button>

                <div class="dropdown">
                    <button class="button2 mt-4 mx-4 border-0 shadow" role="button dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="mx-0 pb-2" src="/img/jadwal.png" alt="" style="width: 30px; height:35px">
                        <p class="tw-button text-capitalize text-center d-inline-block mt-2 mx-3">availability</p>
                    </button>
                    <div class="dropdown-menu dropdown-menu-center wrapper">
                    @include('partials.calendar')
                    </div>
                </div>

                <button class="jumlah mt-4 mx-4 border-0 shadow">
                    <div class="container text-capitalize mt-2">
                        <p class="m-0" style="float: left; width: 50%; text-align: left; color:#49516F; font-weight:400">harga </p>
                        <p class="m-0" style="float: left; width: 50%; text-align: right; color:#49516F; font-weight:600">Rp 20.000.000,00</p>
                        <p class="mt-2" style="float: left; width: 50%; text-align: left; color:#49516F; font-weight:400">jumlah tamu </p>
                        <p class="mt-2" style="float: left; width: 50%; text-align: right; color:#49516F; font-weight:600">100 tamu</p>

                    </div>
                </button>

                <button class="button2 mt-4 mx-4 border-0 shadow">
                    <img class="mx-0 pb-2" src="/img/cicilan.png" alt="" style="width: 28px; height:35px">
                    <p class="tw-button2 text-capitalize d-inline-block mt-2 mx-3">cicilan 0% dengan mariPay</p>
                </button>

                <button class="button2 mt-4 mx-4 border-0 shadow">
                    <a href="/chat" class="text-decoration-none">
                        <img class="mx-0 pb-2" src="/img/pesan.png" alt="" style="width: 30px; height:35px">
                        <p class="tw-button2 text-capitalize d-inline-block mt-2 mx-3">chat vendor</p>
                    </a>
                </button>

                <a href="/keranjang">
                    <button class="button2 mt-4 mx-4 border-0 shadow">
                        <img class="mx-0 pb-2" src="/img/troli.png" alt="" style="width: 30px; height:35px">
                        <p class="tw-button2 text-capitalize d-inline-block mt-2 mx-3">tambah keranjang</p>
                    </button>
                </a>
                <a href="/order">
                    <button class="button1 mt-4 mx-4 border-0 shadow">
                        <p class="tg-button text-capitalize text-center d-inline-block mt-2">order</p>
                    </button>
                </a>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>