<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Menu Foto</h4>
                    <a href="<?= base_url('admin/tambah_foto') ?>"><button class="btn btn-primary">Tambah Foto</button></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No.</th>
                                <th>Foto</th>
                                <th>Judul Foto</th>
                                <th>Deskripsi Foto</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($foto as $ft) : ?>
                                    <tr>
                                        <td><?= $i++  ?></td>
                                        <td><img src="<?= base_url('assets/img/foto/' . $ft['url']) ?>" width="50%" alt=""></td>
                                        <td><?= $ft['judul'] ?></td>
                                        <td><?= substr($ft['deskripsi'], 0, 80)  ?>.....</td>
                                        <td><?= date('l, d-m-Y', strtotime($ft['tanggal'])) ?></td>
                                        <td><a href="<?= base_url('admin/ubah_foto/' . $ft['id']) ?>"><button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                                </button></a>
                                            <a href="<?= base_url('admin/hapus_foto/' . $ft['id']) ?>"><button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
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