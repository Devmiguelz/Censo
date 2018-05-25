<?php
session_start();
include '../Conexion/conexion.php';
if(isset($_SESSION['estado'])){ 
  if($_SESSION['tipo'] == 1){ 
    $tables = $conectar->query("SELECT * FROM persona P,tipo_sexo TS,tipo_documento TD 
                                WHERE TS.id = P.sexo AND TD.id = P.tipo_documento");

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Tablas | Censo Poblacional 2018</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../Public/css/sb-admin.css" rel="stylesheet">
  <link href="../Public/css/CustomEstilos.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Datos del Censo de Población y Vivienda 2018</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="admin.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="graficos.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Graficos</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tablas.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tablas</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="TablaPersonas" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Segundo Nombre</th>
                  <th>Apellido</th>
                  <th>Segundo Apellido</th>
                  <th>Documento</th>
                  <th>Tipo Documento</th>
                  <th>Fecha de Nacimiento</th>
                  <th>Sexo</th>
                  <th>Servidor Publico</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nombre</th>
                  <th>Segundo Nombre</th>
                  <th>Apellido</th>
                  <th>Segundo Apellido</th>
                  <th>Documento</th>
                  <th>Tipo Documento</th>
                  <th>Fecha de Nacimiento</th>
                  <th>Sexo</th>
                  <th>Servidor Publico</th>
                </tr>
              </tfoot>
              <tbody>
                <?php while ($mostrar = $tables->fetch_assoc() ) {       ?>
                <tr>
                  <td><?php echo $mostrar['nombre'] ?></td>
                  <td><?php echo $mostrar['segundo_nombre'] ?></td>
                  <td><?php echo $mostrar['apellido'] ?></td>
                  <td><?php echo $mostrar['segundo_apellido'] ?></td>
                  <td><?php echo $mostrar['documento'] ?></td>
                  <td><?php echo $mostrar['descripcion'] ?></td>
                  <td><?php echo $mostrar['fecha_nacimiento'] ?></td>
                  <td><?php echo $mostrar['genero'] ?></td>
                  <td><?php echo $mostrar['ser_publico'] ?></td>
                </tr>
                <?php }    ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Comfirmacion de Cierre de Sesión</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Seleccione "Cerrar Sesión" si está listo para finalizar su sesión actual.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <a href="logout.php" class="btn Logout">Cerrar Sesión</a>
            </div>
          </div>
        </div>
      </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../Public/js/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../Public/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../Public/js/sb-admin-datatables.js"></script>
    <script src="../Public/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
<?php
  }else if($_SESSION['tipo'] == 0){
    echo '<script> window.location="home.php"; </script>';
  }
}else{
  echo '<script> window.location="../index.php"; </script>';
}
?>