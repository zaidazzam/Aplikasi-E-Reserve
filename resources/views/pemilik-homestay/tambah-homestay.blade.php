@extends('layouts.pemilik-homestay.pemilik')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Homestay</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pemilik_homestay.storehomestay') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Homestay:</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" name="image" id="image" class="form-control-file" accept="image/*">
                    </div>

                    <div class="form-group">
                        <img id="image-preview" src="#" alt="Preview" style="display: none; max-width: 100%;">
                    </div>
                        <div class="form-group">
                            <label for="harga">Harga:</label>
                            <input type="number" name="harga" id="harga" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea name="alamat" id="alamat" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="latitude">Latitude:</label>
                            <input type="number" name="latitude" id="latitude" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="longitude">Longitude:</label>
                            <input type="number" name="longitude" id="longitude" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi:</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="kebijakan">Kebijakan:</label>
                            <textarea name="kebijakan" id="kebijakan" class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_kamar">Jumlah Kamar:</label>
                            <input type="number" name="jumlah_kamar" id="jumlah_kamar" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="kapasitas_kamar">Kapasitas Kamar:</label>
                            <input type="text" name="kapasitas_kamar" id="kapasitas_kamar" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Homestay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('image').addEventListener('change', function () {
        const fileInput = this;
        const imagePreview = document.getElementById('image-preview');

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            };

            reader.readAsDataURL(fileInput.files[0]);
        } else {
            imagePreview.src = '#';
            imagePreview.style.display = 'none';
        }
    });
</script>

@endsection