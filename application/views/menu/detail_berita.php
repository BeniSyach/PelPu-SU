 <body>
     <!-- Jumbroton -->
     <div class="jumbotron jumbotron-fluid berita">
         <div class="container text-center">
             <div class="col my-3">
                 <div class="row"></div>
             </div>
         </div>
     </div>
     <div class="container">
         <div class="row">
             <div class="col col-md-8">
                 <h2><?= $berita['judul'] ?></h2>
                 <div class="row mt-5">
                     <img src="<?= base_url('assets/img/foto/' . $berita['foto']) ?>" width="100%" alt="">
                 </div>
                 <div class="row mt-5">
                     <p><a href="http://bnn.go.id">BNN.GO.ID</a><?= $berita['isi'] ?></p>
                 </div>
             </div>

             <div class="col col-md-4">
                 <h5>Berita utama</h5>
                 <?php foreach ($semua_berita as $smbrt) : ?>
                     <div class="row ml-3 my-3">
                         <div class="card" style="max-width: none;">
                             <div class="row no-gutters">
                                 <div class="col">
                                     <img src="<?= base_url('assets/img/foto/' . $smbrt['foto']) ?>" class="card-img" alt="..." height="100px" class="mx-2">
                                 </div>
                                 <div class="col-md-8">
                                     <div class="card-body">
                                         <h5 class="card-title"><?= substr($smbrt['judul'], 0, 30) ?>....</h5>
                                         <p class="card-text"><small class="text-muted">Di Posting Pada <?= $smbrt['tanggal'] ?></small></p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>
     </div>