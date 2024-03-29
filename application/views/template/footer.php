<!-- Footer -->
<footer class="sticky-footer bg-success">
    <div class="container my-auto">
        <div class="row">
            <div class="col">
                <div class="row mt-3">
                    <h5>Kontak</h5>
                </div>
                <div class="row">
                    <h5>Badan Narkotika Nasional</h5>
                </div>
                <div class="row">
                    <i class="fas fa-fw fa-map-marker-alt fa-lg mr-2"></i>
                    <p> Jl. Williem Iskandar Pasar V Barat I No. 1-A Medan Estate</p>
                </div>
                <div class="row">
                    <i class="fas fa-fw fa-comment-dots fa-lg mr-2"></i>
                    <p> Call Center: 184</p>
                </div>
                <div class="row">
                    <i class="fas fa-fw fa-phone fa-lg mr-2"></i>
                    <p> +62 (21) 8087-1566 | +62 (21) 8087-1567</p>
                </div>
                <div class="row">
                    <i class="fas fa-fw fa-envelope fa-lg mr-2"></i>
                    <a href="">
                        <p>Hubungi Kami</p>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="row mt-3">
                    <h5>Unit Kerja</h5>
                </div>
            </div>
        </div>

    </div>
    <div class="copyright text-center my-auto">
        <span>Copyright &copy; Pelayanan Publik 2021</span>
    </div>

</footer>
<!-- End of Footer -->

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






































<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<!-- script animasi -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="<?= base_url('assets/js/Script.js') ?>"></script>


<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>