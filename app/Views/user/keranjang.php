<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

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

                <?php if(count($items) != 0){ ?>

                <hr>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Pilih semua
                        </label>
                    </div>
                </div>

                <?php echo form_open('User/update'); ?>

                <?php foreach($items as $data) { ?>

                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <div class="row">
                            <div class="col-2">
                                <img src="/img/danial-unsplash.jpg" width="100%">
                            </div>
                            <div class="col">
                                <h5 class="card-text"><?= $data['name']; ?></h5>
                                <h6 class="hrg">Rp. <?php echo number_format($kursus['price'], 0, 0, '.'); ?></h6>
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-primary btn-sm"><i
                                            class="fa fa-edit"></i></button>
                                    <a href="<?php echo base_url('User/remove/'.$data['id']); ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus product ini dari keranjang belanja?')"><i
                                            class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php echo form_close(); ?>
                <?php } ?>

                <?php if(count($items) == 0){ // jika cart kosong, maka tampilkan: ?>
                Keranjang belanja Anda sedang kosong. <a href="<?php echo base_url('product'); ?>"
                    class="btn btn-success">Belanja Yuk</a>
                <?php } else { // jika cart tidak kosong, tampilkan: ?>
                <a href="<?php echo base_url('/'); ?>" class="btn btn-success">Lanjut Belanja</a>
                <?php } ?>

            </div>
        </div>

        <div class="col">
            <div class="card bg-light mb-3 shadow">
                <div class="card-header">Ringkasan Keranjang</div>
                <div class="card-body">
                    <div class="row mx-1">
                        <p class="card-text">Total Harga</p>
                        <p class="ml-auto">Rp. xxxxxx</p>
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
                <p>Copyright © 2021 - Kademy. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>


<?= $this->endSection(); ?>