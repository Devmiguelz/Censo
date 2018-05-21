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
          <form id="Form_Registrar" method="POST" action="Datos_Registrar.php">
            <span class="login100-form-title titulo">Registar</span>
            <!-- SECCION #1 -->
            <div class="tab">
              <div class="form-group">
                <label class="labe" >Seleccione tu tipo de documento de identidad</label>
                <select class="form-control" id="exampleFormControlSelect1" name="tipo_documento">
                  <option class="labe">Seleccione tu tipo de documento</option>
                  <option class="labe">Cédula de ciudadania</option>
                  <option class="labe">Cédula de extranjeria</option>
                  <option class="labe">No tiene cédula</option>
                </select>
              </div>
              <div class="form-group">
                <label class="labe">Escriba el numero de su documento de identidad</label>
                <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Escriba su numero de documento" required name="n_documento">
              </div>
              <div class="form-row">
                <label class="labe">Seleccione la fecha de expedición de su documento de identidad</br>La fecha de expedicion lo encuentra en la parte posterior de su documento.</label>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationDefault03">Año</label>
                  <select class="form-control" id="validationDefault03">
                    <option class="labe">AAAA</option>
                    <?php
                    for($anio=(date("Y")); 1910<=$anio; $anio--) {
                      echo "<option class='labe' value='$anio'>".$anio."</option>";
                    }?>
                  </select>
                </div>
                <div class="col-md-4 mb-3">
                  <label class="labe">Mes</label>
                  <select class="form-control" id="validationDefault03">
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
                  <label  class="labe" >Dia</label>
                  <select class="form-control" id="validationDefault03">
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
                  <div class="form-check radio-green">
                    <input class="form-check-input" name="group100" type="radio" id="radio100">
                    <label class="form-check-label labe" for="radio100">HOMBRE</label>
                  </div>
                  <div class="form-check radio-green">
                    <input class="form-check-input" name="group100" type="radio" id="radio101">
                    <label class="form-check-label labe" for="radio101">MUJER</label>
                  </div>
                </div>
              </div>
              <!-- SECCION #4 -->
              <div class="tab"><span class="labe" >¿ Es usted servidor publico ?</span>
                <div class="form-group">
                  <div class="form-check radio-green">
                    <input class="form-check-input" name="group100" type="radio" id="radio_SI">
                    <label class="form-check-label" for="radio100">SI</label>
                  </div>
                  <div class="form-check radio-green">
                    <input class="form-check-input" name="group100" type="radio" id="radio_NO">
                    <label class="form-check-label" for="radio101">NO</label>
                  </div>
                </div>
              </div>
              <!-- SECCION #5 -->
              <div class="tab">Seleccione la fecha de Nacimiento :
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationFechaNac">Año</label>
                    <select class="form-control" id="validationFechaNac">
                      <option>AAAA</option>
                      <?php
                      for($anio=(date("Y")); 1910<=$anio; $anio--) {
                        echo "<option value='$anio'>".$anio."</option>";
                      }?>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault04">Mes</label>
                    <select class="form-control" id="validationDefault04">
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
                    <label for="validationDefault05">Dia</label>
                    <select class="form-control" id="validationDefault05">
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
                  <input class="form-control" type="password" aria-describedby="emailHelp" placeholder="Digite su clave" required name="contraseña1">
                </div>
                <div class="form-group">
                  <label for="contraseña">Escriba nuevamente su contraseña</label>
                  <input class="form-control"  type="password" aria-describedby="emailHelp" placeholder="Digite su clave" required name="contraseña2">
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
    <script src="../Public/js/script_registrar.js"></script>
  </body>

  </html>
