<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
            <?php
                $sqltotal = mysqli_query($koneksi,"SELECT * FROM users");
                $total = mysqli_num_rows($sqltotal);
            ?>
            <h3><?php echo $total; ?></h3>

            <p>Jumlah User</p>
            </div>
            <div class="icon">
            <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <?php
                $sqltotalp = mysqli_query($koneksi,"SELECT * FROM pelamars");
                $totalp = mysqli_num_rows($sqltotalp);
            ?>
            <h3><?php echo $totalp; ?></h3>

            <p>Jumlah pelamar</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-stalker"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
            <?php
                $sqltotali = mysqli_query($koneksi,"SELECT * FROM lowongans");
                $totali = mysqli_num_rows($sqltotali);
            ?>
            <h3><?php echo $totali; ?></h3>

            <p>Jumlah Lowonagn</p>
            </div>
            <div class="icon">
            <i class="ion ion-briefcase"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
    </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->