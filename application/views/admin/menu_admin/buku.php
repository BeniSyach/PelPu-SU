<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Menu Buku</h4>
                    <a href="<?= base_url('admin/tambah_buku') ?>"><button class="btn btn-primary">Tambah Buku</button></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No.</th>
                                <th>Judul Buku</th>
                                <th>Deskripsi Buku</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($buku as $bk) : ?>
                                    <tr>
                                        <td><?= $i++  ?></td>
                                        <td><?= $bk['judul_buku'] ?></td>
                                        <td><?= substr($bk['deskripsi_buku'], 0, 80)  ?>.....</td>
                                        <td><?= date('l, d-m-Y', strtotime($bk['tanggal'])) ?></td>
                                        <td><a href="<?= base_url('admin/ubah_buku/' . $bk['id']) ?>"><button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                                </button></a>
                                            <a href="<?= base_url('admin/hapus_buku/' . $bk['id']) ?>"><button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                                </button></a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>