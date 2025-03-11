<?php
include ('layout/parte1.php');
?>

  <!---ACERCA DE-->

  <section id="nosotros"> <!---SECCION-->
    <div class="container">  <!---CONTENEDOR-->
      <div class="row">

        <div class="col-md-6">
          <center>
            <img src="public/image/beni.png" width="50%"  alt="">
          </center>
        </div>  <!---1RA COLUMNA-->

        <div class="col-md-6">
             <h3 style="text-align: center;">Acerca de <span style="color: green">Nosotros</span></h3>
             <br>
             <p style="text-align: justify;">  <!---parrafo texto-->
              La Escuela Primaria Benito Juárez es una institución educativa
               dedicada a la formación integral de niños y niñas en nivel básico. 
               Ubicada en un entorno tranquilo y seguro, esta escuela tiene como misión 
               brindar educación de calidad basada en valores como el respeto, 
               la responsabilidad y la solidaridad.
</p>
<center>
  <a href="" class="btn btn-outline-success"> Más Información</a>
</center>

<br> <br>

        </div>   <!---2DA COLUMNA-->

      </div>
    </div>
  </section>

    <!---GUIAS DE ESTUDIO o libros, etc...-->

    <section id="guias">

      <div class="container">
    <div class="row">
      <div class="col-md-12">
 <h3 style="text-align: center;">GUIA DE <span style="color: green">LIBROS</span></h3>
 <br></br>

      </div>
    </div>
    
    <div class="row">

      <div class="col-md-3 zoomP"> <br> <br>
        <div class="card">
          <img src="public/image/libro1.jpg" width="100%" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Español</h5>
            <p class="card-text" style="text-align: center;">Primer grado solo lecturas.</p>
         <center>
          <a href="https://libros.conaliteg.gob.mx/2024/P1MLA.htm" class="btn btn-success">ver libro</a>
         </center>
          </div>
        </div>
      </div>

      <div class="col-md-3 zoomP"> <br> <br>
        <div class="card">
          <img src="public/image/libro2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ciencias naturales</h5>
            <p class="card-text" style="text-align: justify;">Tercer grado.</p>
            <center>
              <a href="https://libros.conaliteg.gob.mx/2024/P1SDA.htm" class="btn btn-success">ver libro</a>
             </center>
          </div>
        </div>
      </div>

      <div class="col-md-3 zoomP"> <br> <br>
        <div class="card">
          <img src="public/image/libro3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ciencias naturales</h5>
            <p class="card-text" style="text-align: justify;">Tercer grado.</p>
            <center>
              <a href="https://libros.conaliteg.gob.mx/2024/P1PEA.htm" class="btn btn-success">ver libro</a>
             </center>
          </div>
        </div>
      </div>

        <div class="col-md-3"> <br><br>
<img src="public/image/niño.png" alt="" width="110%">
      </div>
    </div>

    </section>

    <br>
    <br>

    <!----galeria-->
    <section id="galeria">
     <div class="container">
      <h3 style="text-align: center;"><span style="color: green">GALERÍA</span></h3> <br> <br>

      <!---primera fila-->
      <div class="row"> 
        <div class="col-md-4 zoomP">
           <img src="public/image/gale1.jpeg" height="240px" width="100%"  alt="Niño" data-bs-toggle="modal" data-bs-target="#imageModal">
        </div>

        <!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <center><h5 class="modal-title" id="imageModalLabel">Niño Sonriendo</h5></center>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body text-center">
        <img src="public/image/gale1.jpeg" width="100%" alt="Niño">
        <p class="mt-3">Este es un niño sonriendo al aire libre, mostrando felicidad y alegría.</p>
      </div>
    </div>
  </div>
