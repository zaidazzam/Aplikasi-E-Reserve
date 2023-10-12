<x-app-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Rekomendasi</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('homestays.update', $rekomendasi) }}">
                            @csrf
                            @method('PUT')
                            {{-- <div class="form-group">
                                <label for="nama">Nama Homestay:</label>
                                <input type="text" name="nama" id="nama" class="form-control" required
                                    value="{{ old('nama', $rekomendasi->nama) }}">
                            </div>

                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" name="image" id="image" class="form-control-file"
                                    accept="image/*">
                            </div>

                            <div class="form-group">
                                <img id="image-preview" src="#" alt="Preview"
                                    style="display: none; max-width: 100%;">
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga:</label>
                                <input type="number" name="harga" id="harga" class="form-control" required
                                    value="{{ old('harga', $rekomendasi->harga) }}">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <textarea name="alamat" id="alamat" class="form-control" rows="3" required>{{ old('alamat', $rekomendasi->alamat) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="latitude">Latitude:</label>
                                <input type="number" name="latitude" id="latitude" class="form-control" required
                                    value="{{ old('latitude', $rekomendasi->latitude) }}">
                            </div>

                            <div class="form-group">
                                <label for="longitude">Longitude:</label>
                                <input type="number" name="longitude" id="longitude" class="form-control" required
                                    value="{{ old('longitude', $rekomendasi->longitude) }}">
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi:</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required>{{ old('deskripsi', $rekomendasi->deskripsi) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="kebijakan">Kebijakan:</label>
                                <textarea name="kebijakan" id="kebijakan" class="form-control" rows="5" required>{{ old('kebijakan', $rekomendasi->kebijakan) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="jumlah_kamar">Jumlah Kamar:</label>
                                <input type="number" name="jumlah_kamar" id="jumlah_kamar" class="form-control"
                                    required value="{{ old('jumlah_kamar', $rekomendasi->jumlah_kamar) }}">
                            </div>

                            <div class="form-group">
                                <label for="kapasitas_kamar">Kapasitas Kamar:</label>
                                <input type="text" name="kapasitas_kamar" id="kapasitas_kamar" class="form-control"
                                    required value="{{ old('kapasitas_kamar', $rekomendasi->kapasitas_kamar) }}">
                            </div> --}}

                            <div class="form-group">
                                <label for="jumlah_kamar">Status</label>
                                {{-- <input type="number" name="jumlah_kamar" id="jumlah_kamar" class="form-control"
                                    required value="{{ old('jumlah_kamar', $rekomendasi->jumlah_kamar) }}"> --}}

                                    <select name="status" id="status" class="form-control">
                                        <option value="pending" {{ $rekomendasi->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="accept" {{ $rekomendasi->status == 'accept' ? 'selected' : '' }}>Accept</option>
                                        <option value="reject" {{ $rekomendasi->status == 'reject' ? 'selected' : '' }}>Reject</option>
                                    </select>
                            </div>
                            <!-- Add fields for other attributes -->
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
