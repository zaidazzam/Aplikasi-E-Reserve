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
                <div class="card bg-primary text-white mb-3 " style="width: 250px ">
                    <div class="card-header">
                        <h5 class="card-title text-white">Data Transaksi</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="card-text text-white text-center">10</h2>
                    </div>
                </div>
                <div class="card bg-primary text-white mb-3 " style="width: 250px">
                    <div class="card-header">
                        <h5 class="card-title text-white">Sudah Transfer Pemilik</h5>
                    </div>
                    <div class="card-body">
                        <h3 class="card-text text-white text-center">5</h3>
                    </div>
                </div>
                <div class="card bg-primary text-white mb-3 " style="width: 250px">
                    <div class="card-header">
                        <h5 class="card-title text-white">Selesai Checkin</h5>
                    </div>
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
                            <h3 class="card-title mb-2">Rp. 200,000</h3>
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
                            <h3 class="card-title mb-2">Rp. 20,000</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card"
                                        class="rounded" />
                                </div>

                            </div>
                            <span class="fw-semibold d-block mb-1">Data Transaksi</span>
                            <h3 class="card-title mb-2">{{ $jumlahSeluruhTransaksi }} </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/cc-success.png" alt="Credit Card"
                                        class="rounded" />
                                </div>

                            </div>
                            <span class="fw-semibold d-block mb-1">Sudah Transfer Pemilik</span>
                            <h3 class="card-title mb-2">5</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/cc-warning.png" alt="Credit Card"
                                        class="rounded" />
                                </div>

                            </div>
                            <span class="fw-semibold d-block mb-1">Selesai Checkin</span>
                            <h3 class="card-title mb-2">5</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="card">

        <h5 class="card-header">Tabel Data Transaksi</h5>
        <div class="mb-3 ">
            <div class="col-md-4 col-xl-12">
                <div class="d-flex justify-content-between">
                    <div class="input-group input-group-merge me-4" style="width: 500px">
                        <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search..."
                            aria-describedby="basic-addon-search31" />
                    </div>
                    <div class=" justify-content-end">
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
                    </div>

                </div>

            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered mb-4">
                    <thead>
                        <tr>
                            <th>Nomor invoice</th>
                            <th>Homestay_Id</th>
                            <th>Checkin</th>
                            <th>Checkout</th>
                            <th>Total Inap</th>
                            <th>Biaya Admin</th>
                            <th>Status_Payment</th>
                            <th>Status-homestay</th>
                            <th>Status-transfer pemilik</th>
                            <th>Total Harga</th>
                            <th>Bukti Transfer</th>
                            <th>No_Referensi</th>
                            <th>Nama</th>
                            <th>No_Telp</th>
                            <th>Email</th>
                            <th>Aksi</th>

                        </tr>
                        {{-- 'nomor_invoice' => $generate_number_random,
                        'homestay_id' => $request->homestay_id,
                        'check_in' => $request->check_in,
                        'check_out' => $request->check_out,
                        'total_harga' => $request->total_harga,
                        'nama_depan' => $request->nama_depan,
                        'notelp' => $request->notelp,
                        'biaya_admin' => $request->biaya_admin,
                        'email' => $request->email,
                        'bukti_transaksi' => $request->bukti_transaksi,
                        'no_referensi' => $request->no_referensi,
                        'total_masa_inap' => $request->total_masa_inap,
                        'status_payment' => 'pending',
                        'status_homestay' => 'open',
                        'status_transfer_pemilik' => 'belum' --}}
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $transaksis)
                            <tr>
                                <td>{{ $transaksis->nomor_invoice }}</td>
                                <td>{{ $transaksis->homestay_id }}</td>
                                <td>{{ $transaksis->check_in }}</td>
                                <td>{{ $transaksis->check_out }}</td>
                                <td>{{ $transaksis->total_masa_inap }}</td>
                                <td>{{ $transaksis->biaya_admin }}</td>
                                <td>{{ $transaksis->status_payment }}</td>
                                <td>{{ $transaksis->status_homestay }}</td>
                                <td>{{ $transaksis->status_transfer_pemilik }}</td>
                                <td>{{ $transaksis->total_harga }}</td>
                                <td>{{ $transaksis->bukti_transaksi }}</td>
                                <td>{{ $transaksis->no_referensi }}</td>
                                <td>{{ $transaksis->nama_depan }}</td>
                                <td>{{ $transaksis->notelp }}</td>
                                <td>{{ $transaksis->email }}</td>
                                <td class="text-wrap">
                                    <div class="row justify-content-start px-4">
                                        <div class="col-sm-10">
                                            <!-- Large Modal -->
                                            <div class="modal fade" id="largeModal" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel3">Ubah
                                                                Status
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <table class="table table-bordered ">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Nama Status</th>
                                                                    <th class="text-center">Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td> <strong>Status Payment</strong></td>
                                                                    <td>
                                                                        <div class="col-sm-10">
                                                                            <select id="defaultSelect"
                                                                                class="form-select">
                                                                                <option>Pilih Status</option>
                                                                                <option value="1">Pending</option>
                                                                                <option value="2">Lunas</option>
                                                                            </select>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td> <strong>Status Homestay</strong></td>
                                                                    <td class="text-center">
                                                                        <div class="col-sm-10">
                                                                            <select id="defaultSelect"
                                                                                class="form-select">
                                                                                <option>Pilih Status</option>
                                                                                <option value="1">Buka</option>
                                                                                <option value="2">Rekomendasi
                                                                                </option>
                                                                                <option value="3">Tutup</option>
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> <strong>Status Transfer Pemilik</strong></td>
                                                                    <td class="text-center">
                                                                        <div class="col-sm-10">
                                                                            <select id="defaultSelect"
                                                                                class="form-select">
                                                                                <option>Pilih Status</option>
                                                                                <option value="1">Belom</option>
                                                                                <option value="2">Sudah</option>
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#largeModal">
                                                Ubah
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item first">
                            <a class="page-link" href="javascript:void(0);"><i
                                    class="tf-icon bx bx-chevrons-left"></i></a>
                        </li>
                        <li class="page-item prev">
                            <a class="page-link" href="javascript:void(0);"><i
                                    class="tf-icon bx bx-chevron-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0);">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">2</a>
                        </li>
                        <li class="page-item ">
                            <a class="page-link" href="javascript:void(0);">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">5</a>
                        </li>
                        <li class="page-item next">
                            <a class="page-link" href="javascript:void(0);"><i
                                    class="tf-icon bx bx-chevron-right"></i></a>
                        </li>
                        <li class="page-item last">
                            <a class="page-link" href="javascript:void(0);"><i
                                    class="tf-icon bx bx-chevrons-right"></i></a>
                        </li>
                    </ul>
                </nav>
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
