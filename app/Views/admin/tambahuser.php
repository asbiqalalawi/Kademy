<?= $this->extend('layouts/admin_template'); ?>

<?= $this->section('content'); ?>

<!-- content -->
<div class="page-content-wrapper">
    <div class="page-content-wrapper-inner">
        <div class="content-viewport">
            <div class="row">
                <div class="col-12 py-5">
                    <h4>Tambah User</h4>
                    <p class="text-gray">Silahkan tambakan User baru!</p>
                </div>
            </div>

            <!-- 111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111 -->
            <div class="container">
                <div class="row">
                    <div class="col-8">

                        <h2 class="my-4">Tambah Data User</h2>

                        <form action="<?= base_url('admin/addus'); ?>" method="post" enctype="multipart/form-data">

                            <?= csrf_field(); ?>
                            <div class="form-group row">
                                <label for="judul" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" autofocus required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="course" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="judul" class="col-sm-2 col-form-label">Role id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="roleid" name="roleid" autofocus required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="course" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="password" name="password" required>
                                </div>
                            </div>



                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- 111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111 -->
            <!-- content viewport ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="row">
                    <div class="col-sm-6 text-center text-sm-right order-sm-1">
                        <ul class="text-gray">
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
                        <small class="text-muted d-block">Copyright © 2020 Kademy</a>. All rights reserved</small>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- page content ends -->
    </div>
    <!--page body ends -->

    <?= $this->endSection(); ?>