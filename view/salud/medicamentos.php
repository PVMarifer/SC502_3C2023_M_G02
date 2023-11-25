<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SG GANADERIA| MEDICAMENTOS</title>

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
      include '../fragments/main_aside_enfermedades.php'
        ?>
    </aside><!--  Main Sidebar  -->


    <!-- Content Wrapper. Contains page content -->
    <div class="bg-white content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-3">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#">Salud</a></li>
                <li class="breadcrumb-item active">Medicamentos</li>
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
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box text-center text-white " style="background-color:#4CAF50;">
                    <div class="inner">
                      <p>Animales Injectados el último mes</p>
                      <h3>10</h3>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box text-center text-white" style="background-color:#4CAF50;">
                    <div class="inner">
                      <p>Cantidad de medicinas registradas</p>
                      <h3>30</h3>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box text-center text-white" style="background-color:#4CAF50;">
                    <div class="inner">
                      <p>Medicinas vencidas</p>
                      <h3>2</h3>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
              </div>

              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Registro de Injecciones o Aplicaciones de Medicinas</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Número de Arete</th>
                          <th>Edad</th>
                          <th>Fecha Aplicacion/Injeccion</th>
                          <th>Tipo Aplicacion/Injeccion</th>
                          <th>Medicina Utilizada</th>
                          <th>Detalles</th>



                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>200</td>
                          <td>3 años</td>
                          <td>12/10/23</td>
                          <td>Injeccion sucutánea</td>
                          <td>Penisilina</td>
                          <td>Se inflamó el área injectada</td>

                        </tr>
                        <tr>
                          <td>230</td>
                          <td>2 años</td>
                          <td>12/10/23</td>
                          <td>Injeccion intramuscular</td>
                          <td>Berenil</td>
                          <td>Se inflamó el área injectada</td>

                        </tr>
                      <tfoot>
                        <tr>
                          <th>Número de Arete</th>
                          <th>Edad</th>
                          <th>Fecha Aplicacion/Injeccion</th>
                          <th>Tipo Aplicacion/Injeccion</th>
                          <th>Medicina Utilizada</th>
                          <th>Detalles</th>

                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Registro de Medicinas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Nombre de la medicina/antibiótico</th>
                        <th>Tipo de medicamento</th>
                        <th>Descripción</th>
                        <th>Fecha Vencimiento</th>
                        <th>Lote</th>
                        <th>Presentación</th>
                        <th>Observaciones</th>



                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Penicilina</td>
                        <td>Antibiótico</td>
                        <td>Medicamento contra infecciones bacterianas</td>
                        <td>16/10/24</td>
                        <td>EF-122</td>
                        <td>500ml</td>
                        <th>Ninguna</th>
                      </tr>
                      <tr>
                        <td>Histaminex</td>
                        <td>Antiestamínico</td>
                        <td>Medicamento contra el dolor</td>
                        <td>16/10/25</td>
                        <td>DR-1255</td>
                        <td>500ml</td>
                        <th>Ninguna</th>
                      </tr>

                    <tfoot>
                      <tr>
                        <th>Nombre de la medicina/antibiótico</th>
                        <th>Tipo de medicamento</th>
                        <th>Descripción</th>
                        <th>Fecha Vencimiento</th>
                        <th>Lote</th>
                        <th>Presentación</th>
                        <th>Observaciones</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
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
<link rel="stylesheet" href="../assets/css/index.css">

</html>