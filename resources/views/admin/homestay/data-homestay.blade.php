<x-app-layout>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Homestay /</span> Data Homestay</h4>
    <!-- Bordered Table -->
    <div class="card">
        <h5 class="card-header">Tabel Data Homestay</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered mb-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Pemilik</th>
                            <th>Harga</th>
                            <th>Kamar</th>
                            <th>Tamu</th>
                            <th>Alamat</th>
                            <th>latitude</th>
                            <th>longitude</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Fasilitas</th>
                            <th>Kebijakan</th>
                            <th>Status</th>
                            <th>Ubah</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($homestay as $rekomendasi)
                            <tr>
                                <td>ID</td>
                                <td>{{ $rekomendasi->nama }}</td>
                                <td>{{ $rekomendasi->users_id }}</td>
                                <td>{{ $rekomendasi->harga }}</td>
                                <td>{{ $rekomendasi->jumlah_kamar }}</td>
                                <td>{{ $rekomendasi->kapasitas_kamar }}</td>
                                <td>{{ $rekomendasi->alamat }}</td>
                                <td>{{ $rekomendasi->latitude }}</td>
                                <td>{{ $rekomendasi->longitude }}</td>
                                <td class="text-wrap">
                                    <a href="{{ route('homestays.image', ['homestays' => $rekomendasi->id]) }}"> <button
                                            class="btn btn-outline-primary" type="button"
                                            id="button-addon1">Gambar</button></a>
                                </td>
                                <td class="text-wrap">{{ $rekomendasi->deskripsi }}</td>
                                <td class="text-wrap">
                                    <a href="{{ route('homestays.tambahfasilitas', $rekomendasi->id) }}"> <button
                                            class="btn btn-outline-primary" type="button" id="button-addon1">
                                            Fasilitas</button></a>
                                </td>
                                <td class="text-wrap">{{ $rekomendasi->kebijakan }}</td>
                                <td><span class="badge bg-label-primary me-1">Rekomendasi</span></td>
                                <td><a href="{{ route('homestays.edit', ['homestays' => $rekomendasi->id]) }}"> <button
                                            class="btn btn-outline-primary" type="button"
                                            id="button-addon1">Edit</button></a>
                                </td>
                            </tr>
                        @endforeach
                        {{-- <tr>
                            <td class="text-nowrap">
                                H-01
                            </td>
                            <td class="text-wrap">
                                <strong>Homestay Coffee
                                    Garden</strong>
                            </td>
                            <td class="text-wrap">Ibu Nunung</td>
                            <td class="text-wrap">RP 500.000</td>
                            <td class="text-wrap">3</td>
                            <td class="text-wrap">5</td>
                            <td class="text-wrap">Jl Desa Kamojang</td>
                            <td class="text-wrap">latidude</td>
                            <td class="text-wrap">longtitude</td>
                            <td class="text-wrap">
                                <a href="{{ url('/tambahhomestay/gambar/') }}"> <button class="btn btn-outline-primary"
                                        type="button" id="button-addon1">Gambar</button></a>
                            </td>
                            <td>
                                <div class="text-wrap">
                                    Parkir mobil dan Wi-Fi selalu gratis, sehingga Anda dapat terus terhubung serta
                                    datang
                                    dan pergi kapan saja. Terletak strategis di Seminyak, memungkinkan Anda akses dan
                                    jarak
                                    yang dekat ke atraksi dan objek wisata lokal. Jangan pulang dulu sebelum berkunjung
                                    ke
                                    Sacred Monkey Forest Sanctuary yang terkenal. Memiliki peringkat bintang-5, properti
                                    berkelas ini menyediakan akses ke pijat, kolam renang dalam ruangan dan kolam air
                                    panas
                                    untuk para tamu di properti.
                                </div>
                            </td>
                            <td class="text-wrap">
                                <a href="{{ url('/tambahhomestay/fasilitas/') }}"> <button
                                        class="btn btn-outline-primary" type="button" id="button-addon1">
                                        Fasilitas</button></a>
                            </td>
                            <td class="text-wrap">
                                <dl>
                                    <dt>Check-in:</dt>
                                    <li>
                                        Pada pukul 16.00, tamu diharapkan menunjukkan kartu identitas berfoto dan kartu
                                        kredit saat melakukan proses check-in.</li>
                                    <dt>Check-out:</dt>
                                    <li>Sampai pukul 11.00</li>
                                </dl>
                            </td>
                            <td><span class="badge bg-label-primary me-1">Rekomendasi</span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ url('/edithomestay') }}"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>

                {{ $homestay->links() }}
            </div>
        </div>
    </div>
    <!--/ Bordered Table -->
</x-app-layout>
