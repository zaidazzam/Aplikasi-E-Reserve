<x-app-layout>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Transaksi /</span> Data Transaksi</h4>
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
                <div class="col-lg-4 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success"
                                        class="rounded" />
                                </div>

                            </div>
                            <span class="fw-semibold d-block mb-1">Total Transaksi</span>
                            <h3 class="card-title mb-2">Rp {{ number_format($totalHargaSeluruhTransaksi, 0, ',', '.') }}
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card"
                                        class="rounded" />
                                </div>

                            </div>
                            <span class="fw-semibold d-block mb-1">Total Pengeluaran</span>
                            <h3 class="card-title mb-2">200</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                        class="rounded" />
                                </div>

                            </div>
                            <span class="fw-semibold d-block mb-1">Total Pendapatan</span>
                            <h3 class="card-title mb-2"> Rp {{ number_format($sum_biaya_admin, 0, ',', '.') }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-4 order-1">
            <div class="row">
            </div>
        </div>
    </div>
    </div>

    <div class="card">

        <h5 class="card-header">Tabel Data Transaksi</h5>
        <div class="mb-3 ">
            <div class="col-md-4 col-xl-12">
                <div class="d-flex justify-content-between">
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
                            
                            <th>Nama Home Stay</th>
                            <th>Nama Customer</th>
                            <th>Notelp</th>
                            <th>Checkin</th>
                            <th>Checkout</th>
                            <th>Total Inap</th>
                            <th>Total Harga</th>
                            <th>Bukti Trf</th>
                            <th>Nomor Referensi</th>
                            <th>Status_Payment</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $transaksis)
                            <tr>
                                <td>{{ $transaksis->homestay->nama }}</td>
                                <td>{{ $transaksis->nama_depan }}</td>
                                <td>{{ $transaksis->notelp }}</td>
                                <td>{{ $transaksis->check_in }}</td>
                                <td>{{ $transaksis->check_out }}</td>
                                <td>{{ $transaksis->total_masa_inap }}</td>
                                <td>Rp. {{ number_format($transaksis->total_harga, 0, ',', '.'); }}</td>
                                <td><img style="width:50%" src="{{ asset('storage/' . $transaksis->bukti_transaksi) }}"></td>
                                <td>{{ $transaksis->no_referensi }}</td>
                                <td>{{ $transaksis->status_payment }}</td>
                                <td class="text-wrap">
                            <div class="row justify-content-start px-4">
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-primary updateTransaksiButton" data-bs-toggle="modal"
                                        data-bs-target="#updateTransaksiModal"
                                        data-transaksi-id="{{ $transaksis->id }}"
                                        data-nama-depan="{{ $transaksis->nama_depan }}"
                                        data-notelp="{{ $transaksis->notelp }}"
                                        data-check-in="{{ $transaksis->check_in }}"
                                        data-check-out="{{ $transaksis->check_out }}"
                                        data-total-masa-inap="{{ $transaksis->total_masa_inap }}"
                                        data-no-referensi="{{ $transaksis->no_referensi }}"
                                        data-status-payment="{{ $transaksis->status_payment }}">
                                        Ubah
                                    </button>
                                </div>
                            </div>
                        </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {!! $transaksi->render() !!}
                
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
                                            <option value="failed">failed</option>
                                        </select>
                                    </div>
                                    <!-- Add more fields as needed -->
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="updateTransaksiButton">Save changes</button>
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
