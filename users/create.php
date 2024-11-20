<?php 
    include("../app/config.php");
    include("../template/session.php");
    include("../template/head.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Formulario de creacion</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">

         <div class="col-md-6">
            <div class="card card-primary collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Creación de Usuarios</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="display: none;">
               <form action="<?= $url.'app/controllers/Users/create.php'?>" method="post">
                <div class="form-group">
                    <label for="txt_name">Nombre completo</label>
                    <input type="text" class="form-control" name="txt_name" id="txt_name" aria-describedby="emailHelp" required>
                  </div>
                  <div class="form-group">
                    <label for="txt_email">Correo</label>
                    <input type="email" class="form-control" name="txt_email" id="txt_email" aria-describedby="emailHelp" required>
                  </div>
                  <div class="form-group">
                    <label for="txt_password">Password</label>
                    <input type="password" class="form-control" name="txt_password" id="txt_password" required>
                  </div>
                  <div class="form-group">
                    <label for="txt_password_conf">Confirmar contraseña</label>
                    <input type="password" class="form-control" name="txt_password_conf" id="txt_password_conf" required>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Enviar</button>
               </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

<?php 
    include("../template/foot.php");
?>