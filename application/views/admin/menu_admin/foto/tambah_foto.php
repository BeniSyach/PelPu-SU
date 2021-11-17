<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Tambah Foto</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/tambah_foto') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Judul Foto</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Judul Foto">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="foto" class="form-label">Foto</label>
                                    <input class="form-control" type="file" id="foto" name="foto">
                                </div>
                            </div>
                        </div>

                        <!-- 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tag Berita</label>
                                <select class="form-control" aria-label="Default select example" name="tags">
                                    <option value="foto" selected>Foto</option>
                                </select>
                            </div>
                        </div> -->
                        <button class="btn btn-primary" type="submit">
                            Tambah Foto
                        </button>
                    </form>
                </div>
            </div>
        </div>