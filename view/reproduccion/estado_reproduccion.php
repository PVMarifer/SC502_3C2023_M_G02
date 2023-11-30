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
<<<<<<< HEAD
<<<<<<< HEAD
        include '../fragments/nav_menu.php'
            ?>



        <!--  Main Sidebar  -->
        <aside class="main-sidebar  elevation-4">
            <?php
            include '../fragments/main_aside_reproduccion.php'
                ?>
        </aside><!--  Main Sidebar  -->
=======
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
      include '../fragments/nav_menu.php'
    ?>



        <!--  Main Sidebar Container -->
        <aside class="main-sidebar  elevation-4">
            <div class="sidebar">
                <!--  Fragmento que incluye el logo y la foto del usuario usuario -->
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
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
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
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
        include '../fragments/main_aside_reproduccion.php'
          ?>
                <!-- /.sidebar-menu -->
            </div>
        </aside>
<<<<<<< HEAD
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd


        <!-- Content Wrapper. Contains page content -->
        <div class=" content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-3">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="#" style="color: #0799b6;">Animales</a></li>


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
                            <!-- carrusel  vacas  -->
                            <div class="card ">
                                <div class="card-header border-0">
                                    <h3 class="card-title">
                                        Carrusel Reproducción
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
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>
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
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- carrusel de toros  -->
                            <div class="card ">
                                <div class="card-header border-0">
                                    <h3 class="card-title">
                                        Carrusel Celos
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
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                                <img src="..." alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Toro 1</h5>
                                                    <p>30 kilos diarios</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="..." alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Toro 2</h5>
                                                    <p>35 kilos diarios</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="..." alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Toro 3</h5>
                                                    <p>39 kilos diarios</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>


                        <!-- tabla de Animales -->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Animales</h3>
                                </div>

                                <div class="card-body table-responsive p-0">
                                    <table class="table table-striped table-valign-middle">
                                        <thead>
                                            <th>Número de Arete</th>
                                            <th>Nombre del Animal</th>
                                            <th>Fecha Nacimiento</th>
                                            <th>Raza</th>
                                            <th>Peso</th>
                                            <th>Características</th>
                                            <th>Arete de la Madre</th>
                                            <th>Arete del Padre</th>
                                        </thead>
                                        <tbody>

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
                                    <p>Promedio de Animales Ingresados</p>
                                    <h3>20</h3>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box text-center text-white" style="background-color:#4CAF50;">
                                <div class="inner">
                                    <p>Promedio de Producción</p>
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
                    <div class="row mt-3">
                        <div class="col-sm-7">
                            <!-- grafico de Animales ingreados  -->
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
<<<<<<< HEAD
<<<<<<< HEAD
                                        Grafico Animales
=======
                                        Grafico Animales 
>>>>>>> bryan
=======
                                        Grafico Animales 
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body" style="display: block;">
                                    <div id="bar-chart" style="height: 300px; padding: 0px; position: relative;"><canvas
                                            class="flot-base" width="335" height="300"
                                            style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 335px; height: 300px;"></canvas><canvas
                                            class="flot-overlay" width="335" height="300"
                                            style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 335px; height: 300px;"></canvas>
                                        <div class="flot-svg"
                                            style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;">
                                            <svg style="width: 100%; height: 100%;">
                                                <g class="flot-x-axis flot-x1-axis xAxis x1Axis"
                                                    style="position: absolute; inset: 0px;"><text x="122.72585227272725"
                                                        y="294" class="flot-tick-label tickLabel"
                                                        style="position: absolute; text-align: center;">March</text><text
                                                        x="16.75572620738636" y="294" class="flot-tick-label tickLabel"
                                                        style="position: absolute; text-align: center;">January</text><text
                                                        x="275.0684925426136" y="294" class="flot-tick-label tickLabel"
                                                        style="position: absolute; text-align: center;">June</text><text
                                                        x="228.3336736505682" y="294" class="flot-tick-label tickLabel"
                                                        style="position: absolute; text-align: center;">May</text><text
                                                        x="176.64914772727272" y="294" class="flot-tick-label tickLabel"
                                                        style="position: absolute; text-align: center;">April</text></g>
                                                <g class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                                    style="position: absolute; inset: 0px;"><text x="8.9521484375"
                                                        y="269" class="flot-tick-label tickLabel"
                                                        style="position: absolute; text-align: right;">0</text><text
                                                        x="8.9521484375" y="205.5" class="flot-tick-label tickLabel"
                                                        style="position: absolute; text-align: right;">5</text><text
                                                        x="1" y="15" class="flot-tick-label tickLabel"
                                                        style="position: absolute; text-align: right;">20</text><text
                                                        x="1" y="142" class="flot-tick-label tickLabel"
                                                        style="position: absolute; text-align: right;">10</text><text
                                                        x="1" y="78.5" class="flot-tick-label tickLabel"
                                                        style="position: absolute; text-align: right;">15</text></g>
<<<<<<< HEAD
<<<<<<< HEAD
                                            </svg>
                                        </div>
=======
                                            </svg></div>
>>>>>>> bryan
=======
                                            </svg></div>
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
                                    </div>
                                </div>

                            </div>
<<<<<<< HEAD
<<<<<<< HEAD
                        </div>
                    </div>
                </div>
            </section>

=======
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd






        </div><!-- ./Content Wrapper-->



        <!-- Main Footer -->
        <footer class="main-footer">
            <?php
<<<<<<< HEAD
<<<<<<< HEAD
            include '../fragments/footer.php'
                ?>
=======
      include '../fragments/footer.php'
        ?>
>>>>>>> bryan
=======
      include '../fragments/footer.php'
        ?>
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
        </footer>

    </div><!-- ./wrapper -->

<<<<<<< HEAD
<<<<<<< HEAD

</body>
<!-- CSS styles -->
<!-- REQUIRED SCRIPTS -->

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
<<<<<<< HEAD
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd

</html>