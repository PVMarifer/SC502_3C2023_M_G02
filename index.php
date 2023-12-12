<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SG GANADERIA | Index</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./view/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./view/dist/css/adminlte.min.css">


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
          <a href="index.php" class="nav-link-menu nav-link">Inicio</a>
        </li>
        <li class="nav-item-menu nav-item d-none d-md-inline-block">
          <a href="./view/animal/estadoAnimal.php" class="nav-link-menu nav-link">Animales</a>
        </li>
        <li class="nav-item-menu nav-item d-none d-md-inline-block">
          <a href="./view/salud/salud.php" class="nav-link-menu nav-link">Salud</a>
        </li>
        <li class="nav-item-menu nav-item d-none d-md-inline-block">
          <a href="./view/produccion/produccion.php" class="nav-link-menu nav-link">Produccion</a>
        </li>
        <li class="nav-item-menu nav-item d-none d-md-inline-block">
          <a href="./view/reproduccion/estado_reproduccion.php" class="nav-link-menu nav-link">Reproduccion y Control de
            Celos</a>
        </li>
        <li class="nav-item-menu nav-item d-none d-md-inline-block">
          <a href="./view/secados/secados.php" class="nav-link-menu nav-link">Control de Secados</a>
        </li>
        <li class="nav-item-menu nav-item d-none d-md-inline-block">
          <a href="./view/partos/partos.php" class=" nav-link-menu nav-link">Control de Partos</a>
        </li>
      </ul>

    </nav>
    <!-- /.navbar -->



    <!--  Main Sidebar Container -->
    <aside class="main-sidebar  elevation-4">
      <div class="sidebar">
      <a href="index.php" class="brand-link">
    <img src="./view/assets/imagenes/logo.png" alt=" Logo" height="100px" 
      style="opacity: .8">
      <hr>
 
  </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="./view/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block text-white">Juanito Mena Mora</a>
            </div>
          </div>
        </div>
      </div>
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="bg-white content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-3">

            </div><!-- /.col -->
            <div class="col-sm-9">
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div><!-- /.content-header -->

      <div class="content">
        <div class="container-fluid">

        </div><!-- /.row -->
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="text-center font-weight-bold">
              Bienvenido a SG Ganaderia
            </h1>
          </div>
        </div><!-- /.row -->
        <div class="row mb-5">
          <div class="col-sm-6 pt-5 mt-5">
            <div class="narrow-paragraph float-sm-right">
              <p class="texto-inicio text-center">
                En SG Ganaderia, hemos creado una solución de vanguardia diseñada específicamente para la
                gestión eficiente de tu finca de ganado lechero. Nuestra plataforma integra las últimas tecnologías
                para brindarte un control total sobre tus operaciones lecheras y maximizar la productividad.

                ¿Listo para empezar? Da click a cualquier opción del menú de arriba y empieza a
              </p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mx-auto d-block">
              <img src="./view/assets/imagenes/GanaderiaDigital.jpg" alt="imagen ganaderia" width="500px">
            </div>
          </div>
        </div><!-- /.row -->


      </div><!-- /.content -->

    </div><!-- ./Content Wrapper-->



    <!-- Main Footer -->
    <footer class="main-footer">
      <?php
      include './view/fragments/footer.php'
        ?>
    </footer>

  </div><!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="./view/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./view/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./view/dist/js/adminlte.min.js"></script>
</body>
<!-- CSS styles -->
<link rel="stylesheet" href="./view/assets/css/index.css">

</html>