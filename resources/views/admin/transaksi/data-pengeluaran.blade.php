<x-app-layout>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Transaksi /</span> Data Pengeluaran</h4>
    <!-- Bordered Table -->

    <div class="mb-3">
        <div class="col-md-6 col-xl-4">
            <div class="card bg-primary text-white mb-3">
                <div class="card-header">
                    <h5 class="card-title text-white">Total Pengeluaran</h5>
                </div>
                <div class="card-body">
                    <h2 class="card-text text-white">Rp 500.000</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Tabel Data Transaksi</h5>
        <div class="mb-3 pl-4"> <a href="{{ url('/dashboard/transaksi/pengeluaran/tambah') }}"><button type="button"
                    class="btn btn-primary">Tambah Pengeluaran</button></a>
        </div>

        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered mb-4">
                    <thead>
                        <tr>
                            <th>Pemilik Homestay</th>
                            </th>
                            <th>Jumlah Pengeluaran</th>
                            <th>created_at</th>
                            </th>
                            <th>Aksi</th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-wrap">Ibu Nunung</td>
                            <td class="text-wrap">Rp. 500.000</td>
                            <td class="text-wrap">2023-07-11 05:16:12</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1"></i> Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
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
