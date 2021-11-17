<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <!-- <h1 class="logo me-auto"><a href="index.html"><span>Com</span>pany</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="<?= base_url('menu') ?>" class="logo me-auto"><img src="https://sumut.bnn.go.id/konten/unggahan/2020/11/sumut-d-480.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="<?= base_url('menu') ?>" class="<?php if ($active == "menu") {
                                                                        echo 'active';
                                                                    } ?>">Beranda</a></li>

                    <li class="dropdown"><a href="#" class="<?php if ($active == "profil") {
                                                                echo 'active';
                                                            } ?>"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('profile/sejarah') ?>">Sejarah</a></li>
                            <li><a href="<?= base_url('profile') ?>">Visi dan Misi</a></li>
                            <li><a href="<?= base_url('profile/tugaspokok') ?>">Tugas Pokok Fungsi Dan Wewenang</a></li>
                            <li><a href="<?= base_url('profile/struktur') ?>">Struktur Organisasi</a></li>
                            <li><a href="<?= base_url('profile/kepalabnnp') ?>">Kepala BNNP Dari Masa Ke Masa</a></li>
                        </ul>
                    </li>

                    <li class=" dropdown"><a href="#" class="<?php if ($active == "berita") {
                                                                    echo 'active';
                                                                } ?>"><span>Berita</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('berita') ?>">Artikel</a></li>
                            <li><a href="<?= base_url('berita/majalah') ?>">Majalah</a></li>
                            <li><a href="<?= base_url('berita/paper') ?>">Paper</a></li>
                            <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#" class="<?php if ($active == "publikasi") {
                                                                echo 'active';
                                                            } ?>"><span>Publikasi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('publikasi') ?>">Informasi Dan Edukasi</a></li>
                            <li><a href="<?= base_url('publikasi/advokasi') ?>">Advokasi</a></li>
                        </ul>
                    </li>

                    <li><a href="<?= base_url('informasi') ?>" class="<?php if ($active == "informasi") {
                                                                            echo 'active';
                                                                        } ?>">Informasi</a></li>
                    <li><a href="https://dektari.bnn.go.id/ceg4hn4rj0b4/insert-kuisioner?random_id=xz59rgj" class="<?php if ($active == "survey") {
                                                                                                                        echo 'active';
                                                                                                                    } ?>">Survey Ketahanan Diri</a></li>
                    <li><a href="<?= base_url('contact') ?>" class="<?php if ($active == "kontak") {
                                                                        echo 'active';
                                                                    } ?>">Contact</a></li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#login">Login</a>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex">
                <a href="https://twitter.com/bnnpsumut" class="twitter"><i class="bu bi-twitter"></i></a>
                <a href="https://www.facebook.com/bnnpsumut/" class="facebook"><i class="bu bi-facebook"></i></a>
                <a href="https://www.instagram.com/infobnn_prov_sumaterautara/" class="instagram"><i class="bu bi-instagram"></i></a>
            </div>
            <div class="header-social-links d-flex">
                <a href=" #" data-toggle="modal" data-target="#cari">
                    <i class="bu bi-search"></i></a>
            </div>
        </div>
    </header><!-- End Header -->