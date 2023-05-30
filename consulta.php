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
    <title>CONSULTAS MEDICA</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/index.php">INICIO <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="principal.php">Sobre nosotros</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="consulta.php">Citas Metica</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="mostrar.php">Tabla</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="alta.php">Altas</a>
        </li> 
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
    <main class="container">

    <section class="col-lg-6 col-md-6 col-sm-6">
<div class="contenido">

        <div class="contenido__register">
             <form action="insertar.php" method="POST" class="formulario__register">

             <h2>Regristro de Pacientes</h2>
             <hr>
             <label for="">Nombre Completo</label>
             <input type="text" name="nombre_completo" placeholder="Ingrese su Nombre Completo">
             <label for="">Fecha de Nacimeinto</label>
             <input type="date" name="fecha" placeholder="Seleccione su Fecha de Nacimiento">
             <label for="">Estado Civil</label> 
             <input type="text" name="civil" placeholder="Ingrese su Estado Civil">
             <label for="">Edad</label>
             <input type="text" name="edad" placeholder="Ingrese su Edad">
             <label for="">Municipio</label>
             <input type="text" name="municipio" placeholder="Ingrese su Municipio">
             <label for="">Localidad</label>
             <input type="text" name="localidad" placeholder="Ingrese su Localidad">
             <label for="">Fecha de Registro</label>
             <input type="date" name="regis" placeholder="Seleccione su Fecha de Registro">
             <label for="">CURP</label>
             <input type="text" name="curp" placeholder="Ingrese su Curp"><br>
             
             <button class="btn-block">Guardar Registro</button>
             <button class="btn-block"><a href="../php/mostrar.php">Ver Rgistro</a></button>
             <button class="btn-block"><a href="../php/alta.php">SIGUIENTE PAGINA</a></button>
             </form>  
       </div>
</div>
    </section>

    
          
    
    </main>
          
 
</body>
</html> 