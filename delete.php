<?php
include('conexion.php');
$con=conectar();

$num=$_GET['num'];

$sql="DELETE FROM alta WHERE num='$num'";
$query=mysqli_query($con,$sql);

if($query){
    Header("location:mensaje2.php");
}


?>