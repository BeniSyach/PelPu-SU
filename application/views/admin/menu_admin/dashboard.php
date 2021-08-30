<div class="content">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Edit Profile</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="row">
              <div class="col-md-5 pr-1">
                <div class="form-group">
                  <label>Company (disabled)</label>
                  <input type="text" class="form-control" disabled="" placeholder="Company" value="BNN SUMATERA UTARA">
                </div>
              </div>
              <div class="col-md-3 px-1">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Username" value="<?= $user['nama'] ?>">
                </div>
              </div>
              <div class="col-md-4 pl-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" placeholder="Email" value="<?= $user['email'] ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" placeholder="Company" value="<?= $user['nama'] ?>">
                </div>
              </div>
              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="password" value="<?= $user['password'] ?>">
                </div>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label>City</label>
                  <input type="text" class="form-control" placeholder="City" value="Mike">
                </div>
              </div>
              <div class="col-md-4 px-1">
                <div class="form-group">
                  <label>Country</label>
                  <input type="text" class="form-control" placeholder="Country" value="Andrew">
                </div>
              </div>
              <div class="col-md-4 pl-1">
                <div class="form-group">
                  <label>Postal Code</label>
                  <input type="number" class="form-control" placeholder="ZIP Code">
                </div>
              </div>
            </div> -->
            <!-- <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>About Me</label>
                  <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                </div>
              </div>
            </div> -->
            <a href="#">
              <button class="btn btn-primary btn-block btn-icon btn-lg">
                Ubah Profile
              </button>
            </a>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-user">
        <div class="image">
          <img src="https://cdn-2.tstatic.net/suryamalang/foto/bank/images/logo-bnn-badan-narkotika-nasional_20181102_095230.jpg" alt="...">
        </div>
        <div class="card-body">
          <div class="author">
            <a href="#">
              <img class="avatar border-gray" src="https://cdn-2.tstatic.net/suryamalang/foto/bank/images/logo-bnn-badan-narkotika-nasional_20181102_095230.jpg" alt="...">
              <h5 class="title"><?= $user['nama'] ?></h5>
            </a>
          </div>
          <p class="description text-center">
            "Badan Narkotika Nasional Republik Indonesia Provinsi Sumatera Utara. <br>
            Jl. Williem Iskandar Pasar V Barat I No. 1-A Medan Estate. <br>
            184 (061) 800-3282"
          </p>

        </div>
        <hr>
        <div class="button-container">
          <button href="https://www.facebook.com/bnnpsumut/" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-facebook-f"></i>
          </button>
          <button href="https://twitter.com/bnnpsumut" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-twitter"></i>
          </button>
          <button href="https://sumut.bnn.go.id/feed/rss/" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-google-plus-g"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>