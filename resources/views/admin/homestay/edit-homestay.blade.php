<x-app-layout>

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Homestay/</span> edit Homestay</h4>

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
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Homestay</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name"
                                    placeholder="Homestay" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Pemilik</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company"
                                    placeholder="Bu Nunung" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Harga (Rp)</label>
                            <div class="col-sm-10">
                                <input type="number" id="basic-default-phone" class="form-control phone-mask"
                                    placeholder="500.000" aria-describedby="basic-default-phone" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Jumlah Kamar</label>
                            <div class="col-sm-10">
                                <input type="number" id="basic-default-phone" class="form-control phone-mask"
                                    placeholder="3" aria-describedby="basic-default-phone" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Kapasitas Tamu</label>
                            <div class="col-sm-10">
                                <input type="number" id="basic-default-phone" class="form-control phone-mask"
                                    placeholder="5" aria-describedby="basic-default-phone" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                    placeholder="Jl Desa Kamojang" aria-describedby="basic-default-phone" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Basic with Icons -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0"></h5>
                    <small class="text-muted float-end"></small>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Peta</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name"
                                    placeholder="Homestay" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" aria-label="With textarea" placeholder="Paket Wisata Cihaniwung adalah ......"></textarea>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Kebijakan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" aria-label="With textarea" placeholder="Paket Wisata Cihaniwung adalah ......"></textarea>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="defaultSelect" class="form-label col-sm-2">Status</label>
                            <div class="col-sm-10">
                                <select id="defaultSelect" class="form-select">
                                    <option disabled>Pilih Status</option>
                                    <option value="1">Normal</option>
                                    <option value="2">Rekomendasi</option>
                                    <option value="3">Tutup</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-start">
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
