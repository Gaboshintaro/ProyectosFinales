<?php
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM registro WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/diseño2.css">
    <title>Actualizar Datos</title>
</head>
<body>

<main class="container lg-5 md-4 sm-3">
<div class="contenido">
  <div class="contenido__register">
     <form action="editar.php" method="POST">

     <h2>ACTUALIZAR REGISTRO</h2>

      <input type="hidden" name="id" value=<?php echo $row['id']?>>

             <input type="text" name="nombre_completo" placeholder="Ingrese su Nombre Completo" value=<?php echo $row['nombre_completo']?>>
             <input type="date" name="fecha" placeholder="Seleccione su Fecha de Nacimiento" value=<?php echo $row['fecha']?>>
             <input type="text" name="civil" placeholder="Ingrese su Estado Civil" value=<?php echo $row['civil']?>>
             <input type="text" name="edad" placeholder="Ingrese su Edad" value=<?php echo $row['edad']?>>
             <input type="text" name="municipio" placeholder="Ingrese su Municipio" value=<?php echo $row['municipio']?>>
             <input type="text" name="localidad" placeholder="Ingrese su Localidad" value=<?php echo $row['localidad']?>>
             <input type="date" name="regis" placeholder="Seleccione su Fecha de Registro" value=<?php echo $row['regis']?>>
             <input type="text" name="curp" placeholder="Ingrese su Curp" value=<?php echo $row['curp']?>>

             <input type="submit" class="btn btn-primary btn-block" value="Actualizar" >
             <section>
             <button class="btn-block"><a href="../php/mostrar.php">Regresar a Consulta</a></button>
             </section>
    </form>
  </div>

   
</div>

</main>


    
</body>
</html>