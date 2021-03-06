<?php
  session_start();
  include '../Conexion/conexion.php';
  if(!isset($_SESSION['estado'])){ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Registro | Censo Poblacional 2018</title>
  <!-- Bootstrap core CSS-->
  <link href="../Public/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Public/css/bootstrap.css" rel="stylesheet">
  <link href="../Public/css/CustomEstilos.css" rel="stylesheet">
  <link href="../Public/css/main.css" rel="stylesheet">
</head>

<body>
  <div class="limiter">
    <div class="container-login100 Fondo">
      <div class="card card-register">
        <!--<div class="card-header">Cree su cuenta / Datos personales</div>-->
        <div class="card-body">
          <form id="Form_Registrar" method="POST" >
            <span class="login100-form-title titulo">Registrar</span>
            <!-- SECCION #1 -->
            <div class="tab">
              <div class="form-group">
                <label class="labe" >Seleccione tu tipo de documento de identidad</label>
                <select class="form-control" id="tipo_documento" name="tipo_documento">
                  <option class="labe">Seleccione tu tipo de documento</option>
                  <option class="labe">Cédula de Ciudadania</option>
                  <option class="labe">Cédula de Extranjeria</option>
                </select>
              </div>
              <div class="form-group">
                <label class="labe">Escriba el numero de su documento de identidad</label>
                <input class="form-control" id="n_documento" type="text" aria-describedby="emailHelp" placeholder="Escriba su numero de documento" required name="n_documento">
              </div>
              <div class="form-row">
                <label class="labe">Seleccione la fecha de expedición de su documento de identidad</br>La fecha de expedicion lo encuentra en la parte posterior de su documento.</label>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label>Año</label>
                  <select class="form-control" id="exp_año" name="exp_anio">
                    <option class="labe">AAAA</option>
                    <?php
                    for($anio=(date("Y")); 1910<=$anio; $anio--) {
                      echo "<option class='labe' value='$anio'>".$anio."</option>";
                    }?>
                  </select>
                </div>
                <div class="col-md-4 mb-3">
                  <label class="labe">Mes</label>
                  <select class="form-control" id="exp_mes" name="exp_mes">
                    <option>MM</option>
                    <option class="labe" value="1">01</option>
                    <option class="labe" value="2">02</option>
                    <option class="labe" value="3">03</option>
                    <option class="labe" value="4">04</option>
                    <option class="labe" value="5">05</option>
                    <option class="labe" value="6">06</option>
                    <option class="labe" value="7">07</option>
                    <option class="labe" value="8">08</option>
                    <option class="labe" value="9">09</option>
                    <option class="labe" value="10">10</option>
                    <option class="labe" value="11">11</option>
                    <option class="labe" value="12">12</option>
                  </select>
                </div>
                <div class="col-md-4 mb-3">
                  <label  class="labe">Dia</label>
                  <select class="form-control" id="exp_dia" name="exp_dia">
                    <option class="labe" >DD</option>
                    <option class="labe" value="1">01</option>
                    <option class="labe" value="2">02</option>
                    <option class="labe" value="3">03</option>
                    <option class="labe" value="4">04</option>
                    <option class="labe" value="5">05</option>
                    <option class="labe" value="6">06</option>
                    <option class="labe" value="7">07</option>
                    <option class="labe" value="8">08</option>
                    <option class="labe" value="9">09</option>
                    <option class="labe" value="10">10</option>
                    <?php
                    for($mes=11; $mes <= 31; $mes++) {
                      echo "<option class='labe' value='$mes'>".$mes."</option>";
                    }?>
                  </select>
                </div>
              </div>
            </div>
            <!-- SECCION #2 -->
            <div class="tab">
              <div class="form-group">
                <label class="labe">Primer nombre</label>
                <input class="form-control" id="exampleInputpnombre" type="text" aria-describedby="emailHelp" placeholder="Digite su primer nombre" required name="p_nombre">
              </div>
              <div class="form-group">
                <labelc lass="labe">Segundo nombre</label>
                  <input class="form-control" type="text" aria-describedby="emailHelp" placeholder="Digite su segundo nombre" required name="s_nombre">
                </div>
                <div class="form-group">
                  <label class="labe">Primer apellido</label>
                  <input class="form-control"  type="text" aria-describedby="emailHelp" placeholder="Digite su primer nombre" required name="p_apellido">
                </div>
                <div class="form-group">
                  <label class="labe" >Segundo apellido</label>
                  <input class="form-control"  type="text" aria-describedby="emailHelp" placeholder="Digite su segundo nombre" required name="s_apellido">
                </div>
              </div>
              <!-- SECCION #3 -->
              <div class="tab"><span class="labe">Seleccione su sexo:</span>
                <div class="form-group">
                  <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                  </div>
                  <!--  
                  <div class="R-buttom">
                    <input type="radio" name="genero" id="h-button" class="hidden radio-label">
                    <label class="button-label labe" for="h-button">HOMBRE</label>
                    <input type="radio" name="genero" id="m-button" class="hidden radio-label">
                    <label class="button-label labe" for="m-button">MUJER</label>
                  </div>-->
                </div>
              </div>
              <!-- SECCION #4 -->
              <div class="tab"><span class="labe" >¿ Es usted servidor publico ?</span>
                <div class="form-group">
                  <div class="R-buttom">
                    <input type="radio" name="s_publico" id="si-button" class="hidden radio-label">
                    <label class="button-label labe" for="si-button">SI</label>
                    <input type="radio" name="s_publico" id="no-button" class="hidden radio-label">
                    <label class="button-label labe" for="no-button">NO</label>
                  </div>
                </div>
              </div>
              <!-- SECCION #5 -->
              <div class="tab">Seleccione la fecha de Nacimiento :
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>Año</label>
                    <select class="form-control" name="nac_anio">
                      <option>AAAA</option>
                      <?php
                      for($anio=(date("Y")); 1910<=$anio; $anio--) {
                        echo "<option value='$anio'>".$anio."</option>";
                      }?>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>Mes</label>
                    <select class="form-control" name="nac_mes">
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
                  <div class="col-md-4 mb-3">
                    <label>Dia</label>
                    <select class="form-control" name="nac_dia">
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
              </div>
              <!-- SECCION #6 -->
              <div class="tab">Informacion de inicio de session:
                <div class="form-group">
                  <label for="correo">Escriba su correo electionico</label>
                  <input class="form-control" type="email" aria-describedby="emailHelp" placeholder="Digite su correo electionico" required name="correo">
                </div>
                <div class="form-group">
                  <label for="contraseña">Escriba una contraseña</label>
                  <input class="form-control" id="pass1" type="password" aria-describedby="emailHelp" placeholder="Digite su clave" required name="contraseña1">
                  <span id="tamaño1">Contraseña debe tener como minimo 8 caracteres</span>
                  <span id="igual1">Las contraseña no coinciden !</span>
                </div>
                <div class="form-group">
                  <label for="contraseña">Escriba nuevamente su contraseña</label>
                  <input class="form-control" id="pass2"  type="password" aria-describedby="emailHelp" placeholder="Comfirme su clave" required name="contraseña2">
                  <span id="tamaño2">Contraseña debe tener como minimo 8 caracteres</span>
                  <span id="igual2">Las contraseña no coinciden !</span>
                </div>
              </div>
              <div style="overflow:auto;">
                <div class="text-center progress_bar">
                  <div class="progress" id="myProgress">
                    <div class="progress-bar progress-bar-striped" id="myBar" role="progressbar" style="width: 0%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0%</div>
                  </div>
                </div>
                <div style="float:right;">
                  <button class="btn btn-back" type="button" id="prevBtn" onclick="nextPrev(-1)">
                      ANTERIOR
                  </button>
                  <button class="btn btn-next" type="button" id="nextBtn" onclick="nextPrev(1)">
                      SIGUIENTE
                  </button>
                </div>
                <div class="text-left">
                  <a class="btn back" href="../index.php">
                    Back
                  </a>
                </div>
              </div>
              <!-- Circles which indicates the steps of the form: -->
              <div style="text-align:center;margin-top:12px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../Public/js/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../Public/js/jquery.steps.js"></script>
    <script src="../Public/js/script_registrar.js" charset="utf-8" ></script>
    <script src="../Public/js/Registro_Usuario.js" charset="utf-8" ></script>
  </body>

  </html>
<?php 
}else if($_SESSION['tipo'] == 0){
  echo '<script> window.location="home.php"; </script>';
}else if($_SESSION['tipo'] == 1){
  echo '<script> window.location="admin.php"; </script>';
}
?>
