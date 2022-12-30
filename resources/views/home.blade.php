@extends('layouts.main')

@section('content')
<style>
    .home {
      padding: 10px;
  }
  .card {
      padding: 5px;
      background-color: transparent;
      border: none;
      margin: 10px;
      border-radius: 40px;
      transition: 0.5s;
  }
  .kategori-card {
      padding: 15px;
      margin: 0 19px 5px 19px;
      border-bottom: 1px solid #fafafa;
      height: 90px;
      width: 90px;
      max-width: 100%;
      border-radius: 40px;
      background: linear-gradient(90deg, #093028 0%, #237a57 100%);
      border-radius: 8px;
  }

  .kategori-content {
      display: flex;
      align-items: center;
      justify-content: center;
  }
  .kategori-list h5 {
      text-align: center;
      font-size: 18px;
  }

  .stars {
      color: rgba(255, 208, 0, 0.664);
      margin-bottom: 5px;
  }
  .card-body {
      padding: 0;
      margin: 0;
  }

  .card img {
      border-radius: 10%;
      width: 85%;
      filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.158));
  }

  .slick-slide {
      width: 100%;
      object-fit: cover;
  }
  .slick-prev:before,
  .slick-next:before {
      color: #879baf !important;
  }

</style>
<div class="home">
    @include('partials.carousel')
    <div class="container" style="margin-top: 50px;">
        <h4 style="font-weight: 600;">Spesial Paket Hanya di Maritory</h4>
        <div class="paket" style="background: rgba(204, 227, 216, 0.5);
        box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.25);padding: 10px;border-radius: 20px;display: flex;justify-content: center;align-content:space-between;margin-top: 50px;">
            <img src="/img/nikah.png" alt="paket nikah">
            <p style="margin: auto; font-size: 25px; width: 500px;text-align: center;">Pilih paket pernikahan yang sesuai keinginanmu!</p>
            <button class="btn btn-success" style="height: 60px;margin: auto;">
                <a href="/paket" style="text-decoration: none;color: white;">
                    Lihat Selengkapnya
                </a>
            </button>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://kenwheeler.github.io/slick/slick/slick.js"></script>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
  integrity="sha256-NXRS8qVcmZ3dOv3LziwznUHPegFhPZ1F/4inU7uC8h0="
  crossorigin="anonymous"
></script>

{{-- Slick Responsive JS --}}
<script>
    $(document).ready(function () {
      $(".responsive-kategori").slick({
        dots: false,
        infinite: false,
        speed: 300,
        arrows: true,
        slidesToShow: 8,
        slidesToScroll: 6,
        arrowsWidth: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            },
          },
        ],
      });
    });
</script>

{{-- Slick Responsive JS --}}
<script>
    $(document).ready(function () {
      $(".responsive").slick({
        dots: false,
        infinite: false,
        speed: 300,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        arrowsWidth: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            },
          },
        ],
      });
    });
</script>

{{-- Kategori --}}
<div class="container" style="margin-top: 50px;">
    @include('partials.kategori')
</div>

{{-- Homecontent --}}
<div class="container" style="margin-top: 50px;">
    @include('partials.homecontent')
</div>
</div>

@endsection

