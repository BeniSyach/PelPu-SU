<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Ubah Berita</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Judul Berita</label>
                                    <input type="text" class="form-control" placeholder="Judul Berita" value="<?= $berita['judul'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Penulis</label>
                                    <input type="text" class="form-control" placeholder="Penulis" value="<?= $berita['penulis'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input type="date" class="form-control" placeholder="tanggal" value="<?= $berita['tanggal'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pt-4 my-2">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" value="<?= $berita['foto'] ?>">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="form-group">
                                    <img src="<?= base_url('assets/img/foto/' . $berita['foto']) ?>" alt="" width="30%">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Isi Berita</label>
                                    <textarea rows="4" cols="80" class="form-control" placeholder="Masukkan Content Berita"><?= $berita['isi'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <a href="<?= base_url('admin/ubah_berita') ?>">
                            <button class="btn btn-primary">
                                Ubah Berita
                            </button>
                        </a>
                    </form>
                </div>
            </div>
        </div>