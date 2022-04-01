<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Lamaran</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Lamaran</li>
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
            <h3 class="card-title">Lamaran</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                <th>Nama Pelamar</th>
                <th>Nama Lowongan</th>
                <th>Tanggal Lamaran</th>
                <th>Status Lamaran</th>
                <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        $sql_tampil = "SELECT users.*, pelamars.*, lamarans.*, lowongans.*
                                        FROM users
                                        JOIN pelamars
                                        ON pelamars.id_user=users.id_user
                                        JOIN lamarans
                                        ON lamarans.id_pelamar=pelamars.id_pelamar
                                        JOIN lowongans
                                        ON lowongans.id_lowongan=lamarans.id_lowongan";
                        $query_tampil = mysqli_query($koneksi, $sql_tampil);
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
                            <span class="badge badge-warning">Menunggu Proses</span>
                            <?php } else if($data['keputusan'] == 'Diterima'){ ?>
                            <span class="badge badge-success"><?php echo $data['keputusan']; ?></span>
                            <?php } else {?>
                            <span class="badge badge-danger"><?php echo $data['keputusan']; ?></span>
                        <?php }?>
                    </td>
                    <td>
                    <?php
                        if($data['keputusan'] == '0'){ ?> 
                        <a href="?halaman=pelamar_detail&kode=<?php echo $data['id_user']; ?>" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                        <a href="?halaman=lamaran_aksi&kode1=<?php echo $data['id_pelamar']; ?>" onclick="return confirm('Apakah anda yakin ingin menerima pelamar ini ?')" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="top" title="Terima"><i class="fa fa-check"></i></a>
                        <a href="?halaman=lamaran_aksi&kode2=<?php echo $data['id_pelamar']; ?>" onclick="return confirm('Apakah anda yakin ingin menolak pelamar ini ?')" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="top" title="Tolak"><i class="fa fa-times-circle"></i></a>
                        <?php } else if($data['keputusan'] == 'Diterima'){ ?>
                        <a href="?halaman=pelamar_detail&kode=<?php echo $data['id_user']; ?>" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                        <?php } else {?>
                        <a href="?halaman=pelamar_detail&kode=<?php echo $data['id_user']; ?>" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
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