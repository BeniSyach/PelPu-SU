<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Menu Video</h4>
                    <?= $this->session->flashdata('message'); ?>
                    <a href="<?= base_url('admin/tambah_video') ?>"><button class="btn btn-primary">Tambah Video</button></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No.</th>
                                <th>Judul Video</th>
                                <th>video</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($video as $vd) : ?>
                                    <?php if ($vd['tag'] == "video") : ?>
                                        <tr>
                                            <td><?= $i++  ?></td>
                                            <td><?= $vd['Judul']  ?></td>
                                            <td style="width: 20%;">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="<?= base_url('assets/img/foto/' . $vd['url']) ?>" allowfullscreen></iframe>
                                                </div>
                                            </td>
                                            <td><?= date('l, d-m-Y', strtotime($vd['tanggal'])) ?></td>
                                            <td><a href="<?= base_url('admin/ubah_video/' . $vd['id']) ?>"><button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                                        <i class="now-ui-icons ui-2_settings-90"></i>
                                                    </button></a>
                                                <a href="<?= base_url('admin/hapus_video/' . $vd['id']) ?>" onclick="return confirm('Anda Yakin Menghapus Video ini ?')"><button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                                    </button></a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>