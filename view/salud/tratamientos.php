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
  <title>SG GANADERIA | TRATAMIENTOS</title>
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
  <!-- Toastr -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
=======

>>>>>>> bryan

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">


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


    <!-- Main content-->
=======
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


    <!-- Content Wrapper. Contains page content -->
>>>>>>> bryan
    <div class="bg-white content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-3">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#">Salud</a></li>
                <li class="breadcrumb-item active">Tratamientos</li>
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
<<<<<<< HEAD

          <!-- /.Formulario agregar-->
          <div class="row mb-5">
            <div class="col-1"></div>
            <div class="col-10">
              <div class="card ">
                <div class="card-header text-center">
                  <h3 class="card-title ">Nuevo Tratamiento</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body  ">
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Número de Arete</label>
                          <input type="number" class="form-control" id="" placeholder="Ingrese el número de arete">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Medicina Utilizada</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese la medicina">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Fecha de Inicio</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese los sintomas">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Duración del tratamiento</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese la duracion">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Tipo de Tratamiento</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese el tipo">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Persona Encargada</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese la persona encargada">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Observaciones</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese las observaciones">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer text-center">
                  <div class="row">
                      <div class="col-6"><button type="submit" class="btn btn-primary brnRegistrar">Guardar</button>
                      </div>
                      <div class="col-6"><input type="reset" class=" btn btn-info" value="Limpiar datos"></div>
                    </div>
                  </div>
                </form>
              </div>


            </div>
            <div class="col-1"></div>
          </div>

          <!-- /.Formulario modificar-->
          <div class="row mb-5">
            <div class="col-1"></div>
            <div class="col-10">
              <div class="card ">
                <div class="card-header text-center">
                  <h3 class="card-title ">Nuevo Tratamiento</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Número de Arete</label>
                          <input type="number" class="form-control" id="" placeholder="Ingrese el número de arete">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Medicina Utilizada</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese la medicina">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Fecha de Inicio</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese los sintomas">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Duración del tratamiento</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese la duracion">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Tipo de Tratamiento</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese el tipo">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Persona Encargada</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese la persona encargada">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Observaciones</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese las observaciones">
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
            <div class="col-1"></div>
          </div>

          <!-- /.Tabla tratamientos-->
          <div class="row mb-5">
=======
          <div class="row">
>>>>>>> bryan
            <div class="col-12">
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Animales con Tratamientos</h3>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                      <tr>
                        <th>Número de Arete</th>
                        <th>Nombre Vaca</th>
                        <th>Tipo de Tratamiento</th>
                        <th>Tipo de Aplicación</th>
                        <th>Medicamento aplicado</th>
                        <th>Fecha de inicio </th>
                        <th>Duración del tratamiento</th>
                        <th>Dosis</th>

<<<<<<< HEAD

=======
                        
>>>>>>> bryan
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          225
                        </td>
                        <td>Peluda</td>
                        <td>
                          Contra Mastitis
                        </td>
                        <td>
                          Inyectado
                        </td>
                        <td>
                          Penisilina
<<<<<<< HEAD
                        </td>
=======
                        </td>            
>>>>>>> bryan
                        <td>
                          04/08/23
                        </td>
                        <td>
                          3 días
                        </td>
                        <td>
                          100ml cada 12 horas
                        </td>
                      </tr>
                      <tr>
                        <td>
                          300
                        </td>
                        <td>Blanca</td>
                        <td>
                          Contra Anaplasmosis
                        </td>
                        <td>
                          Inyectado
                        </td>
                        <td>
                          Berenil
<<<<<<< HEAD
                        </td>
=======
                        </td>            
>>>>>>> bryan
                        <td>
                          09/10/23
                        </td>
                        <td>
                          4 días
                        </td>
                        <td>
                          50ml cada 24 horas
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
<<<<<<< HEAD
          </div><!-- /row -->



        </div>
      </section>
    </div><!-- ./main content-->
=======
          </div>
        </div>
      </section>



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
<!-- CSS styles -->

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
=======
  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>
<!-- CSS styles -->
>>>>>>> bryan
<link rel="stylesheet" href="../assets/css/index.css">

</html>