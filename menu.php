<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
<div class="container">
    <a href="index.php" class="navbar-brand">
    <img src="assets/img/yc.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Yuk Coding Rekrutmen</span>
    </a>

    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
        <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
        <a href="lowongan.php" class="nav-link">Lowongan</a>
        </li>
        <?php if (isset($_SESSION["Pelamar"])): ?>
        <li class="nav-item">
        <a href="lamaran.php" class="nav-link">Lamaran</a>
        </li>
        <?php else: ?>
        <?php endif ?>
        <li class="nav-item">
        <a href="pengumuman.php" class="nav-link">Pengumuman</a>
        </li>
        <li class="nav-item">
        <a href="tentang.php" class="nav-link">Tentang</a>
        </li>
        <?php if (isset($_SESSION["Pelamar"])): ?>
        <li class="nav-item">
        <a href="profil.php" class="nav-link">Profil</a>
        </li>
        <?php else: ?>
        <?php endif ?>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-0 ml-md-3">
        <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
            </button>
        </div>
        </div>
    </form>
    </div>

    <?php if (isset($_SESSION["Pelamar"])): ?>
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
    <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
            <a href="logout.php" class="btn btn-primary btn-sm"><i class="fas fa-sign-in-alt"></i> Logout</a>
        </li>
    </ul>
    <?php else: ?>
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
    <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
            <a href="login.php" class="btn btn-primary btn-sm"><i class="fas fa-sign-in-alt"></i> Login</a>
        </li>
    </ul>
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
    <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
            <button href="" class="btn btn-link btn-sm"></button>
        </li>
    </ul>
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
    <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
            <a href="daftar.php" class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i> Daftar</a>
        </li>
    </ul>
    <?php endif ?>

    <!-- Right navbar links -->
    <!-- <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto"> -->
    <!-- Notifications Dropdown Menu -->
    <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-user-circle"> Login</i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
        </a>
    </li>
    </ul> -->
</div>
</nav>