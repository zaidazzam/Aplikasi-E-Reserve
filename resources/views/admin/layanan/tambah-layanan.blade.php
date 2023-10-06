<x-app-layout>

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Layanan/</span> Tambah Layanan</h4>

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
                    <form method="POST" action="{{ route('layanans.store') }}" enctype="multipart/form-data">
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
                                <textarea class="form-control" name="deskripsi" aria-label="With textarea"
                                    placeholder="Paket Wisata Cihaniwung adalah ......"></textarea>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" name="harga" class="form-control" id="rupiah-input"
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
<script>
    // Function to format a number as Indonesian Rupiah
    function formatRupiah(amount) {
        var currency = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        });
        return currency.format(amount);
    }

    // Function to remove non-numeric characters from a string
    function stripNonNumeric(input) {
        return input.replace(/\D/g, '');
    }

    // Get the input element
    var rupiahInput = document.getElementById('rupiah-input');

    // Listen for input events (e.g., as the user types)
    rupiahInput.addEventListener('input', function() {
        // Remove non-numeric characters (except ".")
        var numericInput = stripNonNumeric(this.value);

        // Parse the numeric value
        var numericValue = parseFloat(numericInput);

        // Format the value as Rupiah and set it back to the input field
        this.value = formatRupiah(numericValue);
    });
</script>