</div>

        <div class="col-md-8 zoomP"> 
          <img src="public/image/gale2.jpg" height="200px" width="100%"  alt="">
        </div>
      </div>

      <br> <br>

     
     <!----segunda fila-->
     <div class="row">
      <div class="col-md-4 zoomP">
        <img src="public/image/gale3.jpg" height="240px" width="100%"  alt="">
      </div>
      <div class="col-md-4 zoomP">
        <img src="public/image/gale4.jpg" height="240px" width="100%"  alt="">
      </div>
      <div class="col-md-4 zoomP">
        <img src="public/image/gale5.jpg" height="240px" width="100%"  alt="">
      </div>
     </div>
     <br> 


         <!----tercera fila-->
         <div class="row">
          <div class="col-md-4 zoomP">
            <img src="public/image/gale3.jpg" height="240px" width="100%"  alt="">
          </div>
          <div class="col-md-4 zoomP">
            <img src="public/image/gale4.jpg" height="240px" width="100%"  alt="">
          </div>
          <div class="col-md-4 zoomP">
            <img src="public/image/gale5.jpg" height="240px" width="100%"  alt="">
          </div>
         </div>
        </div>
         <br>
    
    </section> 

    <br> <br>

    <!---COMENTARIOS-->
    <section id="comentarios">

      <div class="container">
        <h3 style="text-align: center;"><span style="color: green">Comentarios de</span> los Usuarios</h3> <br> <br>
        <div class="row">
          <!---codigo bootsatrp-->
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">

              <div class="carousel-item active">

               <div class="row">
                
                <div class="col-md-4 zoomP">
                  <!---pegar código card o libros-->
                  <div class="card">
                    <img src="public/image/comen1.jpg" height="400px"  width="100%" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title" style="text-align: center;">Español</h5>
                      <p class="card-text" style="text-align: center;">Primer grado solo lecturas.</p>
                    </div>
                  </div>
                  <!---aqui termina el código-->
                </div>

                <div class="col-md-4 zoomP">
                  <div class="card">
                    <img src="public/image/comen2.jpg" height="400px"  width="100%" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title" style="text-align: center;">Español</h5>
                      <p class="card-text" style="text-align: center;">Primer grado solo lecturas.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 zoomP">
                  <div class="card">
                    <img src="public/image/comen3.jpg" height="400px"  width="100%" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title" style="text-align: center;">Español</h5>
                      <p class="card-text" style="text-align: center;">Primer grado solo lecturas.</p>
                    </div>
                  </div>
                </div>

               </div>
              </div>

              <!---segundo carrusel-->
              <div class="carousel-item">
                <div class="row">
                
                  <div class="col-md-4 zoomP">
                    <!---pegar código card o libros-->
                    <div class="card">
                      <img src="public/image/comen4.jpg" height="400px"  width="100%" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Español</h5>
                        <p class="card-text" style="text-align: center;">Primer grado solo lecturas.</p>
                      </div>
                    </div>
                    <!---aqui termina el código-->
                  </div>
  
                  <div class="col-md-4 zoomP">
                    <div class="card">
                      <img src="public/image/comen5.jpg" height="400px"  width="100%" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Español</h5>
                        <p class="card-text" style="text-align: center;">Primer grado solo lecturas.</p>
                      </div>
                    </div>
                  </div>
  
                  <div class="col-md-4 zoomP">
                    <div class="card">
                      <img src="public/image/gale4.jpg" height="400px"  width="100%" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Español</h5>
                        <p class="card-text" style="text-align: center;">Primer grado solo lecturas.</p>
                      </div>
                    </div>
                  </div>
  
                 </div>
           
                 </div>
         

              <!---tercer carrusel-->

              <div class="carousel-item">
                <div class="row">
                
                  <div class="col-md-4 zoomP">
                    <!---pegar código card o libros-->
                    <div class="card">
                      <img src="public/image/gale4.jpg" height="400px"  width="100%" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Español</h5>
                        <p class="card-text" style="text-align: center;">Primer grado solo lecturas.</p>
                      </div>
                    </div>
                    <!---aqui termina el código-->
                  </div>
  
                  <div class="col-md-4 zoomP">
                    <div class="card">
                      <img src="public/image/gale4.jpg" height="400px"  width="100%" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Español</h5>
                        <p class="card-text" style="text-align: center;">Primer grado solo lecturas.</p>
                      </div>
                    </div>
                  </div>
  
                  <div class="col-md-4 zoomP">
                    <div class="card">
                      <img src="public/image/gale4.jpg" height="400px"  width="100%" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Español</h5>
                        <p class="card-text" style="text-align: center;">Primer grado solo lecturas.</p>
                      </div>
                    </div>
                  </div>
  
                 </div>
                </div>
   
              </div>
              

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </section> 
    <br> <br>

    <!---ubicacion-->
    <section id="ubicacion">
      <div class="container">
        <h3 style="text-align: center;">Encuentranos <span style="color: green">Aquí</span></h3> <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d348.0548468983004!2d-96.13117363278212!3d18.086089970425807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c3e6f34c1bce6b%3A0x964e9f767bb9624f!2sEscuela%20Primaria%20Benito%20Ju%C3%A1rez!5e0!3m2!1ses-419!2smx!4v1740752799495!5m2!1ses-419!2smx" width="100%" height="600" style="border:0;"
         allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   <br>
      </div>
    </section> <br> <br>

    <!---contenido multimedia-->
    <section>
      <div class="container">
        <h3 style="text-align: center;">CONTENIDO <span style="color: green">MULTIMEDIA</span></h3> <br> <br>
        <div class="row">

          <div class="col-md-4">
           <center>
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/2o46gKeQTwc?si=v5VGjw3HqeHs2Wuo" title="YouTube video player" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
           </center>
          </div>

          <div class="col-md-4">
           <center>
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/jlC2l0kqocE?si=tRJtRwxLA9o3VLJs" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
           </center>
          </div>

          <div class="col-md-4">
            <center>
              <iframe width="100%" height="300" src="https://www.youtube.com/embed/W_LhyqgaRJI?si=2pHG7-rco08Hm54t" 
              title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </center>
          </div>

        </div> 

        <br>

        <div class="row">
          
          <div class="col-md-6">
