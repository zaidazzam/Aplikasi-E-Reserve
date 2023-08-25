<x-guest-layout>
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-7 animated fadeIn mb-4">Blog</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Beranda</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page">Homestay</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 animated fadeIn">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('img/header/pemandangan2.svg') }}" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('img/header/pemandangan1.svg') }}" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('img/header/pemandangan8.svg') }}" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('img/header/pemandangan3.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Start -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
        <div class="container">
            <div class="row g-2">
                <div class="col-md-10">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <input type="text" class="form-control border-0 py-3"
                                placeholder="Mau staycation dimana?">
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0 py-3">
                                <option selected disabled>Kamar</option>
                                <option value="1">2 Kamar</option>
                                <option value="2">3 Kamar</option>
                                <option value="3">4 Kamar</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0 py-3">
                                <option selected disabled>Kapasitas</option>
                                <option value="1">Location 1</option>
                                <option value="2">Location 2</option>
                                <option value="3">Location 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-dark border-0 w-100 py-3">Cari</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->
    <div class="tab-content">
        <div id="blog" class="tab-pane fade show p-0 active">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="card flex-fill">
                        <a href="#">
                            <img class="card-img-top" src="{{ asset('img/property-1.jpg') }}" alt="Gambar Blog">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Judul Blog</a></h5>
                            <p class="card-text">Deskripsi blog singkat...</p>
                            <a href="{{ url('/blog/detail') }}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan blog lainnya di sini -->
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="card flex-fill">
                        <a href="#">
                            <img class="card-img-top" src="{{ asset('img/property-1.jpg') }}" alt="Gambar Blog">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Judul Blog</a></h5>
                            <p class="card-text">Deskripsi blog singkat...</p>
                            <a href="{{ url('/blog/detail') }}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan blog lainnya di sini -->
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="card flex-fill">
                        <a href="#">
                            <img class="card-img-top" src="{{ asset('img/property-1.jpg') }}" alt="Gambar Blog">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Judul Blog</a></h5>
                            <p class="card-text">Deskripsi blog singkat...</p>
                            <a href="{{ url('/blog/detail') }}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan blog lainnya di sini -->
            </div>
        </div>
    </div>
</x-guest-layout>
