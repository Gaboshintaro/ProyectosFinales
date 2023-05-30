<?php
include ('conexion.php');
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
    <title>Principal</title>
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
        <section class="row">
            <section class="col-lg-4 col-md-6 col-sm-6">
                    <img src="../img/portada.jpg" alt="">
        
                    <h2>Por que  somos el hospital de primer nivel</h2>
                    <hr>
                    <p>El Hospital Ángeles México es una institución médica de Alto Nivel perteneciente al Grupo Ángeles quien forma la red privada más grande de hospitales desde 1986. Somos especialistas en diversas áreas como Medicina Interna y Crítica, Oncología Médica, Oftalmología, Nefrología, Terapia Física, Terapia del Lenguaje, Pediatría, Urología, entre otras.
                        Dentro de sus instalaciones cuentan con equipo de la más alta tecnología para brindar servicios en Densitometría, Fisiología Cardiovascular, Patología, Hemodinamia, Unidad de Cuidados Intensivos Adultos, Unidad de Terapia Intermedia, por mencionar algunos.  
                        Gracias a esto el Hospital Ángeles México es distinguido como una institución médica privada de Alto Nivel en la Ciudad de México.
                        </p>
                        <button class="btn-block"><a href="../php/consulta.php">SIGUIENTE PAGINA</a></button>
            </section>
            <section class="col-lg-8 col-md-6 col-sm-6">
                <h2>QUE ES LO QUE TE OFRECEMOS SI NOS CONFIAS TU SALUD</h2>
                <hr>
                <h2>Ortopedia</h2>
                <p>La ortopedia, o servicios ortopédicos, es la especialidad médica que involucra el tratamiento del sistema musculoesquelético. Incluye sus huesos, articulaciones, ligamentos, tendones y músculos.</p>
                <h3>Informacion</h3>
                <p>Existen muchos problemas de salud que pueden afectar los huesos, las articulaciones, los ligamentos, los tendones y los músculos.</p>
                <p>Los problemas óseos pueden incluir:</p>
                <p>* Deformidades de los huesos</p>
                <p>* Infecciones de los huesos</p>
                <p>* Tumores óseos</p>
                <p>* Fracturas</p>
                <p>* Necesidad de amputación</p>
                <p>* Seudoartrosis: dificultad para que las fracturas sanen</p>
                <p>* Consolidaciones defectuosas: fracturas consolidadas en mala posición</p>
                <p>* Deformidades de la columna vertebral</p>
                <img src="../img/ortopedia1.jpg" alt="" id="imagen2">
                <img src="../img/ortopedia2.jpg" alt="" id="imagen2">
                <img src="../img/ortopedia3.jpg" alt="" id="imagen2">
                <hr>
                <h2>Oftalmología</h2>
                <p>El Departamento de Oftalmología ayuda a los pacientes a obtener o mantener su salud visual óptima al brindar servicios clínicos integrales, que van desde exámenes oculares de rutina hasta cirugía para trastornos oculares.</p>
                <h3>Informacion</h3>
                <p>* Exámenes completos de la vista</p>
                <p>* Medición de gafas y ajuste de lentes de contacto.</p>
                <p>* Monitorear las condiciones de salud a medida que afectan los ojos, incluida la diabetes y la hipertensión.</p>
                <h3>También hay servicios especiales disponibles para tratar:</h3>
                <p>* Baja visión / vista parcial</p>
                <p>* Glaucoma</p>
                <p>* Enfermedades médicas y quirúrgicas de la retina y el vítreo.</p>
                <p>* Enfermedad ocular corneal y externa</p>
                <p>* Cirugía reconstructiva / estética del ojo</p>
                <p>* Enfermedades neurológicas del ojo.</p>
                <img src="../img/Oftalmología1.jpg" alt="" id="imagen2">
                <img src="../img/Oftalmología2.jpg" alt="" id="imagen2">
                <img src="../img/Oftalmología3.jpg" alt="" id="imagen2">
                <hr>
                <h2>Banco de Sangre.</h2>
                <p>El Banco de Sangre de Médica Sur es responsable de la obtención, manejo, almacenamiento, conservación y distribución de los componentes sanguíneos que son requeridos durante el tratamiento de los pacientes. Todos estos procesos se llevan a cabo con base en los más altos estándares de calidad y apegados a la normativa mexicana e internacional.</p>
                <h3>Suministro de sangre y componentes</h3>
                <p>* Glóbulos rojos</p>
                <p>* Plaquetas</p>
                <p> * Plasma</p>
                <p>* Criopresipitados</p>
                <h3>Pruebas especiales</h3>
                <p>* Anticuerpos Hepatitis C y Anticuerpos Hepatitis B.</p>
                <p>* Pruebas de compatibilidad sanguinea</p>
                <p> * Grupo sanguineo</p>
                <p>* Rastreo de anticuerpo</p>
                <p>* Crioaglutininas</p>
                <h3>Procedimientos especiales</h3>
                <p>* Plaquetoferesis</p>
                <p>* Plasmaferesis</p>
                <p>* Eritroaferesis</p>
                <p>* Sangrías Terapéuticas</p>
                <p>* Rescate Celular Tras Operatorio</p>
                <p>* Recolección de Células Progenitoras Hematopoyéticas</p>
                <img src="../img/BancodeSangre1.jpg" alt="" id="imagen2">
                <img src="../img/BancodeSangre2.jpg" alt="" id="imagen2">
                <img src="../img/BancodeSangre3.jpg" alt="" id="imagen2">
                 <hr>
                <h2>Radiología e Imagenología</h2>
                <p>La radiología es una rama de la medicina que utiliza la tecnología imagenológica para diagnosticar y tratar una enfermedad.</p>
                <p>Se puede dividir en dos áreas diferentes: radiología diagnóstica y radiología intervencionista. Los médicos que se especializan en radiología se denominan radiólogos.</p>
                <h3>Información</h3>
                <h4>RADIOLOGÍA DIAGNÓSTICA</h4>
                <p>La radiología diagnóstica les ayuda a los proveedores de atención médica a ver estructuras dentro del cuerpo. Los médicos que se especializan en la interpretación de estas imágenes se denominan radiólogos de diagnóstico. Mediante estas imágenes, el radiólogo u otros médicos con frecuencia pueden:</p>
                <p>* Diagnosticar la causa de sus síntomas</p>
                <p>* Vigilar qué tan bien está respondiendo su cuerpo a un tratamiento que usted está recibiendo para su enfermedad o afección</p>
                <p>* Detectar diferentes enfermedades, como cáncer de mama, cáncer de colon o cardiopatía</p>
                <h4>RADIOLOGÍA INTERVENCIONISTA</h4>
                <p>Los radiólogos intervencionistas son médicos que utilizan imágenes tales como tomografía computarizada (TC), ecografía, resonancia magnética (RM) y fluoroscopia para ayudar a guiar los procedimientos. Las imágenes son útiles para el médico al introducir catéteres (sondas), alambres y otros instrumentos y herramientas pequeñas en su cuerpo. Esto particularmente se considera para incisiones (cortes) pequeñas.</p>
                <p>El médico no hará ninguna incisión (corte) o solo una muy pequeña. Usted rara vez necesita quedarse en el hospital después del procedimiento. La mayoría de los pacientes necesita solamente sedación moderada (medicamentos para ayudarlo a relajarse).</p>
                <p>Los ejemplos de procedimientos radiológicos intervencionistas incluyen:</p>
                <p>
                    * Embolización para controlar el sangrado <br>
                    * Tratamientos contra el cáncer, incluso embolización de tumor mediante quimioembolización o radioembolización con Y-90. <br>
                    * Ablación de tumor por radiofrecuencia, crioablación o ablación por microondas <br>
                    * Vertebroplastia y cifoplastia <br>
                    </p>
                    <hr>
                    <img src="../img/RadiologíaeImagenología1.jpg" alt="" id="imagen2">
                    <img src="../img/RadiologíaeImagenología2.jpg" alt="" id="imagen2">
                    <img src="../img/RadiologíaeImagenología3.jpg" alt="" id="imagen2">
                <h2>Pediatría</h2>
                <p>Es la unidad orgánica encargada de brindar atención especializada al paciente pediátrico (lactante, niño y adolescente) con patologías que requieran de su participación para brindar una atención integral en el hospital; depende del Departamento de Pediatría y tiene asignados los siguientes objetivos funcionales:</p>
                <p>
                * Realizar evaluación, diagnóstico, tratamiento y seguimiento especializado del paciente pediátrico (niño y adolescente) con patologías que requieren atención de sub especialidades pediátricas para la recuperación y rehabilitación de su salud. <br>
                * Realizar procedimientos propios de las especialidades para el diagnóstico y tratamiento de los pacientes pediátricos y adolescentes. <br>
                * Organizar actividades de promoción y prevención de salud relacionado a sus competencias en sub especialidades pediátricas, que permitan la atención integral del paciente pediátrico (niño y adolescente). <br>
                * Participar en la atención multidisciplinaria del niño de riesgo. <br>
                * Proponer, ejecutar y evaluar guías de práctica clínica y procedimientos de atención médica en sub especialidades de pediatría. 
                </p>
                <img src="../img/Pediatría1.jpg" alt="" id="imagen2">
                <img src="../img/Pediatría2.jpg" alt="" id="imagen2">
                <hr>
                <h2>Quirófano</h2>
                <h3>Informacion</h3>
                <p>Un sitio altamente especializado dividido por secciones o áreas de restricción y esta división tiene como objetivo evitar la posibilidad de contaminación y sistematizar los procesos y procedimientos que se realizan durante el acto quirúrgico.</p>
                <h3>Division del area</h3>
                <h5>– Área negra:</h5>
                <p>Primera zona de restricción, funciona como un espacio de protección que incluye admisión quirúrgica, baños y vestidores. En esta zona se permite el acceso al área quirúrgica</p>
                <h5> – Área gris:</h5>
                <p>Segunda zona de restricción. Se requiere portar el uniforme quirúrgico completo para su acceso, cuenta con pasillos internos para circulación del personal y traslado de material quirúrgico, recuperación, cuarto de anestesia, farmacia, central de equipos y cuarto séptico.</p>
                <h5> – Área blanca o sala de operaciones:</h5>
                <p>Es el sitio de mayor restricción y donde se realiza la intervención quirúrgica, la cual tiene varias especificaciones para su función: <br>
                    * Flujo liminal de aire recambio 20-25/h. <br>
                    * Piso resistente al agua y conductor de electricidad. <br>
                    * Paredes lisas y sin esquinas recubrimiento de iones de plata. <br>
                    * Temperatura: 18 a 23°C. <br> 
                    * México: 20°C y 50% humedad. <br> 
                    * Iluminación convergente, divergente. <br>
                    * Ambiental: natural y artificial
                </p>
                <h3>SERVICIOS DEL ÁREA</h3>
                <p>
                Se cuenta con tres amplias salas de operaciones (quirófanos) completamente renovadas. <br>
                   * Área de pre anestesia. <br>
                   * Área de recuperación. <br>
                   * Central de equipos y esterilización. <br>
                   * Equipos. <br>
                   * Farmacia. <br>
                   * Cuarto de equipos biomédicos. <br>
                   * Séptico. <br>
                   * Vestidores.
                </p>
                <img src="../img/Quirofano1.png" alt="" id="imagen2">
                
                <hr>
                <h2>Cirugía General</h2>
                <h3>Informacion</h3>
                <p>El servicio de Cirugía cuenta con un equipo multidisciplinario; capacitados y comprometidos en brindar una atención integral de salud, con calidad y calidez para lograr la pronta recuperación de nuestros usuarios por ende su reinserción a la sociedad. </p>
                <p>* Preveer, diagnosticar, planear y evaluar las acciones que sustente la atención de enfermería.</p>
                <p>* Brindar una atención integral y garantizada en pacientes post-operados reduciendo su morbilidad.</p>
                <p>* Reducir los reingresos en el servicio brindando orientaciones de cuidados en casa antes del alta de paciente.</p>
                <img src="../img/Cirugía1.jpg" alt="" id="imagen2">
                <img src="../img/cirugia2.jpg" alt="" id="imagen2">
            </section>
        </section>
    </main>

</body>
</html>