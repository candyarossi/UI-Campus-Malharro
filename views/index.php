<?php
    require_once('atributos.php');
    require_once('nav.php');
?>

 <div class="uk-child-width-1-1@m" uk-grid>
            <div>
        
                <div class="uk-inline">
                    <img src="../images/header2.png" alt="" width="100%" height="10%">
                   
                </div>
        
            </div>
        </div>
<br>
         <h2 class="uk-light uk-heading-line uk-text-center"><span>ACERCA DEL CAMPUS</span></h2><br>

         <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
          <div>
              <div class="uk-card uk-card-campus-primary uk-card-body uk-light">
                  <h3 class="uk-card-title">Carreras y Asignaturas</h3>
                  <p>Ingresá al apartado correspondiente a tu carrera y matriculate en las asignaturas que estés cursando.</p>
                <hr>
                <a href="carreras.php" class="uk-button uk-button-text">Acceder <span uk-icon="arrow-right"></span></a>
              </div>
          </div>
          <div>
              <div class="uk-card uk-card-campus-secondary uk-card-body uk-light">
                  <h3 class="uk-card-title">Biblioteca Virtual</h3>
                  <p>Consultá el material disponible en nuestra biblioteca virtual. Podrás encontrar libros en PDF, contenido online, archivos multimedia, entre otras cosas.</p>
                  <hr>
                <a href="biblioteca.php" class="uk-button uk-button-text">Acceder <span uk-icon="arrow-right"></span></a>
              </div>
          </div>
          <div>
              <div class="uk-card uk-card-campus-primary uk-card-body uk-light">
                  <h3 class="uk-card-title">Estado Académico</h3>
                  <p>Revisá y mantente al tanto de tu estado académico. Accedé a tus calificaciones, asistencias e inasistencias, inscripciones a finales, y más.</p>
                  <hr>
                <a href="siae.php" class="uk-button uk-button-text">Acceder <span uk-icon="arrow-right"></span></a>
              </div>
          </div>
          <div>
            <div class="uk-card uk-card-campus-secondary uk-card-body uk-light">
                <h3 class="uk-card-title">Servicio de Mensajería Interna</h3>
                <p>Enviá y recibí mensajes con tu cuenta a cualquier usuario del campus que quieras contactar.</p>
                <hr>
                <a href="mensajes.php" class="uk-button uk-button-text">Acceder <span uk-icon="arrow-right"></span></a>
            </div>
        </div>
      </div>
     

      <br>
      <h2 id="carreras" class="uk-light uk-heading-line uk-text-center"><span>CARRERAS</span></h2><br>


      <div class="uk-flex uk-flex-center">
      <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match uk-container-small" uk-grid>
      <a href="disenio.php"><img data-src="../images/foba.png" alt="" uk-img></a>
      <a href="disenio.php"><img data-src="../images/disenog.png" alt="" uk-img></a>
      <a href="disenio.php"><img data-src="../images/fotografia.png" alt="" uk-img></a>
      <a href="disenio.php"><img data-src="../images/ilustracion.png" alt="" uk-img></a>
      <a href="disenio.php"><img data-src="../images/profesorado.png" alt="" uk-img></a>
      <a href="disenio.php"><img data-src="../images/realizador.png" alt="" uk-img></a>
      <a href="disenio.php"><img data-src="../images/escenografia.png" alt="" uk-img></a>
      <a href="disenio.php"><img data-src="../images/medios.png" alt="" uk-img></a>
    </div>
    </div>

    <?php
    require_once('footer.php');
    ?>