<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/diseño.css">

    <title>Pagina Inicio</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">INICIO <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="php/principal.php">Sobre nosotros</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="php/consulta.php">Citas Metica</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="php/mostrar.php">Tabla</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="php/alta.php">Altas</a>
        </li> 
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
   
    <main class="container">

      <h2>HOSPITAL AGNELES MEXICO</h2>

      <section class="row">
        <section class="col-lg-12 col-md-12 col-sm-12"> 
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/portada.jpg" class="d-block w-100" alt="..." id="imagen1">
              </div>
              <div class="carousel-item">
                <img src="img/IMG1.jpeg" class="d-block w-100" alt="..." id="imagen1">
              </div>
              <div class="carousel-item">
                <img src="img/IMG2.jpg" class="d-block w-100" alt="..." id="imagen1">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
        </section>
        </section>  
    </main>
<br>
    <footer>
        <div class="jumbotron jumbotron-fluid" id="piepagina">
            <div class="container">
              <h1 class="display-6">&copy GABRIEL DEL JESUS GONZALEZ HOIL</h1>
              <P>
                ESTUDIANTE DE LA CARRERA INGENIERIA EN INFORMATICA 6AI <br>         
                PROYECTO DE LA MATERIA DESARROLLO DE APLICACIONES WEB 
              </P>
              <hr>
              <section class="row">
                <section class="col-lg-4 col-md-4 col-sm-12">
                    <h4>Correo electronico</h4>
                    <img src="img/cor.png" alt="">
                    <p>Hospitallosangeles@mexico.mx</p>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12">
                    <h4>Telefono</h4>
                    <img src="img/tel.png" alt="">
                     <p>9145683207</p>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12">
                    <h4>Siguenos en</h4>
                    <p>
                <img src="img/Danleech-Simple-Facebook.32.png" alt="">
                <img src="img/Designbolts-Free-Instagram-Active-Instagram-3.32.png" alt="">
                <img src="img/Fa-Team-Fontawesome-Brands-FontAwesome-Brands-Snapchat.32.png" alt="">
                <img src="img/Limav-Flat-Gradient-Social-Whatsapp.32.png" alt="">
                    </p>
                </section>
              </section>
            </div>
          </div>
    </footer>
</body>
</html>