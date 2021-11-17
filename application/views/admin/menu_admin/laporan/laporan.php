<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Laporan</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No.</th>
                                <th>Menu</th>
                                <th>Judul</th>
                                <th>gambar</th>
                                <th>Tanggal</th>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($laporan as $lp) : ?>
                                    <tr>
                                        <td><?= $i++  ?></td>
                                        <td><?= $lp['menu'] ?></td>
                                        <td><?= $lp['nama'] ?></td>
                                        <td><img src="<?= base_url('assets/img/foto/' . $lp['gambar']) ?>" alt="Foto profil" width="30%"></td>
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