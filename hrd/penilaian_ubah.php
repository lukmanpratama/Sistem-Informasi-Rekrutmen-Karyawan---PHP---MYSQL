<?php
//perintah untuk menampilkan data dari tb_buku ke komponen input form dengan acuan kode yang didapat dari halaman buku_tampil
if (isset($_GET['kode'])) {
    $sql_cek = "SELECT users.*, pelamars.*, penilaians.*
        FROM users
        JOIN pelamars
        ON pelamars.id_user=users.id_user
        JOIN penilaians
        ON penilaians.id_pelamar=pelamars.id_pelamar 
        WHERE id_nilai ='" . $_GET['kode'] . "'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Penilaian</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Detail Penilaian</li>
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
                        <h3 class="card-title">Detail User</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="?halaman=penilaian_aksi" method="POST">
                            <!-- <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Pelamar</label>
                                <div class="col-sm-4">
                                    <select class="custom-select form-control" name="txtpelamar" id="inputPelamar">
                                        <?php
                                        $sql_tampil = "SELECT users.*, pelamars.*, lamarans.*
                                                        FROM users
                                                        JOIN pelamars
                                                        ON pelamars.id_user=users.id_user
                                                        JOIN lamarans
                                                        ON lamarans.id_pelamar=pelamars.id_pelamar
                                                        WHERE lamarans.keputusan='Diterima'";
                                        $query_tampil = mysqli_query($koneksi, $sql_tampil);
                                        while ($data = mysqli_fetch_array($query_tampil, MYSQLI_BOTH)) {
                                            if ($data_cek['nama'] == $data['id_pelamar']) {
                                                $select = "selected";
                                            } else {
                                                $select = "";
                                            }

                                            echo "<option value=$data[id_pelamar]>" . $data['nama'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Pelamar</label>
                                <div class="col-sm-4">
                                    <input type="text" name="txtpelamar" class="form-control" id="inputPassword" value="<?php echo $data_cek['nama']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nilai Ujian</label>
                                <div class="col-sm-4">
                                    <input type="number" name="txtujian" class="form-control" id="inputPassword" value="<?php echo $data_cek['nilai_tes']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nilai Wawancara</label>
                                <div class="col-sm-4">
                                    <select class="custom-select form-control" name="txtwawancara" id="exampleSelectBorder" >
                                        <option <?php if($data_cek['nilai_wawancara']=='Sangat disarankan'){echo "selected";} ?> value='Sangat disarankan'>Sangat disarankan</option>
                                        <option <?php if($data_cek['nilai_wawancara']=='Dapat disarankan'){echo "selected";} ?> value='Dapat disarankan'>Dapat disarankan</option>
                                        <option <?php if($data_cek['nilai_wawancara']=='Tidak disarankan'){echo "selected";} ?> value='Tidak disarankan'>Tidak disarankan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Hasil</label>
                                <div class="col-sm-4">
                                    <select class="custom-select form-control" name="txthasil" id="exampleSelectBorder" >
                                        <option <?php if($data_cek['hasil']=='Lulus'){echo "selected";} ?> value='Lulus'>Lulus</option>
                                        <option <?php if($data_cek['hasil']=='Tidak Lulus'){echo "selected";} ?> value='Tidak Lulus'>Tidak Lulus</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <input type="hidden" name="txtid" value="<?php echo $data_cek['id_nilai']; ?>">
                                    <button type="submit" name="btnUBAH" class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt"></i> Ubah Data</button>
                                </div>
                            </div>
                        </form>
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