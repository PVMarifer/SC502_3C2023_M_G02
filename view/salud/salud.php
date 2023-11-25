<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SG GANADERIA| SALUD</title>

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
      ?><!-- /.navbar -->
    

    <!--  Main Sidebar  -->
    <aside class="main-sidebar  elevation-4">    
        <?php
        include '../fragments/main_aside_enfermedades.php'
          ?>
    </aside><!--  Main Sidebar  -->


    <!-- Content Wrapper. Contains page content -->
    <div class=" content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-3">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#" style="color: #0799b6;">Salud</a></li>


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

          <!-- Small boxes (Stat box) -->
          <div class="row">

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box text-center text-white " style="background-color:#4CAF50;">
                <div class="inner">
                  <p>Vacas Enfermas</p>
                  <h3>10</h3>


                </div>

                <a href="./enfermedades.php" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->


            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box text-center text-white" style="background-color:#4CAF50;">
                <div class="inner">
                  <p>Vacas con Antibiótico</p>
                  <h3>5</h3>
                </div>

                <a href="./medicamentos.php" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box text-center text-white" style="background-color:#4CAF50;">
                <div class="inner">
                  <p>Vacas con Mastitis</p>
                  <h3>3</h3>
                </div>

                <a href="./mastitis.php" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box text-center text-white" style="background-color:#4CAF50;">
                <div class="inner">
                  <p>Vacas en Tratamiento</p>
                  <h3>0</h3>


                </div>

                <a href="./tratamientos.php" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
        </div> <!-- /.content-fluid -->
      </section><!-- /section -->

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-7">
              <!-- grafico de vacas enfermas  -->
              <div class="card ">
                <div class="card-header border-0">
                  <h3 class="card-title">
                    Gráfico de vacas enfermas
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
                <div class="card-footer bg-transparent">
                  <div class="row">
                    <div class="col-4 text-center">
                      <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                        data-fgColor="#39CCCC">

                      <div class="text-white">Mail-Orders</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-4 text-center">
                      <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                        data-fgColor="#39CCCC">

                      <div class="text-white">Online</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-4 text-center">
                      <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                        data-fgColor="#39CCCC">

                      <div class="text-white">In-Store</div>
                    </div>
                    <!-- ./col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
            </div>
            <!-- tabla de vacas inyectadas -->
            <div class="col-sm-5">
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Vacas Injectadas</h3>
                </div>

                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                      <tr>
                        <th>Arete</th>
                        <th>Fecha</th>
                        <th>Tipo de Injectable</th>
                        <th>Nombre Injectable</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          199
                        </td>
                        <td>04/10/23</td>
                        <td>
                          Antiestamínico
                        </td>
                        <td>
                          Histaminex
                        </td>
                      </tr>
                      <tr>
                        <td>
                          233
                        </td>
                        <td>10/10/23</td>
                        <td>
                          Antibiótico
                        </td>
                        <td>
                          Penisilina
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
<link rel="stylesheet" href="../assets/css/index.css">

</html>