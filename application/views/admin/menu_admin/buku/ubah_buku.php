<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Tambah Buku</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/ubah_buku/' . $buku['id']) ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama buku</label>
                                    <input type="text" class="form-control" name="Nama_buku" placeholder="Judul Buku" value="<?= $buku['Nama_buku'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal buku</label>
                                    <input type="date" class="form-control" name="Nama_buku" value="<?= $buku['tanggal'] ?>">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ringkasan Buku</label>
                                    <input type="text" class="form-control" name="ringkasan_buku" placeholder="Judul Buku" value="<?= $buku['ringkasan_buku'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="url_buku" class="form-label">Upload Buku</label>
                                    <input class="form-control" type="file" id="url_buku" name="url_buku">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Ubah Buku
                        </button>
                    </form>
                </div>
            </div>
        </div>