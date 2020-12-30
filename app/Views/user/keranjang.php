<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="/">
                <img src="/img/logo.png" width="30" height="30" alt="" loading="lazy">
            </a>
            <a class="navbar-brand" href="/">Kademy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-5" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
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

    <br>
    <br>

    <!-- Jika keranjang masih kosong -->
    <!-- <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card bg-light mb-3 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Transaksi</h5>
                        <p class="card-text">Berikut ini adalah kelas-kelas yang masuk ke dalam list keranjang Anda.</p>
                        <div class="alert alert-primary" role="alert">
                            Anda belum melakukan transaksi.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Jika keranjang sudah terisi -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-9">
                <div class="card bg-light shadow">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Transaksi</h5>
                        <p class="card-text">Berikut ini adalah kelas-kelas yang masuk ke dalam list keranjang Anda.</p>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Pilih semua
                            </label>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <div class="row">
                                <div class="col-2">
                                    <img src="/img/danial-unsplash.jpg" width="120px">
                                </div>
                                <div class="col">
                                    <h5 class="card-text">Pengantar Java</h5>
                                    <h6 class="hrg">Rp. 200.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                            <div class="row">
                                <div class="col-2">
                                    <img src="/img/danial-unsplash.jpg" width="120px">
                                </div>
                                <div class="col">
                                    <h5 class="card-text">Pengantar Java</h5>
                                    <h6 class="hrg">Rp. 200.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                            <div class="row">
                                <div class="col-2">
                                    <img src="/img/danial-unsplash.jpg" width="120px">
                                </div>
                                <div class="col">
                                    <h5 class="card-text">Pengantar Java</h5>
                                    <h6 class="hrg">Rp. 200.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-light mb-3 shadow">
                    <div class="card-header">Ringkasan Keranjang</div>
                    <div class="card-body">
                        <div class="row mx-1">
                            <p class="card-text">Total Harga</p>
                            <p class="ml-auto">Rp 300.000</p>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn" style="padding: 5px 70px;">Checkout</button>
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