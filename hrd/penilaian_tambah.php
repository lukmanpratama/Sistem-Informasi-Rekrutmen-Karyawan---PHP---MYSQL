<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Penilaian</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Penilaian</li>
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
                        <h3 class="card-title">Tambah Penilaian</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="?halaman=penilaian_aksi" method="POST">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Pelamar</label>
                                <div class="col-sm-4">
                                    <select class="custom-select form-control" name="txtpelamar" id="inputPelamar" required>
                                    <option value="">Pilih Nama Pelamar</option>
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
                                        ?>
                                           
                                            <option value="<?php echo $data['id_pelamar'] ?>"><?php echo $data['id_pelamar'] ?> - <?php echo $data['nama'] ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nilai Ujian</label>
                                <div class="col-sm-4">
                                    <input type="number" name="txtujian" class="form-control" id="inputPassword" placeholder="Masukkan Niai Ujian" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nilai Wawancara</label>
                                <div class="col-sm-4">
                                    <select class="custom-select form-control" name="txtwawancara" id="exampleSelectBorder" required>
                                        <option value="" selected disabled>Pilih Nilai Wawancara</option>
                                        <option>Sangat disarankan</option>
                                        <option>Dapat disarankan</option>
                                        <option>Tidak disarankan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Hasil Keputusan</label>
                                <div class="col-sm-4">
                                    <select class="custom-select form-control" name="txthasil" id="exampleSelectBorder" required>
                                        <option value="" selected disabled>Pilih Hasil Keputusan</option>
                                        <option>Lulus</option>
                                        <option>Tidak Lulus</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="txttglnilai" value="<?php echo date('Y-m-d'); ?>">
                            <br>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <button type="submit" name="btnSIMPAN" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</button>
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