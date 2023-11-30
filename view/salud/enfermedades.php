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
  <title>SG GANADERIA | ENFERMEDADES</title>
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
<<<<<<< HEAD
<<<<<<< HEAD
  <!-- Datatable CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
=======
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd


</head>

<body class="hold-transition sidebar-mini">

  <!--  Main Page -->
  <div class="wrapper">

    <!--  Main Navbar -->
    <?php
    include '../fragments/nav_menu.php'
<<<<<<< HEAD
<<<<<<< HEAD
      ?><!--  Main navbar -->
=======
    ?><!--  Main navbar -->
>>>>>>> bryan
=======
    ?><!--  Main navbar -->
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd



    <!--  Main Sidebar  -->
    <aside class="main-sidebar  elevation-4">
<<<<<<< HEAD
<<<<<<< HEAD
      <?php
      include '../fragments/main_aside_enfermedades.php'
        ?>
=======
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
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
<<<<<<< HEAD
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
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
<<<<<<< HEAD
<<<<<<< HEAD
          <!-- Tabla -->
          <div class="row mb-5" id="tabla-enfermedades">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <div class="card card-dark">
                <div class="card-body p-3">
                  <table id="tablalistado" class="table table-striped table-bordered table-hover">
                    <thead>
                      <th>Id</th>
                      <th>Nombre Enfermedad</th>
                      <th>Descripción Enfermedades</th>
                      <th>Síntomas</th>
                      <th>Tratamiento</th>
                      <th>Opciones</th>

                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card -->
            </div>

            <div class="col-md-1"></div>
          </div>
          <!-- /.tabla -->
=======
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd

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
<<<<<<< HEAD
<<<<<<< HEAD
                <form id="formulario-agregar" method="POST">
=======
                <form>
>>>>>>> bryan
=======
                <form>
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
                  <div class="card-body text-white ">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Nombre de la Enfermedad</label>
<<<<<<< HEAD
<<<<<<< HEAD
                          <input type="text" class="form-control" name="nombreEnfermedad"
                            placeholder="Ingrese el nombre de la enfermedad" required>
=======
                          <input type="text" class="form-control" id=""
                            placeholder="Ingrese el nombre de la enfermedad">
>>>>>>> bryan
=======
                          <input type="text" class="form-control" id=""
                            placeholder="Ingrese el nombre de la enfermedad">
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Descripción de la Enfermedad</label>
<<<<<<< HEAD
<<<<<<< HEAD
                          <input type="text" class="form-control" name="descripcion"
                            placeholder="Ingrese la descripcion" required>
=======
                          <input type="text" class="form-control" id="" placeholder="Ingrese la descripcion">
>>>>>>> bryan
=======
                          <input type="text" class="form-control" id="" placeholder="Ingrese la descripcion">
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Síntomas</label>
<<<<<<< HEAD
<<<<<<< HEAD
                          <input type="text" class="form-control" name="sintomas" placeholder="Ingrese los sintomas" required>
=======
                          <input type="text" class="form-control" id="" placeholder="Ingrese los sintomas">
>>>>>>> bryan
=======
                          <input type="text" class="form-control" id="" placeholder="Ingrese los sintomas">
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Tratamiento</label>
<<<<<<< HEAD
<<<<<<< HEAD
                          <input type="text" class="form-control" name="tratamiento"
                            placeholder="Ingrese aquí el tratamiento" required>
                        </div>
                      </div>
                    </div>
=======
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
                          <input type="text" class="form-control" id="" placeholder="Ingrese aquí sus observaciones">
                        </div>
                      </div>
                    </div>








<<<<<<< HEAD
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer text-center">
<<<<<<< HEAD
<<<<<<< HEAD
                    <div class="row">
                      <div class="col-6"><button type="submit" class="btn btn-primary btnRegistrar">Guardar</button>
                      </div>
                      <div class="col-6"><input type="reset" class=" btn btn-info" value="Limpiar datos"></div>
                    </div>
=======
                    <button type="submit" class="btn btn-primary">Guardar</button>
>>>>>>> bryan
=======
                    <button type="submit" class="btn btn-primary">Guardar</button>
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
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
<<<<<<< HEAD
<<<<<<< HEAD
                <form id="formulario-modificar" method="POST">
=======
                <form>
>>>>>>> bryan
=======
                <form>
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
                  <div class="card-body text-white ">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
<<<<<<< HEAD
<<<<<<< HEAD
                          <label for="">Nombre de la Enfermedad</label>
                          <input type="text" class="form-control" name="nombreEnfermedad" id="XnombreEnfermedad"
                            placeholder="Ingrese la descripcion" readonly>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Descripción de la Enfermedad</label>
                          <input type="text" class="form-control" name="descripcion" id="Xdescripcion"
                            placeholder="Ingrese la descripcion">
=======
                          <label for="">Descripción de la Enfermedad</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese la descripcion">
>>>>>>> bryan
=======
                          <label for="">Descripción de la Enfermedad</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese la descripcion">
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Síntomas</label>
<<<<<<< HEAD
<<<<<<< HEAD
                          <input type="text" class="form-control" name="sintomas" id="Xsintomas"
                            placeholder="Ingrese los sintomas">
=======
                          <input type="text" class="form-control" id="" placeholder="Ingrese los sintomas">
>>>>>>> bryan
=======
                          <input type="text" class="form-control" id="" placeholder="Ingrese los sintomas">
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Tratamiento</label>
<<<<<<< HEAD
<<<<<<< HEAD
                          <input type="text" class="form-control" name="tratamiento" id="Xtratamiento"
                            placeholder="Ingrese aquí el tratamiento">
=======
                          <input type="text" class="form-control" id="" placeholder="Ingrese aquí sus observaciones">
>>>>>>> bryan
=======
                          <input type="text" class="form-control" id="" placeholder="Ingrese aquí sus observaciones">
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
                        </div>
                      </div>
                    </div>


                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer text-center">
<<<<<<< HEAD
<<<<<<< HEAD
                    <div class="row">
                      <div class="col-6"><button type="submit" class="btn btn-primary">Editar</button></div>
                      <div class="col-6"><input type="button" class=" btn btn-info" value="Cancelar"
                          onclick="cancelarForm()"></div>
                    </div>


=======
                    <button type="submit" class="btn btn-primary">Guardar</button>
>>>>>>> bryan
=======
                    <button type="submit" class="btn btn-primary">Guardar</button>
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
                  </div>
                </form>
              </div>
            </div>
            <div class="col-2"></div>
          </div>
          <!-- /.formulario-->

<<<<<<< HEAD
<<<<<<< HEAD


        </div><!-- /.container-fluid -->
      </section><!--main section-->

=======
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
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
      
<<<<<<< HEAD
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd



    </div><!-- ./main contentr-->



    <!-- Main Footer -->
    <footer class="main-footer">
      <?php
      include '../fragments/footer.php'
        ?>
    </footer><!-- footer -->

  </div><!-- ./main oage -->



<<<<<<< HEAD
<<<<<<< HEAD


</body>

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

<!-- JD Scripts -->
<script src="../assets/js/enfermedades.js"></script>

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

<!-- JD Scripts -->
<script src="../assets/js/enfermedades_data.js"></script>
<<<<<<< HEAD
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd

</html>