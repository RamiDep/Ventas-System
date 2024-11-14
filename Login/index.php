<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shopping </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">

  <!-- SWEET ALERT LIBRARY-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition login-page">

<?php 
  session_start();
  if(isset($_SESSION['msj'])){
  $response = $_SESSION['msj'];
?>
    <script>
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "<?=$response?>",
        timer: 2000
      });
    </script>
<?php
  }
?>

<div class="login-box">
  <!-- /.login-logo -->
 
  <div class="card card-outline card-primary">
  <div class="logo" style="text-align: center;">
    <img src="https://cdn.pixabay.com/photo/2016/03/22/09/08/online-store-1272390_1280.png" width="150px" height="150px" alt="mi tiendita">
  </div> 
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Gestión de</b> ventas</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingrese su usuario y contraseña</p>

      <form action="../app/controllers/Login/access.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email_txt" placeholder="Correo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password_txt" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Rercordar
              </label>
            </div>
          </div>    
        </div>
        <br>
        <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        
      </form>
      <br>
      <p class="mb-1">
        <a href="forgot-password.html">Olvide contraseña</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Registrar un nuevo usuario</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
