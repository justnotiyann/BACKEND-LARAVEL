<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Product</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                @foreach ($navbar as $item => $url)
                <li class="nav-item">
                    <a class="nav-link active" href="{{ $url }}">{{ $item }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>