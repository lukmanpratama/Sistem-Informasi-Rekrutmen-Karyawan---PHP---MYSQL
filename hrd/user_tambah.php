<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Tambah User</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah User</li>
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
            <h3 class="card-title">Tambah User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form action="?halaman=user_aksi" method="POST">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputPassword" name="txtnama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                    <input type="email" class="form-control" id="inputPassword" name="txtemail">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-4">
                    <input type="password" class="form-control" id="inputPassword" name="txtpassword">
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