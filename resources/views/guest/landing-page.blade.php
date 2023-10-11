<x-guest-layout>
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-7 animated fadeIn mb-4">Temukan <span class="text-primary">Homestay</span> Untuk
                    Tinggal Bersama Keluarga</h1>
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
    <!-- Header End -->

    <!-- Search Start -->
    <div class="container-fluid bg-primary wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
        <div class="container">
        </div>
    </div>
    <!-- Search End -->
    <!-- Destinasi start -->
    <div class="container py-5">
        <div class="row g-4">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto  wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="">Destinasi trending</h1>
                        <p class="text-white-500">Pilihan terpopuler untuk traveler dari Indonesia</p>
                    </div>
                </div>
            </div>
            @php $count = 0 @endphp
            @foreach ($artikel as $item)
                @if ($count < 4)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <a href="{{ route('blog.detail', ['id' => $item->id]) }}">
                                    {{-- <img class="img-fluid" src={{ asset('img/destinasi/PKEK.PNG') }} alt=""> --}}
                                    <img class="img-fluid" src="{{ asset('storage/' . $item->image) }}" alt="">
                                </a>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="fw-bold mb-0">{{ $item->judul }}</h5>
                            </div>
                        </div>
                    </div>
                    @php $count++ @endphp
                @endif
            @endforeach

            <!-- Tambahkan elemen lainnya dengan struktur yang sama -->
        </div>
    </div>
    <!-- Destinasi List End -->

    <!-- Property List Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-">Rekomendasi Terbaik</h1>
                        <p class="text-white-500">Homestay Rekomendasi ini punya banyak hal yang menarik</p>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="" class="tab-pane fade show p-0 active">
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
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a class="btn btn-primary py-3 px-5" href="{{ url('/homestay') }}">Lihat
                        Selanjutnya</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Property List End -->


    <!-- Paket start -->
    <div class="container-xxl py-5">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="text-start mx-auto mb-2 wow slideInLeft" data-wow-delay="0.1s">
                    <h1 class="">Paket Wisata</h1>
                    <p class="text-white-500">Nikmati Liburan Tanpa Batas! Gabungkan Penginapan Anda
                        dengan Petualangan Tak Terlupakan! Pilihlah dari Beragam Pilihan Wisata yang Kami Tawarkan dan
                        Bayar Saat Check-out di Homestay Anda. Mulai Rasakan Sensasi Baru Liburan yang Menakjubkan!</p>
                </div>
            </div>
            @php $count = 0 @endphp
            @foreach ($pakets as $paket)
                @if ($count < 3)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <a href="{{ route('pakets.detail', ['id' => $paket->id]) }}">
                                    <img src="{{ asset('storage/' . $paket->image) }}" alt="Gambar Paket"
                                        class="img-fluid">
                                </a>
                            </div>
                            <div class="text-center p-2 ">
                                <h5 class="fw-bold mb-1">{{ $paket->judul }}</h5>
                                <h6 class="text-warning">Rp. {{ number_format($paket->harga, 0, ',', '.') }}</h6>
                            </div>
                        </div>
                    </div>
                    @php $count++ @endphp
                @endif
            @endforeach
        </div>
    </div>

    <!-- Paket List End -->

    <!-- Call to Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded p-3">
                <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded w-100" src="img/call-to-action.jpg" alt="">
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-4">
                                <h1 class="mb-3">Gabung Mitra Kamojang.id</h1>
                                <p>Rumah impianmu bisa jadi homestay menarik! Nikmati penghasilan tambahan dengan
                                    mengubah rumah menjadi destinasi homestay yang mengagumkan. Hubungi kami sekarang
                                    untuk info lebih lanjut!</p>
                            </div>
                            <a href="{{ url('/register') }}" class="btn btn-primary py-3 px-4 me-2"><i
                                    class="fa fa-house-user me-2"></i>Daftar</a>
                            <a href="https://api.whatsapp.com/send?phone=6289688347718&text=Halo%21%20Saya%20ingin%20mendapatkan%20informasi%20lebih%20lanjut%20tentang%20U-Homestay%20."
                                class="btn btn-dark py-3 px-4">
                                <i class="fa fa-whatsapp me-2"></i>Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Testimonial</h1>
                <p></p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>Saya merasa sangat beruntung bisa bergabung dengan Mitra Kamojang.id. Melalui platform
                            mereka,
                            saya bisa mencapai audiens internasional dan menarik banyak tamu berkualitas. Sistem
                            pemesanan mereka sangat lancar, dan kepuasan tamu meningkat berkat dukungan dan panduan dari
                            tim Kamojang.id.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('img/testimonial-2.jpg') }}"
                                style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Ibu Siti Nurhalizah</h6>
                                <small>Pemilik Homestay Garden</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>Sejak bergabung dengan Mitra Kamojang.id, bisnis homestay saya semakin berkembang pesat!
                            Mereka memberikan platform yang mudah digunakan, dan tim mereka selalu siap membantu dengan
                            pertanyaan dan permintaan saya. Pengalaman kerja sama dengan Kamojang.id sungguh
                            menyenangkan
                            dan membawa kesuksesan bagi bisnis saya.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('img/testimonial-2.jpg') }}"
                                style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Bapak Zaenal Nurharifin</h6>
                                <small>Pemilik Homestay Castil</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>Testimoni positif untuk Kamojang.id! Bergabung dengan mereka adalah keputusan yang tepat.
                            Dengan pemasaran yang efektif dan platform yang canggih, homestay saya sekarang lebih
                            dikenal dan lebih dicari oleh para traveler. Mereka benar-benar peduli pada kesuksesan mitra
                            mereka, dan saya bangga menjadi bagian dari komunitas Kamojang.id.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{ asset('img/testimonial-2.jpg') }}"
                                style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Bapak Dedi Sukaedi</h6>
                                <small>Pemilik Homestay Mawar</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->




</x-guest-layout>


{{-- <div date-rangepicker class="flex items-center">
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
            </svg>
        </div>
        <input name="start" type="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Tanggal Check-in">
    </div>
    <div class="text-gray-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
            class="w-4 h-4 current-fill" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
        </svg>
    </div>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
            </svg>
        </div>
        <input name="end" type="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="tanggal check-out">
    </div>
</div> --}}
