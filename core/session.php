<?php 

session_start();

if(!isset($_SESSION["usuario"]) || (trim($_SESSION["usuario"]) == "")) {
    header("location:views/home.php");
}else{
    header("location:views/home.php");
}

$correo=$_SESSION["usuario"];


?>