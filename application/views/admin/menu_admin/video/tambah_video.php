<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Tambah Video</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/tambah_video') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Judul Video</label>
                                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Video">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 my-2">
                                <div>
                                    <label for="foto" class="form-label">Foto</label>
                                    <input class="form-control" type="file" id="foto" name="foto">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Tambah Video
                        </button>
                    </form>
                </div>
            </div>
        </div>