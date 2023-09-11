<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title; ?></title>
  <!-- My Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@700&display=swap" rel="stylesheet">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">
          <center>
            <h5>PERPUS <i class="fas fa-book"></i></h5>
          </center>
        </span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/assets/profile.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">ADMIN</a>
            <a href="/logout" class="btn btn-danger btn-sm">LOGOUT</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header">KELOLA DATA</li>
            <li class="nav-item has-treeview">
              <a href="/" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  BERANDA
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="/PostController" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  DATA POSTS
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="/MasterItemController" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  DATA MASTER ITEM
                </p>
              </a>
            </li>
            <li class="nav-header">KELOLA LAPORAN</li>
            <li class="nav-item has-treeview">
              <a href="/LaporanController" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  LAPORAN BUKU
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <?= $this->renderSection('content'); ?>

    <footer class="main-footer">
      <strong>Copyright &copy; 2020 <a href="">PERPUS</a>.</strong>
      All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    // $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>