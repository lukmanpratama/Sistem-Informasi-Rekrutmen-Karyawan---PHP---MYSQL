<?php

    $sql_cek = "SELECT * FROM users WHERE
    id_user='".$_SESSION['id_user']."'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek= mysqli_fetch_array($query_cek,MYSQLI_BOTH);

?>
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Profil</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profil</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- /.col -->
        <div class="col-md-4">
        <!-- Widget: user widget style 1 -->
        <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-info">
            <h3 class="widget-user-username"><?php echo $data_cek['nama']; ?></h3>
            <h5 class="widget-user-desc"><?php echo $data_cek['hak_akses']; ?></h5>
            </div>
            <div class="widget-user-image">
            <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="card-footer">
            <div class="row">
                <div class="col-sm-4 border-right">
                <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">SALES</span>
                </div>
                <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">FOLLOWERS</span>
                </div>
                <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">PRODUCTS</span>
                </div>
                <!-- /.description-block -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            </div>
        </div>
        <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <div class="col-md-8">
        <!-- Widget: user widget style 1 -->
            <div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Profil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Ubah Profil</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                    <div class="card-body">
                        <form action="?halaman=user_aksi" method="POST">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputPassword" value="<?php echo $data_cek['nama']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-6">
                                <input type="email" class="form-control" id="inputPassword" value="<?php echo $data_cek['email']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputPassword" value="<?php echo $data_cek['password']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Hak Akses</label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword" value="<?php echo $data_cek['hak_akses']; ?>" readonly>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" name="txtnama" id="inputPassword" value="<?php echo $data_cek['nama']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-6">
                                <input type="email" class="form-control" name="txtemail" id="inputPassword" value="<?php echo $data_cek['email']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-6">
                                <input type="text" class="form-control" name="txtpassword" id="inputPassword" value="<?php echo $data_cek['password']; ?>">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                            <div class="col-md-3">
                                <input type="hidden" name="txtid" value="<?php echo $data_cek['id_user']; ?>">
                                <button type="submit" name="btnSIMPAN" class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt"></i> Ubah</button>
                            </div>
                            </div>
                        </form>
                    </div>  
                </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>

        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<?php
    if (isset ($_POST['btnSIMPAN'])){
        //mulai proses ubah
        $sql_ubah = "UPDATE users SET
            nama='".$_POST['txtnama']."',
            email='".$_POST['txtemail']."',
            password='".$_POST['txtpassword']."'
            WHERE id_user='".$_POST['txtid']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if($query_ubah){
            echo "<script>alert('Ubah Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=profil'>";
        }else{
            echo "<script>alert('Ubah Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=profil'>";
        } //proses ubah selesai
    }
?>