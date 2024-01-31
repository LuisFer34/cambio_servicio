<?php
include ("../core/conexion.php");

if(isset($_POST)){
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$tservicio = $_POST["tservicio"];
$direc = $_POST["direc"];
$rdirec = $_POST["redirec"];
$problema = $_POST["probleP"];
$agente = $_POST["agente"];



$sql="INSERT INTO `servicio`(`Nombre_Cliente`,`Teléfono`,`Direccion`,`Referenica_Domicilio`,`Tipo_Servicio`,`Problema_Presentado`,`agente`)
 VALUES ('$nombre','$telefono','$tservicio','$direc','$rdirec','$problema', '$agente')";

$query = mysqli_query($conexion,$sql);


if(!$query){
    die("Error al realizar registro ".mysqli_error($conexion));        
}

echo "Servicio Registrado";
}
?>
