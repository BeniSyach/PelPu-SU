<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List Akun BNN</h4>
                    <?= $this->session->flashdata('message'); ?>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>No.</th>
                                <th>email</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($user as $s) : ?>
                                    <tr>
                                        <td><?= $i++  ?></td>
                                        <td><?= $s['email'] ?></td>
                                        <td><?= $s['nama'] ?></td>
                                        <td><?= $s['deskripsi'] ?></td>
                                        <td><img src="<?= base_url('assets/img/foto/' . $s['foto_user']) ?>" width="20%" alt=""></td>
                                        <td><a href="<?= base_url('admin/ubah_user/' . $s['id_user']) ?>"><button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                                </button></a>
                                            <a href="<?= base_url('admin/hapus_user/' . $s['id_user']) ?>" onclick="return confirm('Anda Yakin Menghapus Akun Ini ?')"><button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
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