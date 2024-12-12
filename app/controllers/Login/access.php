<?php
include("../../config.php");
$cont = 0;

$email = $_POST['email_txt'];
$pass = $_POST['password_txt'];

$sql = ("SELECT * FROM tb_users WHERE email = '$email'");
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO ::FETCH_ASSOC);

foreach ($usuarios as $usuario){
    $email_ = $usuario['email'];
    $pass_hash = $usuario['password_user'];
    // $cont +=1;
}

 if (password_verify($pass, $pass_hash)) {
    session_start();
    $_SESSION['usuario'] = $email;
    header('Location: '.$url);
 } else {
    session_start();
    $msj = "El usuario o contraseña son incorrectos.";
    $_SESSION['msj'] = $msj;
    header('Location: '.$url.'Login');
 }


// if($cont == 0){
//     session_start();
//     $msj = "El usuario o contraseña son incorrectos.";
//     $_SESSION['msj'] = $msj;
//     header('Location: '.$url.'Login');
// }else{
//     // echo "El usuario es: ";
    
//     session_start();
//     $_SESSION['usuario'] = $email;
//     header('Location: '.$url);
// }