<x-app-layout>
    @slot('style')
    <style>
        #section_user {
            margin-top: 10em;
        }

        a {
            color: inherit;
            text-decoration: none;
        }
    </style>
    @endslot
    <section id="section_user">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>Input Data User Baru</h1>
                    <form action="/users/add" method="POST" autocomplete="OFF">
                        @csrf
                        <div class="col mb-3">
                            <label for="nim" class="form-label fw-bold">Masukkan NIM</label>
                            <input type="text" required name="nim" class="form-control">
                        </div>
                        <div class="col mb-3">
                            <label for="nama" class="form-label fw-bold">Masukkan Nama Mahasiswa</label>
                            <input type="text" required name="nama" class="form-control">
                        </div>
                        <div class="col mb-3">
                            <label for="gender" class="form-label fw-bold">Pilih Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" required name="gender" id="laki-laki"
                                    value="laki-laki">
                                <label class="form-check-label" for="laki-laki">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" required name="gender" id="perempuan"
                                    value="perempuan">
                                <label class="form-check-label" for="perempuan">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <label for="jurusan" class="form-label fw-bold">Pilih Juruan</label>
                            <select class="form-select" name="jurusan" aria-label="Default select example">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Akuntasi">Akuntansi</option>
                                <option value="Rekayasa Perangkat lunak">Rekayasa Perangkat Lunak</option>
                                <option value="Manajemen Informatika">Manajemen Informatika</option>
                            </select>
                        </div>
                        <div class="col">
                            <button class="btn btn-success w-100">Buat Data</button>
                        </div>
                    </form>
                </div>
                <div class="col-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($results as $result)
                            <tr>
                                <td>{{ $result->nim}}</td>
                                <td>{{ $result->nama}}</td>
                                <td>{{ $result->gender}}</td>
                                <td>{{ $result->jurusan }}</td>
                                <td>
                                    <button class="btn btn-danger">
                                        <a href="/users/delete/{{ $result->id }}">
                                            Hapus Data
                                        </a>
                                    </button>
                                    <button class="btn btn-warning">
                                        <a href="/users/{{ $result->id }}/edit">
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