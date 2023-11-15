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

    <!--  Main Sidebar  -->
    <aside class="main-sidebar  elevation-4">
      <?php
      include '../fragments/main_aside_enfermedades.php'
        ?>
    </aside><!--  Main Sidebar  -->


    <!-- Main-->
    <div class="bg-white content-wrapper">
      <!-- Content Header-->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item "><a href="#">Vacunacion</a></li>
                <li class="breadcrumb-item Active"><a href="#">Nueva Vacunacion</a></li>
              </ol>
            </div>
            <div class="col-sm-6">
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div><!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- /Fromulario agregar -->
          <div class="row mb-5">
            <div class="col-12">
              <div class="d-flex justify-content-center">
                <div class="card col-6" style="background-color: #3f3ae6;">
                  <div class="card-header text-center">
                    <h3 class="card-title text-white">Nueva Vacuna</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form>
                    <div class="card-body text-white ">
                      <div class="form-group">
                        <label for="">Número de la Vacuna</label>
                        <input type="text" class="form-control" id="" placeholder="Ingrese el nombre de la vacuna">
                      </div>
                      <div class="form-group">
                        <label for="">Tipo de Vacuna</label>
                        <input type="text" class="form-control" id="" placeholder="Ingrese el tipo de vacuna">
                      </div>
                      <div class="form-group">
                        <label for="">Descripción</label>
                        <input type="text" class="form-control" id="" placeholder="Ingrese la descripcion">
                      </div>
                      <div class="form-group">
                        <label for="">Lote</label>
                        <input type="text" class="form-control" id="" placeholder="Ingrese el lote">
                      </div>
                      <div class="form-group">
                        <label for="">Fecha de Vencimiento</label>
                        <input type="text" class="form-control" id="" placeholder="xx/xx/xxxx">
                      </div>

                      <div class="form-group">
                        <label for="">Observaciones</label>
                        <input type="text" class="form-control" id="" placeholder="Ingrese aquí sus observaciones">
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

          </div>
          <!-- /.row -->

          <!-- Tabla -->
          <div class="row mb-5" id="tabla-vacunas">
            <div class="col-md-12">
              <div class="card card-dark">
                <div class="card-body p-0">
                  <table id="tablalistado" class="table table-striped table-bordered table-hover">
                    <thead>
                      <th>Nombre de la Vacuna</th>
                      <th>Tipo de Vacuna</th>
                      <th>Descripcion</th>
                      <th>Lote</th>
                      <th>Fecha de Vencimiento</th>
                      <th>Observaciones</th>
                    </thead>
                    <tbody>
                    </tbody>

                  </table>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->

        </div>
      </section>
      <!-- /.content -->






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

<!-- JD Scripts -->
<script src="../assets/js/enfermedades_data.js"></script>

</html>