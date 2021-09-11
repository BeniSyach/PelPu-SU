<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Ubah Foto</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Judul Foto</label>
                                    <input type="text" class="form-control" placeholder="Judul Foto" value="<?= $foto['judul'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Deskripsi Foto</label>
                                    <input type="text" class="form-control" placeholder="deskripsi Foto" value="<?= $foto['deskripsi'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Foto</label>
                                    <input type="date" class="form-control" placeholder="Tanggal foto" value="<?= $foto['tanggal'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 my-2 pt-5">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Masukkan Foto 1</label>
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="form-group">
                                    <img src="<?= base_url('assets/img/foto/' . $foto['url']) ?>" alt="" width="30%">
                                </div>
                            </div>
                            <div class="col-md-6 my-2 pt-5">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Masukkan Foto 2</label>
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="form-group">
                                    <img src="<?= base_url('assets/img/foto/' . $foto['url_1']) ?>" alt="" width="30%">
                                </div>
                            </div>
                            <div class="col-md-6 my-2 pt-5">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Masukkan Foto 3</label>
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="form-group">
                                    <img src="<?= base_url('assets/img/foto/' . $foto['url_2']) ?>" alt="" width="30%">
                                </div>
                            </div>
                            <div class="col-md-6 my-2 pt-5">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Masukkan Foto 4</label>
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="form-group">
                                    <img src="<?= base_url('assets/img/foto/' . $foto['url_3']) ?>" alt="" width="30%">
                                </div>
                            </div>
                            <div class="col-md-6 my-2 pt-5">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Masukkan Foto 5</label>
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="form-group">
                                    <img src="<?= base_url('assets/img/foto/' . $foto['url_4']) ?>" alt="" width="30%">
                                </div>
                            </div>
                            <div class="col-md-6 my-2 pt-5">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Masukkan Foto 6</label>
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="form-group">
                                    <img src="<?= base_url('assets/img/foto/' . $foto['url_5']) ?>" alt="" width="30%">
                                </div>
                            </div>
                            <div class="col-md-6 my-2 pt-5">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Masukkan Foto 7</label>
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="form-group">
                                    <img src="<?= base_url('assets/img/foto/' . $foto['url_6']) ?>" alt="" width="30%">
                                </div>
                            </div>
                            <div class="col-md-6 my-2 pt-5">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Masukkan Foto 8</label>
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="form-group">
                                    <img src="<?= base_url('assets/img/foto/' . $foto['url_7']) ?>" alt="" width="30%">
                                </div>
                            </div>
                            <div class="col-md-6 my-2 pt-5">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Masukkan Foto 9</label>
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="form-group">
                                    <img src="<?= base_url('assets/img/foto/' . $foto['url_8']) ?>" alt="" width="30%">
                                </div>
                            </div>
                        </div>
                        <a href="<?= base_url('admin/ubah_foto') ?>">
                            <button class="btn btn-primary">
                                Ubah Foto
                            </button>
                        </a>
                    </form>
                </div>
            </div>
        </div>