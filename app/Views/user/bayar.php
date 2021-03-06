<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<br>
<br>

<!-- Jika keranjang sudah terisi -->
<div class="container pt-5">
    <div class="row">
        <div class="col-6 mr-4">
            <img src="/svg/undraw_wallet_aym5.svg" style="width: 600px;">
        </div>
        <div class="col-5">
            <div class="card bg-light shadow">
                <div class="card-header">Pembayaran</div>
                <div class="card-body">
                    <div class="text-right">
                        <small class="txt">Total : Rp 600.000</small>
                    </div>
                    <form action="<?php echo base_url('User/payment'); ?>" method="post">
                        <div class="form-group">
                            <small for="exampleInputEmail1">Nama Rekening</small>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="" name="nama">
                        </div>
                        <div class="form-group">
                            <small for="exampleInputEmail1">Nomor Rekening</small>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="nomor">
                        </div>
                        <div class="form-group">
                            <small for="exampleInputPassword1">Password</small>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <?php 
                            
                        
                        ?>
                        <div class="text-right">
                            <button type="submit" class="btn">Bayar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="col">
            <div class="card bg-light mb-3 shadow">
                <div class="card-header">Ringkasan Keranjang</div>
                <div class="card-body">
                    <div class="row mx-1">
                        <p class="card-text">Total Harga</p>
                        <p class="ml-auto">Rp 600.000</p>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn" style="padding: 5px 70px;">Checkout</button>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>

<?= $this->endSection(); ?>