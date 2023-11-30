<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
<<<<<<< HEAD
  <title>SG GANADERIA | PRODUCCION</title>
=======
  <title>AdminLTE 3 | Starter</title>
>>>>>>> bryan
=======
  <title>AdminLTE 3 | Starter</title>
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd

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


  <?php
      include '../fragments/nav_menu.php'
    ?>



    <!--  Main Sidebar Container -->
    <aside class="main-sidebar  elevation-4">
      <div class="sidebar">
        <!--  Fragmento que incluye el logo y la foto del usuario usuario -->
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
<<<<<<< HEAD
<<<<<<< HEAD
          <span class="text-white font-weight-bold">SG GANADERIA</span>
=======
          <span class="text-white font-weight-bold">Software Ganadero</span>
>>>>>>> bryan
=======
          <span class="text-white font-weight-bold">Software Ganadero</span>
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
        </a>

        <!-- Sidebar -->

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
<<<<<<< HEAD
<<<<<<< HEAD
            <a href="#" class="d-block text-white">Juanito Mena Mora</a>
=======
            <a href="#" class="d-block text-white">Juanito Mora</a>
>>>>>>> bryan
=======
            <a href="#" class="d-block text-white">Juanito Mora</a>
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
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
          include '../fragments/main_aside_produccion.php'
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
                <li class="breadcrumb-item"><a href="#">Producción</a></li>
                <li class="breadcrumb-item active">Añadir Producción Semanal</li>
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

          <div class="col-md-12">

            <!-- general form elements -->
            <div class="card " style="background-color: #3f3ae6;">
              <div class="card-header text-center">
                <h3 class="card-title text-white">Nueva Produccion Semanal</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body text-white ">
                  <div class="form-group">
                    <label for="">Fecha de Inicio de Semana</label>
                    <input type="date" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Kilos Producidos</label>
                    <input type="number" class="form-control" id="" placeholder="Ingrese la cantidad producida">
                  </div>
                  <div class="form-group">
                    <label>Estado de la Leche</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Normal</option>
                      <option>Contaminada</option>   
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Calidad bacteriológica de la leche</label>
                    <input type="text" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Recuento de celulas somaticas</label>
                    <input type="text" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Porcentaje de grasa</label>
                    <input type="text" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Porcentaje de proteina</label>
                    <input type="text" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Punto crioscopico de la leche</label>
                    <input type="text" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Precencia de inhibidores(antibiotico)</label>
                    <input type="text" class="form-control" id="" placeholder="">
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

<<<<<<< HEAD
<<<<<<< HEAD

</body>
<!-- CSS styles -->

<!--   JQUERY -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Bootbox -->
<script src="../plugins/bootbox/bootbox.min.js"></script>

<!-- toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- CSS styles -->
<link rel="stylesheet" href="../assets/css/index.css">
=======
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>
<!-- CSS styles -->
<link rel="stylesheet" href="../css/index.css">
<<<<<<< HEAD
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd

</html>