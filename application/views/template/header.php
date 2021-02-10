<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- costum css -->
    <link rel="stylesheet" href="<?= base_url('assets/costum-css/style.css') ?>">

    <title><?= $title; ?></title>
</head>

<!-- Awal Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/judul.png') ?>" width="200px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link active" href="#">BERANDA</a>
                <a class="nav-link" href="#">PROFIL</a>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">BERITA</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">PUBLIKASI</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Informasi Dan Edukasi</a>
                        <a class="dropdown-item" href="#">Advokasi</a>
                    </div>
                </li>
                <a class="nav-link" href="#">INFORMASI</a>
                <a class="nav-link" href="#">SURVEY KETAHANAN DIRI</a>
                <a class="nav-link" href="#">CONTACT</a>
                <a class="btn btn-primary tombol" href="#">LOGIN</a>
            </div>
        </div>
    </div>
</nav>
<!-- Akhir Navbar -->