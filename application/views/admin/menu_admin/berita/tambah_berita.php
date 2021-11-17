<div class="content">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Tambah Berita</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/tambah_berita') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Judul Berita</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Judul Berita">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tag Berita</label>
                                    <select class="form-control" aria-label="Default select example" name="tags">
                                        <option selected>Open this select menu</option>
                                        <?php foreach ($tags as $tag) : ?>
                                            <option value="<?= $tag['id'] ?>"><?= $tag['nama_tag'] ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>

                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Penulis</label>
                                    <input type="text" class="form-control" name="penulis" placeholder="Penulis">
                                </div>
                            </div> -->
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" placeholder="tanggal">
                                </div>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-md-6 my-2">
                                <label for="foto" class="form-label">Foto</label>
                                <input class="form-control" type="file" id="foto" name="foto">
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label>Isi Berita</label>
                                    <input id="x" type="hidden" id="isi" name="isi">
                                    <trix-editor input="x"></trix-editor>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Tambah Berita
                        </button>
                    </form>
                </div>
            </div>
        </div>