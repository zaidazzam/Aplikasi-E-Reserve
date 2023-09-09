<x-app-layout>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Fasilitas /</span> Data Fasilitas</h4>
    <!-- Bordered Table -->
    <div class="card">
        <h5 class="card-header">Tabel Data Fasilitas Homestay</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered mb-4">
                    <thead>
                        <tr>
                            <th>Nama Fasilitas</th>
                            <th>Gambar</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ruang Tamu</td>
                            <td> <img class="img-fluid-gambar" src="{{ asset('img/header/pemandangan2.svg') }}"
                                    alt="">
                            </td>
                            <td class="text-center"> <button type="submit" class="btn btn-danger">Hapus</button>
                        </tr>
                        <tr>
                            <td>Media Tv</td>
                            <td> <img class="img-fluid-gambar" src="{{ asset('img/header/pemandangan2.svg') }}"
                                    alt="">
                            </td>
                            <td class="text-center"> <button type="submit" class="btn btn-danger">Hapus</button>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Bordered Table -->
</x-app-layout>
<style>
    .img-fluid-gambar {
        width: 20%;
        height: auto;
    }
</style>
