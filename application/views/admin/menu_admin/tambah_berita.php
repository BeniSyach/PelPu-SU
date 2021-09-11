<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Tambah Berita</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Judul Berita</label>
                                    <input type="text" class="form-control" placeholder="Judul Berita">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Penulis</label>
                                    <input type="text" class="form-control" placeholder="Penulis">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input type="date" class="form-control" placeholder="tanggal">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 my-2">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Masukkan Foto</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Isi Berita</label>
                                    <textarea rows="4" cols="80" class="form-control" placeholder="Masukkan Content Berita"></textarea>
                                </div>
                            </div>
                        </div>
                        <a href="<?= base_url('admin/tambah_berita') ?>">
                            <button class="btn btn-primary">
                                Tambah Berita
                            </button>
                        </a>
                    </form>
                </div>
            </div>
        </div>