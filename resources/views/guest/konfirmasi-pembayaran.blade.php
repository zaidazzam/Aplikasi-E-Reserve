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
    <title>Konfirmasi Pembayaran</title>

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
    </style>
</head>

<body>
    <!--================Order Details Area =================-->
    <section class="order_details section_gap mb-4">
        <div class="container mt-4">
            <h3 class=" text-center mb-4">Terima kasih. Pesanan Anda telah selesai
                diterima.
            </h3>
            <div class="row order_d_inner">
                <div class="col-lg-6">
                    <div class="details_item">
                        <h4>Informasi Pesanan</h4>
                        <ul class="list">
                            <li><a><span>Nomor Pesanan</span> : {{ $detail_transaksi->nomor_invoice }}</a></li>
                            <li><a><span>Tanggal</span> : {{ $detail_transaksi->created_at }}</a></li>
                            <li><a><span>Total</span> : Rp. {{ number_format($total_semua_harga, 0, ',', '.'); }}</a></li>
                            <li><a><span>Status Pembayaran</span> : {{ $detail_transaksi->status_payment }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 mt-2">
                    <div class="details_item">
                        <h4>Identitas Pemesan</h4>
                        <ul class="list">
                            <li><a><span>Nama</span> :  {{ $detail_transaksi->nama_depan }}</a></li>
                            <li><a><span>No telepon</span> : {{ $detail_transaksi->notelp }}</a></li>
                            <li><a><span>email</span> : {{ $detail_transaksi->email }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="order_box mb-3">
                <h2>Alert Blablabalabla</h2>
            </div>
            <div class="order_box">
                <h2>Rincian Pesanan Anda</h2>
                <div class="details_item mb-2">
                    <ul class="list list_2">
                        <li><a>Check-in <span>{{ $detail_transaksi->check_in }}</span></a></li>
                        <li><a>Check-out<span>{{ $detail_transaksi->check_out }}</span></a></li>
                        <li><a>Total Masa inap <span>{{ $detail_transaksi->total_masa_inap }} Hari </span></a></li>
                        @if ($detail_transaksi->peserta)
                            <li><a>Jumlah Peserta <span>{{ $detail_transaksi->peserta }}</span></a></li>
                        @endif
                    </ul>
                </div>
                <h2>Rincian Biaya Homestay</h2>
                <ul class="list list_2">
                    <li><a href="">Harga Homestay <span>Rp. {{ number_format($detail_transaksi->total_harga, 0, ',', '.'); }}</span></a></li>
                   
                </ul>

                <h2>Rincian Biaya Paket Wisata</h2>
                <ul class="list list_2">
                    <li><a href="">Harga TOTAL <span> Rp. {{ number_format($total_harga, 0, ',', '.'); }} </span></a></li>
                    @foreach ($list_paket_transaksi as $selectedPaket)
                        <li><a href=""> {{ $selectedPaket->paket->judul }}<span>Rp. {{ number_format($selectedPaket->paket->harga, 0, ',', '.') }}</span></a></li>
                    @endforeach
                   
                </ul>
                <h2>Rincian Biaya Service Tambahan</h2>
                <ul class="list list_2">
                    <li><a href="">Harga TOTAL <span> Rp. {{ number_format($total_harga_service, 0, ',', '.'); }} </span></a></li>
                    @foreach ($list_service_transaksi as $selectedPaket)
                        <li><a href=""> {{ $selectedPaket->service_tambahan->nama_service_tambahan }}<span>Rp. {{ number_format($selectedPaket->service_tambahan->harga, 0, ',', '.') }}</span></a></li>
                    @endforeach
                   
                </ul>
            </div>
        </div>
    </section>
    </section>
    <!--================End Order Details Area =================-->


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