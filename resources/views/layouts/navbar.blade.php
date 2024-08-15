<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler navbar-toggler-sidebar" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button class="navbar-toggler navbar-toggler-navbar" type="button" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Toko</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Keuangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/api-documentation')}}">API</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
    var currentPath = window.location.pathname;
    var navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    navLinks.forEach(function (link) {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});
</script>
@endpush