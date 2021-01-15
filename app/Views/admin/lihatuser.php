<?= $this->extend('layouts/admin_template'); ?>

<?= $this->section('content'); ?>


<!-- partial -->
<div class="page-content-wrapper">
    <div class="page-content-wrapper-inner">
        <div class="content-viewport">
            <div class="row">
                <div class="col-12 py-5">
                    <h4>Data User</h4>
                    <a href="/tambahuser" class="btn btn-primary mt-3">Tambah User</a>
                </div>

            </div>
            <!-- content -->
            <!-- 111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111 -->
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($getUser as $u) { ?>
                            <tr>
                                <th scope="row"><?= $no; ?></th>
                                <td><?= $u['nama']; ?></td>
                                <td><?= $u['email']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/edituser/' . $u['id']); ?>"
                                        class="btn btn-success">edit</a>
                                    <a href="<?= base_url('admin/hapusus/' . $u['id']); ?>"
                                        onclick="javascript:return confirm('Apakah ingin menghapus data user ?')"
                                        class="btn btn-danger">
                                        Hapus</a>
                                </td>
                            </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
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