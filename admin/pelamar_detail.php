<?php
    //perintah untuk menampilkan data dari tb_buku ke komponen input form dengan acuan kode yang didapat dari halaman buku_tampil
    if(isset($_GET['kode'])){
        $sql_cek = "SELECT users.*, pelamars.*
                    FROM users
                    JOIN pelamars
                    ON users.id_user=pelamars.id_user
                    WHERE users.id_user='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek= mysqli_fetch_array($query_cek,MYSQLI_BOTH);

        $sth = $koneksi->query($sql_cek);
        $result=mysqli_fetch_array($sth);
    }
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Detail Pelamar</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Detail Pelamar</li>
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
            <h3 class="card-title">Deail User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form action="?halaman=user_aksi" method="POST">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputPassword" value="<?php echo $data_cek['nama']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                    <input type="email" class="form-control" id="inputPassword" value="<?php echo $data_cek['email']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputPassword" value="<?php echo $data_cek['password']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputPassword" value="<?php echo $data_cek['tempat_lhr']; ?>, <?php echo date('d F Y', strtotime($data_cek['tanggal_lhr'])); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-2">
                    <input type="text" class="form-control" id="inputPassword" value="<?php echo $data_cek['kelamin']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-2">
                    <input type="text" class="form-control" id="inputPassword" value="<?php echo $data_cek['agama']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Status Pernikahan</label>
                    <div class="col-sm-2">
                    <input type="text" class="form-control" id="inputPassword" value="<?php echo $data_cek['status']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-6">
                    <textarea class="form-control" id="inputPassword" rows="5" readonly><?php echo $data_cek['alamat']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-2">
                    <?php
                    echo '<img width="200" src="data:image/jpeg;base64,'.base64_encode( $result['foto'] ).'"/>';
                    ?>
                </div>
                </div>
                <br>
                <div class="form-group row">
                <div class="col-md-3" >
                    <a href="?halaman=pelamar" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-left"></i> kembali</a>
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