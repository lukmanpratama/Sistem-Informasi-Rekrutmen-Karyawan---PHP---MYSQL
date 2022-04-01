<?php
    error_reporting(0);

    if (isset($_POST['submit'])) {
    $date1 = $_POST['txtdari'];
    $date2 = $_POST['txtsampai'];

        if (!empty($date1) && !empty($date2)) {
        // perintah tampil data berdasarkan range tanggal
        $query_tampil = mysqli_query($koneksi, "SELECT users.*, pelamars.*, lamarans.*, lowongans.*
                        FROM users
                        JOIN pelamars
                        ON pelamars.id_user=users.id_user
                        JOIN lamarans
                        ON lamarans.id_pelamar=pelamars.id_pelamar
                        JOIN lowongans
                        ON lowongans.id_lowongan=lamarans.id_lowongan
                        WHERE lamarans.keputusan='Diterima'
                        AND lamarans.tgl_lamaran BETWEEN '$date1' and '$date2'
                        ORDER BY tgl_lamaran ASC");
        } else {
        // perintah tampil semua data
        $query_tampil = mysqli_query($koneksi, "SELECT users.*, pelamars.*, lamarans.*, lowongans.*
                        FROM users
                        JOIN pelamars
                        ON pelamars.id_user=users.id_user
                        JOIN lamarans
                        ON lamarans.id_pelamar=pelamars.id_pelamar
                        JOIN lowongans
                        ON lowongans.id_lowongan=lamarans.id_lowongan
                        WHERE lamarans.keputusan='Diterima'"); 
        }
    } else {
        // perintah tampil semua data
        $query_tampil = mysqli_query($koneksi, "SELECT users.*, pelamars.*, lamarans.*, lowongans.*
                        FROM users
                        JOIN pelamars
                        ON pelamars.id_user=users.id_user
                        JOIN lamarans
                        ON lamarans.id_pelamar=pelamars.id_pelamar
                        JOIN lowongans
                        ON lowongans.id_lowongan=lamarans.id_lowongan
                        WHERE lamarans.keputusan='Diterima'");
    }

?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Laporan Lulus Administrasi</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Laporan Lulus Administrasi</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Laporan Lulus Administrasi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form method="POST" action="">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Dari</label>
                                        <input type="date" name="txtdari" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Sampai</label>
                                        <input type="date" name="txtsampai" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-left">
                            <button type="submit" name="submit" class="btn btn-info"><i class="fas fa-check"></i> Pilih</button>
                            <a href="laporan_print2.php?mulai=<?php echo $date1; ?>&sampai=<?php echo $date2; ?>" target="blank" class="btn btn-outline-info"><i class="fas fa-print"></i> Cetak</a>
                        </div>
                    </form>
                    <br>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                <th>Nama Pelamar</th>
                <th>Nama Lowongan</th>
                <th>Tanggal Lamaran</th>
                <th>Status Lamaran</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        $no=1; //nilai awal nomer
                        while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)){
                    ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['nama_lowongan']; ?></td>
                    <td><?php echo date('d F Y', strtotime($data['tgl_lamaran'])); ?></td>
                    <td>
                        <?php
                            if($data['keputusan'] == '0'){ ?>                                                           
                            <span class="badge badge-primary">Menunggu Proses</span>
                            <?php } else if($data['keputusan'] == 'Diterima'){ ?>
                            <span class="badge badge-success"><?php echo $data['keputusan']; ?></span>
                            <?php } else {?>
                            <span class="badge badge-danger"><?php echo $data['keputusan']; ?></span>
                        <?php }?>
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
                <th>Nama</th>
                <th>Nama Lowongan</th>
                <th>Tanggal Lamaran</th>
                <th>Status Lamaran</th>
                </tfoot>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->