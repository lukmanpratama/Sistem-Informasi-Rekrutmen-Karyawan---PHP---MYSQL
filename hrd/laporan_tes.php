<?php
error_reporting(0);

if (isset($_POST['submit'])) {
    $date1 = $_POST['txtdari'];
    $date2 = $_POST['txtsampai'];

    if (!empty($date1) && !empty($date2)) {
        // perintah tampil data berdasarkan range tanggal
        $query_tampil = mysqli_query($koneksi, "SELECT users.*, pelamars.*, penilaians.*
                        FROM users
                        JOIN pelamars
                        ON pelamars.id_user=users.id_user
                        JOIN penilaians
                        ON penilaians.id_pelamar=pelamars.id_pelamar
                        WHERE penilaians.tgl_nilai BETWEEN '$date1' and '$date2' ORDER BY tgl_nilai ASC");
    } else {
        // perintah tampil semua data
        $query_tampil = mysqli_query($koneksi, "SELECT users.*, pelamars.*, penilaians.*
                        FROM users
                        JOIN pelamars
                        ON pelamars.id_user=users.id_user
                        JOIN penilaians
                        ON penilaians.id_pelamar=pelamars.id_pelamar");
    }
} else {
    // perintah tampil semua data
    $query_tampil = mysqli_query($koneksi, "SELECT users.*, pelamars.*, penilaians.*
                        FROM users
                        JOIN pelamars
                        ON pelamars.id_user=users.id_user
                        JOIN penilaians
                        ON penilaians.id_pelamar=pelamars.id_pelamar");
}

?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Laporan Tes & Wawancara</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Laporan Tes & Wawancara</li>
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
                        <h3 class="card-title">Laporan Tes & Wawancara</h3>
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
                                <a href="laporan_print3.php?mulai=<?php echo $date1; ?>&sampai=<?php echo $date2; ?>" target="blank" class="btn btn-outline-info"><i class="fas fa-print"></i> Cetak</a>
                            </div>
                        </form>
                        <br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Pelamar</th>
                                    <th>Nilai Ujian</th>
                                    <th>Nilai Wawancara</th>
                                    <th>Hasil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1; //nilai awal nomer
                                while ($data = mysqli_fetch_array($query_tampil, MYSQLI_BOTH)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo date('d F Y', strtotime($data['tgl_nilai'])); ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['nilai_tes']; ?></td>
                                        <td><?php echo $data['nilai_wawancara']; ?></td>
                                        <td><?php echo $data['hasil']; ?></td>
                                    </tr>
                                <?php
                                    //auto increment nomer
                                    $no++;
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Pelamar</th>
                                <th>Nilai Ujian</th>
                                <th>Nilai Wawancara</th>
                                <th>Hasil</th>
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