<center>
  <iframe width="100%" height="315" src="https://www.youtube.com/embed/2n7CXoRMsG4?si=rDeWxTplTRtbks5m"
   title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</center>
          </div>

          <div class="col-md-6">
<center>
  <iframe width="100%" height="315" src="https://www.youtube.com/embed/fDIwLUWYFvs?si=EoBri0WG--43DH9U" 
  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</center>
          </div>

        </div>

        <br>


      </div>
    </section>

    <!---empieza contactanos-->
    <section id="contactanos" class="contactos">
      <div class="container">
        <h3 style="text-align: center;">Contac<span style="color: green">tanos</span></h3> <br>
        <div class="row">
          <div class="col-md-2"></div>

          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <center><b>
                Escribenos
                </b>
                </center>
              </div>
              <div class="card-body">
<form action="">
  <div class="form-group">
    <label for=""><b>Nombre:</b></label>
    <input type="text" class="form-control" placeholder="Escribe tu nombre">
    
  </div>
</form>

              </div>

              <div class="card-body">
                <form action="">
                  <div class="form-group">
                    <label for=""><b>Correo electronico:</b></label>
                    <input type="email" class="form-control" placeholder="Escribe tu correo">
                    
                  </div>
                </form>
                
                              </div>

                              <div class="card-body">
                                <form action="">
                                  <div class="form-group">
                                    <label for=""><b>Mensaje:</b></label>
                                     <textarea name="" cols="30" rows="5" class="form-control"   id=""></textarea>
                                    
                                  </div>
                                  <hr>  <!--division-->

                                  <div class="d-grid gap-2">
                                    <button class="btn btn-outline-primary" type="button">Enviar</button>
                                    <button class="btn btn-outline-danger" type="button">Cancelar</button>
                                  </div>
                                                                    
                                </form>
                                
                                              </div>

            </div>
          </div>

          <div class="col-md-6"></div>
        </div>
      </div>

    </section>



    <br> <br>

    <!---descargas-->
    <section>
      <div class="container">
        <h3 style="text-align: center;">Material de <span style="color: green">Apoyo</span></h3> <br>
        <div class="row bg-success">
          <h4 style="text-align: center;"><span style="color: rgb(253, 253, 253)">Guías de estudio de 1ro a 6to grado</span></h4> <br>
         </div>

         <br>
         
          <div class="row">

            <div class="col-md-4 zoomP">
              <h5 style="text-align: center;"><span style="color: green">Guías de estudio de 1er grado</span></h5>
              <center><img src="public/image/guia1.jpg" height="" width="80%" alt=""></center> <br><br>
              <a href="public/download/guia1.pdf" download="guia1.pdf">
              <center><button class="btn btn-success" type="button">Descargar</button></center></a>
            </div><br>

            <div class="col-md-4 zoomP">
              <h5 style="text-align: center;"><span style="color: green">Guías de estudio de 2do grado</span></h5>
              <center><img src="public/image/guia2.jpg" height="" width="80%" alt=""></center> <br><br>
              <a href="public/download/guia1.pdf" download="guia1.pdf">
              <center><button class="btn btn-success" type="button">Descargar</button></center></a>
            </div><br>

            <div class="col-md-4 zoomP">
              <h5 style="text-align: center;"><span style="color: green">Guías de estudio de 3er grado</span></h5>
              <center><img src="public/image/guia3.jpg" height="" width="80%" alt=""></center> <br><br>
              <a href="public/download/guia1.pdf" download="guia1.pdf">
              <center><button class="btn btn-success" type="button">Descargar</button></center></a>
            </div><br>

          </div>

          <br> <br>

          <div class="row">

            <div class="col-md-4 zoomP">
              <h5 style="text-align: center;"><span style="color: green">Guías de estudio de 4to grado</span></h5>
              <center><img src="public/image/guia4.jpg" height="" width="80%" alt=""></center> <br><br>
              <a href="public/download/guia1.pdf" download="guia1.pdf">
              <center><button class="btn btn-success" type="button">Descargar</button></center></a>
            </div><br>

            <div class="col-md-4 zoomP">
              <h5 style="text-align: center;"><span style="color: green">Guías de estudio de 5to grado</span></h5>
              <center><img src="public/image/guia5.jpg" height="" width="80%" alt=""></center> <br><br>
              <a href="public/download/guia1.pdf" download="guia1.pdf">
              <center><button class="btn btn-success" type="button">Descargar</button></center></a>
            </div><br>

            <div class="col-md-4 zoomP">
              <h5 style="text-align: center;"><span style="color: green">Guías de estudio de 6to grado</span></h5>
              <center><img src="public/image/guia6.jpg" height="" width="80%" alt=""></center> <br><br>
              <a href="public/download/guia1.pdf" download="guia1.pdf">
              <center><button class="btn btn-success" type="button">Descargar</button></center></a>
            </div><br>

          </div>

      </div>
    </section>

    <br> <br>

    <?php
include ('layout/parte2.php');
?>


