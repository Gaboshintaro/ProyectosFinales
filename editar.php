<?php 
include('conexion.php');
$con=conectar();

$id=$_POST['id'];
$nombre_completo= $_POST['nombre_completo'];
$fecha= $_POST['fecha'];
$civil= $_POST['civil'];
$edad= $_POST['edad'];
$municipio= $_POST['municipio'];
$localidad= $_POST['localidad'];
$regis= $_POST['regis'];
$curp= $_POST['curp'];

$sql="UPDATE registro SET nombre_completo='$nombre_completo', fecha='$fecha', civil='$civil', 
                          edad='$edad', municipio='$municipio', localidad='$localidad',
                          regis='$regis', curp='$curp' WHERE id='$id'"; 
$query=mysqli_query($con, $sql);

if($query){
    Header("location: exito2.php");
}
?>
