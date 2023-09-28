<x-app-layout>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Artikel /</span> Data Artikel</h4>
    <!-- Bordered Table -->
    <div class="card">
        <h5 class="card-header">Tabel Data Artikel</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered mb-4">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artikels as $artikel)
                        <tr>
                            <td>{{ $artikel->judul }}</td>
                            <td class="truncate-text">{{ $artikel->deskripsi }}</td>
                            <td><img class="img-fluid-gambar" src="{{ asset('storage/' . $artikel->image) }}"></td>
                           
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
    <!--/ Bordered Table -->
</x-app-layout>
<style>
    .img-fluid-gambar {
        width: 25%;
        height: auto;
    }
</style>
