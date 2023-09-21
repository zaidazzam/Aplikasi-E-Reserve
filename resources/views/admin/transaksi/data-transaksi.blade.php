<x-app-layout>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Transaksi /</span> Data Transaksi</h4>
    <!-- Bordered Table -->

    <div class="mb-3">
        <div class="col-md-6 col-xl-4">
            <div class="card bg-primary text-white mb-3">
                <div class="card-header">
                    <h5 class="card-title text-white">Total Transaksi</h5>
                </div>
                <div class="card-body">
                    <h2 class="card-text text-white">Rp 5.000.000</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Tabel Data Transaksi</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered mb-4">
                    <thead>
                        <tr>
                            <th>Nomor invoice</th>
                            <th>User_Id</th>
                            <th>Homestay_Id</th>
                            <th>Checkin</th>
                            <th>Checkout</th>
                            <th>Total Inap</th>
                            <th>Status_Payment</th>
                            <th>Status-Checkin</th>
                            <th>Total Harga</th>
                            <th>Bukti</th>
                            <th>No_Referensi</th>
                            <th>Nama</th>
                            <th>No_Telp</th>
                            <th>Email</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                T001
                            </td>
                            <td class="text-wrap">01</td>
                            <td class="text-wrap">02</td>
                            <td class="text-nowrap">21-09-2023</td>
                            <td class="text-nowrap">22-09-2023</td>
                            <td class="text-wrap">3 Malam</td>
                            <td class="text-wrap">Lunas</td>
                            <td class="text-wrap">Sedang</td>
                            <td class="text-wrap">Rp. 200.000</td>
                            <td> <img class="img-fluid-gambar" src="{{ asset('img/header/pemandangan2.svg') }}"
                                    alt="">
                            </td>
                            <td class="text-wrap">6706213055</td>
                            <td class="text-wrap">Ziad</td>
                            <td class="text-wrap">089688347718</td>
                            <td class="text-wrap">azzamzaid10@gamil.com</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ url('/editartikel') }}"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1"></i> Hapus</a>
                                    </div>
                                </div>
                            </td>
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
        width: 25%;
        height: auto;
    }
</style>
