<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./view/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./view/dist/css/adminlte.min.css">
  

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


  <!-- Navbar -->
  <nav id="main-navbar" class=" main-header navbar navbar-expand navbar-white navbar-light">
    <?php
      include './view/fragments/nav_menu.php'
    ?>
  </nav>
  <!-- /.navbar -->



  <!--  Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4">
    <div class="sidebar">
    <!--  Fragmento que incluye el logo y la foto del usuario usuario -->
    <?php
      include './view/fragments/main_aside.php'
    ?>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li  class="nav-item">
            <a href="#"  class="links-sidebar-nav  nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Opcion1
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="links-sidebar-nav nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Opcion 2
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="links-sidebar-nav  nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Opcion 3
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="bg-white content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-5">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
          <div class="col-sm-7">
            <h1 class="m-0">Home</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    <!-- /.content-header -->
  </div>
  <!-- ./Content Wrapper-->
  

   
  <!-- Main Footer -->
  <footer class="main-footer">
    <?php
      include './view/fragments/footer.php'
    ?>
  </footer>
</div>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src=".view/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./view/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./view/dist/js/adminlte.min.js"></script>
</body>
<!-- CSS styles -->
<link rel="stylesheet" href="./view/css/index.css">

</html>
