<?php 
function conectar(){
 $host="localhost";
$usuario="root";
$password="";
$bd="hospital";

$con=mysqli_connect($host, $usuario, $password,$bd);

//mysqli_select_bd($con, $bd);

return $con;   
}

?>