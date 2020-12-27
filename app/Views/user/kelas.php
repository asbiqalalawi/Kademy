<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
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

    <br>
    <br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Materi</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="" class="txt"><b>Cras justo odio</b></a></li>
                            <li class="list-group-item"><a href="" class="txt">Cras justo odio</a></li>
                            <li class="list-group-item"><a href="" class="txt">Cras justo odio</a></li>
                            <li class="list-group-item"><a href="" class="txt">Cras justo odio</a></li>
                            <li class="list-group-item"><a href="" class="txt">Cras justo odio</a></li>
                            <li class="list-group-item"><a href="" class="txt">Cras justo odio</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque officia accusantium quibusdam et natus, a nostrum hic dolor saepe eius ipsam id magnam. Nulla nemo inventore sit temporibus laboriosam dolorem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aspernatur dolores voluptatum eum dignissimos molestiae exercitationem a velit earum nemo corrupti tempora tenetur incidunt, expedita dolor? Nostrum quaerat voluptate aspernatur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem odio numquam aspernatur unde ipsa impedit consequuntur similique earum enim, maxime quam explicabo architecto in excepturi veniam. Iste deserunt consectetur voluptas.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi aliquam impedit autem veritatis, saepe maiores quae veniam! Facere blanditiis corrupti, sit veniam id, eveniet, nihil error iusto eum reprehenderit architecto? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint ut id quaerat, a sed necessitatibus hic officia ullam unde quam eius consequatur, at exercitationem veritatis impedit vitae. Nostrum, nihil id?</p>
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