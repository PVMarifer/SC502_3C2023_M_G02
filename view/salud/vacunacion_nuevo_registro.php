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
                <li class="breadcrumb-item"><a href="#">Vacunacion</a></li>

                <li class="breadcrumb-item active">Nueva Vacunación</li>
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

              <div class="card-header text-center">
                <h3 class="card-title text-white">Nueva Vacunación</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Número de Arete</th>
                      <th>Nombre de la Vacuna</th>
                      <th>Fecha de Caducidad</th>
                      <th>Fecha de Aplicación</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <input type="text" name="arete[]" class="form-control" placeholder="Número de Arete">
                      </td>
                      <td>
                        <input type="text" name="nombre_vacuna[]" class="form-control"
                          placeholder="Nombre de la Vacuna">
                      </td>
                      <td>
                        <input type="date" name="fecha_caducidad[]" class="form-control">
                      </td>
                      <td>
                        <input type="date" name="fecha_aplicacion[]" class="form-control">
                      </td>
                    </tr>
                    <!-- Puedes duplicar esta fila para agregar más registros -->
                  </tbody>
                </table>
                <div class="form-group">
                  <label for="num_arete">Números de Arete de Vacas Vacunadas</label>
                  <input type="text" name="num_arete_vacas" class="form-control" placeholder="Separados por comas">
                </div>
                <button class="btn btn-primary" type="submit">Guardar</button>
              </form>
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