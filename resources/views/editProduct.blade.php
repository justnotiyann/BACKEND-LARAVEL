<x-app-layout>
    @slot('style')
    <style>
        #section_edit_product {
            margin-top: 10em;
        }
    </style>
    @endslot
    <section id="section_edit_product">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-8">
                    <h1>Halaman Edit Product</h1>
                    <hr>
                    <form action="/product/edit/{{ $result->id }}" method="POST" autocomplete="off">
                        @method('put')
                        @csrf
                        <div class="col">
                            <label for="product" class="form-label">
                                Masukkan Nama Product
                            </label>
                            <input type="text" placeholder="{{ $result->product }}" name="product" class="form-control">
                        </div>
                        <div class="col">
                            <label for="country" class="form-label">
                                Masukkan Nama asal negara
                            </label>
                            <input type="text" placeholder="{{ $result->country }}" name="country" class="form-control">
                        </div>
                        <div class="col mb-3">
                            <label for="price" class="form-label">
                                Masukkan harga product
                            </label>
                            <input type="text" name="price" class="form-control" placeholder="{{ $result->price }}">
                        </div>
                        <div class="col">
                            <button class="btn btn-success w-100 fw-bold">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>