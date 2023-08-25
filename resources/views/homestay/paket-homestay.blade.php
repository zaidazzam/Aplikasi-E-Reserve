<x-guest-layout>
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-7 animated fadeIn mb-4">Paket</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Beranda</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page">Paket</li>
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

    <!-- paket Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="{{ asset('img/pake-wisata/PaketWisataHemat.png') }}">
                    </div>
                </div>
                <div class="col-lg-6 fadeIn" data-wow-delay="0.5s">
                    <h3 class="">Paket Wisata Hemat</h3>
                    <p class="">Nikmati liburan yang tak terlupakan dan hemat dengan Paket Wisata Hemat dari
                        E-Reserve. Dengan pilihan homestay berkualitas terbaik, Anda dapat menikmati kenyamanan yang
                        luar
                        biasa sambil menjelajahi keindahan Indonesia. Berikut fasilitas yang akan Anda nikmati:
                    </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Penginapan Homestay Berkualitas: Anda akan menginap
                        di homestay yang nyaman dan menghadirkan suasana seperti di rumah. Kami memastikan kenyamanan
                        Anda adalah prioritas utama kami.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Paket Wisata Terlengkap: Jelajahi keindahan alam dan
                        budaya Indonesia bersama kami. Paket ini mencakup beragam destinasi menarik yang akan memukau
                        mata dan hati Anda.</p>
                    Layanan Katering: Nikmati hidangan lezat dan istimewa setiap hari selama menginap. Tim katering kami
                    akan memastikan Anda menikmati masakan lokal yang lezat.
                </div>
            </div>
        </div>
    </div>
    <!-- paket End -->

    <!-- Destinasi start -->
    <div class="container-xxl py-5">
        <div class="row g-4">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-12">
                    <div class="text-start mx-auto mb-2 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="">Paket Wisata</h1>
                        <p class="text-white-500">Nikmati Liburan Tanpa Batas! Gabungkan Penginapan Anda
                            dengan
                            Petualangan
                            Tak Terlupakan!
                            Pilihlah dari Beragam Pilihan Wisata yang Kami Tawarkan dan Bayar Saat Check-out di Homestay
                            Anda. Mulai Rasakan Sensasi Baru Liburan yang Menakjubkan!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <a href="link-ke-blog-1">
                            <img class="img-fluid" src={{ asset('img/pake-wisata/PaketWisata.png') }} alt="">
                        </a>
                        <h3></h3>
                    </div>
                    <div class="text-center p-2 ">
                        <h5 class="fw-bold mb-1">Wisata Curug Cinulang</h5>
                        <h6 class="text-warning">Rp. 15.000/orang</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <a href="link-ke-blog-1">
                            <img class="img-fluid" src={{ asset('img/pake-wisata/PaketWisata.png') }} alt="">
                        </a>
                        <h3></h3>
                    </div>
                    <div class="text-center p-2 ">
                        <h5 class="fw-bold mb-1">Wisata Curug Cinulang</h5>
                        <h6 class="text-warning">Rp. 15.000/orang</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <a href="link-ke-blog-1">
                            <img class="img-fluid" src={{ asset('img/pake-wisata/PaketWisata.png') }} alt="">
                        </a>
                        <h3></h3>
                    </div>
                    <div class="text-center p-2 ">
                        <h5 class="fw-bold mb-1">Wisata Curug Cinulang</h5>
                        <h6 class="text-warning">Rp. 15.000/orang</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <a href="link-ke-blog-1">
                            <img class="img-fluid" src={{ asset('img/pake-wisata/PaketWisata.png') }} alt="">
                        </a>
                        <h3></h3>
                    </div>
                    <div class="text-center p-2 ">
                        <h5 class="fw-bold mb-1">Wisata Curug Cinulang</h5>
                        <h6 class="text-warning">Rp. 15.000/orang</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <a href="link-ke-blog-1">
                            <img class="img-fluid" src={{ asset('img/pake-wisata/PaketWisata.png') }} alt="">
                        </a>
                        <h3></h3>
                    </div>
                    <div class="text-center p-2 ">
                        <h5 class="fw-bold mb-1">Wisata Curug Cinulang</h5>
                        <h6 class="text-warning">Rp. 15.000/orang</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <a href="link-ke-blog-1">
                            <img class="img-fluid" src={{ asset('img/pake-wisata/PaketWisata.png') }} alt="">
                        </a>
                        <h3></h3>
                    </div>
                    <div class="text-center p-2 ">
                        <h5 class="fw-bold mb-1">Wisata Curug Cinulang</h5>
                        <h6 class="text-warning">Rp. 15.000/orang</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destinasi List End -->
</x-guest-layout>
