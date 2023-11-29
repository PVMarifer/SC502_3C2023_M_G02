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

  <!--  Main Page -->
  <div class="wrapper">

    <!--  Main Navbar -->
    <?php
    include '../fragments/nav_menu.php'
    ?><!--  Main navbar -->



    <!--  Main Sidebar  -->
    <aside class="main-sidebar  elevation-4">
      <div class="sidebar">
        <!--  Fragmento que incluye el logo y la foto del usuario usuario -->
        <?php
          include '../fragments/main_aside.php';
        ?>
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
        include '../fragments/main_aside_enfermedades.php'
          ?><!-- /.sidebar-menu -->
        
      </div>
    </aside><!--  Main Sidebar  -->


    <!-- Main Content-->
    <div class="bg-white content-wrapper">

      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Enfermedades</a></li>
                <li class="breadcrumb-item active">Añadir Enfermedad</li>
              </ol>
            </div>
            <div class="col-sm-6">
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div><!-- /.content-header -->

      <!--  Main section -->
      <section class="main-content">
        <div class="container-fluid">

          <!-- Formulario Agregar-->
          <div class="row mb-5" id="form-agregar">
            <div class="col-2"></div>
            <div class="col-8">
              <div class="card " style="background-color: grey;">
                <div class="card-header text-center">
                  <h3 class="card-title text-white">Nueva Enfermedad</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body text-white ">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Nombre de la Enfermedad</label>
                          <input type="text" class="form-control" id=""
                            placeholder="Ingrese el nombre de la enfermedad">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Descripción de la Enfermedad</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese la descripcion">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Síntomas</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese los sintomas">
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Tratamiento</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese aquí sus observaciones">
                        </div>
                      </div>
                    </div>








                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-2"></div>
          </div>
          <!-- /.fromulario -->

          <!-- Formulario Modificar-->
          <div class="row mb-5" id="form-modificar">
            <div class="col-2"></div>
            <div class="col-8">
              <div class="card " style="background-color: grey;">
                <div class="card-header text-center">
                  <h3 class="card-title text-white">Modificar Enfermedad</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body text-white ">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Descripción de la Enfermedad</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese la descripcion">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Síntomas</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese los sintomas">
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Tratamiento</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese aquí sus observaciones">
                        </div>
                      </div>
                    </div>


                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-2"></div>
          </div>
          <!-- /.formulario-->

          <!-- Tabla -->
          <div class="row mb-5" id="tabla-enfermedades">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <div class="card card-dark">
                <div class="card-body p-0">
                  <table id="tablalistado" class="table table-striped table-bordered table-hover">
                    <thead>
                      <th>Nombre Enfermedad</th>
                      <th>Descripción Enfermedades</th>
                      <th>Síntomas</th>
                      <th>Tratamiento</th>
                      <th>Opciones</th>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfooter>
                      <th>Nombre Enfermedad</th>
                      <th>Descripción Enfermedades</th>
                      <th>Síntomas</th>
                      <th>Tratamiento</th>
                      <th>Opciones</th>
                    </tfooter>
                  </table>
                </div>
              </div>
              <!-- /.card -->
            </div>

            <div class="col-md-1"></div>
          </div>
          <!-- /.tabla -->

        </div><!-- /.container-fluid --> 
      </section><!--main section-->
      



    </div><!-- ./main contentr-->



    <!-- Main Footer -->
    <footer class="main-footer">
      <?php
      include '../fragments/footer.php'
        ?>
    </footer><!-- footer -->

  </div><!-- ./main oage -->



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

<!-- JD Scripts -->
<script src="../assets/js/enfermedades_data.js"></script>

</html>