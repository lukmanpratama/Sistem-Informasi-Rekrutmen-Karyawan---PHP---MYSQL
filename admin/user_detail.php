<?php
    //perintah untuk menampilkan data dari tb_buku ke komponen input form dengan acuan kode yang didapat dari halaman buku_tampil
    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM users WHERE
        id_user='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek= mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Detail User</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Detail User</li>
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
            <form action="?halaman=user_aksi" method="POST">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputPassword" value="<?php echo $data_cek['nama']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                    <input type="email" class="form-control" id="inputPassword" value="<?php echo $data_cek['email']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputPassword" value="<?php echo $data_cek['password']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Hak Akses</label>
                    <div class="col-sm-2">
                    <select class="form-control" id="exampleFormControlSelect1" name="txthakakses">
                    <option>Admin</option>
                    <option>HRD</option>
                    </select>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                <div class="col-md-3" >
                    <a href="?halaman=user" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-left"></i> kembali</a>
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