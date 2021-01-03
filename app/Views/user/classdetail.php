<?= $this->extend('layouts/template'); ?>

<?= $this->section('style'); ?>
<style>
    .jumbotron {
        background-image: url(/svg/undraw_researching_22gp.svg);
        background-size: cover;
    }

    img {
        border-radius: 5%;
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

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
                <?php if (session()->get('logged_in')) : ?>
                    <a class="btn mb-2" style="width: 100%;" href="/kelas">Lanjut Belajar</a>
                <?php else : ?>
                    <a class="btn mb-2" style="width: 100%;" href="/keranjang">Tambahkan ke keranjang</a>
                    <a class="btn btn1" style="width: 100%;">Beli sekarang</a>
                <?php endif; ?>
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