<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pemberitahuan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Isi Berita</th>
                                <th>Tanggal</th>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($pemberitahuan_berita as $p) : ?>
                                    <tr>
                                        <td><?= $i++  ?></td>
                                        <td><?= $p['judul'] ?></td>
                                        <td><?= $p['nama'] ?></td>
                                        <td><?= substr($p['isi'], 0, 80)  ?></td>
                                        <td><?= date('l, d-m-Y', strtotime($p['tanggal'])) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>