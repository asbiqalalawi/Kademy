<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<style>
body {
    background-image: url(/svg/undraw_studying_s3l7.svg);
    background-size: cover;
}
</style>
</head>

<body>
    <div class="container bg mt-4">
        <div class="d-flex justify-content-center mb-4">
            <div class="row">
                <img src="/img/logo.png" width="40px" class="mr-2">
                <h3>Kademy</h3>
            </div>
        </div>
        <div class="card bg-light mb-3 mx-auto shadow" style="max-width: 400px;">
            <div class="card-body">
                <?php if(isset($validation)):?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form class="m-3" action="/login/auth" method="POST">
                    <h4>Masuk</h4>
                    <div class="form-group">
                        <small id="emailHelp" class="form-text text-muted">Email</small>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                            aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Contoh : email@kademy.com</small>
                    </div>
                    <div class="form-group">
                        <small id="passwordHelp" class="form-text text-muted">Password</small>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="text-right">
                        <small><a href="" class="txt">Lupa Kata Sandi?</a></small>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn" style="padding: 5px 140px;">Masuk</button>
                    </div>
                </form>
                <div class="text-center">
                    <small>Belum punya akun Kademy? <a href="register" class="txt">Daftar</a></small>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>