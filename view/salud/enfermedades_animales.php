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
  <title>SG GANADERIA | ENFERMEDADES </title>
=======
  <title>AdminLTE 3 | Starter</title>
>>>>>>> bryan

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
<<<<<<< HEAD
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  <!-- Select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- Toastr -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">



=======
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
>>>>>>> bryan



</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

<<<<<<< HEAD
    <!--  Main nav-menu  -->

=======
>>>>>>> bryan
    <?php
    include '../fragments/nav_menu.php'
      ?>

<<<<<<< HEAD
    <!--  Main Sidebar  -->
    <aside class="main-sidebar  elevation-4">
      <?php
      include '../fragments/main_aside_enfermedades.php'
        ?>
    </aside><!--  Main Sidebar  -->


    <!-- Main-->
    <div class="bg-white content-wrapper">

      <!-- Content Header-->
=======

    <!--  Main Sidebar Container -->
    <aside class="main-sidebar  elevation-4">
      <div class="sidebar">
        <!--  Fragmento que incluye el logo y la foto del usuario usuario -->
        <!--  Fragmento que incluye el logo y la foto del usuario usuario -->
        <?php
          include '../fragments/main_aside.php';
        ?>

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


    <!-- Content Wrapper. Contains page content -->
    <div class="bg-white content-wrapper">
      <!-- Content Header (Page header) -->
>>>>>>> bryan
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Enfermedades</a></li>
                <li class="breadcrumb-item active">Animales Enfermos</li>
              </ol>
            </div>
            <div class="col-sm-6">
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div><!-- /.content-header -->

      <!-- Main content -->
<<<<<<< HEAD
=======



>>>>>>> bryan
      <section class="content">
        <div class="container-fluid">

          <!-- Formulario Agregar-->
          <div class="row mb-5" id="form-agregar">
<<<<<<< HEAD
            <div class="col-md-1"></div>

            <div class="col-10">
=======
            <div class="col-2"></div>
            <div class="col-8">
>>>>>>> bryan
              <div class="card " style="background-color: grey;">
                <div class="card-header text-center">
                  <h3 class="card-title text-white">Nuevo Animal Enfermo</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
<<<<<<< HEAD
                <form id="formulario-agregar" method="POST">
                  <div class="card-body text-white ">
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label>Número de Arete</label>
                          <select id="selectAnimales" name="idAnimal" class="form-control select2"
                            style="width: 100%; padding: 15px;" required>
                            <option selected="selected">Seleccione un número de arete</option>

                          </select>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Estado de la Enfermedad</label>
                          <select class="form-control select2" id="estadoEnfermedad" name="estadoEnfermedad"
                            style="width: 100%;" required>
=======
                <form>
                  <div class="card-body text-white ">
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Número de Arete</label>
                          <input type="number" class="form-control" id="" placeholder="Ingrese el número de arete">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Fecha del Diagnóstico</label>
                          <input type="text" class="form-control" id="" placeholder="XX/XX/XXXX">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Síntomas</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese los sintomas">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label>Enfermedad o Padecimiento</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Mastitis</option>
                            <option>Renquera</option>
                            <option>Infección Uterina</option>
                            <option>Indigestación</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label>Estado de la Enfermedad</label>
                          <select class="form-control select2" style="width: 100%;">
>>>>>>> bryan
                            <option selected="selected">En Curso</option>
                            <option>Recuperada</option>
                            <option>Fallecida</option>
                            <option>Crónica</option>
                          </select>
                        </div>
                      </div>
<<<<<<< HEAD
                      <div class="col-4">

                        <div class="form-group">
                          <label>Enfermedad</label>
                          <select id="selectEnfermedades" name="idEnfermedad" class="form-control select2"
                            style="width: 100%; padding: 15px;" required>
                            <option selected="selected">Seleccione una enfermedad</option>

                          </select>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Síntomas</label>
                          <input type="text" class="form-control" id="sintomas" name="sintomas"
                            placeholder="Ingrese los sintomas" required>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Fecha del Diagnóstico</label>
                          <input type="date" class="form-control" id="fechaDiagnostico" name="fechaDiagnostico" required>
                        </div>

                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Observaciones</label>
                          <input type="text" class="form-control" id="observaciones" name="observaciones"
                            placeholder="Ingrese aquí sus observaciones" required>
                        </div>
                      </div>
                    </div>
=======
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Observaciones</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese aquí sus observaciones">
                        </div>
                      </div>
                    </div>








>>>>>>> bryan
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer text-center">
<<<<<<< HEAD
                    <div class="row">
                      <div class="col-6"><button type="submit" class="btn btn-primary btnRegistrar">Guardar</button>
                      </div>
                      <div class="col-6"><input type="reset" class=" btn btn-info" value="Limpiar datos"></div>
                    </div>
=======
                    <button type="submit" class="btn btn-primary">Guardar</button>
>>>>>>> bryan
                  </div>
                </form>
              </div>
            </div>
<<<<<<< HEAD
            <div class="col-md-1"></div>


          </div>


          <!-- /.row -->


=======
            <div class="col-2"></div>
          </div>
          <!-- /.row -->

>>>>>>> bryan
          <!-- Formulario Modificar-->
          <div class="row mb-5" id="form-modificar">
            <div class="col-2"></div>
            <div class="col-8">
              <div class="card " style="background-color: grey;">
                <div class="card-header text-center">
