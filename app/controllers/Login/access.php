<?php
include("../../config.php");
$cont = 0;

$email = $_POST['email_txt'];
$pass = $_POST['password_txt'];

$sql = ("SELECT * FROM tb_users WHERE email = '$email' AND password_user = '$pass'");
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO ::FETCH_ASSOC);

foreach ($usuarios as $usuario){
    $email_ = $usuario['email'];
    $pass_ = $usuario['password_user'];
    $cont +=1;
}

if($cont == 0){
    session_start();
    $msj = "El usuario o contraseña son incorrectos.";
    $_SESSION['msj'] = $msj;
    header('Location: '.$url.'Login');
}else{
    // echo "El usuario es: ";
    
    session_start();
    $_SESSION['usuario'] = $email;
    header('Location: '.$url);
}