<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';
error_reporting(0);

if (!isset($_SESSION["Pelamar"])) {
  echo "<script>alert('silahkan login');</script>";
  echo "<script>location='login.php';</script>";
}
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <?php
    include 'menu.php';
    ?>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!--  -->
      <!--  -->

      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> Profil </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Profil</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-lg-12">

              <div class="card card-primary card-outline">

                <div class="card-body">
                  <div class="container-fluid">
                    <div class="row">
                      <!-- /.col -->
                      <div class="col-md-12">
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-widget widget-user">
                          <!-- Add the bg color to the header using any of the bg-* classes -->
                          <div class="widget-user-header text-white" style="background: url('dist/img/photo1.png') center center;">
                            <h3 class="widget-user-username text-right"><?php echo $_SESSION['nama']; ?></h3>
                            <h5 class="widget-user-desc text-right"><?php echo $_SESSION['Pelamar']; ?></h5>
                          </div>

                          <?php
                          $sql_tampil = "SELECT users.*, pelamars.*
                                    FROM users
                                    JOIN pelamars
                                    ON pelamars.id_user=users.id_user
                                    JOIN lamarans
                                    WHERE users.id_user='$_SESSION[id_user]'";
                          $query_tampil = mysqli_query($koneksi, $sql_tampil);
                          $no = 1; //nilai awal nomer
                          $data = mysqli_fetch_array($query_tampil, MYSQLI_BOTH);

                          $sth = $koneksi->query($sql_tampil);
                          $result = mysqli_fetch_array($sth);
                          ?>

                          <div class="widget-user-image">
                            <?php
                            echo '<img class="img-circle" src="data:image/jpeg;base64,' . base64_encode($result['foto']) . '"alt="User Avatar">/>';
                            ?>
                          </div>
                          <div class="card-footer">
                            <div class="row">
                              <!-- /.col -->
                              <div class="col-sm-6 border-right">
                                <div class="description-block">
                                  <span class="description-text"><?php echo $_SESSION['nama']; ?></span>
                                </div>
                                <!-- /.description-block -->
                              </div>
                              <!-- /.col -->
                              <div class="col-sm-6">
                                <div class="description-block">
                                  <span class="description-text"><?php echo $_SESSION['email']; ?></span>
                                </div>
                                <!-- /.description-block -->
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->
                          </div>
                        </div>
                        <form action="" method="POST">
                          <div class="card-body">
                                <input type="hidden" name="txtiduser" value="<?php echo $_SESSION['id_user'] ?>">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Tempat Lahir</label>
                                  <input type="text" name="txttempat" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Tempat Lahir">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Tanggal Lahir</label>
                                  <input type="date" name="txttanggal" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tanggal Lahir">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Provinsi</label>
                                  <select class="custom-select form-control" name="nama_provinsi">
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Kabupaten/Kota</label>
                                  <select class="custom-select form-control" name="nama_kabupaten">
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Kecamatan</label>
                                  <select class="custom-select form-control" name="nama_kecamatan">
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Desa</label>
                                  <select class="custom-select form-control" name="nama_desa">
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Alamat</label>
                              <textarea class="form-control" name="txtalamat" placeholder="Masukkan Alamat (Jalan, nomor rumah, keterangan)"></textarea>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleSelectBorder">Kelamin</label>
                                  <select class="custom-select form-control" name="txtkelamin" id="exampleSelectBorder">
                                    <option selected disabled>Pilih Kelamin</option>
                                    <option>Pria</option>
                                    <option>Wanita</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleSelectBorder">Agama</label>
                                  <select class="custom-select form-control" name="txtagama" id="exampleSelectBorder">
                                    <option selected disabled>Pilih Agama</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Konghucu</option>
                                    <option>Yahudi</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleSelectBorder">Status</label>
                                  <select class="custom-select form-control" name="txtstatus" id="exampleSelectBorder">
                                    <option selected disabled>Pilih Status</option>
                                    <option>Belum Kawin</option>
                                    <option>Kawin</option>
                                    <option>Cerai Hidup</option>
                                    <option>Cerai Mati</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Nomor HP</label>
                                  <input type="tel" class="form-control" name="txthp" id="exampleInputPassword1" placeholder="Masukkan Nomor HP">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputFile">File input</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="txtfile" id="exampleInputFile">
                                  <label class="custom-file-label" for="exampleInputFile">Pilih Foto</label>
                                </div>
                                <div class="input-group-append">
                                  <span class="input-group-text">Upload</span>
                                </div>
                              </div>
                            </div>
                            <button type="submit" name="btnSimpan" class="btn btn-primary">Submit</button>
                          </div>
                          <!-- /.card-body -->
                        </form>
                        <!-- /.widget-user -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div><!-- /.container-fluid -->
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->


      <!--  -->
      <!--  -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $.ajax({
        type: 'post',
        url: 'dataprovinsi.php',
        success: function(hasil_provinsi) {
          $("select[name=nama_provinsi]").html(hasil_provinsi);
        }
      });
      $("select[name=nama_provinsi]").on("change", function() {
        var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
        $.ajax({
          type: 'post',
          url:'datakabupaten.php',
          data: 'id_provinsi='+id_provinsi_terpilih,
          success: function(hasil_kabupaten) {
            $("select[name=nama_kabupaten]").html(hasil_kabupaten);
          }
        })
      })
      $("select[name=nama_kabupaten]").on("change", function() {
        var id_kabupaten_terpilih = $("option:selected", this).attr("id_kabupaten");
        $.ajax({
          type: 'post',
          url:'datakecamatan.php',
          data: 'id_kabupaten='+id_kabupaten_terpilih,
          success: function(hasil_kecamatan) {
            $("select[name=nama_kecamatan]").html(hasil_kecamatan);
          }
        })
      })
      $("select[name=nama_kecamatan]").on("change", function() {
        var id_kecamatan_terpilih = $("option:selected", this).attr("id_kecamatan");
        $.ajax({
          type: 'post',
          url:'datadesa.php',
          data: 'id_kecamatan='+id_kecamatan_terpilih,
          success: function(hasil_desa) {
            $("select[name=nama_desa]").html(hasil_desa);
          }
        })
      })
    });
  </script>
