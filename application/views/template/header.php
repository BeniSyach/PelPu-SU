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

    <!-- Animasi -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />

    <!-- animasi ketika di Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title><?= $title; ?></title>
</head>

<!-- Awal Navbar -->
<div class="animated bounceInDown">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="<?= base_url('menu') ?>">
            <!-- gambar Logo BNN -->
            <img src="https://bnn.go.id/konten/unggahan/2019/06/bnn-header-light-480x50.png" width="350px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link active" href="<?= base_url('menu') ?>">BERANDA</a>
                <a class="nav-link" href="<?= base_url('profile') ?>">PROFIL</a>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="<?= base_url('berita') ?>" role="button" aria-haspopup="true" aria-expanded="false">BERITA</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item animated fadeInUp" href="#">Action</a>
                        <a class="dropdown-item animated fadeInUp" href="#">Another action</a>
                        <a class="dropdown-item animated fadeInUp" href="#">Something else here</a>
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a> -->
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="<?= base_url('publikasi') ?>" role="button" aria-haspopup="true" aria-expanded="false">PUBLIKASI</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item animated fadeInUp" href="#">Informasi Dan Edukasi</a>
                        <a class="dropdown-item animated fadeInUp" href="#">Advokasi</a>
                    </div>
                </li>
                <a class="nav-link" href="<?= base_url('informasi') ?>">INFORMASI</a>
                <a class="nav-link" href="<?= base_url('survey') ?>">SURVEY KETAHANAN DIRI</a>
                <a class="nav-link" href="<?= base_url('contact') ?>">CONTACT</a>
                <a class="btn btn-primary tombol" href="#" type="button" data-toggle="modal" data-target="#login">LOGIN</a>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->