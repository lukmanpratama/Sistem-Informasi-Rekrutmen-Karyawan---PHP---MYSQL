<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Lowongan</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Lowongan</li>
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
            <h3 class="card-title">Lowongan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="form-group row">
            <div class="col-md-3" >
                <a href="?halaman=lowongan_tambah" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
            </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                <th>Nama Lowongan</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        $sql_tampil = "SELECT * FROM lowongans";
                        $query_tampil = mysqli_query($koneksi, $sql_tampil);
                        $no=1; //nilai awal nomer
                        while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)){
                    ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama_lowongan']; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td>Post <?php echo date('d F Y', strtotime($data['tgl_post'])); ?> - Deadline <?php echo date('d F Y', strtotime($data['tgl_deadline'])); ?></td>
                    <td>
                        <a href="?halaman=lowongan_detail&kode=<?php echo $data['id_lowongan']; ?>" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                        <a href="?halaman=lowongan_ubah&kode=<?php echo $data['id_lowongan']; ?>" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pen"></i></a>
                        <a href="?halaman=lowongan_aksi&kode=<?php echo $data['id_lowongan']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
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
                <th>Tanggal</th>
                <th>Aksi</th>
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