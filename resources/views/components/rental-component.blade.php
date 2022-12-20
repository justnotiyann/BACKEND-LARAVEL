<x-app-layout>
    @slot('style')
    <style>
        #section_rentals {
            margin-top: 10em;
        }
    </style>
    @endslot
    <section id="section_rentals">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h3 class="fw-bold mb-4">Halaman Peminjaman Rental Mobil</h3>
                    <form action="/rental/add" method="POST">
                        @csrf
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
                <div class="col-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama Peminjam</th>
                                <th scope="col">Jenis Mobil</th>
                                <th scope="col">Tanggal Peminjaman</th>
                                <th scope="col">Tanggal Akhir Peminjaman</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rentals as $rental)
                            <tr>
                                <td>{{ $rental->nama_peminjam }}</td>
                                <td>{{ $rental->jenis_mobil }}</td>
                                <td>{{ $rental->tanggal_peminjaman}}</td>
                                <td>{{ $rental->akhir_peminjaman }}</td>
                                <td>
                                    <button class="btn btn-danger">
                                        <a href="/rental/delete/{{ $rental->id }}">
                                            Hapus Data
                                        </a>
                                    </button>
                                    <button class="btn btn-warning">
                                        <a href="/rental/{{ $rental->id }}/edit">
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