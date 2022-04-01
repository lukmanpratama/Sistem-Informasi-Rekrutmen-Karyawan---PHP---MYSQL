<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Pengumuman</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Pengumuman</li>
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
                        <h3 class="card-title">Tambah Pengumuman</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="?halaman=pengumuman_aksi" method="POST">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Judul Pengumuman</label>
                                <div class="col-sm-4">
                                    <input type="text" name="txtjudul" class="form-control" id="inputPassword" placeholder="Masukkan Nama Pengumuman" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="txtdeskripsi" id="inputPassword" rows="5" placeholder="Masukkan Deskripsi Pengumuman" required></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="txtpost" value="<?php echo date('Y-m-d'); ?>" class="form-control" id="inputPassword">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Upload</label>
                                <div class="col-sm-2">
                                    <input type="date" name="txtdeadline" class="form-control" id="inputPassword">
                                </div>
                            </div>
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