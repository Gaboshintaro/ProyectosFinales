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
    <link rel="stylesheet" href="css/diseño.css">

    <title>Pagina Inicio</title>
</head>
<body>
  <header>
        <h1>HOSPITAL ANGELES MEXICO</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php" class="nav-enlace">INICIO</a></li>
            <li><a href="php/principal.php"class="nav-enlace">Sobre Nosotros</a></li>
            <li><a href="php/consulta.php" class="nav-enlace">Citas Medicas</a></li>
            <li><a href="php/mostrar.php" class="nav-enlace">Tabla</a></li>
            <li><a href="php/alta.php" class="nav-enlace">Altas Medicas</a></li>
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

    <main class="container lg-12 md-6 sm-4">

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