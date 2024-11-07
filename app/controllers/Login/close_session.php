<?php
include("../../config.php");
session_start();
if($_SESSION['usuario']){
    session_destroy();
    header('Location: '.$url);
}