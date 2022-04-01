<?php 
  // mengaktifkan session pada php
  session_start();

  // menghubungkan php dengan koneksi database
  include 'koneksi.php';

  if (!isset($_SESSION["Pelamar"]))
    {
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
  <link rel="icon" type="image/x-icon" href="assets/img/yc.png">
 <title>Yuk Coding Rekrutmen | Lamaran</title>

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
            <h1 class="m-0"> Lamaran Saya </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Lamaran</a></li>
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
                <h5 class="card-title m-0">Lamanar Pekerjaan</h5>
                </div>
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Lowongan</th>
                    <th>Kategori</th>
                    <th>Tanggal Daftar</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                            $sql_tampil = "SELECT users.*, pelamars.*, lamarans.*, lowongans.*
                                          FROM users
                                          JOIN pelamars
                                          ON pelamars.id_user=users.id_user
                                          JOIN lamarans
                                          ON lamarans.id_pelamar=pelamars.id_pelamar
                                          JOIN lowongans
                                          ON lowongans.id_lowongan=lamarans.id_lowongan
                                          WHERE users.id_user='$_SESSION[id_user]'";
                            $query_tampil = mysqli_query($koneksi, $sql_tampil);
                            $no=1; //nilai awal nomer
                            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)){
                        ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['nama_lowongan']; ?></td>
                        <td><?php echo $data['kategori']; ?></td>
                        <td><?php echo date('d F Y', strtotime($data['tgl_lamaran'])); ?></td>
                        <td>
                            <?php
                                if($data['keputusan'] == '0'){ ?>                                                           
                                <span class="badge badge-warning">Menunggu Proses</span>
                                <?php } else if($data['keputusan'] == 'Diterima'){ ?>
                                <span class="badge badge-success"><?php echo $data['keputusan']; ?></span>
                                <?php } else {?>
                                <span class="badge badge-danger"><?php echo $data['keputusan']; ?></span>
                            <?php }?>
                        </td>
                        <td>
                            <a href="lowongan_detail.php?kode=<?php echo $data['id_lowongan']; ?>" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                        <?php
                            //auto increment nomer
                            $no++;
                            }
                        ?>
                    </tbody>
                    <tfoot>
                    <th>No</th>
                    <th>Nama Lowongan</th>
                    <th>Kategori</th>
                    <th>Tanggal Daftar</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                    </tfoot>
                </table>
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
