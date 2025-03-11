
<!doctype html>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<!---poner iconos de manera en linea y local-->
  <!----<link rel="icon" type="image/x.icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3VOOnwbGsOS-H6wqKntkcz6_QJ3JZ6GFD9A&s"> ---->
  <link rel="icon" type="image/x.icon" href="public/image/beni.png">

<!---css bootstrap-->
    <title>Benito Juarez</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!---iconos bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!---Utilizamos JQUERY-->
    <script src="public/js/jquery-3.7.1.min.js"></script>

    <link rel="stylesheet" href="public/css/style.css">


      <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  
  </head>
  <body>

   <!---MENU--> 

   <nav class="navbar navbar-expand-lg bg-light">

    <!---sustitui la forma del menu, quite fluid que hace extender el menu-->
    <div class="container">

     <!---este código es para poner una imagen y texto como icono al lado del menu-->  
      <nav class="navbar bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <!--imagen de manera local-->
            <img src="public/image/beni.png" alt="Logo" width="35" height="35" class="d-inline-block align-text-top">
            <span style="font-family: 'Roboto', sans-serif;">Esc. Prim. Benito Juarez</span>
          </a>
        </div>
      </nav>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link btn btn-outline-success" aria-current="page" href="http://localhost/www.sistemacademico.com/"> <i class="bi bi-house-heart-fill"> </i>Inicio</a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-success" href="nosotros.php"> <i class="bi bi-people-fill"></i>Nosotros</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link btn btn-outline-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-pen-fill"></i> Extraescolares</a>

              <!----Mini menu dentro de extraescolares--->

            <ul class="dropdown-menu">

            <li>
    <a class="dropdown-item" href="" style="transition: background-color 0.3s, color 0.3s;">
      <i class="bi bi-nvidia"></i>Ingles
              </a></li>

              <li>
    <a class="dropdown-item" href="#" style="transition: background-color 0.3s, color 0.3s;">
      <i class="bi bi-pc-display"></i>Computación
    </a>

              </a></li>
              <li><hr class="dropdown-divider"></li>
  <li>
    <a class="dropdown-item" href="#" style="transition: background-color 0.3s, color 0.3s;">
      <i class="bi bi-backpack2-fill"></i> Educación Fisica
    </a>
              </a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-success" aria-disabled="true"> <i class="bi bi-cast"></i>Proyectos

            </a>
          </li>
        </ul>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" 
          placeholder="¿que deseas buscar?"
          aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar

          </button>
        </form>
      </div>
    </div>
  </nav>

  <!---estilos para foto ovalada--->
  <style>
        /* Clase CSS para hacer las imágenes ovaladas */
        .foto-ovalada {
            width: 150px; /* Tamaño fijo para todas las imágenes */
            height: 150px; /* Tamaño fijo para todas las imágenes */
            border-radius: 50%; /* Hace la imagen ovalada */
            object-fit: cover; /* Asegura que la imagen cubra el espacio sin distorsionarse */
            border: 3px solid green; /* Borde azul para resaltar */
        }
    </style>
