{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container mx-auto d-block">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/chart">Live Chart</a>
                <a class="nav-link" href="#">Report</a>
            </div>
        </div>
    </div>
</nav> --}}

<div class="container mt-2">
    <div class="row">
        <a href="/" class="col  {{ Request::is('/chart*') ? 'bg-primary' : 'bg-dark' }} m-1 text-center text-white py-2 text-decoration-none">
          Home
        </a>
        <a href="/chart" class="col {{ Request::is('*') ? 'bg-primary' : 'bg-dark' }} m-1 text-center text-white py-2 text-decoration-none">
          Live Chart
        </a>
        <a href="/data" class="col {{ Request::is('/data*') ? 'bg-primary' : 'bg-dark' }} bg-dark m-1 text-center text-white py-2 text-decoration-none">
          Data report
        </a>
    </div>
</div>