<x-app-layout>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Paket Wisata /</span> Data Paket Wisata</h4>
    <!-- Bordered Table -->
    <div class="card">
        <h5 class="card-header">Tabel Data Paket Wisata</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered mb-4">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($pakets as $paket)
                            <tr>
                                <td>{{ $paket->judul }}</td>
                                <td class="text-wrap">{{ $paket->deskripsi }}</td>
                                <td>{{ $paket->harga }}</td>
                                <td><img class="img-fluid-gambar" src="{{ asset('storage/' . $paket->image) }}"></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Bordered Table -->
</x-app-layout>
<style>
    .img-fluid-gambar {
        width: 50%;
        height: auto;
    }

    .truncate-text {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        width: 200px;
        /* Adjust the width as needed */
    }
</style>
