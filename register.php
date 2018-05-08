<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/custom.css">
  
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Cree su cuenta / Datos personales</div>
      <div class="card-body">
        <form >
          <div class="form-group">
            <label for="exampleFormControlSelect1">Seleccione tu tipo de documento de identidad</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Seleccione tu tipo de documento</option>
              <option>Cédula de ciudadania</option>
              <option>Cédula de extranjeria</option>
              <option>No tiene cédula</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Escriba el numero de su documento de identidad</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Escriba su numero de documento">
          </div>
          <div class="form-row">
            <label for="exampleInputEmail1">Seleccione la fecha de expedición de su documento de identidad</br>La fecha de expedicion lo encuentra en la parte posterior de su documento.</label>
          </div>
          <div class="form-row">
            <div class="col-md-3 mb-3">
              <label for="validationDefault03">Año</label>
              <select class="form-control" id="validationDefault03">
                <option>AAAA</option>
                <?php
                  for($anio=(date("Y")); 1910<=$anio; $anio--) {
                  echo "<option value='$anio'>".$anio."</option>";
                }?>
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault04">Mes</label>
              <select class="form-control" id="validationDefault03">
                <option>MM</option>
                <option value="1">01</option>
                <option value="2">02</option>
                <option value="3">03</option>
                <option value="4">04</option>
                <option value="5">05</option>
                <option value="6">06</option>
                <option value="7">07</option>
                <option value="8">08</option>
                <option value="9">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault05">Dia</label>
              <select class="form-control" id="validationDefault03">
                <option>DD</option>
                <option value="1">01</option>
                <option value="2">02</option>
                <option value="3">03</option>
                <option value="4">04</option>
                <option value="5">05</option>
                <option value="6">06</option>
                <option value="7">07</option>
                <option value="8">08</option>
                <option value="9">09</option>
                <option value="10">10</option>
                <?php
                  for($mes=11; $mes <= 31; $mes++) {
                  echo "<option value='$mes'>".$mes."</option>";
                }?>
              </select>
            </div>
          </div>
          <a class="btn btn-warning"  href="login.html">GUARDAR Y CONTINUAR <span class="glyphicon glyphicon-star" aria-hidden="true"></span></a>
        </form>
        <div class="text-center progress_bar">
          <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
