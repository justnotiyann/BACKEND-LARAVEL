<x-app-layout>
    @slot('style')
    <style>
        #section_edit_rental {
            margin-top: 10em;
        }
    </style>
    @endslot
    <section id="section_edit_rental">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <h1 class="fw-bold mb-3">Halaman Edit Rental Data</h1>
                    <form action="/rental/edit/{{ $rental->id }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="col mb-3">
                            <label for="nama_peminjam" class="form-label fw-bold">Masukkan Nama Peminjam</label>
                            <input type="text" required name="nama_peminjam" class="form-control">
                        </div>
                        <div class="col mb-3">
                            <label for="jenis_mobil" class="form-label fw-bold">Pilih Mobil</label>
                            <select class="form-select" name="jenis_mobil" aria-label="Default select example">
                                <option value="Avanza">Avanza</option>
                                <option value="Alphard">Alphard</option>
                                <option value="Xenia">Xenia</option>
                                <option value="Panther">Panther</option>
                                <option value="Pajero">Pajero</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="tanggal_peminjaman" class="form-label">Masukkan Tanggal Peminjaman</label>
                            <input type="date" name="tanggal_peminjaman" class="form-control">
                        </div>
                        <div class="col mb-3">
                            <label for="akhir_peminjaman" class="form-label">Masukkan Tanggal Akhir Peminjaman</label>
                            <input type="date" name="akhir_peminjaman" class="form-control">
                        </div>
                        <div class="col">
                            <button class="btn btn-success fw-bold w-100">Masukkan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>