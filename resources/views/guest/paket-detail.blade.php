<x-guest-layout>

    <div class="container-xxl py-5">

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class=" mx-auto wow fadeInUp bg-white rounded p-3" data-wow-delay="0.1s"
                        style="max-width: 1200px;" id="tab-informasi-umum">
                        <div class="d-flex justify-content-between">
                            <h2 class="mb-3"">Informasi Umum</h2>
                        </div>
                        <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar Blog"
                            style="width:100%; heigth:70%;" class="img-fluid mb-4">
                        <h5 class="mb-3">{{ $item->judul }}</h5>
                        <h6 class="text-warning">Rp {{ number_format($item->harga, 0, ',', '.') }} /Orang</h6>
                        <p class="text-muted">{{ $item->created_at }}</p>
                        <p>{{ $item->deskripsi }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
