<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Ubah Foto</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/ubah_foto/' . $foto['id']) ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Judul Foto</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Judul Foto" value="<?= $foto['Judul'] ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Foto</label>
                                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal foto" value="<?= $foto['tanggal'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 my-2 pt-5">
                                <div>
                                    <label for="foto" class="form-label">Foto</label>
                                    <input class="form-control" type="file" id="foto" name="foto">
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="form-group">
                                    <img src="<?= base_url('assets/img/foto/' . $foto['url']) ?>" alt="" width="30%">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Ubah Foto
                        </button>
                    </form>
                </div>
            </div>
        </div>