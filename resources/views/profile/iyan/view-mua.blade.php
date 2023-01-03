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
        background-color: #979797;
    }

    .follow {
        padding: 5px 15px;
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
        background-color: #237A57;
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

    .tombol {
        padding: 7px 17px;
        text-decoration: none;
        color: #237A57;
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
    <title>view MUA</title>
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

                <button class="back mt-4 mb-2">
                    <img src="/img/back.png" alt="">
                </button>
                <!-- Carousel -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/carouselmua.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/carouselmua.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/carouselmua.png" class="d-block w-100" alt="...">
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
                        <div class="col-4">
                            <h2 class="d-inline-block">wedding look</h2>
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

                        <div class="col-4 mt-3 text-end">
                            <div class="d-inline-block">

                                <a class="text-decoration-none text-white" href="">
                                    <img src="/img/like.png" alt="">
                                </a>

                                <a class="text-decoration-none text-white mx-3" href="">
                                    <img src="/img/share.png" alt="">
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
                                    <div class=" profile">
                                        <h6 class=""> Shanti MUA</h6>
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
                    <p>Romantic and soft, Natural, Glamour and bold. Menggunakan high end brand (Shu Uemura, Shiseido, Estee Lauder, MAC, Urban Decay, Benefit, Make Up For Ever, Anastasia Beverly Hills, etc) and high quality drugstore product (The Balm, L'oreal Paris, Maybelline, NYX, Make Over, etc)
                    </p>
                </div>


                <div class="container mt-5">
                    <h4 class="text-capitalize fw-bolder" style="color: #49516F">detail</h4>
                    <p>Wedding makeup (no retouch)</p>
                    <ul>
                        <li>No retouch. makeup for akad or reception only</li>
                        <li>Free trial wedding makeup</li>
                        <li>Waktu penyelesaian 3 jam</li>
                        <li>We only do natural makeup</li>
                    </ul>

                </div>

                <a class="text-capitalize text-center text-success text-decoration-none" href="">
                    <h6>lihat selengkapnya</h6>
                </a>

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

                <div class="container mt-5 text-capitalize mr-5">
                    <div class="row">
                        <div class="col-5">
                            <div class="row">
                                <div class="col-2">
                                    <a href="" class="rev-wrap mx-auto d-inline-block">
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



            <div class="container col-4 mt-5 list-btn">

                <button class="button2 mt-4 mx-4">
                    <img class="mx-0 pb-2" src="/img/jadwal.png" alt="" style="width: 30px; height:35px">
                    <p class="tw-button text-capitalize text-center d-inline-block mt-2 mx-3">availability</p>
                </button>

                <button class="button2 mt-4 mx-4">
                    <div class="container">
                        <div class="row text-white align-items-center">
                            <div class="col-6 container text-capitalize ">
                                <p class="m-0 font-color" style="font-weight:400; font-size:20px">harga</p>
                            </div>

                            <div class="col-6 container text-capitalize">
                                <p class="m-0 font-color" style="font-weight:600; font-size:20px">rp 1.000.000,00</p>
                            </div>
                        </div>
                    </div>
                </button>

                <button class="button2 mt-4 mx-4">
                    <div class="container">
                        <div class="row text-white align-items-center">
                            <div class="col-6 container text-capitalize ">
                                <p class="m-0 font-color" style="font-weight:400; font-size:20px">jumlah</p>
                            </div>

                            <div class="col-6">
                                <div class="d-flex z-0 border-bottom rounded-pill justify-content-between align-items-center">
                                    <a href="" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size:25px" class="tombol bg-white rounded-circle">-</a>
                                    <div>
                                        <span class="text-dark">1</span>
                                    </div>
                                    <a href="" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size:25px" class="tombol bg-white rounded-circle">+</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </button>

                <button class="button2 mt-4 mx-4">
                    <img class="mx-0 pb-2" src="/img/cicilan.png" alt="" style="width: 28px; height:35px">
                    <p class="tw-button2 text-capitalize d-inline-block mt-2 mx-3">cicilan 0% dengan mariPay</p>
                </button>

                <button class="button2 mt-4 mx-4">
                    <img class="mx-0 pb-2" src="/img/pesan.png" alt="" style="width: 30px; height:35px">
                    <p class="tw-button2 text-capitalize d-inline-block mt-2 mx-3">chat vendor</p>
                </button>

                <button class="button2 mt-4 mx-4">
                    <img class="mx-0 pb-2" src="/img/troli.png" alt="" style="width: 30px; height:35px">
                    <p class="tw-button2 text-capitalize d-inline-block mt-2 mx-3">tambah keranjang</p>
                </button>

                <button class="button1 mt-4 mx-4">
                    <p class="tg-button text-capitalize text-center d-inline-block mt-2">order</p>
                </button>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>