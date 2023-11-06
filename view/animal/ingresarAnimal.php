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
  <!-- Datatable CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <?php
    include '../fragments/nav_menu.php'
      ?>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Software Ganadero</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Juanito Mora</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="#" class="links-sidebar-nav  nav-link">

                <p>
                  Estado de Animales
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="links-sidebar-nav nav-link ">

                <p>
                  Animales
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <!-- Formulario Agregar-->
          <div class="row mb-5" id="form-agregar">
            <div class="col-2"></div>
            <div class="col-8">
              <div class="card " style="background-color: grey;">
                <div class="card-header text-center">
                  <h3 class="card-title text-white">Nuevo Animal</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
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
                          <label>Raza</label>
                          <select class="form-control select2">
                            <option selected="selected">Jersey</option>
                            <option>Holstein</option>
                            <option>Pardo Suizo</option>
                            <option>Criollo</option>
                            <option>Gyr Lechero</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Nombre</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese el nombre">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                          <input type="date" class="form-control" id="" placeholder="">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label>Peso</label>
                          <input type="number" class="form-control" id="" placeholder="Ingrese el peso de la vaca">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Número de Arete Madre</label>
                          <input type="number" class="form-control" id=""
                            placeholder="Ingrese el número de arete de la madre">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="">Número de Arete Padre</label>
                          <input type="number" class="form-control" id=""
                            placeholder="Ingrese el número de arete del padre">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Características</label>
                          <input type="text" class="form-control" id=""
                            placeholder="Ingrese las características del animal">
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
          <!-- /.row -->

          <!-- Formulario Modificar-->
          <div class="row mb-5" id="form-modificar">
            <div class="col-2"></div>
            <div class="col-8">
              <div class="card " style="background-color: grey;">
                <div class="card-header text-center">
                  <h3 class="card-title text-white">Nuevo Animal</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
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
                          <label>Peso</label>
                          <input type="number" class="form-control" id="" placeholder="Ingrese el peso de la vaca">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Nombre</label>
                          <input type="text" class="form-control" id="" placeholder="Ingrese el nombre">
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Características</label>
                          <input type="text" class="form-control" id=""
                            placeholder="Ingrese las características del animal">
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
          <!-- /.row -->

          <!-- Tabla -->
          <div class="row mb-5" id="tabla-vacas">
            <div class="col-md-12">
              <div class="card card-dark">
                <div class="card-body p-0">
                  <table id="tablalistado" class="table table-striped table-bordered table-hover">
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
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->




    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!--   JQUERY -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
<!-- JS SCRIPTS -->
<script src="../assets/js/animales.js"></script>


</html>