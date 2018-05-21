<?php
  session_start();
  include 'Conexion/conexion.php';
  if(isset($_SESSION['estado'])){
    echo '<script> window.location="View/home.php"; </script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login | Censo Poblacional 2018</title>
  <!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="Public/images/icons/favicon.ico"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Public/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Public/fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Public/vendor/animate/animate.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="Public/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Public/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Public/vendor/select2/select2.min.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="Public/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="Public/css/util.css">
  <link rel="stylesheet" type="text/css" href="Public/css/main.css">
  <link rel="stylesheet" type="text/css" href="Public/css/CustomEstilos.css">
  <!--===============================================================================================-->
</head>
<div class="error">
  <span >Correo electrónico o contraseña incorrecta</span>
</div>
<div class="limiter">
  <div class="container-login100" style="background-image: url('Public/img/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
      <form class="login100-form validate-form" id="Form_Login" method="POST">
        <span class="login100-form-title p-b-49">
          Login
        </span>

        <div class="wrap-input100 validate-input m-b-23" data-validate = "Correo elactrónico Requerido">
          <span class="label-input100">Escriba su correo Electrónico</span>
          <input class="input100" type="text" name="email" placeholder="Escriba su correo Electrónico">
          <span class="focus-input100" data-symbol="&#xf206;"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Contraseña Requerida">
          <span class="label-input100">Escriba su contraseña</span>
          <input class="input100" type="password" name="password" placeholder="Escriba su contraseña">
          <span class="focus-input100" data-symbol="&#xf190;"></span>
        </div>

        <div class="text-right p-t-8 p-b-31">
          <a href="View/olvido-contraseña.html">
            Olvido su contraseña
          </a>
        </div>

        <div class="container-login100-form-btn">
          <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button type="submit" name="Login" class="login100-form-btn btn-login">
              <img class="cargar" src="Public/images/loading.gif" alt=""><span class="log">Login</span>
            </button>
          </div>
        </div>

        <div class="txt1 text-center p-t-54 p-b-20">
          <span>
            <a href="View/registrar.php" class="txt2">
              Crear una cuenta
            </a>
          </span>
        </div>
      </div>
    </form>
  </div>
</div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="Public/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="Public/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="Public/vendor/bootstrap/js/popper.js"></script>
<script src="Public/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="Public/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="Public/vendor/daterangepicker/moment.min.js"></script>
<script src="Public/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="Public/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="Public/js/main.js"></script>
<!--===============================================================================================-->
<script src="Public/js/validar-login.js"></script>
</body>

</html>
