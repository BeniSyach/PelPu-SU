<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Informasi Dan Edukasi</h2>
                <ol>
                    <li><a href="#">Publikasi</a></li>
                    <li>Informasi Dan Edukasi</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Foto dan Video Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Semua</li>
                        <li data-filter=".foto">Foto</li>
                        <li data-filter=".video">Video</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">
                <?php foreach ($foto as $ft) : ?>
                    <div class="col-lg-4 col-md-6 portfolio-item <?= $ft['tag'] ?>">
                        <?php if ($ft['tag'] == 'foto') : ?>
                            <img src="<?= base_url('assets/img/foto/' . $ft['url']) ?>" class="img-fluid" alt="">
                        <?php else : ?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?= base_url('assets/img/foto/' . $ft['url']) ?>" allowfullscreen></iframe>
                            </div>
                        <?php endif; ?>
                        <div class="portfolio-info">
                            <h4><?= $ft['tag'] ?></h4>
                            <a href="<?= base_url('assets/img/foto/' . $ft['url']) ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $ft['tag'] ?>"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


    </section><!-- End Portfolio Section -->



</main><!-- End #main -->