<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>

  <link href="../Public/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Public/css/bootstrap.css" rel="stylesheet">
  <link href="../Public/css/CustomEstilos.css" rel="stylesheet">
  <link href="../Public/css/main.css" rel="stylesheet">

</head>

<body class="bg-dark">
  <div class="error">
    <span >Correo electrónico no registrado</span>
  </div>
  <div class="error-enviar">
    <span >Error al enviar mensaje</span>
  </div>
  <div class="limiter">
    <div class="container-login100 Fondo">
      <div class="card card-register">
        <div class="card-header">Restablecer contraseña</div>
        <div class="card-body">
          <div class="alert alert-success enviado" role="alert">
            <h4 class="alert-heading">Correo enviado !</h4>
            <p>Te enviamos un correo electrónico para que puedas restablecer tu contraseña.</p>
            <hr>
            <p class="mb-0">Si no ves el correo electrónico en tu bandeja de entrada, revisa otros lugares podría estar en tus carpetas de no deseadas.</p>
          </div>
          <div class="text-center mt-4 mb-5">
            <h4>Olvido su contraseña?</h4>
            <p>Ingrese su dirección de correo electrónico y le enviaremos instrucciones sobre cómo restablecer su contraseña.</p>
          </div>
          <form id="Form_Restablecer" method="POST">
            <div class="form-group">
              <input class="form-control input" name="correo_restablecer" type="email" aria-describedby="emailHelp" placeholder="Escriba su correo electrónico" required>
            </div>
            <button type="submit" class="btn restar btn-block">Restablecer contraseña</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="registrar.php">Registrar una cuenta</a>
            <a class="d-block small" href="../index.php">Pagina de Inicio</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../Public/js/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../Public/js/Sendemail.js"></script>

</body>

</html>
