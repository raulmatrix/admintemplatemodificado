<?php
  include 'proyecto/basedatos/conexionbd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de Informacion</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <link rel="stylesheet" href="proyecto/estilos/estilopropio.css">

  <script>
function ingresar(){
  $(document).ready(function()
  {
      var usuario = $('#usuario').val();
      var passw = $('#passw').val();

      $.get("proyecto/validacionloguin.php", {usuario: usuario, passw:passw}, function(result){   
        $("#mostrarmensaje").html(result);
        $('#mostrarmensaje').show();
      });
  });
  }

  </script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.html" class="h1"><b>TALLER AUTOS </b>"TUERCAS"</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingrese sus datos</p>

      <form action="proyecto/validacionloguin.php" method="get">
        <div class="input-group mb-3">
          <input type="text" onchange="buscarCliente();" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="passw" name="passw" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-4"></div>
          <div class="col-4">
            <button type="button" class="btn btn-primary btn-block" onclick="ingresar();">Ingresar</button>
          </div>
          <div class="col-4"></div>
          <!-- /.col -->
        </div>
      </form>

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

<div id="mostrarmensaje">

</div>


<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
