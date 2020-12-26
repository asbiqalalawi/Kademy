<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<style>
    .jumbotron {
        background-image: url(/svg/undraw_researching_22gp.svg);
        background-size: cover;
    }

    img {
        border-radius: 5%;
    }
</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="#">
                <img src="/img/logo.png" width="30" height="30" alt="" loading="lazy">
            </a>
            <a class="navbar-brand" href="#">Kademy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-5" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
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


    <div class="jumbotron jumbotron-fluid mt-5">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="/img/danial-unsplash.jpg" width="100%" class="shadow">
                </div>
                <div class="col">
                    <h1 class="display-4">Nama Kelas</h1>
                    <p class="lead">Kuasai berbagai ilmu pemrograman dalam waktu singkat.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Deskripsi</h2>
        <div class="row">
            <div class="col-md-9">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore tenetur, quasi voluptas odio sint repellat blanditiis nam beatae esse corporis asperiores error accusantium illo deleniti nemo dignissimos animi cumque vitae?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aperiam quibusdam incidunt odit fugiat voluptas dolore adipisci aspernatur fuga ducimus voluptatibus. Iusto labore non quia. Maiores illo alias accusamus cumque?</p>
            </div>
            <div class="col-md-3">
                <div class="alert alert-primary" role="alert">
                    Anda belum dapat mempelajari kelas ini. Silahkan untuk membeli kelas ini agar bisa belajar di Kelas ini.
                </div>
                <p>Daftar sekarang untuk dapat mengikuti pembelajaran</p>
                <div class="text-center">
                    <button class="btn mb-2" style="width: 100%;">Tambahkan ke keranjang</button>
                    <button class="btn btn1" style="width: 100%;">Beli sekarang</button>
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