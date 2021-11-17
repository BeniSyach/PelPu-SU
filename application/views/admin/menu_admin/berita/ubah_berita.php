<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Ubah Berita</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/ubah_berita/' . $berita['id']) ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Judul Berita</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Judul Berita" value="<?= $berita['judul'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" placeholder="tanggal" value="<?= $berita['tanggal'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tags</label>
                                    <select class="form-control" aria-label="Default select example" name="tags">
                                        <option selected>Open this select menu</option>
                                        <?php foreach ($tags as $tag) : ?>
                                            <option value="<?= $tag['id'] ?>"><?= $tag['nama_tag'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pt-4 my-2">
                                <div>
                                    <input class="form-control" type="file" id="foto" name="foto">
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
                                    <input id="x" type="hidden" name="isi" value="<?= $berita['isi'] ?>">
                                    <trix-editor input="x"></trix-editor>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Ubah Berita
                        </button>
                    </form>
                </div>
            </div>
        </div>