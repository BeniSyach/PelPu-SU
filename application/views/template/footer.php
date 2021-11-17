<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Badan Narkotika Nasional Provinsi Sumatera Utara</h3>
                    <p>
                        Jl. Williem Iskandar<br>
                        Pasar V Barat I No. 1-A<br>
                        Medan Estate <br><br>
                        <strong>Phone:</strong> +62 (21) 8087-1566 | +62 (21) 8087-1567<br>
                        <strong>Email:</strong> bnnp_sumut@bnn.go.id<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Tautan Terkait</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('menu') ?>">Beranda</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('profile') ?>">Profile</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('berita') ?>">Berita</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('publikasi') ?>">Publikasi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('informasi') ?>">Informasi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('survey') ?>">Survey Ketahanan Diri</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('contact') ?>">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Publikasi & Pers</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Berita Kegiatan</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Siaran Pers</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Artikel</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Majalah / Buku</a></li>
                        <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Standardisasi dan Validasi Teknologi</h4>
                    <a href="#"><img src="https://www.freepnglogos.com/uploads/html5-logo-png/html5-logo-html-logo-0.png" width="30%" alt=""></a>
                    <a href="#"><img src="https://img3.pngdownload.id/dy/7770242a6ccd40a3917ccd53d5d893b8/L0KzQYm4UcA3N6R0R91yc4Pzfri0gB9lbZpshtt9ZYKwfLL5ggZmdF5vieducomwgLn3Tfxwb5CyTdRuMXXoc4K6WPNjQWIzS6kCM0m1SYW4VcQyPWQ4S6kCMkO1RnB3jvc=/kisspng-codeigniter-laravel-jquery-php-logo-5be1eec138cb91.3773929415415333772326.png" width="30%" alt=""></a>
                    <a href="#"><img src="https://www.pngaaa.com/api-download/3731977" width="30%" alt=""></a>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Badan Narkotika Nasional Provinsi Sumatera Utara</span></strong>.
            </div>
            <div class="credits">

                All Rights Reserved Designed by <a href="<?= base_url('menu') ?>"> IT BNN Sumut</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="https://twitter.com/bnnpsumut" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.facebook.com/bnnpsumut/" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/infobnn_prov_sumaterautara/" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Modal Login -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <img src="https://bnn.go.id/konten/unggahan/2019/06/bnn-header-dark-480x50.png" width="75%">
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md text-center">
                        <h2>Login</h2>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url() ?>auth" method="POST">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda...."><?= form_error('Nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkkan Password Anda..."><?= form_error('Nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <a class="badge badge-warning" href="">Lupa Password</a>
                            </div>
                            <button type="submit" class="btn btn-primary">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <p>Tidak Ada Akun??? Buat akun anda Disini</p><a class="badge badge-primary" href="">Daftar Disini</a>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Modal Login -->

<!-- modal Cari -->
<div class="modal fade" id="cari" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <img src="https://bnn.go.id/konten/unggahan/2019/06/bnn-header-dark-480x50.png" width="75%">
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="cari" placeholder="Masukkan Kata Yang Anda Cari">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<!-- Akhir Modal Cari -->


<!-- Vendor JS Files -->
<script src="<?= base_url("assets/frontend/vendor/aos/aos.js") ?>"></script>
<script src="<?= base_url("assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
<script src="<?= base_url("assets/frontend/vendor/glightbox/js/glightbox.min.js") ?>"></script>
<script src="<?= base_url("assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js") ?>"></script>
<script src="<?= base_url("assets/frontend/vendor/php-email-form/validate.js") ?>"></script>
<script src="<?= base_url("assets/frontend/vendor/swiper/swiper-bundle.min.js") ?>"></script>
<script src="<?= base_url("assets/frontend/vendor/waypoints/noframework.waypoints.js") ?>"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!-- Template Main JS File -->
<script src="<?= base_url("assets/frontend/js/main.js") ?>"></script>

</body>

</html>
<!-- End of Footer -->