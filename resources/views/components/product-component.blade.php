<x-app-layout>
    @slot('style')
    <style>
        a {
            text-decoration: none;
            color: white;
        }

        #section_product {
            margin-top: 10em;
        }
    </style>
    @endslot
    <section>
        <div class="container" id="section_product">
            <div class="row">
                <div class="col-6">
                    <form action="/product" method="POST" autocomplete="off">
                        @csrf
                        <div class="col">
                            <label for="product" class="form-label">
                                Masukkan Nama Product
                            </label>
                            <input type="text" name="product" class="form-control">
                        </div>
                        <div class="col">
                            <label for="country" class="form-label">
                                Masukkan Nama asal negara
                            </label>
                            <input type="text" name="country" class="form-control">
                        </div>
                        <div class="col mb-3">
                            <label for="price" class="form-label">
                                Masukkan harga product
                            </label>
                            <input type="text" name="price" class="form-control">
                        </div>
                        <div class="col">
                            <button class="btn btn-success w-100 fw-bold">Buat Data</button>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Country Production</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                            <tr>
                                <td>{{ $item->product }}</td>
                                <td>{{ $item->country}}</td>
                                <td>{{ $item->price }}</td>
                                <td>
                                    <button class="btn btn-danger">
                                        <a href="">Delete Data</a>
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