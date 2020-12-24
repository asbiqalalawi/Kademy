<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <div class="container-fluid mx-5">
        <a class="navbar-brand" href="#">Kademy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-5" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class=" nav-item mr-3">
                    <button type="button" class="btn btn-light">Masuk</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-primary">Daftar</button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Daftar Kelas</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="card mb-3 shadow" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Kategori</h5>
                    <span class="badge badge-pill badge-light">Android</span>
                    <span class="badge badge-pill badge-light">Web</span>
                </div>
            </div>
            <div class="card mb-3 shadow" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Cari</h5>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Cari Kelas" aria-label="Search">
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                    <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                    <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                    <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                    <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                    <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                    <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                    <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                    <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>