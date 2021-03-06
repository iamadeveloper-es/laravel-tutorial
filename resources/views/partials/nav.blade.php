<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('noticias') }}">Noticias</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('noticias-controller') }}">Noticas Controller</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blog-controller') }}">Blog Controller</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('lista') }}">Lista Controller</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('lista-db') }}">Lista DB</a>
            </li>
        </ul>
        </div>
    </div>
</nav>