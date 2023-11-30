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
  <title>SG GANADERIA| NUEVO MASTITIS</title>
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
  <!-- Select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- Toastr -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

=======
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd


</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">


<<<<<<< HEAD
<<<<<<< HEAD
    <?php
    include '../fragments/nav_menu.php'
      ?>



    <!--  Main Sidebar  -->
    <aside class="main-sidebar  elevation-4">
      <?php
      include '../fragments/main_aside_enfermedades.php'
        ?>
    </aside><!--  Main Sidebar  -->
=======
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
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
          include '../fragments/main_aside_enfermedades.php'
        ?>
        <!-- /.sidebar-menu -->
      </div>
    </aside>
<<<<<<< HEAD
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd


    <!-- Content Wrapper. Contains page content -->
    <div class="bg-white content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#">Salud</a></li>
                <li class="breadcrumb-item"><a href="#">Mastitis</a></li>

                <li class="breadcrumb-item active">Nuevo Registro de Mastitis</li>



              </ol>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div><!-- /.content-header -->

      <section class="content">
        <div class="container-fluid">
<<<<<<< HEAD
<<<<<<< HEAD
          <!-- Tabla -->
          <div class="row mb-5" id="tabla-mastitis">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <div class="card card-dark">
                <div class="card-body p-3">
                  <table id="tablalistado" class="table table-striped table-bordered table-hover">
                    <thead>
                      <th>Id</th>
                      <th>Numero Arete</th>
                      <th>Tipo Tratamiento</th>
                      <th>Cuartos Afectados</th>
                      <th>Fecha Diagnóstico</th>
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

          <!-- Formulario Agregar-->
          <div class="row mb-5" id="form-agregar">
            <div class="col-2"></div>
            <div class="col-8">
              <div class="card " style="background-color: grey;">
                <div class="card-header text-center">
                  <h3 class="card-title text-white">Nueva Mastitis</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formulario-agregar" method="POST">
                  <div class="card-body text-white ">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label>Número de Arete</label>
                          <select id="selectAnimales" name="idAnimal" class="form-control select2"
                            style="width: 100%; padding: 15px;" required>
                            <option selected="selected">Seleccione un número de arete</option>

                          </select>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Tipo de Tratamiento</label>
                          <select name="tipoTratamiento" id="tipoTratamiento" class="form-control select2" required>
                            <option value="Inyeccion">Inyeccion</option>
                            <option value="Antibiotico directo en la teta">Antibiotico Directo en la Teta</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Cuartos Afectados</label>
                          <input type="text" class="form-control" name="cuartosAfectados" id="cuartosAfectados"
                            placeholder="Ingrese los cuartos afectados" required>
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Fecha de Diagnostico</label>
                          <input type="date" class="form-control" name="fechaDiagnostico" id="fechaDiagnostico"
                            required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer text-center">
                    <div class="row">
                      <div class="col-6"><button type="submit" class="btn btn-primary btnRegistrar">Guardar</button>
                      </div>
                      <div class="col-6"><input type="reset" class=" btn btn-info" value="Limpiar datos"></div>
                    </div>
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
                  <h3 class="card-title text-white">Modificar Mastitis</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formulario-modificar" method="POST">
                  <div class="card-body text-white ">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Numero Arete</label>
                          <input type="text" class="form-control" name="idAnimal" id="XidAnimal"
                            placeholder="Ingrese el numero de arete" readonly>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Tipo de Tratamiento</label>
                          <select name="tipoTratamiento" id="XtipoTratamiento" class="form-control select2">
                            <option value="Inyeccion">Inyeccion</option>
                            <option value="Antibiotico directo en la teta">Antibiotico directo a la teta</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Cuartos Afectados</label>
                          <input type="text" class="form-control" name="cuartosAfectados" id="XcuartosAfectados"
                            placeholder="Ingrese los cuartos afectados" required>
                        </div>
                      </div>

                      <div class="col-12">
                      <div class="form-group">
                          <label for="">Fecha de Diagnostico</label>
                          <input type="date" class="form-control" name="fechaDiagnostico" id="XfechaDiagnostico"
                            readonly>
                        </div>
                      </div>
                    </div>
=======
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
          <div class="row">
            <div class="col-12">
              <div class="card " style="background-color: #3f3ae6;">
                <div class="card-header text-center">
                  <h3 class="card-title text-white">Nuevo Animal Enfermo</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body text-white ">
                    <div class="form-group">
                      <label for="">Número de Arete</label>
                      <input type="number" class="form-control" id="" placeholder="Ingrese el número de arete">
                    </div>
                    <div class="form-group">
                      <label for="">Fecha del Diagnóstico</label>
                      <input type="text" class="form-control" id="" placeholder="XX/XX/XXXX">
                    </div>
                    <div class="form-group">
                      <label for="">Cuartos Afectados</label>
                      <input type="text" class="form-control" id="" placeholder="Ingrese los cuartos afectados">
                    </div>
                    <div class="form-group">
                      <label>Medicamento Aplicado</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Ninguno</option>
                        <option>Penicilina</option>
                        <option>Mastijet</option>
                  


                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Observaciones</label>
                      <input type="text" class="form-control" id="" placeholder="Ingrese aquí sus observaciones">
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
                      <div class="col-6"><button type="submit" class="btn btn-primary">Editar</button></div>
                      <div class="col-6"><input type="button" class=" btn btn-info" value="Cancelar"
                          onclick="cancelarForm()"></div>
                    </div>


                  </div>
                </form>
              </div>
            </div>
            <div class="col-2"></div>
          </div>
          <!-- /.formulario-->
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



</body>
<!-- REQUIRED SCRIPTS -->


<!--   JQUERY -->
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
<script src="../assets/js/mastitis.js"></script>

=======
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </form>
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
<link rel="stylesheet" href="../css/index.css">
<<<<<<< HEAD
>>>>>>> bryan
=======
>>>>>>> 1fc1d5a0a69493ab3dabdd5eb1dd35d35ab236fd

</html>