</body>

</html>

<?php
    if (isset ($_POST['btnSimpan'])){
        //mulai proses simpan
        $sql_simpan = "INSERT INTO pelamars (id_user,tempat_lhr,tanggal_lhr,provinsi,kabupaten,kecamatan,desa,alamat,kelamin,agama,status,no_hp,foto) VALUES (
            '".$_POST['txtiduser']."',
            '".$_POST['txttempat']."',
            '".$_POST['txttanggal']."',
            '".$_POST['nama_provinsi']."',
            '".$_POST['nama_kabupaten']."',
            '".$_POST['nama_kecamatan']."',
            '".$_POST['nama_desa']."',
            '".$_POST['txtalamat']."',
            '".$_POST['txtkelamin']."',
            '".$_POST['txtagama']."',
            '".$_POST['txtstatus']."',
            '".$_POST['txthp']."',
            '".$_POST['txtfile']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);

        if($query_simpan){
            echo "<script>alert('Simpan Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
        }else{
            echo "<script>alert('Simpan Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
        } //proses simpan selesai
    }else if (isset ($_POST['btnUBAH'])){
        //mulai proses ubah
        $sql_ubah = "UPDATE pelamars SET
            judul_buku='".$_POST['txtJudulBuku']."',
            penulis_buku='".$_POST['txtPenulisBuku']."',
            penerbit_buku='".$_POST['txtPenerbitBuku']."'
            WHERE kode_buku='".$_POST['txtKodeBuku']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if($query_ubah){
            echo "<script>alert('Ubah Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
        }else{
            echo "<script>alert('Ubah Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
        } //proses ubah selesai
    }else if (isset ($_GET['kode'])){
        //mulai proses hapus
        $sql_hapus = "DELETE FROM pelamars WHERE
            kode_buku='".$_GET['kode']."'";
        $query_hapus = mysqli_query($koneksi, $sql_hapus);

        if($query_hapus){
            echo "<script>alert('Hapus Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
        }else{
            echo "<script>alert('Hapus Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
        } //proses hapus selesai
    }
?>