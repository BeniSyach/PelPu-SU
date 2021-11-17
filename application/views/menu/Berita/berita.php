<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Artikel</h2>
                <ol>
                    <li><a href="#">Berita</a></li>
                    <li>Artikel</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">


                <div class="row">

                    <div class="col-lg-8 entries">
                        <?php foreach ($berita as $brt) : ?>
                            <article class="entry">

                                <div class="entry-img">
                                    <img src="<?= base_url('assets/img/foto/' . $brt->foto) ?>" alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="#"><?= $brt->judul ?></a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><?= $brt->nama ?></a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="<?= $brt->tanggal ?>"><?= date('l, d-m-Y', strtotime($brt->tanggal)) ?></time></a></li>
                                        <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">12 Comments</a></li> -->
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        <?= substr($brt->isi, 0, 150) ?>.....
                                    </p>
                                    <div class="read-more">
                                        <a href="<?= base_url('berita/detail_berita/' . $brt->id) ?>">Read More</a>
                                    </div>
                                </div>

                            </article><!-- End blog entry -->
                        <?php endforeach; ?>

                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <?php echo $this->pagination->create_links(); ?>
                            </ul>
                        </div>

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="#">General <span>(25)</span></a></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                                    <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>


                            </div><!-- End sidebar recent posts-->

                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="#">App</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>
            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->