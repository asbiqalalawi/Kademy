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
                    <!-- <li class=" nav-item mr-3">
                        <button type="button" class="btn btn1">Masuk</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn">Daftar</button>
                    </li> -->
                </ul>
            </div>
            <a class="navbar-brand" href="#">
                <img src="/img/akson-unsplash.jpg" width="30" height="30" alt="" loading="lazy" class="rounded-circle">
            </a>
            <div class="dropdown">
                <a class="navbar-brand dropdown-toggle" href="#" style="font-size: 90%;" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hii, Asbiq Al Alawi</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <div class="container mt-5">
        <div class="card bg-light mb-3 shadow">
            <div class="card-body">
                <h5 class="card-title">Kelas Anda</h5>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Kelas</th>
                            <th scope="col">Progress</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="" class="txt">Mark</a></td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td><button class="btn"><i class="fas fa-play mr-3" style="font-size: 70%;"></i>Lanjut
                                    belajar</button></td>
                        </tr>
                        <tr>
                            <td><a href="" class="txt">Jacob</a></td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td><button class="btn"><i class="fas fa-play mr-3" style="font-size: 70%;"></i>Lanjut
                                    belajar</button></td>
                        </tr>
                        <tr>
                            <td><a href="" class="txt">Larry the Bird</a></td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td><button class="btn"><i class="fas fa-play mr-3" style="font-size: 70%;"></i>Lanjut
                                    belajar</button></td>
                        </tr>
                    </tbody>
                </table>
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