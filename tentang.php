<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';
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
 <title>Yuk Coding Rekrutmen | Tentang</title>

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
              <h1 class="m-0"> Tentang Yuk Coding Media</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Tentang</a></li>
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
                  <h5 class="card-title m-0">Profil</h5>
                </div>
                <div class="card-body">

                  <p>YukCoding Media adalah pengembangan aplikasi layanan tim profesional, kursus pemrograman, dan tutorial (web, seluler, desktop, dll). Kami memberikan lebih banyak tutorial gratis karena kami ingin berkontribusi untuk meningkatkan keterampilan generasi muda.</p>
                  <p>
                    Kami membuka layanan pengembangan aplikasi. Setiap orang dapat memesan aplikasi dengan kesepakatan. Kami akan melakukannya sebaik mungkin.
                    Kami juga menjual beberapa kode sumber aplikasi untuk pengkodean referensi. Itu tidak mahal.
                    Kursus : <a href="https://yukcoding.co.id/on">yukcoding.co.id/on</a></p>
                </div>
              </div>
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="card-title m-0">Contak</h5>
                </div>
                <div class="card-body">

                  <p>Jangan lupa like fanspage kami <a href="https://fb.com/yukcoding">fb.com/yukcoding</a></p>
                  <p>Subscribe channel youtube kami <a href="https://youtube.com/yukcoding2">youtube.com/yukcoding2</a></p>


                  <p>Bagi yang ingin berdiskusi / masuk YukCoding Forum silakan bisa join :</p>
                  <p>- Channel telegram @yukcoding / <a href="https://t.me/yukcoding">t.me/yukcoding</a></p>
                  <p>- Grup telegram @yukcodingID / <a href="https://t.me/yukcodingid">t.me/yukcodingid</a></p>
                  <p>
                    Untuk order source code, jasa pembuatan web / aplikasi, donasi, kerjasama, mitra programmer, kritik, saran, request tutorial, konsultasi pemrograman dan hal penting lainnya silakan menghubungi kami melalui :
                  </p>
                  <p>Facebook : <a href="https://fb.com/yukcoding">fb.com/yukcoding</a> (recommended)</p>
                  <p>Instagram : <a href="https://www.instagram.com/yukcoding/">@yukcoding</a></p>
                  <p>WA : <a href="https://api.whatsapp.com/send?phone=6281225764094">+62812-2576-4094</a></p>
                  <p>Email : dev.yukcoding@gmail.com</>
                  </p>

                  <p>Official : <a href="https://yukcoding.co.id/on">yukcoding.co.id/on</a></p>

                  * Silakan pergunakan bahasa yang baik dan sopan.

                  Mohon maaf yang sebesar-besarnya dan harap maklum apabila respon kami terkadang agak lama, karena admin juga memiliki aktivitas dan kesibukan lainnya..</p>
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
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
</body>

</html>