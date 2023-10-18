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
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">


</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">


    <!-- Navbar -->
    <nav id="main-navbar" class=" main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="nav-main-menu navbar-nav">
        <li class="nav-item-menu nav-item">
          <a class=" nav-link-menu nav-link" data-widget="pushmenu" href="#" role="button"><i
              class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item-menu nav-item d-none d-md-inline-block">
          <a href="#" class="nav-link-menu nav-link">Inicio</a>
        </li>
        <li class="nav-item-menu nav-item d-none d-md-inline-block">
          <a href="#" class="nav-link-menu nav-link">Animales</a>
        </li>
        <li class="nav-item-menu nav-item d-none d-md-inline-block">
          <a href="#" class="nav-link-menu nav-link">Salud</a>
        </li>
        <li class="nav-item-menu nav-item d-none d-md-inline-block">
          <a href="#" class="nav-link-menu nav-link">Produccion</a>
        </li>
        <li class="nav-item-menu nav-item d-none d-md-inline-block">
          <a href="#" class="nav-link-menu nav-link">Reproduccion y Control de Celos</a>
        </li>
        <li class="nav-item-menu nav-item d-none d-md-inline-block">
          <a href="#" class="nav-link-menu nav-link">Control de Secados</a>
        </li>
        <li class="nav-item-menu nav-item d-none d-md-inline-block">
          <a href="#" class=" nav-link-menu nav-link">Control de Partos</a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>


        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
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

      </ul>
    </nav>
    <!-- /.navbar -->



    <!--  Main Sidebar Container -->
    <aside class="main-sidebar  elevation-4">
      <div class="sidebar">
        <!--  Fragmento que incluye el logo y la foto del usuario usuario -->
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
          <span class="text-white font-weight-bold">Software Ganadero</span>
        </a>

        <!-- Sidebar -->

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block text-white">Juanito Mora</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="ml-1 bg-white rounded-right input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>


        <!-- /.sidebar -->

        <!-- Sidebar Menu -->
        <?php
          include '../fragments/main_aside.php'
        ?>
        <!-- /.sidebar-menu -->
      </div>
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="bg-white content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Medicamentos</a></li>

                <li class="breadcrumb-item active">Nueva Injeccion/Aplicacion de Medicamento</li>
              </ol>
            </div>
            <div class="col-sm-6">
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div><!-- /.content-header -->

      <section class="content">
        <div class="container-fluid">
          <div class="row">

            <!-- /.card -->
            <div class="col-12">
              <div class="d-flex justify-content-center">
                <div class="card col-6" style="background-color: #3f3ae6;">
                  <div class="card-header text-center">
                    <h3 class="card-title text-white">Nueva Injeccion/Aplicacion de Medicamento</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form>
                    <div class="card-body text-white ">
                      <div class="form-group">
                        <label for="">Nombre del Medicamento</label>
                        <input type="text" class="form-control" id="" placeholder="Ingrese el nombre del medicamento">
                      </div>
                      <div class="form-group">
                        <label for="">Número de Arete</label>
                        <input type="number" class="form-control" id="" placeholder="Ingrese el número de arete">
                      </div>
                      <div class="form-group">
                        <label for="">Tipo de Aplicacion</label>
                        <input type="text" class="form-control" id="" placeholder="Ingrese el tipo de aplicacion">
                      </div>
                      <div class="form-group">
                        <label for="">Fecha de Aplicacion</label>
                        <input type="date" class="form-control" id="">
                      </div>
                      <div class="form-group">
                        <label for="">Observaciones</label>
                        <input type="text" class="form-control" id="" placeholder="Ingrese aquí sus observaciones">
                      </div>



                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer text-center">
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>

    </div>
    <!-- /.row -->
    </section>




  </div><!-- ./Content Wrapper-->



  <!-- Main Footer -->
  <footer class="main-footer">
    <?php
    include '../fragments/footer.php'
      ?>
  </footer>

  </div><!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>
<!-- CSS styles -->
<link rel="stylesheet" href="../css/index.css">

</html>