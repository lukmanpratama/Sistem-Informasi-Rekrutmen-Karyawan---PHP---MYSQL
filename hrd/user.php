<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>User</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User</li>
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
            <h3 class="card-title">User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="form-group row">
            <div class="col-md-3" >
                <a href="?halaman=user_tambah" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
            </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Hak Akses</th>
                <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        $sql_tampil = "SELECT * FROM users";
                        $query_tampil = mysqli_query($koneksi, $sql_tampil);
                        $no=1; //nilai awal nomer
                        while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)){
                    ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td>
                        <?php
                            if($data['hak_akses'] == 'Admin'){ ?>                                                           
                            <span class="badge badge-warning"><?php echo $data['hak_akses']; ?></span>
                            <?php } else if($data['hak_akses'] == 'HRD'){ ?>
                            <span class="badge badge-success"><?php echo $data['hak_akses']; ?></span>
                            <?php } else {?>
                            <span class="badge badge-primary"><?php echo $data['hak_akses']; ?></span>
                        <?php }?></td>
                    <td>
                        <a href="?halaman=user_detail&kode=<?php echo $data['id_user']; ?>" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                        <a href="?halaman=user_ubah&kode=<?php echo $data['id_user']; ?>" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pen"></i></a>
                        <a href="?halaman=user_aksi&kode=<?php echo $data['id_user']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>  
                    </td>
                </tr>
                    <?php
                        //auto increment nomer
                        $no++;
                        }
                    ?>
                </tbody>
                <tfoot>
                <th width="10%">No</th>
                <th width="25%">Nama</th>
                <th width="30%">Email</th>
                <th width="20%">Hak Akses</th>
                <th width="15%">Aksi</th>
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