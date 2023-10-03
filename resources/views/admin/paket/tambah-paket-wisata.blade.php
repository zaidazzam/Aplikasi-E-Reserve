<x-app-layout>

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Paket Wisata/</span> Tambah Paket Wisata</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0"></h5>
                    <small class="text-muted float-end"></small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pakets.store') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" name="judul" class="form-control" id="basic-default-name"
                                    placeholder="Wisata Cihaniwung" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="deskripsi" aria-label="With textarea" placeholder="Paket Wisata Cihaniwung adalah ......"></textarea>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Harga</label>
                            <div class="col-sm-10">
                                <input type="number"  name="harga" class="form-control" id="basic-default-name"
                                    placeholder="Rp. 15.000" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="formFileMultiple" class="col-sm-2 col-form-label">Upload Gambar</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="image" type="file" placeholder="Pilih gambar"
                                    id="formFileMultiple" multiple />
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
