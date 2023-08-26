<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Karma Shop</title>

    <!--
            CSS
            ============================================= -->
    <link href="{{ asset('css/linearicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nouislider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: rgb(255, 253, 249);
        }

        .section_gap {
            padding-top: 0;
            pa dding-bottom: 100px;
        }

        .form-select {
            display: block;
            width: 100%;
            padding: .375rem 2.25rem .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #666565;
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right .75rem center;
            background-size: 16px 12px;
            border: 1px solid #666565 !important;
            border-radius: 5px;
            appearance: none
        }

        .bg-light {
            background-color: #ffffffdf;
            padding: 4px;
            border-radius: 1px solid;
        }

        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        #bc::before {
            content: ">";
        }

        /*Styling card*/

        .card .card-body h5 {
            font-weight: 400;
            font-size: 16px;
            line-height: 120%;
            color: #1A1A19;
        }

        .card .card-body h5.pricing {
            font-weight: 500;
        }

        .card .card-body p {
            font-size: 14px;
            color: #575959;
        }

        select.kategori {
            width: auto !important;
        }

        .form-select {
            border: 0.5px solid #A1A1A1 !important;
            border-radius: 6px;
        }

        .form-select:after {
            content: "\25BC";
            position: absolute;
            top: 50%;
            right: 1rem;
            transform: translateY(-50%);
            pointer-events: none;
        }



        .card-left p {
            font-weight: 400;
            font-size: 12px;
            color: #000000;
            margin: 1rem 0px;
        }

        /*Pilih kategori*/
        h3.tosca {
            color: #219EBC !important;
        }

        .pembayaran div {
            border: 0.5px solid #A1A1A1;
            border-radius: 4px;
            padding: 10px;
            height: 60px;
            margin-left: 1rem;
        }

        .pembayaran div.first {
            margin-left: 0px !important;
        }

        .metode-pembayaran h3 {
            font-size: 14px;
            margin: 1rem 0;
        }

        /*Bank Transfer*/
        .metode-pembayaran.bank h3 {
            color: #575959;
            margin: .75em 0;
        }

        .metode-pembayaran.bank h2 {
            margin-top: 0px;
        }

        h3.tosca.bank {
            text-align: right;
        }

        /*Styling page order*/
        .form-pemesan.order {
            box-shadow: none;
            margin: 0;
            padding: 0;
        }



        .buttonPrimary.order {
            font-size: 12px;
            width: 100%;
            margin-top: .75rem;
        }
    </style>
</head>

