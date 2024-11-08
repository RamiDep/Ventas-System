<?php
  session_start();
  if(!isset($_SESSION['usuario']))
      header('Location:'.$url.'Login');

  $email = $_SESSION['usuario'];
  $sql = ("SELECT * FROM tb_users WHERE email = '$email'");
  $query = $pdo->prepare($sql);
  $query->execute();

  $usuarios = $query->fetchAll(PDO ::FETCH_ASSOC);

foreach ($usuarios as $usuario){
    $user = $usuario['names'];
}
  
