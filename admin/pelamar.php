<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Pelamar</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pelamar</li>
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
            <h3 class="card-title">Pelamar</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor HP</th>
                <th>Alamat</th>
                <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        $sql_tampil = "SELECT users.*, pelamars.*
                                        FROM users
                                        JOIN pelamars
                                        ON users.id_user=pelamars.id_user";
                        $query_tampil = mysqli_query($koneksi, $sql_tampil);
                        $no=1; //nilai awal nomer
                        while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)){
                    ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['no_hp']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td>
                        <a href="?halaman=pelamar_detail&kode=<?php echo $data['id_user']; ?>" class="btn btn-link btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
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
                <th width="20%">Nomor HP</th>
                <th width="15%">Alamat</th>
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