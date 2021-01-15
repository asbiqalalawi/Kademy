<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

</head>

<body>

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
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td><a class="btn" href="/kelas"><i class="fas fa-play mr-3" style="font-size: 70%;"></i>Lanjut belajar</a></td>
                        </tr>
                        <tr>
                            <td><a href="" class="txt">Jacob</a></td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td><a class="btn" href="/kelas"><i class="fas fa-play mr-3" style="font-size: 70%;"></i>Lanjut belajar</a></td>
                        </tr>
                        <tr>
                            <td><a href="" class="txt">Larry the Bird</a></td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td><a class="btn" href="/kelas"><i class="fas fa-play mr-3" style="font-size: 70%;"></i>Lanjut belajar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>