<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Icon Fontawesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <?= $this->renderSection('style'); ?>

    <title><?= $title; ?></title>

</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="/">
                <img src="/img/logo.png" width="30" height="30" alt="" loading="lazy">
            </a>
            <a class="navbar-brand" href="/">Kademy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-5" id="navbarNav">
                <ul class="navbar-nav ">
                    <?php if (session()->get('logged_in')) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
                    </li>
                    <?php endif; ?>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class=" nav-item mr-4 mt-2">
                        <a href="keranjang" style="color: #333333;">
                            <a class="fas fa-shopping-cart" href="<?php echo base_url('keranjang'); ?>">
                            </a>
                        </a>
                    </li>
                    <?php if (session()->get('logged_in') == false) : ?>
                    <li class=" nav-item mr-3">
                        <a type="button" class="btn btn1" href="/login">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="btn" href="/register">Daftar</a>
                    </li>
                </ul>
                <?php else : ?>
                </ul>
            </div>
            <a class="navbar-brand" href="#">
                <img src="/img/akson-unsplash.jpg" width="30" height="30" alt="" loading="lazy" class="rounded-circle">
            </a>
            <div class="dropdown">
                <a class="navbar-brand dropdown-toggle" href="#" style="font-size: 90%;" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hii, Asbiq Al Alawi</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="/logout">Keluar</a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script> -->

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>



</body>

</html>