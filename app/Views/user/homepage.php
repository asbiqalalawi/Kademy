<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="#">
                <img src="favicon.ico" width="30" height="30" alt="" loading="lazy">
            </a>
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
                    <li class=" nav-item mr-4 mt-2">
                        <i class="fas fa-shopping-cart"></i>
                    </li>
                    <li class=" nav-item mr-3">
                        <button type="button" class="btn btn1">Masuk</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn">Daftar</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Wujudkan Impianmu Disini</h1>
            <p class="lead">Kuasai berbagai ilmu pemrograman dalam waktu singkat.</p>
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
                            <h6 class="hrg">Rp. 200.000</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                        <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="hrg">Rp. 200.000</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                        <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="hrg">Rp. 200.000</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                        <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="hrg">Rp. 200.000</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                        <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="hrg">Rp. 200.000</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                        <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="hrg">Rp. 200.000</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                        <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="hrg">Rp. 200.000</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                        <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="hrg">Rp. 200.000</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Go somewhere</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer">
        <hr>
        <footer class="text-center">
            <div class="container">
                <div class="row">
                    <p>Copyright © 2020 - Kademy. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <?= $this->endSection(); ?>