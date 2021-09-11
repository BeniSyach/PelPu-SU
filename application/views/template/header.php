<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/id/c/cf/Logo_BNN.png">

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

    <!-- costum css -->
    <link rel="stylesheet" href="<?= base_url('assets/costum-css/css/all.css') ?>">

    <title><?= $title; ?></title>
</head>

<style>
    .navigasi {
        font-size: 66%;
    }
</style>

<!-- Awal Navbar -->
<div class="animated bounceInDown">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('menu') ?>">
                <!-- gambar Logo BNN -->
                <img src="https://bnn.go.id/konten/unggahan/2019/06/bnn-header-light-480x50.png" width="300px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <?php if ($title == 'Pelayanan Publik Sumatera Utara') : ?>
                        <a class="nav-link navigasi aktif" href="<?= base_url('menu') ?>">BERANDA</a>
                    <?php else : ?>
                        <a class="nav-link navigasi" href="<?= base_url('menu') ?>">BERANDA</a>
                    <?php endif; ?>

                    <?php if ($title == 'Profil - Pelayanan Publik Sumatera Utara') : ?>
                        <a class="nav-link navigasi aktif" id href="<?= base_url('profile') ?>">PROFIL</a>
                    <?php else : ?>
                        <a class="nav-link navigasi" id href="<?= base_url('profile') ?>">PROFIL</a>
                    <?php endif; ?>

                    <li class="nav-item dropdown">
                        <?php if ($title == 'Berita Utama - Pelayanan Publik Sumatera Utara') : ?>
                            <a class="nav-link navigasi aktif" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">BERITA</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item animated fadeInUp" id="berita" href="<?= base_url('berita') ?>">Artikel</a>
                                <a class="dropdown-item animated fadeInUp" href="<?= base_url('berita') ?>">Majalah</a>
                                <a class="dropdown-item animated fadeInUp" href="<?= base_url('berita') ?>">Paper</a>
                                <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a> -->
                            </div>
                        <?php else : ?>
                            <a class="nav-link navigasi" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">BERITA</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item animated fadeInUp" id="berita" href="<?= base_url('berita') ?>">Artikel</a>
                                <a class="dropdown-item animated fadeInUp" href="<?= base_url('berita') ?>">Majalah</a>
                                <a class="dropdown-item animated fadeInUp" href="<?= base_url('berita') ?>">Paper</a>
                                <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a> -->
                            </div>
                        <?php endif; ?>

                    </li>

                    <li class="nav-item dropdown">
                        <?php if ($title == 'Publikasi - Pelayanan Publik Sumatera Utara') : ?>
                            <a class="nav-link navigasi aktif" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">PUBLIKASI</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item animated fadeInUp" href="<?= base_url('publikasi') ?>">Informasi Dan Edukasi</a>
                                <a class="dropdown-item animated fadeInUp" href="<?= base_url('publikasi') ?>">Advokasi</a>
                            </div>
                        <?php else : ?>
                            <a class="nav-link navigasi" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">PUBLIKASI</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item animated fadeInUp" href="<?= base_url('publikasi') ?>">Informasi Dan Edukasi</a>
                                <a class="dropdown-item animated fadeInUp" href="<?= base_url('publikasi') ?>">Advokasi</a>
                            </div>
                        <?php endif; ?>

                    </li>

                    <?php if ($title == 'Informasi - Pelayanan Publik Sumatera Utara') : ?>
                        <a class="nav-link navigasi aktif" href="<?= base_url('informasi') ?>">INFORMASI</a>
                    <?php else : ?>
                        <a class="nav-link navigasi" href="<?= base_url('informasi') ?>">INFORMASI</a>
                    <?php endif; ?>

                    <?php if ($title == 'Survey Ketahanan Diri - Pelayanan Publik Sumatera Utara') : ?>
                        <a class="nav-link navigasi aktif" href="<?= base_url('survey') ?>">SURVEY KETAHANAN DIRI</a>
                    <?php else : ?>
                        <a class="nav-link navigasi" href="<?= base_url('survey') ?>">SURVEY KETAHANAN DIRI</a>
                    <?php endif; ?>

                    <?php if ($title == 'Kontak - Pelayanan Publik Sumatera Utara') : ?>
                        <a class="nav-link navigasi aktif" href="<?= base_url('contact') ?>">CONTACT</a>
                    <?php else : ?>
                        <a class="nav-link navigasi" href="<?= base_url('contact') ?>">CONTACT</a>
                    <?php endif; ?>


                    <a class="btn btn-primary tombol" href="#" type="button" data-toggle="modal" data-target="#login">LOGIN</a>

                    <a class="nav-link ml-5 button2" href="https://www.facebook.com/bnnpsumut/">
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </a>
                    <a class="nav-link button3" href="https://twitter.com/bnnpsumut">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a class="nav-link button4" href="https://www.instagram.com/infobnn_prov_sumaterautara/">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a class="nav-link button5" href="https://sumut.bnn.go.id/feed/rss/">
                        <i class="fas fa-envelope fa-lg"></i>
                    </a>
                    <div class="border-right mx-3 "></div>
                    <a class="nav-link button6" href="#" type="button" data-toggle="modal" data-target="#cari">
                        <i class="fas fa-search fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->