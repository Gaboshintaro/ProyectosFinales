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
    <title>CONSULTAS MEDICA</title>
</head>
<body>

<header>
        <h1>HOSPITAL ANGELES MEXICO</h1>
    </header>
    <nav>
        <ul>
            <li><a href="php/index.php" class="nav-enlace">INICIO</a></li>
            <li><a href="principal.php"class="nav-enlace">Sobre Nosotros</a></li>
            <li><a href="consulta.php" class="nav-enlace">Citas Medicas</a></li>
            <li><a href="mostrar.php" class="nav-enlace">Tabla</a></li>
            <li><a href="alta.php" class="nav-enlace">Altas Medicas</a></li>
        </ul>
        <div class="hide">
            <i class="fa fa-bars" aria-hidden="true"></i>Menu
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script>
    $(".hide").on('click', function() {
      $("nav ul").toggle('slow');
    })
  </script>
    <main class="container">

    <section class="col-lg-6 col-md-6 col-sm-6">
<div class="contenido">

        <div class="contenido__register">
             <form action="insertar.php" method="POST" class="formulario__register">

             <h2>Regristro de Pacientes</h2>
             <hr>
             <label for="">Nombre Completo</label>
             <input type="text" name="nombre_completo" placeholder="Ingrese su Nombre Completo" title="Es obligatorio que ingrese su nombre y appelido materno o paterno" required>
             <label for="">Fecha de Nacimeinto</label>
             <input type="date" name="fecha" min="1980-01-01" max="2023-12-31" placeholder="Seleccione su Fecha de Nacimiento" title="Es obligatorio que ingrese su fecha de nacimiento" required>
             <label for="">Estado Civil</label> 
             <input type="text" name="civil" placeholder="Ingrese su Estado Civil" title="Es obligatorio que ingrese su estado civil" required>
             <label for="">Edad</label>
             <input type="text" name="edad"  max="100" placeholder="Ingrese su Edad" title="Es obligatorio que ingrese su edad" required>
             <label for="">Municipio</label>
             <input type="text" name="municipio" placeholder="Ingrese su Municipio" title="Es obligatorio que ingrese su municipio" required>
             <label for="">Localidad</label>
             <input type="text" name="localidad" placeholder="Ingrese su Localidad" title="Es obligatorio que ingrese su localidad" required>
             <label for="">Fecha de Registro</label>
             <input type="date" name="regis" min="2023-05-01" max="2023-06-30" placeholder="Seleccione su Fecha de Registro" title="Es obligatorio que ingrese su fecha de registro" required>
             <label for="">CURP</label>
             <input type="text" name="curp" required placeholder="Ingrese su Curp" title="Es obligatorio que ingrese su curp" required><br>
             
             <button class="btn-block">Guardar Registro</button>

             <button class="btn-block"><a href="../php/mostrar.php">Ver Tabla de Rgistro</a></button>
             <button class="btn-block"><a href="../php/alta.php">SIGUIENTE PAGINA</a></button>
             </form>  
       </div>
</div>
    </section>
    
    
    </main>
          
 
</body>
</html> 