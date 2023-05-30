<?php 
include('conexion.php');
$con=conectar();
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
<title>CRUD</title>
</head>
<body>
<main class="container">
<h2>Registro de Pacientes</h2>
    <section class="col-lg-5 col-md-4 col-sm-3">
        <div class="espacio_tabla">

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre Completo</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Estado Civil</th>
      <th scope="col">Edad</th>
      <th scope="col">Municipio</th>
      <th scope="col">Localidad</th>
      <th scope="col">Fecha de Registro</th>
      <th scope="col">Curp</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php 
      $sql="SELECT * FROM registro";
      $result = mysqli_query($con,$sql);

      while($mostrar = mysqli_fetch_array($result)){

  ?>

    <tr>
      <td><?php echo $mostrar['id']?></th>
      <td><?php echo $mostrar['nombre_completo']?></th>
      <td><?php echo $mostrar['fecha']?></th>
      <td><?php echo $mostrar['civil']?></th>
      <td><?php echo $mostrar['edad']?></th>
      <td><?php echo $mostrar['municipio']?></th>
      <td><?php echo $mostrar['localidad']?></th>
      <td><?php echo $mostrar['regis']?></th>
      <td><?php echo $mostrar['curp']?></th>
      <td><a href="actualizar.php?id=<?php echo $mostrar['id']?>" class="btn btn-success">Editar</a></td>
      <td><a href="eliminar.php?id=<?php echo $mostrar['id']?>" class="btn btn-danger">Eliminar</a></td>
         
    </tr>

    <?php
    }
    ?>
  </tbody>
</table> 

<div class="reportes">
<a href="../reportes.php" class="btn btn-warning btn-block"></i>Imprimir a PDF</a>
</div>

        </div>

    </section>

    <section class="col-lg-5 offset-4">
    <button class="btn-block"><a href="../php/consulta.php">Regresar a Consulta</a></button>
    </section>
</main>




</body>
</html>