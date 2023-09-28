<x-app-layout>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Homestays</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Nama Pemilik</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Alamat</th>
                                <th>Jumlah Kamar</th>
                                <th>Kapasitas Kamar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($homestay as $rekomendasi)
                                <tr>
                                    <td><img style="width:" src="{{ asset('storage/' . $rekomendasi->image) }}"></td>
                                    <td>{{ $rekomendasi->user->name }}</td>
                                    <td>{{ $rekomendasi->nama }}</td>
                                    <td>{{ $rekomendasi->harga }}</td>
                                    <td>{{ $rekomendasi->alamat }}</td>
                                    <td>{{ $rekomendasi->jumlah_kamar }}</td>
                                    <td>{{ $rekomendasi->kapasitas_kamar }}</td>
                                    <td>
                                        <a href="{{ route('homestays.edit', $rekomendasi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                       

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
