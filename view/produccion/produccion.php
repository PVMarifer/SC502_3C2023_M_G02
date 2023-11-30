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
        include '../fragments/main_aside_produccion.php'
          ?>
        <!-- /.sidebar-menu -->
      </div>
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class=" content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-3">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#" style="color: #0799b6;">Produccion</a></li>


              </ol>
            </div><!-- /.col -->
            <div class="col-sm-9">
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div><!-- /.content-header -->


      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <!-- carrusel de las mejores productoras  -->
              <div class="card ">
                <div class="card-header border-0">
                  <h3 class="card-title">
                    Carrusel de Vacas Productoras
                  </h3>
                  <div class="card-tools">
                    <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item">
                        <img src="..." alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Vaca 1</h5>
                          <p>30 kilos diarios</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="..." alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Vaca 2</h5>
                          <p>35 kilos diarios</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="..." alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Vaca 3</h5>
                          <p>39 kilos diarios</p>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>


            <!-- tabla de vacas con retiro de leche -->
            <div class="col-sm-6">
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Vacas con Retiro de Leche</h3>
                </div>

                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                      <tr>
                        <th>Arete</th>
                        <th>Fecha de Inicio</th>
                        <th>Duración del Retiro</th>
                        <th>Nombre Antibiótico</th>
                        <th>Cuartos Afectados</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          199
                        </td>
                        <td>04/10/23</td>
                        <td>
                          8 días
                        </td>
                        <td>
                          Penicilina
                        </td>
                        <td>
                          Todos
                        </td>
                      </tr>
                      <tr>
                        <td>
                          233
                        </td>
                        <td>10/10/23</td>
                        <td>
                          5 días
                        </td>
                        <td>
                          Mastijet
                        </td>
                        <td>
                          Cuarto Delantero Derecho
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>

      </section>




      <section class="content">
        <div class="container-fluid">

          <!-- Small boxes (Stat box) -->
          <div class="row">

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box text-center text-white " style="background-color:#4CAF50;">
                <div class="inner">
                  <p>Promedio de Sólidos en Leche</p>
                  <h3>12.4</h3>
                </div>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box text-center text-white" style="background-color:#4CAF50;">
                <div class="inner">
                  <p>Promedio de Producción por Vaca</p>
                  <h3>20 kilos</h3>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box text-center text-white" style="background-color:#4CAF50;">
                <div class="inner">
                  <p>Vacas en producción</p>
                  <h3>30</h3>
                </div>

              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
        </div> <!-- /.content-fluid -->
      </section><!-- /section -->

      <section class="content">
        <div class="container-fluid">
          <div class="row border-top pt-3">
            <div class="col-lg-12">
              <form class=" " style="display: flex;">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" >
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-7">
              <!-- grafico de vacas enfermas  -->
              <div class="card ">
                <div class="card-header border-0">
                  <h3 class="card-title">
                    Gráfico de produccion por vaca
                  </h3>
                  <div class="card-tools">
                    <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas class="chart" id="line-chart"
                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <div class="col-sm-5 mt-5">
              <!-- small box -->
              <div class="small-box text-center text-white " style="background-color:#4CAF50;">
                <div class="inner">
                  <p>Promedio de Producción de Leche</p>
                  <h3>22.4 kilos</h3>
                </div>
              </div>
              <div class="small-box text-center text-white " style="background-color:#4CAF50;">
                <div class="inner">
                  <p>Promedio de Sólidos en Leche</p>
                  <h3>12.4</h3>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->
        </div> <!-- /.content-fluid -->
      </section><!-- /section -->

      <section class="content">
        <div class="container-fluid">
          <div class="row border-top pt-3">
            <div class="col-lg-12">
              <form class=" " style="display: flex;">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" >
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-8">
              <!-- grafico de vacas enfermas  -->
              <div class="card ">
                <div class="card-header border-0">
                  <h3 class="card-title">
                    Gráfico de produccion por rebaño semanal
                  </h3>
                  <div class="card-tools">
                    <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas class="chart" id="line-chart"
                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <div class="col-sm-4 mt-2">
              <div class="card">
                <div class="card-header">
                  Datos de Calidad de Leche
                </div>
                <div class="card-body">
                  <Ul>
                    <li>Células Somáticas:</li>
                    <li>Bacterias:</li>
                    <li>Proteína: </li>
                    <li>Grasa: </li>
                  </Ul>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->
        </div> <!-- /.content-fluid -->
      </section><!-- /section -->





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
<!-- DataTables  & Plugins -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
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
<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



<!-- JD Scripts -->
<script src="../assets/js/produccion.js"></script>

</html>