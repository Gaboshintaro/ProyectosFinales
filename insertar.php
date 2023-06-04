<?php 

include("conexion.php");
$con=conectar();

$nombre_completo= $_POST['nombre_completo'];
$fecha= $_POST['fecha'];
$civil= $_POST['civil'];
$edad= $_POST['edad'];
$municipio= $_POST['municipio'];
$localidad= $_POST['localidad'];
$regis= $_POST['regis'];
$curp= $_POST['curp'];

$sql= "INSERT INTO registro(nombre_completo, fecha, civil, edad, municipio, localidad, regis, curp)
         VALUES('$nombre_completo', '$fecha', '$civil', '$edad', '$municipio', '$localidad', '$regis', '$curp')";

$ejecutar= mysqli_query($con, $sql);

if($ejecutar)
{
    Header("location:exito.php");
}
?>