<x-app-layout>
    @slot('style')
    <style>
        #section_register_user {
            margin-top: 10em;
        }
    </style>
    @endslot
    <section id="section_register_user">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                    @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        Berhasil membuat User
                    </div>
                    @endif

                    <h3 class="fw-bold mb-3">Halaman Register User</h3>
                    <form action="/register/add" method="post" autocomplete="off">
                        @csrf
                        <div class="col mb-3 form-floating">
                            <input type="text" required name="username"
                                class="form-control @error('username')is-invalid @enderror"
                                value="{{ old('username') }}">
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <label for="username" class="form-label">Masukkan Nama</label>
                        </div>

                        <div class="col mb-3 form-floating">
                            <input type="password" required name="password"
                                class="form-control @error('password')is-invalid @enderror">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <label for="password" class="form-label">Masukkan Password</label>
                        </div>
                        <div class="col mb-3 form-floating d-flex justify-content-center">
                            <button class="btn btn-success fw-bold w-100">Register Sekarang !</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>