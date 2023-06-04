<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/diseño2.css">
    <title>ALTAS DEL HOSPITAL</title>
</head>
<body>
<header>
        <h1>HOSPITAL ANGELES MEXICO</h1>
    </header> 
<main class="container">
    <section class="col-lg-6 col-ms-6 col-sm-6">
    <div class="contenido">

<div class="contenido__register">
     <form action="insertar2.php" method="POST" enctype="multipart/form-data" class="formulario__register">

     <h2>Alta de Pacientes</h2>
     <hr>
     <label for="">Numero de Habitacion</label>
     <input type="text" name="num" placeholder="Ingrese el No. de Habitacion" title="Es obligatorio que ingrese el numero de habitacion del paciente" required>
     <label for="">Foto del Paciente</label>
     <input type="file" name="foto" title="Es obligatorio que ingrese la foto del paciente" required><br>
     <label for="">Fecha de Alta</label>
     <input type="date" name="fecha_alt" min="2023-05-01" max="2023-06-30" placeholder="Seleccione su Fecha de Alta" title="Es obligatorio que ingrese la fecha de alta del paciente" required>

     <button class="btn-block">Guardar Registro</button>
     <button class="btn-block"><a href="../php/datos_alta.php">Ver Rgistro</a></button>
     <button class="btn-block">
      <a href="../index.php">Regresar a Inicio</a>  
     </button>
     </form>  
</div>
</div>
    </section>
</main>


        
      
</body>
</html>