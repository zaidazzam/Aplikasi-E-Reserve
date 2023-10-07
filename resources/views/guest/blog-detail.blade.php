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
                        <p class="text-muted">{{ $item->created_at }}</p>
                        <p>{!! nl2br(e($item->deskripsi)) !!}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="related-blogs">
                        <h3>Artikel Terkait</h3>
                        <div class="list-group">
                            @foreach ($list_article as $item)
                                <a href="{{ route('blog.detail', ['id' => $item->id]) }}"
                                    class="list-group-item">{{ $item->judul }}</a>
                                <!-- Tambahkan artikel terkait lainnya di sini -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
