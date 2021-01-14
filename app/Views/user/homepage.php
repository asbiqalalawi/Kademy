<?= $this->extend('layouts/template'); ?>

<?= $this->section('style'); ?>
<style>
    .jumbotron {
        background-image: url(/img/akson-unsplash.jpg);
        background-size: cover;
        height: 740px;
        position: relative;
    }

    .jumbotron::after {
        content: "";
        display: block;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
        position: absolute;
        bottom: 0;
    }

    .jumbotron .container {
        z-index: 1;
        position: relative;
    }

    .jumbotron .display-4 {
        margin-top: 480px;
        color: white;
        font-weight: 200;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
    }

    .jumbotron .lead {
        color: white;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
    }
</style>
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

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

                <?php foreach ($course as $data) { ?>

                    <div class="card shadow mx-3 mb-3" style="width: 23rem;">
                        <img src="/img/danial-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['name']; ?></h5>
                            <h6 class="hrg">Rp. <?php echo number_format($data['price'], 0, 0, '.'); ?></h6>
                            <p class="card-text"><?php echo $data['description']; ?></p>
                            <a href="<?= base_url('User/beli/' . $data['id']) ?>" class="btn">Lihat Kelas</a>

                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>