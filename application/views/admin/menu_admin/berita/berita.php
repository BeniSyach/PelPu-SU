<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Menu Berita</h4>
                    <?= $this->session->flashdata('message'); ?>
                    <a href="<?= base_url('admin/tambah_berita') ?>"><button class="btn btn-primary">Tambah Berita</button></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No.</th>
                                <th>Judul Berita</th>
                                <th>Content Berita</th>
                                <th>Foto</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($berita as $brt) : ?>
                                    <tr>
                                        <td><?= $i++  ?></td>
                                        <td><?= $brt['judul'] ?></td>
                                        <td><?= substr($brt['isi'], 0, 80)  ?>.....</td>
                                        <td><img src="<?= base_url('assets/img/foto/' . $brt['foto']) ?>" width="50%"></td>
                                        <td><?= date('l, d-m-Y', strtotime($brt['tanggal'])) ?></td>
                                        <td><a href="<?= base_url('admin/ubah_berita/' . $brt['id']) ?>"><button type="button" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                                </button></a>
                                            <a href=" <?= base_url('admin/hapus_berita/' . $brt['id']) ?>" onclick="return confirm('Anda Yakin Menghapus Berita  Ini ?')">
                                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                                </button></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>