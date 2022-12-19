<x-app-layout>
    @slot('style')
    <style>
        #section_edit_users {
            margin-top: 10em;
        }
    </style>
    @endslot
    <section id="section_edit_users">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>Form Update User </h1>
                    <form action="/users/edit/{{ $result->id }}" method="POST" autocomplete="OFF">
                        @csrf
                        @method('put')
                        <div class="col mb-3">
                            <label for="nim" class="form-label fw-bold">Masukkan NIM</label>
                            <input type="text" name="nim" class="form-control" placeholder="{{ $result->nim }}">
                        </div>
                        <div class="col mb-3">
                            <label for="nama" class="form-label fw-bold">Masukkan Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" placeholder="{{ $result->nama }}">
                        </div>
                        <div class="col mb-3">
                            <label for="gender" class="form-label fw-bold">Pilih Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="laki-laki"
                                    value="laki-laki">
                                <label class="form-check-label" for="laki-laki">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="perempuan"
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
            </div>
        </div>
    </section>
</x-app-layout>