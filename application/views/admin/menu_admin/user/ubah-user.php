<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Akun BNNK</h4>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/tambahuser') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 pr-1 ">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?= $user['nama'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user['email'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="deskripsi" value="<?= $user['deskripsi'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="password" value="<?= $user['password'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1 pt-5">
                                <label for="foto" class="form-label">Foto</label>
                                <input class="form-control" type="file" id="foto_user" name="foto_user">
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="form-group">
                                    <img src="<?= base_url('assets/img/foto/' . $user['foto_user']) ?>" alt="Foto profil" width="30%">
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <button class="btn btn-primary">
                                Simpan
                            </button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>