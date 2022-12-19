<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Data Product</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                @foreach ($navbar as $title => $url)
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ $url }}">{{ $title }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>