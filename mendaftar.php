<?php 
  // mengaktifkan session pada php
  session_start();

  // menghubungkan php dengan koneksi database
  include 'koneksi.php';

    //perintah untuk menampilkan data dari tb_buku ke komponen input form dengan acuan kode yang didapat dari halaman buku_tampil
    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM lowongans
                    WHERE id_lowongan='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek= mysqli_fetch_array($query_cek,MYSQLI_BOTH);
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

<?php
    include 'menu.php';
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!--  -->
    <!--  -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0"> Lowongan </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Lowongan Detail</a></li>
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
                <div class="card-header">
                <h5 class="card-title m-0">Lowongan Pekerjaan</h5>
                </div>
                <div class="card-body">
                <form>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama Lowongan</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword" value="<?php echo $data_cek['nama_lowongan']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-4">
                        <input type="email" class="form-control" id="inputPassword" value="<?php echo $data_cek['kategori']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-6">
                        <textarea class="form-control" id="inputPassword" rows="5" readonly><?php echo $data_cek['deskripsi']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Post</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword" value="<?php echo date('d F Y', strtotime($data_cek['tgl_post'])); ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Deadline</label>
                        <div class="col-sm-2">
                        <input type="text" class="form-control" id="inputPassword" value="<?php echo date('d F Y', strtotime($data_cek['tgl_deadline'])); ?>" readonly>
                        </div>
                    </div>
                    <br>
                </form>
                <form action="mendaftar_aksi.php" method="post" enctype="multipart/form-data">
                    <?php
                      $sql_id = "SELECT * FROM pelamars
                                  WHERE id_user='".$_SESSION['id_user']."'";
                      $query_id = mysqli_query($koneksi, $sql_id);
                      $data_id= mysqli_fetch_array($query_id,MYSQLI_BOTH);
                    ?>
                    <input type="hidden" name="txtidpelamar" value="<?php echo $data_id['id_pelamar']; ?>">
                    <input type="hidden" name="txtidlowongan" value="<?php echo $data_cek['id_lowongan']; ?>">
                    <input type="hidden" name="txttgllamar" value="<?php echo date('Y-m-d'); ?>">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label" >CV</label>
                        <div class="col-sm-4">
                        <input type="file" name="cv" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label" >Surat Lamaran</label>
                        <div class="col-sm-4">
                        <input type="file" name="surat" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label" >SKCK</label>
                        <div class="col-sm-4">
                        <input type="file" name="skck" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                    <div class="col-md-3" >
                        <a href="lowongan.php" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-left"></i> kembali</a>
                        <button type="submit" name="btnDAFTAR" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Daftar</button>
                    </div>
                    </div>
                </form>
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
    $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>
</html>