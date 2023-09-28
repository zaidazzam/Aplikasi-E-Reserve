<style>
    .blog-detail {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .blog-detail h2 {
        color: #333;
    }

    .blog-detail p.text-muted {
        color: #999;
    }

    .blog-detail img {
        max-width: 100%;
        border-radius: 10px;
    }

    .related-blogs {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .related-blogs h3 {
        color: #333;
    }

    .list-group-item {
        background-color: #f8f9fa;
        border: none;
        border-radius: 0;
        color: #333;
    }

    .list-group-item:hover {
        background-color: #e2e6ea;
        color: #333;
    }
</style>
<x-guest-layout>
    <!-- Header Start -->
    <!-- <div class="container-fluid header bg-white p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-7 animated fadeIn mb-4">Detail Blog</h1>
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
    </div> -->
    <!-- Search Start -->
    <!-- <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
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
    </div> -->
    <!-- Search End -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-detail">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar Blog" style="width:100%; heigth:70%;" class="img-fluid mb-4">
                    <h2>{{ $item->judul }}</h2>
                    <p class="text-muted">{{ $item->created_at }}</p>
                    <p>{{ $item->deskripsi }}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="related-blogs">
                    <h3>Artikel Terkait</h3>
                    <div class="list-group">
                        @foreach($list_article as $item)
                        <a href="{{ route('blog.detail', ['id' => $item->id]) }}" class="list-group-item">{{$item->judul}}</a>
                        <!-- Tambahkan artikel terkait lainnya di sini -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
