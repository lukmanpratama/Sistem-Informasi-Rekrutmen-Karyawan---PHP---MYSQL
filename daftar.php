<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index2.html" class="h5"><b>Yuk Coding</b>Rekrutmen</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Registrasi</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" name="txtnama" class="form-control" placeholder="Nama">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="txtemail" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="txtpassword" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="btnSIMPAN" class="btn btn-primary btn-block">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
        <br>
        <p class="mb-0">
          <a href="login.php">Sudah punya akun? login disini</a>
        </p>
        <p class="mb-1">
          <a href="index.php">Kembali</a>
        </p>
      </form>
      <?php
          include 'koneksi.php';
          $akses="Pelamar";
          if (isset ($_POST['btnSIMPAN'])){
              //mulai proses simpan
              $sql_simpan = "INSERT INTO users (nama,email,password,hak_akses) VALUES (
                  '".$_POST['txtnama']."',
                  '".$_POST['txtemail']."',
                  '".$_POST['txtpassword']."',
                  '".$akses."')";
              $query_simpan = mysqli_query($koneksi, $sql_simpan);

              if($query_simpan){
                  echo "<script>alert('Simpan Berhasil')</script>";
                  echo "<meta http-equiv='refresh' content='0; url=login.php'>";
              }else{
                  echo "<script>alert('Simpan Gagal')</script>";
                  echo "<meta http-equiv='refresh' content='0; url=daftar.php'>";
              } //proses simpan selesai
          }
      ?>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">

      </div> -->
      <!-- /.social-auth-links -->

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
