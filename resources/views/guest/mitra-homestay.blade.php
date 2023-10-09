<style>

</style>
<x-guest-layout>
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-7 animated fadeIn mb-4">Gabung Mitra Kamojang.id</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ url('/beranda') }}">Beranda</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page">Kamojang.id</li>
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

    <!-- Call to Action Start -->
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
    <div class="container">
        <div class="bg-light rounded p-3">
            <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                    <div class="">
                        <h2 class="">Keuntungan Menjadi Agen Kamojang.id</h2>
                        <ul>
                            <li>Peluang penghasilan tambahan dengan memanfaatkan properti Anda</li>
                            <li>Dukungan pemasaran dan promosi dari Kamojang.id</li>
                            <li>Akses ke platform dan jaringan luas pelanggan</li>
                            <li>Proses pendaftaran yang mudah dan cepat</li>
                            <li>Fleksibilitas dalam menentukan tarif dan ketersediaan</li>
                        </ul>
                    </div>
                    <div class="">
                        <h2 class="">Persyaratan</h2>
                        <ul>
                            <li>Memiliki properti yang sesuai untuk dijadikan homestay</li>
                            <li>Bersedia menjalani proses verifikasi dan inspeksi properti</li>
                            <li>Memberikan informasi akurat tentang fasilitas, layanan, dan harga</li>
                            <li>Mengikuti pedoman dan standar layanan Kamojang.id</li>
                            <li>Mampu memberikan pelayanan yang baik kepada tamu</li>
                        </ul>
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
                                pemesanan mereka sangat lancar, dan kepuasan tamu meningkat berkat dukungan dan panduan
                                dari
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
                                Mereka memberikan platform yang mudah digunakan, dan tim mereka selalu siap membantu
                                dengan
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
                                dikenal dan lebih dicari oleh para traveler. Mereka benar-benar peduli pada kesuksesan
                                mitra
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
