<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV Proyecto Ticmas</title>
    <link href="estilos.css"  rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
  </head>
  <body class="base">
    <h1 style="text-align: center;">Proyecto Ticmas - CV - de Guillermo Parker</h1>

    <div class="container text-center">
      <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-left: -.7rem; margin-right: -.7rem;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Acceso rápido a otras Secciones del CV:</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active btn btn-info mx-1 mt-1" aria-current="page" href="#experiencia3">Experiencia Inicial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active btn btn-info mx-1 mt-1" href="#objetivo1">Objetivo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active btn btn-info mx-1 mt-1" href="#aptitudes1">Aptitudes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active btn btn-info mx-1 mt-1" href="#idiomas1">Idiomas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active btn btn-info mx-1 mt-1" href="#info-adicional">Info adicional</a>
              </li>

            </ul>

          </div>
        </div>
      </nav>
      <div class="row">
        <div class="col-sm-4 derecha">
              <div>
                <img class="rounded mt-5" style="width: 60%;" id="image1"/>
              </div>
              <div id="objetivo1" class="sectorX">
                <strong>Objetivo laboral:</strong>
                <h6>Trabajar en una empresa adónde se pueda ganar plata rápidamente</h6>
              </div>
              <div id="aptitudes1" class="sectorX">
              <strong>  Aptitudes:</strong>
              <h6>Muy proactivo</h6>
              </div>
              <div id="idiomas1" class="sectorX">
              <strong>  Idiomas:</strong>
                <h6>Alto nivel de conocimiento de idioma Inglés</h6>
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%"></div>
                    </div>
              </div>
              <div id="info-adicional" class="rounded mt-5">
                <strong>Información adicional:</strong>
                <ul>
                  <li>
                      Deporte Favorito: fútbol
                  </li>
                  <li>
                      Hobbie: lectura fantástica
                  </li>
                  <li>
                    Instrumento preferido: guitarra eléctrica
                  </li>
                </ul>
              </div>
        </div>

        <div class="col-sm-8 izquierda">
          <div>
            <h3>Datos personales:
            <p id="nombre1">
            </p></h3>
          </div>

        <ul class="list-inline">
            <li class="list-inline-item"><i class="fa-solid fa-phone"></i></li>
            <li class="list-inline-item"><h5>   <p id="telef1"></p>   </h5></li>
        </ul>

        <ul class="list-inline">
            <li class="list-inline-item"><i class="fa-sharp fa-solid fa-city"></i></li>
            <li class="list-inline-item"><h5>   <p id="direc1"></p>   </h5></li>
        </ul>


          <div class="sectorX">
            <strong>  Formación académica:</strong>
            <li>  Estudios universitarios cursados en: Pachamama Stanford </li>
            <li>  Estudios Secundarios cursados en: Pichincha Rosario </li>
          </div>

        <div class="sectorX">
            <strong>Detalles de Experiencias Laborales: </strong>
            <button id="boton1" click="ocultarDetalles()" class="btn btn-primary mb-3">Ocultar todo </button>
            <button id="boton2" click="mostrarDetalles()" class="btn btn-primary mb-3">Mostrar todo </button>
        </div>

          <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <strong id="experiencia1">  Experiencia laboral en: Google</strong>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show " aria-labelledby="headingOne" data-bs-parent="">
      <div class="accordion-body">
        2022-05 – Actualidad
        <h6><strong>Puesto: Jefa de RRHH</strong></h6>
        <h6>
          Detalle tareas:
        </h6>
       <ul>
        <li>
          Selección de talentos
        </li>
        <li>
          Evaluación de desempeño del personal
        </li>
        <li>
          Gestión de incentivos al personal
        </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <strong id="experiencia2">  Experiencia laboral en: Unilever</strong>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse show " aria-labelledby="headingTwo" data-bs-parent="">
      <div class="accordion-body">
        2021-02 – 2022-05
        <h6><strong>Puesto: Coordinador de atención al cliente</strong></h6>
        <h6>
          Detalle tareas:
        </h6>
       <ul>
        <li>
          Análisis y Gestión de reclamos
        </li>
        <li>
          Proponer mejoras al servicio
        </li>
       </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <strong >  Experiencia laboral en: AirBnB</strong>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse show " aria-labelledby="headingThree" data-bs-parent="">
      <div class="accordion-body">
        2018-10 – 2021-02
        <h6><strong>Puesto: Anfitrión</strong></h6>
        <h6>
          Detalle tareas:
        </h6>
       <ul>
        <li>
          Contacto con clientes: check in - check out
        </li>
        <li>
          Brindar respuestas a consultas o reclamos de huéspedes de los departamentos
        </li>
        <li id="experiencia3">
          Mejorar la imágen y prestaciones de los departamentos a su cargo
        </li>
       </ul>
      </div>
    </div>
  </div>
</div>
        </div> <!-- fin col 8 -->



      </div>

    </div>


<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="js.js"></script>

<script src="https://kit.fontawesome.com/19be6118c6.js" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
