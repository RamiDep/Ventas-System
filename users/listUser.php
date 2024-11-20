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
            <h1 class="m-0">Lista de Usuarios</h1>
          </div>
        </div>
      </div>
    </div>
    
    <div class="content">
      <div class="container-fluid">
        <div class="row">

         <div class="col-md-6">
            <div class="card card-success card-outline">
              <div class="card-header">
                <h3 class="card-title">Lista de usuarios</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="display: none;">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <td>Id</td>
                      <td>Nombre</td>
                      <td>Correo</td>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    include("../app/controllers/Users/table_users.php"); 
                    foreach($usuarios as $usuario){
                  ?>
                    <tr>
                      <td><?= $usuario['id_users']?></td>
                      <td><?= $usuario['names']?></td>
                      <td><?= $usuario['email']?></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
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