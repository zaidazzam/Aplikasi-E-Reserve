<x-guest-layout>
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-7 animated fadeIn mb-4">Lokal Homestay</h1>
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
    <div class="container-fluid bg-primary wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
        <div class="container">
        </div>
    </div>
    <!-- Search End -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-3 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3">Paling Rekomendasi</h1>
                        <p class="text-white-500">Homestay rekomendasi ini punya banyak hal yang menarik</p>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-rekomendasi" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @php $counter = 0 @endphp
                        @foreach ($homestay as $item)
                            @if ($counter < 3)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href="{{ route('homestay.detail', ['id' => $item->id]) }}">
                                                <img class="img-fluid" src="{{ asset('storage/' . $item->image) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp.
                                                {{ number_format($item->harga, 0, ',', '.') }} / malam</h5>
                                            <a class="d-block h5 mb-2"
                                                href="{{ route('homestay.detail', ['id' => $item->id]) }}">{{ $item->nama }}</a>
                                            <p><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>{{ $item->alamat }}
                                            </p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa-solid fa-kitchen-set text-primary me-2"></i> Dapur</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-bed text-primary me-2"></i> Kasur</small>
                                            <small class="flex-fill text-center py-2"><i
                                                    class="fa fa-bath text-primary me-2"></i> Toilet</small>
                                        </div>
                                    </div>
                                </div>
                                @php $counter++ @endphp
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-primary mt-2 mb-3 wow fadeIn" data-wow-delay="0.1s" style="padding: 20px;">
            </div>
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Pilih Homestay</h1>
                            <p class="text-white-500">Temukan penginapan terbaik di Kamojang</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2 dropdown">
                                <a href="#" class="dropdown-toggle btn btn-outline-primary"
                                    data-bs-toggle="dropdown">Harga</a>
                                <div class="dropdown-menu rounded-0">
                                    <a href="#tab-murah" class="dropdown-item">Harga: Rendah ke Tinggi</a>
                                    <a href="#tab-mahal" class="dropdown-item">Harga: Tinggi ke Rendah</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-pasangan" class="tab-pane fade show p-0 active mb-3">
                        <div class="row g-4">
                            @foreach ($homestay as $item)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href="{{ route('homestay.detail', ['id' => $item->id]) }}">
                                                <img class="img-fluid" src="{{ asset('storage/' . $item->image) }}"
                                                    alt="">
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">Rp.
                                                {{ number_format($item->harga, 0, ',', '.') }} / malam</h5>
                                            <a class="d-block h5 mb-2"
                                                href="{{ route('homestay.detail', ['id' => $item->id]) }}">{{ $item->nama }}</a>
                                            <p><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>{{ $item->alamat }}
                                            </p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa-solid fa-kitchen-set text-primary me-2"></i>
                                                Dapur</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-bed text-primary me-2"></i> Kasur</small>
                                            <small class="flex-fill text-center py-2"><i
                                                    class="fa fa-bath text-primary me-2"></i>Toilet</small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="mt-4">
            <nav aria-label="Page navigation example ">
                <ul class="pagination pagination-lg justify-content-center d-inline-flex flex-wrap">
                    <li class="page-item disabled">
                        <a class="page-link " href="#" tabindex="-1">Previous</a>
                    </li>

                    <?php for ($i = 1; $i < 4; $i++) : ?>
                    <li class="page-item"><a class="page-link" href="#"><?= $i ?></a></li>

                    <?php endfor; ?>

                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div> --}}
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
                            Kamojang.id. Dengan pilihan homestay berkualitas terbaik, Anda dapat menikmati kenyamanan
                            yang
                            luar
                            biasa sambil menjelajahi keindahan Indonesia. Berikut fasilitas yang akan Anda nikmati:
                        </p>
                        <p><i class="fa fa-check text-primary me-3"></i>Penginapan Homestay Berkualitas: Anda akan
                            menginap
                            di homestay yang nyaman dan menghadirkan suasana seperti di rumah. Kami memastikan
                            kenyamanan
                            Anda adalah prioritas utama kami.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Paket Wisata Terlengkap: Jelajahi keindahan
                            alam
                            dan
                            budaya Indonesia bersama kami. Paket ini mencakup beragam destinasi menarik yang akan
                            memukau
                            mata dan hati Anda.</p>
                        Layanan Katering: Nikmati hidangan lezat dan istimewa setiap hari selama menginap. Tim katering
                        kami
                        akan memastikan Anda menikmati masakan lokal yang lezat.
                    </div>
                </div>
            </div>
        </div>
        <!-- paket End -->



</x-guest-layout>
