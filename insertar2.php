<?php
include ("conexion.php");
$con=conectar();

$num=$_POST['num'];
$foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$fecha_alt=$_POST['fecha_alt'];

$sql="INSERT INTO alta(num, foto, fecha_alt) VALUES('$num', '$foto', '$fecha_alt')";

$ejecutar= mysqli_query($con, $sql);

if($ejecutar)
{
    Header("location:mensaje.php");
}
?>
?>