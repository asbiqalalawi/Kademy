<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<!-- <style>
    body {
        background-image: url(/svg/undraw_researching_22gp.svg);
        background-size: cover;
    }
</style> -->
</head>

<body>
    <div class="container bg mt-4">
        <div class="d-flex justify-content-center mb-4">
            <div class="row">
                <img src="/img/logo.png" width="40px" class="mr-2">
                <h3>Kademy</h3>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-7 mr-4">
                <img src="/svg/undraw_researching_22gp.svg" alt="">
            </div>
            <div class="col">
                <div class="card bg-light mb-3 mx-auto shadow" style="max-width: 400px;">
                    <div class="card-body">
                        <form class="m-3">
                            <div class="text-center mb-4">
                                <h4>Daftar Sekarang</h4>
                                <small class="form-text text-muted">Sudah punya akun Kademy? <a href="" class="txt">Masuk</a></small>
                            </div>
                            <div class="form-group">
                                <small id="emailHelp" class="form-text text-muted">Email</small>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">Contoh : email@kademy.com</small>
                            </div>
                            <div class="form-group">
                                <small id="passwordHelp" class="form-text text-muted">Password</small>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <small id="passwordHelp" class="form-text text-muted">Ulangi Password</small>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-m" style="padding: 5px 140px;">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>