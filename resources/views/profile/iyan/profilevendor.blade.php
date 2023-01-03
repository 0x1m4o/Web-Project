<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="text-capitalize">profile vendor</title>
</head>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,200&display=swap" rel="stylesheet">


<style>
    body {
        background-color: #f4f4f4;
        font-family: 'Poppins', sans-serif;
    }

    .card,
    .carousel-inner {
        width: 100%;
        border-radius: 30px;


    }

    .img-wrap {
        padding: 25px;
        border-radius: 50%;
        background-color: #237A57;
    }

    .lokasi {
        width: 10px;
        height: 15px;
    }

    .cate {
        padding: 5px 10px;
        border-radius: 50px;
        background-color: #237A57;
        font-size: 10px
    }

    .follow {
        padding: 2px 5px;

    }

    .share {
        width: 20px;
        height: 20px;
    }

    .chat {
        background-color: #237A57;
        padding: 10px 90px;
        border-radius: 20px;
    }

    .camera {
        background-color: #237A57;
        padding: 10px 110px;
        border-radius: 20px;
    }

    .media {
        background-color: #237A57;
        padding: 15px 80px;
        border-radius: 20px;
    }

    .location {
        background-color: #237A57;
        padding: 10px 125px;
        border-radius: 20px;
    }

    .pro-list h2 {
        font-weight: 700;
        font-size: 42px;
    }

    .pro-list img {
        border-radius: 30px;
    }

    .review h2 {
        font-weight: 700;
        font-size: 42px;

    }

    .rev-wrap {
        padding: 20px;
        border-radius: 50%;
        background-color: #979797;
    }
</style>
<div class="container mt-5">

    <div class="row">
        <div class="col-4">
            <div class="card">

                <a href="" class="img-wrap mx-auto mt-5">
                    <img src="avatar.png" alt="Card image cap">
                </a>
                <div class="card-body">
                    <h3 class="text-capitalize text-center">the aesthetic</h3>
                    <div class="d-flex justify-content-center">
                        <img class="lokasi mt-1" src="lokasi.png" alt="">
                        <p class="text-capitalize" style="font-size: 15px;"> ancol, jakarta utara</p>
                    </div>

                    <div class="d-flex justify-content-center">
                        <p class="cate text-capitalize text-center text-white">venue</p>
                    </div>

                    <div class="d-flex justify-content-center">
                        <a href="" class="text-warning text-decoration-none">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>

                        </a>
                        <p class="font-weight-bolder mt-1 mx-1">4.5</p>
                        <p class="mt-1 mx-1">(100+ ulasan)</p>
                    </div>

                    <div class="d-flex justify-content-center">
                        <p class="text-capitalize text-center text-secondary">dibalas ± 5 menit </p>
                    </div>

                    <div class="d-flex justify-content-center mb-4">
                        <p class="follow text-capitalize text-center text-secondary border border-dark rounded"> + follow </p>
                        <img class="share mx-3 mt-1" src="share.png" alt="">
                    </div>

                    <div class="d-flex justify-content-center  my-3">
                        <div class="chat">
                            <img class="mb-2" src="comment.png" alt="">
                            <h4 class="text-capitalize text-center d-inline-block text-white mx-2 mt-2">chat vendor</h4>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center my-3">
                        <div class="camera">
                            <img class="mb-2" src="camera.png" alt="">
                            <h4 class="text-capitalize text-center d-inline-block text-white mx-2 mt-2">portofolio</h4>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center my-3">
                        <div class="media">
                            <img class="mx-2" src="facebook.png" alt="">
                            <img class="mx-2" src="instagram.png" alt="">
                            <img class="mx-2" src="twitter.png" alt="">
                            <img class="mx-2" src="youtube.png" alt="">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center my-3">
                        <div class="location">
                            <img class="mb-2" src="loc.png" alt="">
                            <h4 class="text-capitalize text-center d-inline-block text-white mx-2 mt-2">alamat</h4>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center my-5">
                        <p class="mx-5 text-capitalize"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea laboriosam pariatur quis reiciendis officia labore aut voluptate libero nemo culpa.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-8 mt-2 ">
            <!-- Carousel -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="carousel1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="carousel1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="carousel1.png" class="d-block w-100" alt="...">
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

            <div class="pro-list">
                <h2 class="mt-5 mb-4 text-capitalize">product list</h2>

                <div class="row">
                    <div class="col-4">
                        <img src="carousel2.png" alt="">
                        <div class="my-2">
                            <a href="" class="text-warning text-decoration-none">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-"></i>
                            </a>

                            <p class="text-capitalize mt-1 mb-0">the aesthetic</p>
                            <img class="lokasi" src="lokasi.png" alt="">
                            <p class="text-capitalize d-inline-block mt-0" style="font-size: 12px;"> ancol, jakarta utara</p>

                        </div>
                    </div>

                    <div class="col-4">
                        <img src="carousel3.png" alt="">
                        <div class="my-2">
                            <a href="" class="text-warning text-decoration-none">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-"></i>
                            </a>

                            <p class="text-capitalize mt-1 mb-0">the aesthetic ballroom</p>
                            <img class="lokasi" src="lokasi.png" alt="">
                            <p class="text-capitalize d-inline-block mt-0" style="font-size: 12px;"> ancol, jakarta utara</p>

                        </div>
                    </div>

                    <div class="col-4">
                        <img src="carousel4.png" alt="">
                        <div class="my-2">
                            <a href="" class="text-warning text-decoration-none">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-"></i>
                            </a>

                            <p class="text-capitalize mt-1 mb-0">the aesthetic event hall</p>
                            <img class="lokasi" src="lokasi.png" alt="">
                            <p class="text-capitalize d-inline-block mt-0" style="font-size: 12px;"> ancol, jakarta utara</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="review">
                <div class="container">
                    <h2 class="text-capitalize">ulasan</h2>
                    <a href="" class="rev-wrap mx-auto">
                        <img src="rev.png" alt="Card image cap">
                    </a>

                    <div class="d-inline-block text-capitalize">
                        <h6 class="mx-3 mt-2">yuni</h6>
                        <a href="" class="text-warning text-decoration-none mx-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-"></i>
                        </a>

                        <p class="d-inline-block">5 bulan lalu</p>

                    </div>
                    <p class="my-3"> Akses gampang, nyaman, semua fasilitas disediakan dengan lengkap dari pihak hotel.</p>

                </div>

                <div class="mt-5 container">
                    <a href="" class="rev-wrap mx-auto">
                        <img src="rev.png" alt="Card image cap">
                    </a>

                    <div class="d-inline-block text-capitalize">
                        <h6 class="mx-3 mt-2">yuni</h6>
                        <a href="" class="text-warning text-decoration-none mx-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-"></i>
                        </a>

                        <p class="d-inline-block">5 bulan lalu</p>

                    </div>
                    <p class="my-3"> Akses gampang, nyaman, semua fasilitas disediakan dengan lengkap dari pihak hotel.</p>

                </div>

                <div class="mt-5 container">
                    <a href="" class="rev-wrap mx-auto">
                        <img src="rev.png" alt="Card image cap">
                    </a>

                    <div class="d-inline-block text-capitalize">
                        <h6 class="mx-3 mt-2">yuni</h6>
                        <a href="" class="text-warning text-decoration-none mx-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-"></i>
                        </a>

                        <p class="d-inline-block">5 bulan lalu</p>

                    </div>
                    <p class="my-3"> Akses gampang, nyaman, semua fasilitas disediakan dengan lengkap dari pihak hotel.</p>

                </div>


            </div>



        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>