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

            <li class="nav-item">
              <a href="#" class="links-sidebar-nav  nav-link">
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
            <div class="col-sm-3">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              </ol>
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
              Bienvenido a [nombre del software]
            </h1>
          </div>
        </div><!-- /.row -->
        <div class="row mb-5">
          <div class="col-sm-6 pt-5 mt-5">
            <div class="narrow-paragraph float-sm-right">
              <p class="texto-inicio text-center">
                En [Nombre de tu Software], hemos creado una solución de vanguardia diseñada específicamente para la
                gestión eficiente de tu finca de ganado lechero. Nuestra plataforma integra las últimas tecnologías
                para brindarte un control total sobre tus operaciones lecheras y maximizar la productividad.
              </p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mx-auto d-block">
              <img src="./view/imagenes/GanaderiaDigital.jpg" alt="imagen ganaderia" width="500px">
            </div>
          </div>
        </div><!-- /.row -->
        <div class="row mb-1 pt-2">
          <div class="col-sm-12">
            <h2 class="text-center">
              ¿Por qué elegir [Nombre de tu Software]?
            </h2>
          </div>
        </div><!-- /.row -->
        <div class="row my-5 ">
          <div class="col-sm-1">
          </div>
          <div class="col-md-5 mt-5 pt-5 pl-5">
            <div class="narrow-paragraph float-sm-right text-center">
              <h3 class="font-weight-bold">
                Automatización Inteligente
              </h3>
              <p class="texto-inicio text-center ">
                Nuestra plataforma automatiza tareas rutinarias, lo que te permite centrarte en lo que realmente
                importa.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mx-auto d-block">
              <img src="./view/imagenes/GanaderiaInteligente.jpg" alt="imagen ganaderia" width="400px">
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row my-5 ">
          <div class="col-sm-1">
          </div>
          <div class="col-md-5">
            <div class="mx-auto d-block">
              <img src="./view/imagenes/GanaderiaDatos.jpg" alt="imagen ganaderia" width="400px">
            </div>
          </div>
          <div class="col-md-6 mt-5 pt-5 pr-5">
            <div class="narrow-paragraph float-sm-left text-center">
              <h3 class="font-weight-bold">
                Registro Detallado de Animales
              </h3>
              <p class="texto-inicio text-center ">
                Lleva un seguimiento completo de cada uno de tus animales, desde su nacimiento hasta su producción de
                leche y salud.
              </p>
            </div>
          </div>
        </div><!-- /.row -->
        <div class="row my-5 ">
          <div class="col-sm-1">
          </div>
          <div class="col-md-5 mt-5 pt-5 pl-5">
            <div class="narrow-paragraph float-sm-right text-center">
              <h3 class="font-weight-bold">
                Análisis de Datos Avanzado
              </h3>
              <p class="texto-inicio text-center ">
                Convierte datos en información valiosa. Obtén informes detallados para tomar decisiones fundamentadas.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mx-auto d-block">
              <img src="./view/imagenes/AnalisisDatos.jpg" alt="imagen ganaderia" width="400px">
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row my-5 ">
          <div class="col-sm-1">
          </div>
          <div class="col-md-5">
            <div class="mx-auto d-block">
              <img src="./view/imagenes/NotificacionesAlertas.jpg" alt="imagen ganaderia" width="400px">
            </div>
          </div>
          <div class="col-md-6 mt-5 pt-5 pr-5">
            <div class="narrow-paragraph float-sm-left text-center">
              <h3 class="font-weight-bold">
                Notificaciones y Alertas
              </h3>
              <p class="texto-inicio text-center ">
                Mantén el control con alertas instantáneas sobre eventos críticos en tu finca.
              </p>
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
  <script src=".view/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./view/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./view/dist/js/adminlte.min.js"></script>
</body>
<!-- CSS styles -->
<link rel="stylesheet" href="./view/css/index.css">

</html>