<!---termina estilo para foto ovalada--->

    <!---ACERCA DE-->
    <section id="nosotros" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <center>
                        <img src="public/image/beni.png" width="50%" alt="Logo de la escuela">
                    </center>
                </div>
                <div class="col-md-6">
                    <h3 style="text-align: center;">Acerca de <span style="color: green">Nosotros</span></h3>
                    <br>
                    <p style="text-align: justify;">
                        La Escuela Primaria Benito Juárez es una institución educativa dedicada a la formación integral de niños y niñas en nivel básico. Ubicada en un entorno tranquilo y seguro, esta escuela tiene como misión brindar educación de calidad basada en valores como el respeto, la responsabilidad y la solidaridad.
                    </p>
                    <br><br>
                </div>
            </div>
        </div>
    </section>

    <!---MISIÓN, VISIÓN Y VALORES-->
    <section id="mision-vision-valores" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 style="text-align: center;"><i class="bi bi-bullseye"></i> Misión</h3>
                    <p style="text-align: justify;">
                        Nuestra misión es proporcionar una educación integral que fomente el desarrollo académico, social y emocional de nuestros estudiantes, preparándolos para enfrentar los desafíos del futuro con confianza y responsabilidad.
                    </p>
                </div>
                <div class="col-md-4">
                    <h3 style="text-align: center;"><i class="bi bi-eye"></i> Visión</h3>
                    <p style="text-align: justify;">
                        Ser reconocidos como una institución líder en educación primaria, destacándonos por nuestra excelencia académica, innovación educativa y compromiso con la comunidad.
                    </p>
                </div>
                <div class="col-md-4">
                    <h3 style="text-align: center;"><i class="bi bi-heart"></i> Valores</h3>
                    <p style="text-align: justify;">
                        Respeto, responsabilidad, solidaridad, honestidad y perseverancia son los valores que guían nuestras acciones y decisiones en la Escuela Primaria Benito Juárez.
                    </p>
                </div>
            </div>
        </div>
    </section>

<!---INFORMACIÓN DE CONTACTO-->
<section id="contacto" class="py-5">
    <div class="container">
        <h3 style="text-align: center;">Contacto <span style="color: green">y Ubicación</span></h3>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-telephone-fill"></i> Teléfono</h5>
                        <p class="card-text">Para más información, llámanos al:</p>
                        <p class="card-text">
                            <strong>
                                <a href="tel:2878754918" style="text-decoration: none; color: inherit;">287 875 4918</a>
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-whatsapp"></i> WhatsApp</h5>
                        <p class="card-text">Escríbenos para atención personalizada:</p>
                        <p class="card-text">
                            <strong>
                                <a href="https://wa.me/2871343617?text=Hola,%20me%20gustaría%20obtener%20más%20información" 
                                   style="text-decoration: none; color: inherit;" 
                                   target="_blank">287 875 4918</a>
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-envelope-fill"></i> Correo Electrónico</h5>
                        <p class="card-text">Envíanos un correo a:</p>
                        <p class="card-text">
                            <strong>
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=contacto@benitojuarez.edu.mx&su=Consulta%20desde%20la%20página%20web&body=Hola,%20me%20gustaría%20obtener%20más%20información%20sobre..."
                                   style="text-decoration: none; color: inherit;" 
                                   target="_blank">contacto@benitojuarez.edu.mx</a>
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-geo-alt-fill"></i> Dirección</h5>
                        <p class="card-text">Visítanos en:</p>
                        <p class="card-text"><strong>Av. Libertad 1742, La Piragua, 68310 San Juan Bautista Tuxtepec, Oax.</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!---NUESTRO EQUIPO-->
    <section id="equipo" class="bg-light py-5">
        <div class="container">
            <h3 style="text-align: center;">Nuestro <span style="color: green">Personal</span></h3>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img src="public/image/fototitulo.jpg" class="foto-ovalada" alt="Lic. Maria del Rocio Gomez Gomez">
                        <h4>Lic. Maria del Rocio Gomez Gomez</h4>
                        <p>Directora del plantel</p>
                    </center>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="public/image/fototitulo2.jpg" class="foto-ovalada" alt="Prof. Humberto Lazcano Guzman">
                        <h4>Prof. Humberto Lazcano Guzman</h4>
                        <p>Subdirector del plantel</p>
                    </center>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="public/image/fototitulo3.jpg" class="foto-ovalada" alt="Prof. Carlos Sánchez Cruz">
                        <h4>Prof. Carlos Sánchez Cruz</h4>
                        <p>Secretario del plantel</p>
                    </center>
                </div>
            </div>
        </div>
    </section>

    <!---INICIANDO DERECHOS RESERVADOS-->
    <footer class="bg-light py-3">
        <div class="container-fluid">
            <center><i class="bi bi-c-circle"></i> TODOS LOS DERECHOS RESERVADOS 2025</center>
        </div>
    </footer>

    <!---JS bootstrap-->
    <script src="public/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>