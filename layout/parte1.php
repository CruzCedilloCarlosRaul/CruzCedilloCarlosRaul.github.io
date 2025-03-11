
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

  <!---CARRUSEL DE IMAGENES-->
  <section>
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <!----Esto es para agregar más imagenes-->
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/image/carrusel1.jpg" height="450px" class="d-block w-100"  alt="">
      <div class="carousel-caption d-none d-md-block">

        <!----poner color al texto style-->
        <a href="" class="btn btn-info">INGLES</a>
        <p style="color: black;">Las mejores clases de INGLÉS aquí.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="public/image/carrusel2.jpg" height="450px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="" class="btn btn-info">EDUCACIÓN FISICA</a>
        <p style="color: black;">Convivencia con muchos niños, en clases de educación fisica.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="public/image/carrusel3.jpg" height="450px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="" class="btn btn-info">EDUCACIÓN ARTISTICA</a>
        <p style="color: black;">Baila y diviertete.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="public/image/carrusel4.jpg" height="450px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="" class="btn btn-info">COMPUTACIÓN</a>
        <p style="color: black;">Aprende computación desde cero.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="public/image/carrusel5.jpg" height="450px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="" class="btn btn-info">MATEMATICAS</a>
        <p style="color: black;">Concurso de matematicas divertido.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </section>

 <br><br> 