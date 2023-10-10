<x-guest-layout>
    <!-- Header Start -->

    <!-- Header End -->

    <!-- Search Start -->

    <!-- Search End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center ">
                <div class="col-lg-6 wow fadeIn " data-wow-delay="0.1s">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <img class="img-fluid rounded-2" src="{{ asset('storage/' . $homestay->image) }}"
                                    style="width:100%;" alt="">
                            </div>
                            @foreach ($list_image_homestay as $image)
                                <div class="carousel-item">
                                    <img class="img-fluid rounded-2" src="{{ asset('storage/' . $image->image) }}"
                                        style="width:100%;" alt="">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row align-items-center justify-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <label for="">Checkin</label>
                                <input id="datepicker" class="btn-outline-primary" width="276" />

                                <input id="homestay_id" value="{{ $homestay->id }}" style="display:none;"
                                    class="btn-outline-primary" width="276" />
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <label for="">CheckOut</label>
                                <input id="datepicker1" class="btn-outline-primary" width="276" />
                            </div>
                        </div>
                        <a id="bookingLink" class="btn btn-primary justify-center py-3 px-5 mt-3" style="width: 100%"
                            href="{{ url('/beranda/paket/') }}">Pesan</a>

                    </div>
                    <iframe class="position-relative rounded w-100 h-80"
                        src="https://maps.google.com/maps?q=kamojang&t=&z=10&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" style="min-height: 250px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-lg-6 wow fadeIn rounded-2" data-wow-delay="0.1s">

                </div>

            </div>
        </div>
    </div>
    <!-- Search Start -->
    <div class="container-fluid mb-2 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
        <div class="container">
            <div class="row g-0">
                <!-- The navigation menu -->
                <div class="navbar1">
                    <a href="#tab-informasi-umum" class="a1">Informasi Umum</a>
                    <a href="#tab-fasilitas" class="a1">Fasilitas</a>
                    <a href="#tab-kebijakan" class="a1">Kebijakan</a>
                    <a href="#tab-ulasan" class="a1">Ulasan</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->

    <!-- Testimonial Start -->
    <div class="container-xxl">
        <div class="container">
            <div class=" mx-auto wow fadeInUp bg-white rounded p-3" data-wow-delay="0.1s" style="max-width: 1200px;"
                id="tab-informasi-umum">
                <div class="d-flex justify-content-between">
                    <h2 class="mb-3"">Informasi Umum</h1>
                        <div>
                            <h6 class="btn btn-primary" data-bs-toggle="pill" href="#tab-ramah-keluarga">8,6</h6>
                        </div>
                </div>
                <h5 class="mb-3">{{ $homestay->nama }}</h5>
                <h5 class="text-warning mb-3">Rp. {{ number_format($homestay->harga, 0, ',', '.') }}</h5>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $homestay->alamat }}
                </p>
                <p>{!! nl2br(e($homestay->deskripsi)) !!}</p>
                <div>
                    <label for="" class="fw-bold"> Kapasitas Tamu</label>
                    <p class="me-2"><i class="fa fa-person text-primary me-2"></i> {{ $homestay->kapasitas_kamar }}
                        dewasa
                    </p>
                </div>
            </div>

            <div class=" mx-auto wow fadeInUp bg-white rounded p-3 m-2" data-wow-delay="0.1s" id="tab-fasilitas"
                style="max-width: 1200px;">
                <h2 class="mb-3">Fasilitas</h2>
                <div class="col-12">
                    <div class="row gy-4">
                        {{-- <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="rounded ">
                                <div class="d-flex align-items-center bg-white rounded p-2"
                                    style="border: 1px dashed rgba(0, 185, 142, .3)">
                                    <div class="icon me-3" style="width: 20px; height: 20px;">
                                        <i class="fa-solid fa-kitchen-set text-primary"></i>
                                    </div>
                                    <span>Dapur</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="rounded ">
                                <div class="d-flex align-items-center bg-white rounded p-2"
                                    style="border: 1px dashed rgba(0, 185, 142, .3)">
                                    <div class="icon me-3" style="width: 20px; height: 20px;">
                                        <i class="fa fa-bed text-primary"></i>
                                    </div>
                                    <span>{{ $homestay->jumlah_kamar }} Kamar Tidur</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="rounded ">
                                <div class="d-flex align-items-center bg-white rounded p-2"
                                    style="border: 1px dashed rgba(0, 185, 142, .3)">
                                    <div class="icon me-3" style="width: 20px; height: 20px;">
                                        <i class="fa fa-bath text-primary"></i>
                                    </div>
                                    <span>Kamar mandi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="rounded ">
                                <div class="d-flex align-items-center bg-white rounded p-2"
                                    style="border: 1px dashed rgba(0, 185, 142, .3)">
                                    <div class="icon me-3" style="width: 20px; height: 20px;">
                                        <i class="fa-solid fa-warehouse text-primary"></i>
                                    </div>
                                    <span>Tempat Parkir</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="rounded ">
                                <div class="d-flex align-items-center bg-white rounded p-2"
                                    style="border: 1px dashed rgba(0, 185, 142, .3)">
                                    <div class="icon me-3" style="width: 20px; height: 20px;">
                                        <i class="fa-solid fa-smoking text-primary"></i>
                                    </div>
                                    <span>Area merokok</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="rounded ">
                                <div class="d-flex align-items-center bg-white rounded p-2"
                                    style="border: 1px dashed rgba(0, 185, 142, .3)">
                                    <div class="icon me-3" style="width: 20px; height: 20px;">
                                        <i class="fa-solid fa-tv text-primary"></i>
                                    </div>
                                    <span>TV</span>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="rounded ">
                                <div class="d-flex align-items-center bg-white rounded p-2"
                                    style="border: 1px dashed rgba(0, 185, 142, .3)">
                                    <div class="icon me-3" style="width: 20px; height: 20px;">
                                        <i class="fa-solid fa-fan text-primary"></i>
                                    </div>
                                    <span>Kipas</span>
                                </div>
                            </div>
                        </div> --}}

                        @forelse ($fasilitas as $data)
                            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                                <div class="rounded ">
                                    <div class="d-flex align-items-center bg-white rounded p-2"
                                        style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 20px; height: 20px;">
                                            <img src="{{ asset('storage/' . $data['fasilitas']['icon']) }}" alt="">
                                        </div>
                                        <span>{{ $data['fasilitas']['nama'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            
                        @endforelse
                    </div>
                </div>
            </div>
            <div class=" mx-auto wow fadeInUp bg-white rounded p-3 m-2" data-wow-delay="0.1s" id="tab-kebijakan"
                style="max-width: 1200px;" id="tab-informasi-umum">
                <h2 class="mb-3">Kebijakan</h2>
                <p>Berikut adalah rapihkan kalimat dengan menggunakan list:</p>
                {!! nl2br(e($homestay->kebijakan)) !!}
            </div>
            <div class=" mx-auto wow fadeInUp bg-white rounded p-3" data-wow-delay="0.1s" style="max-width: 1200px;"
                id="tab-ulasan" id="tab-informasi-umum">
                <h2 class="mb-3">Ulasan</h2>
                <div>
                    <form action="{{ route('ulasan.store', $homestay['id']) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div>
                            <label for="">Ulasan</label>
                            <textarea name="ulasan" id="ulasan" cols="2" rows="10" class="form-control"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    @forelse ($ulasan as $data)
                        <div class="testimonial-item bg-light rounded p-3">
                            <div class="bg-white border rounded p-4">
                                <p>{{ $data['ulasan'] }}</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded"
                                        src="{{ asset('img/testimonial-2.jpg') }}" style="width: 45px; height: 45px;">
                                    <div class="ps-3">
                                        <h6 class="fw-bold mb-1">{{ $data['nama'] }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        
                    @endforelse
                </div>
            </div>

        </div>
    </div>
    <!-- Testimonial End -->
</x-guest-layout>
{{--
<div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
    <div class="rounded ">
        <div class="d-flex align-items-center bg-white rounded p-2"
            style="border: 1px dashed rgba(0, 185, 142, .3)">
            <div class="icon me-3" style="width: 20px; height: 20px;">
                <i class="fa-solid fa-person-swimming text-primary"></i>
            </div>
            <span>Kolam Renang</span>
        </div>
    </div>
</div> --}}

<style>
    .gj-icon {
        color: #04AA6D;
    }

    .text-dark1 {
        color: black;
    }

    #datepicker {
        width: 180px;
    }

    #datepicker>span:hover {
        cursor: pointer;
    }

    /* Style the navigation menu */
    .navbar1 {
        width: 100%;
        background-color: #04AA6D;
        overflow: auto;
    }

    /* Navigation links */
    .navbar1 .a1 {
        float: left;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-size: 17px;
        width: 25%;
        /* Four equal-width links. If you have two links, use 50%, and 33.33% for three links, etc.. */
        text-align: center;
        /* If you want the text to be centered */
    }

    /* Add a background color on mouse-over */
    .navbar1 .a1:hover {
        background-color: #31e5a9;
    }

    /* Style the current/active link */
    .navbar1 .a1.active {
        background-color: #04AA6D;
    }

    /* Add responsiveness - on screens less than 768px, make the navigation links appear on top of each other, instead of next to each other */
    @media screen and (max-width: 768px) {
        .navbar1 .a1 {
            float: none;
            display: block;
            width: 100%;
            text-align: center;
            /* Center the links on small screens */
        }
    }

    input {
        font-style: normal;
        font-weight: normal;
        text-decoration: inherit;
        border-radius: 0 !important;
    }

    .form-control {
        border-radius: 0 !important;
        font-size: 12x;
    }

    .clickable {
        cursor: pointer;
    }

    /* ini untuk ui disable di calender */
    .gj-picker-bootstrap table tr td.disabled div{
        color: red;
    }
</style>
<!-- About End -->


<script>
    // format datenya adalah m-d-y
    function dateRangeToList(startDate, endDate) {
        // Ubah string tanggal awal dan akhir menjadi objek Date
        startDate = new Date(startDate);
        endDate = new Date(endDate);

        // Inisialisasi array untuk menyimpan tanggal-tanggal dalam rentang
        const dateList = [];

        // Loop dari tanggal awal hingga tanggal akhir, termasuk tanggal akhir
        let currentDate = startDate;
        while (currentDate <= endDate) {
            // Tambahkan tanggal ke array dengan format yang diinginkan (dd/mm/yyyy)
            const day = currentDate.getDate();
            const month = currentDate.getMonth() + 1; // Bulan dimulai dari 0
            const year = currentDate.getFullYear();
            dateList.push(`${month}/${day}/${year}`);

            // Tambahkan satu hari ke tanggal saat ini
            currentDate.setDate(currentDate.getDate() + 1);
        }

        return dateList;
    }

    var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
    $('#datepicker').datepicker().destroy()
    $('#datepicker1').datepicker().destroy()

    let dateDisable = [];

    @foreach ($date_disable as $data)
        dateDisable = dateRangeToList('{{ Carbon\Carbon::create($data["check_in"])->format("m-d-Y") }}', '{{ Carbon\Carbon::create($data["check_out"])->format("m-d-Y") }}')
            .concat(dateDisable)
    @endforeach

    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        disableDates: dateDisable,
        minDate: today
    });

    $('#datepicker1').datepicker({
        uiLibrary: 'bootstrap4',
        disableDates: dateDisable,
        minDate: today
    });
