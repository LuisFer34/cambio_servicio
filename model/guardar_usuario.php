<?php
include ("../core/conexion.php");

if(isset($_POST)){
$nombre = $_POST["nameusuario"];
$telefono = $_POST["telefono"];
$nivel = $_POST["nivelUsuario"];
$user = $_POST["usuario"];
$password = $_POST["password"];


$SQL="INSERT INTO `usuario`(`Nombre`,`teléfono`,`nivel`,`Usuario`,`Password`)
 VALUES ('$nombre','$telefono','$nivel','$user','$password')";

$query = mysqli_query($conexion,$SQL);


if(!$query){
    die("Error al realizar registro ".mysqli_error($conexion));        
}

echo "Servicio Registrado";
}
?>