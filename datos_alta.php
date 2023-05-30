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
<h2>Registro de Altas</h2>
    <section class="col-lg-6 col-ms-6 col-sm-6 offset-1">

        <div class="espacio_tabla">
            <table class="table table-striped table-dark">
            
        <thead>
            <tr>
               <th scope="col">No. Habitacion</th>
               <th scope="col">Foto del Paciente</th>
               <th scope="col">Fecha de Alta</th>
            </tr>
        </thead>
        <tbody>
    <?php 
      $sql="SELECT * FROM alta";
      $result = mysqli_query($con,$sql);

      while($mostrar = mysqli_fetch_array($result)){
    ?>
    <tr>
      <td><?php echo $mostrar['num']?></th>
      <td><img width= "300px" height="300px"  src="data:image/jpg;base64, <?php echo base64_encode($mostrar['foto']);?>"/></th>
      <td><?php echo $mostrar['fecha_alt']?></th>
    
      <td><a href="delete.php?num=<?php echo $mostrar['num']?>" class="btn btn-danger">Eliminar</a></td>
    </tr>
    <?php
    }
    ?>
        </tbody>
            </table>
        </div>
    </section>

    <section class="col-lg-5  col-md-5 col-sm-5 offset-2">
    <button class="btn-block"><a href="../php/alta.php">Regresar a Consulta</a></button>
    </section>
</main>
</body>
</html>