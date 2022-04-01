<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Penilaian</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Penilaian</li>
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
            <h3 class="card-title">Penilaian</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="form-group row">
            <div class="col-md-3" >
                <a href="?halaman=pengumuman_tambah" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
            </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                <th>Judul Pengumuman</th>
                <th>Tanggal Post</th>
                <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        $sql_tampil = "SELECT * FROM pengumumans";
                        $query_tampil = mysqli_query($koneksi, $sql_tampil);
                        $no=1; //nilai awal nomer
                        while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)){
                    ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['deskripsi']; ?></td>
                    <td>Post <?php echo date('d F Y', strtotime($data['tgl_post']));?></td>
                    <td>
                        <a href="?halaman=pengumuman_ubah&kode=<?php echo $data['id_pengumuman']; ?>" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pen"></i></a>
                        <a href="?halaman=pengumuman_aksi&kode=<?php echo $data['id_pengumuman']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
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
                <th>Judul Pengumuman</th>
                <th>Tanggal Post</th>
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