<body>


    <!-- End Banner Area -->
    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <!-- Start Banner Area -->
        <section>
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center pt-4">
                    <div class="col-first">
                        <h1 class="text-dark">Metode Pembayaran</h1>
                    </div>
                </div>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a href="{{ url('/beranda') }}">Beranda</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page">Homestay</li>
                        <li class="breadcrumb-item text-body active" aria-current="page">Pembayaran</li>
                        <li class="breadcrumb-item text-body active" aria-current="page">Metode pembayaran</li>
                    </ol>
                </nav>
            </div>
        </section>
        <div class="container">
            <div class="billing_details bg-light">
                <div class="row">
                    <div class="card-left col-8">
                        <div class="form-pemesan">
                            <h2>Pilih Metode</h2>
                            <div class="metode-pembayaran">
                                <div class="pilihan mb-3">
                                    <h3>Pembayaran Dana</h3>
                                    <div class="d-flex pembayaran">
                                        <div class="first mt-4 me-3"><img
                                                src="{{ asset('img/logo-pembayaran/Logo_dana_blue.svg.png') }}"
                                                alt="Pembayaran Dana" style="max-width: 80px; "></div>
                                        <ul class="m-2">
                                            <li>
                                                <h3>Nama Dana: Zaid Abdullah Azzam</h3>
                                            </li>
                                            <li>
                                                <h3>Nomor Dana: 089688347718</h3>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>Pembayaran Bank BNI</h3>
                                    <div class="d-flex pembayaran">
                                        <div class="first mt-4 me-3"><img
                                                src="{{ asset('img/logo-pembayaran/bni.svg') }}" alt="Pembayaran Dana"
                                                style="max-width: 80px; "></div>
                                        <ul class="m-2">
                                            <li>
                                                <h3>Nama BNI: Zaid Abdullah Azzam</h3>
                                            </li>
                                            <li>
                                                <h3>Nomor BNI: 089688347718</h3>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>Pembayaran Bank BNI</h3>
                                    <div class="d-flex pembayaran">
                                        <div class="first mt-4 me-3"><img
                                                src="{{ asset('img/logo-pembayaran/bni.svg') }}" alt="Pembayaran Dana"
                                                style="max-width: 80px; "></div>
                                        <ul class="m-2">
                                            <li>
                                                <h3>Nama BNI: Zaid Abdullah Azzam</h3>
                                            </li>
                                            <li>
                                                <h3>Nomor BNI: 089688347718</h3>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>Pembayaran Bank BNI</h3>
                                    <div class="d-flex pembayaran">
                                        <div class="first mt-4 me-3"><img
                                                src="{{ asset('img/logo-pembayaran/bni.svg') }}" alt="Pembayaran Dana"
                                                style="max-width: 80px; "></div>
                                        <ul class="m-2">
                                            <li>
                                                <h3>Nama BNI: Zaid Abdullah Azzam</h3>
                                            </li>
                                            <li>
                                                <h3>Nomor BNI: 089688347718</h3>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>Pembayaran Bank BNI</h3>
                                    <div class="d-flex pembayaran">
                                        <div class="first mt-4 me-3"><img
                                                src="{{ asset('img/logo-pembayaran/bni.svg') }}" alt="Pembayaran Dana"
                                                style="max-width: 80px; "></div>
                                        <ul class="m-2">
                                            <li>
                                                <h3>Nama BNI: Zaid Abdullah Azzam</h3>
                                            </li>
                                            <li>
                                                <h3>Nomor BNI: 089688347718</h3>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                                <div class=" mb-3">
                                    <h3>Bank Transfer</h3>
                                    <div class="d-flex pembayaran">
                                        <a href="bayar-bank.html">
                                            <div class="first"><img src="img/logo-pembayaran/bni.svg"
                                                    alt="Bank Transfer"></div>
                                        </a>
                                        <a href="bayar-bank.html">
                                            <div><img src="img/logo-pembayaran/bri 1.svg" alt="Bank Transfer"></div>
                                        </a>
                                        <a href="bayar-bank.html">
                                            <div><img src="img/logo-pembayaran/mandiri 1.svg" alt="Bank Transfer">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Rincian Pesanan Anda</h2>
                            <div class="details_item mb-2">
                                <ul class="list list_2">
                                    <li><a>Check-in <span>Jum, 11 Agu 2023</span></a></li>
                                    <li><a>Check-out<span>Sab, 12 Agu 2023</span></a></li>
                                    <li><a>Total Masa inap <span>1 Malam</span></a></li>
                                </ul>
                            </div>
                            <h2>Rincian Biaya Anda</h2>
                            <ul class="list list_2">
                                <li><a href="">Harga Homestay <span>Rp. 123.567</span></a></li>
                                <li><a href="">Biaya Pemesanan <span>Rp. 2.500.</span></a></li>
                                <li><a href="">Paket Wisata <span>Rp. 123.500. x 5 </span></a></li>
                                <label>Paket wisata akan disesuaikan dengan jumlah peserta untuk memberikan pengalaman
                                    yang lebih memuaskan.</label>
                                {{-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Pajak
                                    </label>
                                </div> --}}
                                <li><a href="#">Total <span>Rp.2000.0000</span></a></li>
                            </ul>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">Saya telah membaca dan menerima</label>
                                <a href="#">syarat & ketentuan*</a>
                            </div>
                            <a class="primary-btn" href="#">Lanjutkan Pembayaran</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--================End Checkout Area =================-->

    <script src="{{ asset('js-2/main.js') }}"></script>
    <script src="{{ asset('js-2/gmaps.min.js') }}"></script>
    <script src="{{ asset('js-2/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js-2/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js-2/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js-2/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js-2/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js-2/nouislider.min.js') }}"></script>
    <script src="{{ asset('js-2/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js-2/owl.carousel.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
</body>

</html>
