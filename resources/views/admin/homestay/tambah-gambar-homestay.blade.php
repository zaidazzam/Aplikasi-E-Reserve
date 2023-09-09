<x-app-layout>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Homestay /Data Homestay /fasilitas/</span> Homestay
        Garden</h4>
    <!-- Bordered Table -->
    <div class="card">
        <h5 class="card-header">Gambar Homestay</h5>
        <div class="row justify-content-start px-4">
            <div class="col-sm-10">
                <!-- Large Modal -->
                <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel3">Tambah Gambar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="formFileMultiple" class="form-label">Upload Gambar</label>
                                        <input class="form-control" type="file" placeholder="Pilih gambar"
                                            id="formFileMultiple" multiple />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Tutup
                                </button>
                                <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
                    Tambah Gambar
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th class="text-center">Gambar</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <img class="img-fluid-gambar" src="{{ asset('img/header/pemandangan2.svg') }}"
                                    alt="">
                            </td>
                            <td class="text-center"> <button type="submit" class="btn btn-danger">Hapus</button>
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
        width: 15%;
        height: auto;
    }
</style>