<<<<<<< HEAD
                  <h3 class="card-title text-white">Modificar Animal Enfermo</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formulario-modificar" method="POST">
=======
                  <h3 class="card-title text-white">Nuevo Animal Enfermo</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
>>>>>>> bryan
                  <div class="card-body text-white ">
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
<<<<<<< HEAD
                          <label for="">Numero Arete</label>
                          <input type="text" class="form-control" id="XnumeroArete" name="areteAnimal" readonly>
                        </div>
                        <!-- /.form-group -->
=======
                          <label for="">Número de Arete</label>
                          <input type="number" class="form-control" id="" placeholder="Ingrese el número de arete">
                        </div>
>>>>>>> bryan
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Fecha del Diagnóstico</label>
<<<<<<< HEAD
                          <input type="date" class="form-control" id="XfechaDiagnostico" name="fechaDiagnostico"
                            readonly>
=======
                          <input type="text" class="form-control" id="" placeholder="XX/XX/XXXX">
>>>>>>> bryan
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Síntomas</label>
<<<<<<< HEAD
                          <input type="text" class="form-control" id="Xsintomas" name="sintomas"
                            placeholder="Ingrese los sintomas">
=======
                          <input type="text" class="form-control" id="" placeholder="Ingrese los sintomas">
>>>>>>> bryan
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
<<<<<<< HEAD
                          <label>Enfermedad</label>
                          <input type="text" class="form-control" id="Xenfermedad" name="nombreEnfermedad" readonly>
                        </div>
                        <!-- /.form-group -->
=======
                          <label>Enfermedad o Padecimiento</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Mastitis</option>
                            <option>Renquera</option>
                            <option>Infección Uterina</option>
                            <option>Indigestación</option>
                          </select>
                        </div>
>>>>>>> bryan
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label>Estado de la Enfermedad</label>
<<<<<<< HEAD
                          <select class="form-control select2" id="XestadoEnfermedad" name="estadoEnfermedad"
                            style="width: 100%;">
                            <option selected="selected">Seleccione una opcion</option>
                            <option>En Curso</option>
=======
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">En Curso</option>
>>>>>>> bryan
                            <option>Recuperada</option>
                            <option>Fallecida</option>
                            <option>Crónica</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Observaciones</label>
<<<<<<< HEAD
                          <input type="text" class="form-control" id="Xobservaciones" name="observaciones"
                            placeholder="Ingrese aquí sus observaciones">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <div class="row">
                      <div class="col-6"><button type="submit" class="btn btn-primary">Editar</button></div>
                      <div class="col-6"><input type="button" class=" btn btn-info" value="Cancelar"
                          onclick="cancelarForm()"></div>
                    </div>
                  </div>

=======
                          <input type="text" class="form-control" id="" placeholder="Ingrese aquí sus observaciones">
                        </div>
                      </div>
                    </div>








                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
>>>>>>> bryan
                </form>
              </div>
            </div>
            <div class="col-2"></div>
          </div>
          <!-- /.row -->

          <!-- Tabla -->
          <div class="row mb-5" id="tabla-vacas-enfermas">
<<<<<<< HEAD
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <div class="card card-dark" style="overflow-x:scroll;">
                <div class="card-body p-3">
                  <table id="tablalistado" class="table table-striped table-bordered table-hover">
                    <thead>
                      <th>Id</th>
                      <th>Número de Arete</th>
                      <th>Nombre del Animal</th>
                      <th>Enfermedad o Padecimiento</th>
                      <th>Fecha del Diagnóstico</th>
                      <th>Síntomas</th>
                      <th>Estado del Animal</th>
                      <th>Tratamiento Recomendado</th>
=======
            <div class="col-md-12">
              <div class="card card-dark">
                <div class="card-body p-0">
                  <table id="tablalistado" class="table table-striped table-bordered table-hover">
                    <thead>
                      <th>Número de Arete</th>
                      <th>Nombre del Animal</th>
                      <th>Fecha del Diagnóstico</th>
                      <th>Síntomas</th>
                      <th>Enfermedad o Padecimiento</th>
                      <th>Estado de la Enfermedad</th>
>>>>>>> bryan
                      <th>Observaciones</th>
                      <th>Opciones</th>
                    </thead>
                    <tbody>
                    </tbody>
<<<<<<< HEAD
=======
                    
>>>>>>> bryan
                  </table>
                </div>
              </div>
              <!-- /.card -->
            </div>
<<<<<<< HEAD
            <div class="col-md-1"></div>

          </div>
          <!-- /.row -->

=======
          </div>
          <!-- /.row -->
>>>>>>> bryan
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->



<<<<<<< HEAD
    </div><!-- ./Content Wrapper-->

=======



    </div><!-- ./Content Wrapper-->



>>>>>>> bryan
    <!-- Main Footer -->
    <footer class="main-footer">
      <?php
      include '../fragments/footer.php'
        ?>
    </footer>

  </div><!-- ./wrapper -->

<<<<<<< HEAD
</body>
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
<script src="../assets/js/enfermedades_animales.js"></script>
=======
  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- DataTables  & Plugins -->
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../../plugins/jszip/jszip.min.js"></script>
  <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


</body>

<!-- CSS styles -->
<link rel="stylesheet" href="../assets/css/index.css">

<!-- JD Scripts -->
<script src="../assets/js/enfermedades_data.js"></script>
>>>>>>> bryan

</html>