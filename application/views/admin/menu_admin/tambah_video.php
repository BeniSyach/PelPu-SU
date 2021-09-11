<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Tambah Video</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <!-- <div class="col-md-12">
                                <div class="form-group">
                                    <label>Judul Video</label>
                                    <input type="text" class="form-control" placeholder="Judul Video">
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Deskripsi Video</label>
                                    <input type="text" class="form-control" placeholder="Deskripsi Video">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input type="date" class="form-control" placeholder="tanggal Video">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 my-2">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Masukkan Video</label>
                                </div>
                            </div>
                        </div>
                        <a href="<?= base_url('admin/tambah_video') ?>">
                            <button class="btn btn-primary">
                                Tambah Video
                            </button>
                        </a>
                    </form>
                </div>
            </div>
        </div>