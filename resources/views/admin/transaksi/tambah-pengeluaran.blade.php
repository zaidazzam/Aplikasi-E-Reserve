<x-app-layout>

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Transaksi/</span> Tambah Pengeluaran</h4>

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
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Pemilik Homestay</label>
                            <div class="col-sm-10">
                                <select id="defaultSelect" class="form-select">
                                    <option>Pilih Pemilik</option>
                                    <option value="1">Ibu Nunung</option>
                                    <option value="2">Pak Novi</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Jumlah Pengeluaran</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="basic-default-name"
                                    placeholder="Rp. 500.999" />
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
