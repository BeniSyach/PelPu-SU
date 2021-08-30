<body>
    <!-- Jumbroton -->
    <div class="jumbotron jumbotron-fluid berita">
        <div class="container text-center">
            <div class="col my-2">
                <div class="row"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-10 text-center">
                <h1>Foto Dan Video</h1>
            </div>
        </div>
    </div>
    <div data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="border-bottom border-dark my-3 "></div>
                <?php foreach ($video as $vd) : ?>
                    <div class="col-md-3 mx-2 my-2">
                        <div class="row">
                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= base_url('assets/img/video/' . $vd['url']) ?>" allowfullscreen></iframe>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><?= $vd['deskripsi'] ?></p>
                                    <p><?= date('l, d-m-Y', strtotime($vd['tanggal'])) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div data-aos="fade-up">
        <hr class="border border-dark my-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="border-bottom border-dark my-3 "></div>
                <?php foreach ($foto as $ft) : ?>
                    <div class="col-md-3 mx-2 my-2">
                        <div class="row">
                            <div class="card">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#<?= $ft['id'] ?>" data-slide-to="0" class="active"></li>
                                        <li data-target="#<?= $ft['id'] ?>" data-slide-to="1"></li>
                                        <li data-target="#<?= $ft['id'] ?>" data-slide-to="2"></li>
                                        <li data-target="#<?= $ft['id'] ?>" data-slide-to="3"></li>
                                        <li data-target="#<?= $ft['id'] ?>" data-slide-to="4"></li>
                                        <li data-target="#<?= $ft['id'] ?>" data-slide-to="5"></li>
                                        <li data-target="#<?= $ft['id'] ?>" data-slide-to="6"></li>
                                        <li data-target="#<?= $ft['id'] ?>" data-slide-to="7"></li>
                                        <li data-target="#<?= $ft['id'] ?>" data-slide-to="8"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="<?= base_url('assets/img/foto/' . $ft['url']) ?>" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?= base_url('assets/img/foto/' . $ft['url_1']) ?>" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?= base_url('assets/img/foto/' . $ft['url_2']) ?>" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?= base_url('assets/img/foto/' . $ft['url_3']) ?>" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?= base_url('assets/img/foto/' . $ft['url_4']) ?>" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?= base_url('assets/img/foto/' . $ft['url_5']) ?>" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?= base_url('assets/img/foto/' . $ft['url_6']) ?>" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?= base_url('assets/img/foto/' . $ft['url_7']) ?>" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?= base_url('assets/img/foto/' . $ft['url_8']) ?>" alt="Third slide">
                                        </div>
                                    </div>
                                    <!-- <a class="carousel-control-prev" href="#<?= $ft['id'] ?>" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#<?= $ft['id'] ?>" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a> -->
                                </div>
                                <div class="card-body">
                                    <h5><?= $ft['judul'] ?></h5>
                                    <p class="card-text"><?= $ft['deskripsi'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    </div>