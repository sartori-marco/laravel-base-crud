<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav d-flex justify-content-center w-100">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              <a class="nav-link" href=" {{ route('movies.index') }} ">Movies</a>
            </div>
          </div>
        </div>
      </nav>
</header>