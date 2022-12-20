<x-app-layout>
    @slot('style')
    <style>
        #section_data_sekolah {
            margin-top: 10em;
        }
    </style>
    @endslot
    <section id="section_data_sekolah">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1 class="fw-bold">Halaman Tambah Data Sekolah</h1>
                    <form action="/sekolah/add" method="post">
                        @csrf
                        <div class="col mb-3">
                            <label for="nama_sekolah" class="form-label fw-bold">
                                Masukkan Nama Sekolah
                            </label>
                            <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah">
                        </div>
                        <div class="col mb-3">
                            <label for="alamat_sekolah" class="form-label fw-bold">
                                Masukkan Alamat Lengkap Sekolah
                            </label>
                            <textarea class="form-control" name="alamat_sekolah" placeholder="Masukkan alamat sekolah"
                                id="alamat_sekolah" style="height: 100px"></textarea>
                        </div>
                        <div class="col mb-3">
                            <label for="akreditasi_sekolah" class="form-label fw-bold fw-bold">Pilih Akreditasi
                                Sekolah</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" required name="akreditasi_sekolah" id="A"
                                    value="A">
                                <label class="form-check-label" for="A">
                                    A
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" required name="akreditasi_sekolah" id="B"
                                    value="B">
                                <label class="form-check-label" for="B">
                                    B
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" required name="akreditasi_sekolah" id="C"
                                    value="C">
                                <label class="form-check-label" for="C">
                                    C
                                </label>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <label for="jumlah_dosen_sekolah" class="form-label fw-bold">Masukkan Jumlah Dosen</label>
                            <input type="text" class="form-control" name="jumlah_dosen_sekolah"
                                id="jumlah_dosen_sekolah">
                        </div>
                        <div class="col">
                            <button class="btn btn-success fw-bold w-100">Buat Data </button>
                        </div>
                    </form>
                </div>
                <div class="col-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama Sekolah</th>
                                <th scope="col">Alamat Sekolah</th>
                                <th scope="col">Akreditasi Sekolah</th>
                                <th scope="col">Jumlah Dosen</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->nama_sekolah}}</td>
                                <td>{{ $data->alamat_sekolah}}</td>
                                <td>{{ $data->akreditasi_sekolah}}</td>
                                <td>{{ $data->jumlah_dosen_sekolah }}</td>
                                <td>
                                    <form action="/sekolah/delete/{{ $data->id }}" method="GET">
                                        @csrf
                                        @method("GET")
                                        <button class="btn btn-danger" type="submit">
                                            Hapus Data
                                        </button>
                                    </form>
                                    <br>
                                    <button class="btn btn-warning">
                                        <a href="/sekolah/{{ $data->id }}/edit">
                                            Edit Data
                                        </a>
                                    </button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>