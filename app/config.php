<?php
$url =' http://localhost/app/';

define('SERVIDOR','localhost');
define('USER','root');
define('PASSWORD','');
define('BD','ventas');

$server = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($server, USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  //  echo "Exito";
}catch(PDOException $e){
    //print_r($e);
    echo "No se pudo conectar a la base datos.";
}

date_default_timezone_set("America/Mexico_City");
$date_create = date("Y-m-d H:i:s");