</script>




{{-- <div class="property-item rounded overflow-hidden">
        <div class="row">
            <div class="col-md-6">
                <div class="position-relative overflow-hidden">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="{{ asset('img/property-1.jpg') }}" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="{{ asset('img/property-2.jpg') }}" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="{{ asset('img/property-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Pasangan
                    </div>
                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">8,5
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mt-5 pb-0">
                    <h5 class="text-primary mb-3">Rp. 1234.567</h5>
                    <a class="d-block h5 mb-2" href="">Homestay Coffee Garden</a>
                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Jl. Desa Kamojang</p>
                </div>
                <div class="d-flex border-top">
                    <small class="flex-fill border-end py-2"><i
                            class="fa-solid fa-kitchen-set text-primary me-2"></i>1
                        Dapur</small>
                    <small class="flex-fill  border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3
                        Kasur</small>
                    <small class="flex-fill  py-2"><i class="fa fa-bath text-primary me-2"></i>2
                        Toilet</small>
                </div>
                <div class="d-flex border-top">
                    <small class="flex-fill  border-end py-2"><i
                            class="fa-solid fa-kitchen-set text-primary me-2"></i>1
                        Dapur</small>
                    <small class="flex-fill  border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3
                        Kasur</small>
                    <small class="flex-fill  py-2"><i class="fa fa-bath text-primary me-2"></i>2
                        Toilet</small>
                </div>
            </div>
        </div>
    </div> --}}
