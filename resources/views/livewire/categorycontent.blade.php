@section('styles')
<style>
    .nav-filter a {
        color: #49516F;
        font-weight: 600;
    }

    .view {
        padding: 8px;
        border-radius: 10px;
    }

    .dropdown button {
        border: none;
    }

    .category-section {
        width: 100%;
        font-weight: 500;
    }

    .category {
        margin: 0px auto;
        border-radius: 10px;
        padding: 5px;
        border: none;
    }

    .category:hover {
        background-color: #ffffff;
    }

    .drop {
        width: 700%;
        height: auto;
        margin-left: -500%;
        margin-top: 100%;
        background-color: #e5e5e5;
    }

    .all:hover {
        background-color: #ffffff;
        padding: 4px 10px 4px 8px;
        border-radius: 10px;
        transition: 200ms;
    }

    .all a {
        text-decoration: none;
    }

    .all p {
        text-transform: capitalize;
    }

    .card img {
        border-radius: 10%;
        filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.158));
    }

    .card-body {
        padding: 0;
        margin: 0;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .yea{
        color: #49516F;
        font-weight:bold;
    }
</style>
@endsection

<div class="content" style="background-color:#E5E5E5;">
    <div class="container navbar navbar-expand-lg text-capitalizes category-section mt-4" id="kategori">
        
        @foreach ($categories as $c)
        @if ($c->id < 10)
        <button onclick="window.location.href='{{ route('category', ['category'=> $c->slug, 'search'=>request('search')]) }}'" class="btn text-secondary text-capitalize category {{ ($category->name == $c->name) ? 'aktif' : '' }}">
            <img src="/img/{{ $c->slug }}.png" alt="" class='ms-1' />
            <p class="d-inline-block p-1 mb-0 text-dark">{{ $c->name }}</p>
        </button>
        @endif
        @endforeach

        <div class="dropdown dropdown-hover">
            <button type="button" class="dropdown-toggle text-capitalize view" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: white">
                <p class="d-inline-block p-1 mb-0 text-dark">view all</p>
            </button>
            <div class="container dropdown-menu drop mt-3 rounded">
                <div class="navbar-navbar navbar-expand-xl">
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-4">

                                <div class="m-3 all ">
                                    <a href="{{ route('category', ['category'=>'venue', 'search'=>request('search')]) }}">
                                        <img src="/img/venue.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">venue</p>
                                    </a>
                                </div>

                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'catering', 'search'=>request('search')]) }}">
                                        <img src="/img/catering.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">
                                            catering
                                        </p>
                                    </a>
                                </div>

                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'busana', 'search'=>request('search')]) }}">
                                        <img src="/img/busana.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">busana</p>
                                    </a>
                                </div>

                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'perhiasan', 'search'=>request('search')]) }}">
                                        <img src="/img/perhiasan.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">
                                            perhiasan
                                        </p>
                                    </a>
                                </div>

                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'wedding', 'search'=>request('search')]) }}">
                                        <img src="/img/wedding-planner.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">
                                            wedding planner
                                        </p>
                                    </a>
                                </div>

                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'koreografi', 'search'=>request('search')]) }}">
                                        <img src="/img/koreografi.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">
                                            koreografi
                                        </p>
                                    </a>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'dekorasi', 'search'=>request('search')]) }}">
                                        <img src="/img/dekorasi.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">
                                            dekorasi
                                        </p>
                                    </a>
                                </div>

                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'band', 'search'=>request('search')]) }}">
                                        <img src="/img/band.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">band</p>
                                    </a>
                                </div>

                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'w-o', 'search'=>request('search')]) }}">
                                        <img src="/img/w-o.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">W.O</p>
                                    </a>
                                </div>

                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'mc', 'search'=>request('search')]) }}">
                                        <img src="/img/mc.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">MC</p>
                                    </a>
                                </div>

                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'honey-moon', 'search'=>request('search')]) }}">
                                        <img src="/img/honey-moon.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">
                                            honey moon
                                        </p>
                                    </a>
                                </div>

                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'seserahan', 'search'=>request('search')]) }}">
                                        <img src="/img/seserahan.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">
                                            seserahan
                                        </p>
                                    </a>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'mua', 'search'=>request('search')]) }}">
                                        <img src="/img/mua.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">MUA</p>
                                    </a>
                                </div>

                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'fotografi', 'search'=>request('search')]) }}">
                                        <img src="/img/fotografi.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">
                                            fotografi
                                        </p>
                                    </a>
                                </div>

                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'souvenir', 'search'=>request('search')]) }}">
                                        <img src="/img/souvenir.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">
                                            souvenir
                                        </p>
                                    </a>
                                </div>

                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'undangan', 'search'=>request('search')]) }}">
                                        <img src="/img/undangan.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">
                                            undangan
                                        </p>
                                    </a>
                                </div>

                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'photo-booth', 'search'=>request('search')]) }}">
                                        <img src="/img/photo-booth.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">
                                            photo booth
                                        </p>
                                    </a>
                                </div>

                                <div class="m-3 all">
                                    <a href="{{ route('category', ['category'=>'lainnya', 'search'=>request('search')]) }}">
                                        <img src="/img/lainnya.png" alt="" />
                                        <p class="d-inline-block p-1 mb-1 text-dark">lainnya</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Filter -->
    <div class="container px-5 nav-filter d-flex justify-content-between" id="filter">
        <div>
            <a href="/disekitarsaya" class="text-decoration-none aktif p-2 me-2 ">Di sekitar saya</a>
            <a href="/terbaru" class="text-decoration-none p-2">Terbaru</a>
            <a href="/populer" class="text-decoration-none p-2">Populer</a>
            <a href="/spesialoffer" class="text-decoration-none p-2">Spesial Offer!</a>
        </div>
        <div class="d-flex justify-content-start">
            <div class="dropdown dropdown-hover">
                <a href="#" class="btn btn-white border border-1 mx-2 dropdown-toggle bg-white" style="box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.149)" role="button" data-bs-toggle="dropdown" aria-expanded="false">Filter</a>
                <div class="dropdown-menu dropdown-menu-center">
                    <div class="container p-3 " style="width: 352px;">
                        <h6 class="fw-bold">Tema</h6>
                        <select wire:model="theme" class="ms-2 form-select" aria-label="Default select example" style="width: 95%">
                            <option value="Semua" selected>Semua</option>
                            <option value="Indoor">Indoor</option>
                            <option value="Outdoor">Outdoor</option>
                        </select>
                        <h6 class="fw-bold mt-2 m-0">Lokasi</h6>
                        <select wire:model="location" class="ms-2 form-select" aria-label="Default select example" style="width: 95%">
                            <option value="Semua" selected>Semua</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Bekasi">Bekasi</option>
                        </select>
                        <h6 class="fw-bold mt-2 pb-0 m-0">Batas Harga (Rp)</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <input wire:model.lazy="min" class="bts-harga text-secondary text-center" type="text" name="min" id="minimal" placeholder="Minimal" style="width: 45%">
                            <input wire:model.lazy="max" class="bts-harga text-secondary text-center" type="text" name="max" id="minimal" placeholder="Maksimal" style="width: 45%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown dropdown-hover">
                <a href="#" class="btn btn-white border border-1 mx-2 dropdown-toggle bg-white" style="box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.149)" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sort By</a>
                <div class="dropdown-menu dropdown-menu-center" style="color: #49516F; font-weight:400'">
                    <button wire:click="sort_by('review')" class="btn dropdown-item yea">Ulasan</button>
                    <button wire:click="sort_by('rating')" class="dropdown-item yea">Rating</button>
                    <button wire:click="sort_by('highest_price')" class="btn dropdown-item yea">Harga Tertinggi</button>
                    <button wire:click="sort_by('lowest_price')" class="btn dropdown-item yea">Harga Terendah</button>
                </div>
            </div>
            <div>
                <button wire:click="sort" class="btn btn-white border border-1 mx-2 bg-white" style="box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.149)">
                    <iconify-icon icon="akar-icons:arrow-up-down"></iconify-icon>
                </button>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="container row m-auto">
        @if ($total_products == 0)
        <div class="my-5">
            <h4 class="text-center">Tidak ada produk</h4>
        </div>
        @endif

        @foreach ($products as $product)
        <div class="col-sm-6 col-md-4 col-lg-3 ">
            <a class="text-decoration-none" href="/viewmaritory/venue">
                <div class="card card-kategori">
                    <img src="{{ $product->image }}" class="card-img-top" alt="..." />
                    <div class="card-body ms-2 mt-2">
                        <p class="stars">
                            @for ($i = 0; $i < $product->rating; $i++)
                            <i class="fas fa-star"></i>
                            @endfor
                            @for ($s = $i; $s < 5; $s++)
                            <i class="fas fa-star" style="color: gray"></i>
                            @endfor
                        </p>
                        <h5 class="card-title fw-bold">{{ $product->name }}</h5>
                        <p class="card-text mb-1" style="color: #ba9543">{{ Akaunting\Money\Money::IDR($product->price) }}</p>
                        <p class="card-text">
                            <i class="fas fa-regular fa-location-dot"></i>
                            {{ $product->vendor->address }}
                        </p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

        <div class="text-center my-3">
            @if($count<$total_products)
            <button wire:click="load" class="btn btn-light rounded  border border-1">
                <p class="text-success m-0 fw-bold">Muat Lebih Banyak</p>
            </button>
            @endif
        </div>
    </div>
</div>