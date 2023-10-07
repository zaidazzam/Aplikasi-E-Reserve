<x-guest-layout>
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-7 animated fadeIn mb-4">Artikel</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Beranda</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page">Artikel</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 animated fadeIn">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('img/header/fillage.png') }}" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('img/header/jembatan.png') }}" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('img/header/Danau.png') }}" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('img/header/elang.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Start -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
        <div class="container">
        </div>
    </div>
    <!-- Search End -->
    <div class="tab-content">
        <div id="blog" class="tab-pane fade show p-0 active">
            <div class="row g-4">
                @foreach ($artikel as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <a href="{{ route('pakets.detail', ['id' => $item->id]) }}">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar Blog"
                                        class="img-fluid">
                                </a>
                                <h3></h3>
                            </div>
                            <div class="text-center p-2 ">
                                <h5 class="fw-bold mb-1">{{ $item->judul }}</h5>
                                <a href="{{ route('blog.detail', ['id' => $item->id]) }}" class="btn btn-primary">Baca
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- @foreach ($artikel as $item)
                    <div class="col-md-6 col-lg-4 d-flex">
                        <div class="card flex-fill">
                            <a href="#">
                                <img class="card-img-top" alt="Gambar Blog" src="{{ asset('storage/' . $item->image) }}"
                                    style="width: 100%; height: 70%;" alt="">
                                <h5 class="card-title"><a href="#">{{ $item->judul }}</a></h5>
                                <a href="{{ route('blog.detail', ['id' => $item->id]) }}" class="btn btn-primary">Baca
                                    Selengkapnya</a>
                            </a>
                        </div>
                    </div>
                @endforeach --}}
            </div>
        </div>
    </div>
</x-guest-layout>
