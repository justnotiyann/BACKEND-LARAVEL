<x-app-layout>
    @slot('style')
    <style>
        #section_edit_quiz {
            margin-top: 10em;
        }
    </style>
    @endslot
    <section id="section_edit_quiz">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <h1 class="fw-bold">Form Edit Quiz</h1>
                    <form action="/quiz/edit/{{ $result->id }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="col mb-3 form-floating">
                            <input type="text" placeholder="{{$result->quiz}}" name="quiz" class="form-control">
                            <label for="" class="form-label">Masukkan Quiz</label>
                        </div>

                        <div class="col mb-3 form-floating">
                            <input type="text" placeholder="{{$result->jawaban}}" name="jawaban" class="form-control">
                            <label for="jawaban" class="form-label">Masukkan Jawaban</label>
                        </div>
                        <div class="col mb-3 form-floating">
                            <input type="text" placeholder="{{$result->tingkat_kesulitan}}" name="tingkat_kesulitan"
                                class="form-control">
                            <label for="tingkat_kesulitan" class="form-label">Masukkan Tingkat Kesulitan</label>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary w-100 fw-bold">
                                Buat Soal
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>