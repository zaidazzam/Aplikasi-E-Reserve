<x-app-layout>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Transaksi /</span> Layanan Transaksi</h4>
    <!-- Bordered Table -->

    <div class="mb-3">
        <div class="col-md-6 col-xl-4">
            <div class="card bg-primary text-white mb-3">
                <div class="card-header">
                    <h5 class="card-title text-white">Total Layanan Transaksi</h5>
                </div>
                <div class="card-body">
                    <h2 class="card-text text-white">Rp {{ number_format($total_paket, 0, ',', '.') }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Tabel Data Layanan Transaksi</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered mb-4">
                    <thead>
                        <tr>
                            <th>Nama Service</th>
                            
                            <th>Harga</th>

                            <th>Tanggal</th>
                           

                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($paket_transaksi as $item)
                        <tr>
                            <td class="text-wrap">{{$item->service_tambahan->nama_service_tambahan}}</td>
                            <td class="text-wrap">{{$item->service_tambahan->harga}}</td>
                            <td class="text-wrap">{{$item->created_at}}</td>
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
        width: 25%;
        height: auto;
    }
</style>
