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
          include '../fragments/main_aside_partos.php'
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
                <li class="breadcrumb-item active">Control de Partos</li>
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
            <div class="col-lg-7">
              <div class="row">
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box text-center text-white " style="background-color:#4CAF50;">
                    <div class="inner">
                      <p>Partos realizados</p>
                      <h3>45</h3>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box text-center text-white" style="background-color:#4CAF50;">
                    <div class="inner">
                      <p>Vacas Preñadas</p>
                      <h3>5</h3>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
              </div>

              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Registro de Animales Preñadas</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Número de Arete</th>
                          <th>Nombre</th>
                          <th>Edad</th>
                          <th>Fecha del parto</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>512</td>
                          <td>Lucia</td>
                          <td>3 años</td>
                          <td>16/10/23</td>


                        </tr>
                        <tr>
                          <td>245</td>
                          <td>Ruby</td>
                          <td>4 años</td>
                          <td>10/09/23</td>


                        </tr>
                        <tr>
                          <td>323</td>
                          <td>Bluey</td>
                          <td>2 años</td>
                          <td>1/02/24</td>


                        </tr>

                      <tfoot>

                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>

            <div class="col-lg-5 col-6">
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Partos Registrados</h3>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                      <tr>
                        <th>Número de Arete</th>
                        <th>Nombre Vaca</th>
                        <th>Número Arete cría</th>
                        <th>Fecha Nacimiento</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          289
                        </td>
                        <td>Arenita</td>
                        <td>
                          492
                        </td>
                        <td>
                          15/09/23
                        </td>
                      </tr>
                      <tr>
                        <td>
                          222
                        </td>
                        <td>Arlequina</td>
                        <td>
                          555
                        </td>
                        <td>
                          12/08/23
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

          <div class="row ">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Registro de Aninales Vacunadas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Número de Arete</th>
                          <th>Nombre</th>
                          <th>Edad</th>
                          <th>Fecha del parto</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>512</td>
                          <td>Lucia</td>
                          <td>3 años</td>
                          <td>16/10/23</td>


                        </tr>
                        <tr>
                          <td>245</td>
                          <td>Ruby</td>
                          <td>4 años</td>
                          <td>10/09/23</td>


                        </tr>
                        <tr>
                          <td>323</td>
                          <td>Bluey</td>
                          <td>2 años</td>
                          <td>1/02/24</td>


                        </tr>

                      <tfoot>

                    </table>
                  </div>
                  <!-- /.card-body -->
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