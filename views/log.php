<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];

//conexion a la base de datos
$conexion=mysqli_connect("localhost", "root", "", "servicios");
$consulta="SELECT * FROM usuario WHERE usuario='$usuario' and contraseña='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
    header("location: ../views/home.php");
}
else {
    echo "ERROR DE LA AUNTENTIFICACIÓN";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
