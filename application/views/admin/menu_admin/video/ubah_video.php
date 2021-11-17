<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Ubah Video</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/ubah_video/' . $video['id']) ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Judul Video</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Judul Video" value="<?= $video['Judul'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input type="date" class="form-control" placeholder="tanggal Video" value="<?= $video['tanggal'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pt-5 my-2">
                                <div>
                                    <label for="foto" class="form-label">Foto</label>
                                    <input class="form-control" type="file" id="foto" name="foto">
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= base_url('assets/img/foto/' . $video['url']) ?>" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Edit Video
                        </button>
                    </form>
                </div>
            </div>
        </div>