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
                        <tr>
                            <td>
                                Wisata Curug Cihaniwung
                            </td>
                            <td class="text-wrap">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod illum
                                facilis ipsa
                                quaerat aspernatur tempore ducimus minima voluptates quas, fugit, repudiandae eos a
                                assumenda soluta? Asperiores repellat assumenda magni distinctio.</td>
                            <td> <img class="img-fluid-gambar" src="{{ asset('img/header/pemandangan2.svg') }}"
                                    alt="">
                            </td>
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