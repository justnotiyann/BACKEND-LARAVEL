<x-app-layout>
    @slot('style')
    <style>
        #section_quiz {
            margin-top: 10em;
        }
    </style>
    @endslot
    <section id="section_quiz">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>Ini adalah halaman Quiz</h1>
                    <form action="/quiz/add" method="POST">
                        @csrf
                        <div class="col mb-3 form-floating">
                            <input type="text" name="quiz" class="form-control">
                            <label for="" class="form-label">Masukkan Quiz</label>
                        </div>

                        <div class="col mb-3 form-floating">
                            <input type="text" name="jawaban" class="form-control">
                            <label for="jawaban" class="form-label">Masukkan Jawaban</label>
                        </div>
                        <div class="col mb-3 form-floating">
                            <input type="text" name="tingkat_kesulitan" class="form-control">
                            <label for="tingkat_kesulitan" class="form-label">Masukkan Tingkat Kesulitan</label>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary w-100 fw-bold">
                                Buat Soal
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Quiz</th>
                                <th scope="col">Jawaban</th>
                                <th scope="col">Tingkat Kesulitan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($results as $result) <tr>
                                <td>{{ $result->quiz}}</td>
                                <td>{{ $result->jawaban}}</td>
                                <td>{{ $result->tingkat_kesulitan }}</td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <div class="col me-4">
                                        <button class="btn w-100 btn-warning">
                                            <a href="/quiz/{{ $result->id }}/edit">
                                                Edit
                                            </a>
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button class="btn w-100 btn-danger">
                                            <a href="/quiz/delete/{{ $result->id }}">
                                                Hapus Data
                                            </a>
                                        </button>
                                    </div>
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