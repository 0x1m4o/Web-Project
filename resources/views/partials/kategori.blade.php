{{-- Kategori --}}
<style>
    .card {
    padding: 12px;
    margin: 10px;
    border-bottom: 1px solid #fafafa;
    height: auto;
    width: fit-content;
    max-width: 100%;
    box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.021);
    border: 3px solid rgba(0, 0, 0, 0);
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


    .kategori-list h6 {
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
    margin: auto;
    margin-top: 20px;
    width: 85%;
    filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.158));
    }
    .card a {
        text-decoration: none;
        color: black
    }
    .slick-track {
        display: flex;
        align-items: center
    }
    .slick-slide {
    width: 100%;
    object-fit: cover;
    }
    .slick-prev:before,
    .slick-next:before {
    color: #010c16c4 !important;
    }
    .card-title {
        font-size: 14px;
        font-weight: 600;
    }
</style>

{{-- Kategori Content --}}
<h2 class="fw-bold text-dark">Kategori</h2>
<div class="slick-wrapper" style="padding:0 10px;">
    <div class="responsive-kategori slider kategori-content text-capitalize" >
                <div class="card">
                    <a href="/souvenir"  >
                        <img src="/img/kategori-img/souvenir.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                        <h6 class="card-title  text-center mt-2 text-capitalize">Souvenir</h6>
                        </div>
                    </a>
                </div>
                
                <div class="card">
                    <a href="/perhiasan">
                        <img src="/img/kategori-img/perhiasan.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title  text-center mt-2">Perhiasan</h6>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/mc">
                        <img src="/img/kategori-img/mc.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title  text-center mt-2 ">MC</h6>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/undangan"> 
                        <img src="/img/kategori-img/undangan.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title  text-center mt-2 ">undangan</h6>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/wedding_planner">
                    </a>
                    <img src="/img/kategori-img/wedding_planner.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h6 class="card-title text-center mt-2" style="font-size: 12px;font-weight: 900; color: black">wedding planner</h6>
                    </div>
                </div>
                <div class="card">
                    <a href="/honeymoon">        
                        <img src="/img/kategori-img/honeymoon.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title  text-center mt-2">honey moon</h6>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/photo_booth">
                        <img src="/img/kategori-img/photo_booth.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title  text-center mt-2">photo booth</h6>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/seserahan">
                        <img src="/img/kategori-img/seserahan.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title  text-center mt-2">seserahan</h6>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/kategori-venue">
                        <img src="/img/venue-bg.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title  text-center mt-2">venue</h6>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/dekorasi">
                        <img src="/img/kategori-img/dekorasi.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title  text-center mt-2">dekorasi</h6>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/mua">
                        <img src="/img/kategori-img/mua.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title  text-center mt-2 ">MUA</h6>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/katering">
                        <img src="/img/kategori-img/katering.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title  text-center mt-2">katering</h6>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/band">
                        <img src="/img/kategori-img/band.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title  text-center mt-2">band</h6>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/fotografi">
                        <img src="/img/kategori-img/fotografi.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title  text-center mt-2">fotografi</h6>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/busana">
                        <img src="/img/kategori-img/busana.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title  text-center mt-2">busana</h6>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="/w.o">
                        <img src="/img/kategori-img/w.o..png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title  text-center mt-2">W.O.</h6>
                        </div>
                    </a>
                </div>
    </div>
</div>
