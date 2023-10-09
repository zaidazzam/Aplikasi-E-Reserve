<x-app-layout>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Service</span> Data Service</h4>
    <!-- Bordered Table -->

    {{-- <div class="mb-3">
        <div class="col-md-4 col-xl-12">
            <div class="d-flex justify-content-between">
                <div class="card bg-primary text-white mb-3 " style="width: 250px">
                    <div class="card-header">
                        <h5 class="card-title text-white">Total Transaksi</h5>
                    </div>
                    <div class="card-body">
                        <h3 class="card-text text-white">Rp 5.000.000</h3>
                    </div>
                </div>
                <div class="card bg-primary text-white mb-3 " style="width: 250px">
                    <div class="card-header">
                        <h5 class="card-title text-white">Total Pengeluaran</h5>
                    </div>
                    <div class="card-body">
                        <h3 class="card-text text-white">Rp 5.000.000</h3>
                    </div>
                </div>
                <div class="card bg-primary text-white mb-3 " style="width: 250px">
                    <div class="card-header">
                        <h5 class="card-title text-white">Total Pendapatan</h5>
                    </div>
                    <div class="card-body">
                        <h3 class="card-text text-white">Rp 5.000.000</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="col-md-4 col-xl-12">
            <div class="d-flex justify-content-between">
               
                <div class="card bg-primary text-white mb-3 " style="width: 250px">
                   
                    <div class="card-body">
                        <h3 class="card-text text-white text-center">5</h3>
                    </div>
                </div>
                
            </div>
        </div>
    </div> --}}
    <div class="mb-2">
        <div class="col-lg-12 col-md-4 ">
            <div class="row">
                
            
            </div>
        </div>
        <div class="col-lg-12 col-md-4 order-1">
            <div class="row">
            </div>
        </div>
    </div>
    </div>

    <div class="card">

        <h5 class="card-header">Tabel Data Service</h5>
        <div class="mb-3 ">
            <div class="col-md-4 col-xl-12">
                <div class="d-flex justify-content-between">

                <div class="modal fade" id="addServiceButton" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel3">Tambah</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="imageService" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="label_file" class="form-label">Nama Service</label>
                                            <input class="form-control" type="text" placeholder="Nama Service" id="label_file" name="nama_service_tambahan" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="label_file" class="form-label">Harga</label>
                                            <input class="form-control" type="number" placeholder="Harga" id="label_file" name="harga" />
                                        </div>
                                        </div>
                                        
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Tutup
                                </button>
                                <button type="button" id="addServiceButton" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addServiceButton">
                    Tambah Service
                </button>
                    <!-- <div class="input-group input-group-merge me-4" style="width: 500px">
                        <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search..."
                            aria-describedby="basic-addon-search31" />
                    </div> -->
                    <!-- <div class=" justify-content-end">
                        <div class="btn-group me-4">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Status Payment
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">Belum</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Luna</a></li>
                            </ul>
                        </div>
                        <div class="btn-group me-4">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Status Checkin
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">Belum</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Sedang</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Selesai</a></li>

                            </ul>
                        </div>
                        <div class="btn-group me-4">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Status Transfer Pemilik
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">Belum</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Sudah</a></li>

                            </ul>
                        </div>
                    </div> -->

                </div>

            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered mb-4">
                    <thead>
                        <tr>
                            <th>Nama Service</th>
                            <th>Biaya</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($service_tambahan as $data)
                            <tr>
                                <td>{{ $data->nama_service_tambahan }}</td>
                                <td>{{ $data->harga }}</td>
                                <td class="text-wrap">
                            <div class="row justify-content-start px-4">
                                <div class="col-12">
                                <button class="btn btn-danger delete-pengeluaran" data-id="{{ $data->id }}">Hapus</button>
                                </div>
                            </div>
                        </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
                
          <!-- Modal for updating transaksi -->
                <div class="modal fade" id="updateTransaksiModal" tabindex="-1" aria-labelledby="updateTransaksiModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateTransaksiModalLabel">Update Transaksi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Add your form fields for updating transaksi data here -->
                                <!-- For example: -->
                                <form id="updateTransaksiForm">
                                @csrf
                                    <div class="mb-3">
                                    <label for="status_payment" class="form-label">Status Payment</label>
                                        <select class="form-select" id="status_payment" name="status_payment">
                                            <option value="pending">Pending</option>
                                            <option value="success">success</option>
                                            <option value="failed">Tolak / Refund</option>
                                        </select>
                                    </div>
                                    <!-- Add more fields as needed -->
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="updateTransaksiHistoryButton">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

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
