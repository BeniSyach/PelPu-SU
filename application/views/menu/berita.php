<body>
    <!-- Jumbroton -->
    <div class="jumbotron jumbotron-fluid berita">
        <div class="container text-center">
            <img src="<?= base_url('assets/img/judul.png') ?>" width="50%">
            <h1 class="display-4">Pelayanan Publik</h1>
            <p class="lead">Sumatera Utara</p>
            <hr>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-10 text-center">
                <h1>Berita Terbaru</h1>
                <h3>Berita Harian Badan Narkotika Nasional</h3>
                <div class="border-bottom border-dark my-3 "></div>
            </div>

        </div>
    </div>

    <div data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <?php foreach ($berita as $brt) : ?>
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img src="<?= $brt['foto'] ?>" class="card-img-top img-hover-zoom">
                            <div class="card-body">
                                <p><?= date('l, d-m-Y', strtotime($brt['tanggal'])) ?></p>
                                <h5 class="card-title"><?= $brt['judul'] ?></h5>
                                <p class="card-text"><a href="http://bnn.go.id">BNN.GO.ID</a><?= substr($brt['isi'], 0, 150) ?>..... </p>
                                <a href="<?= base_url('berita/detail_berita/' . $brt['id']) ?>" class="btn btn-primary">Baca Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>



    </div>