<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SG GANADERIA| PREÑOS</title>

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
<!--  Main Sidebar  -->
<aside class="main-sidebar  elevation-4">    
        <?php
        include '../fragments/main_aside_partos.php'
          ?>
    </aside><!--  Main Sidebar  -->


    <!-- Content Wrapper. Contains page content -->
    <div class="bg-white content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="ControlPartos.php">Home</a></li>
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
                <div class="col-4">
                  <!-- small box -->
                  <div class="small-box text-center text-white " style="background-color:#4CAF50;">
                    <div class="inner">
                      <p>Crías Vivas</p>
                      <h3>45</h3>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-4">
                  <!-- small box -->
                  <div class="small-box text-center text-white" style="background-color:#4CAF50;">
                    <div class="inner">
                      <p>Crías Perdidas</p>
                      <h3>5</h3>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-4">
                  <!-- small box -->
                  <div class="small-box text-center text-white" style="background-color:#4CAF50;">
                    <div class="inner">
                      <p>Crías Muertas</p>
                      <h3>5</h3>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
              </div>

              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Registro de Partos en el último mes</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>ID de la vaca</th>
                          <th>Estado</th>
                          <th>Fecha del parto</th>
                      

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>2</td>
                          <td>Viva</td>
                          <td>13/12/2023 </td>
                         


                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Viva</td>
                          <td>13/12/2023 </td>
                         

                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Viva</td>
                          <td>13/12/2023 </td>

                        </tr>

                      <tfoot>

                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <div class="card ">
                <div class="card-header border-0">
                  <h3 class="card-title">
                    Gráfico de partos
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
  
<!--                    ---------------------------------------------------------------------------------------------------                                  -->
            <!-- ./col -->
          </div>
          <!-- /.row -->

          <div class="row ">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Registro de Partos</h3>
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
<link rel="stylesheet" href="../assets/css/index.css">

</html>