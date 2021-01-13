<?php
    require_once('atributos.php');
    require_once('nav.php');
?>

 <div class="uk-child-width-1-1@m" uk-grid>
            <div>
        
                <div class="uk-inline">
                    <img src="../images/headerb.png" alt="" width="100%" height="10%">
                   
                </div>
        
            </div>
        </div>
<br>
        <h2 class="uk-light uk-heading-line uk-text-center"><span>NOVEDADES</span></h2><br>

        <div uk-slider>

<div class="uk-position-relative">

    <div class="uk-slider-container">
        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid">
           
            <li><a href="info-libro.php">
            <div class="">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="../images/libro6.jpg" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="background-color: white">
                <div class="uk-card-badge uk-label" style="background-color: #2f5da7">Diseño</div>
                <h3 class="uk-h3" style="margin-top: 35px">Tipos Formales</h3>
                <h4 class="uk-h4" style="margin-top: 0px">Eduardo Gabriel Pepe</h4>
                <p class="uk-p" style="margin-top: -5px; color: grey">Libro Digital</p>
            </div>
        </div>
</a></li>

           <li><a href="info-libro.php">
            <div class="">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="../images/libro3.jpg" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="background-color: white">
                <div class="uk-card-badge uk-label" style="background-color: #e31e24">Profesorado</div>
                <h3 class="uk-h3" style="margin-top: 35px">Psicología del Color</h3>
                <h4 class="uk-h4" style="margin-top: 0px">Eva Heller</h4>
                <p class="uk-p" style="margin-top: -5px; color: grey">Libro Digital</p>
            </div>
        </div>
        </a></li>

           <li><a href="info-libro.php">
            <div class="">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="../images/libro5.jpg" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="background-color: white">
                <div class="uk-card-badge uk-label" style="background-color: #e5097f">Realizador</div>
                <h3 class="uk-h3" style="margin-top: 35px">Psicología Tipográfica</h3>
                <h4 class="uk-h4" style="margin-top: 0px">Jessica Aharonov</h4>
                <p class="uk-p" style="margin-top: -5px; color: grey">Libro Digital</p>
            </div>
        </div>
        </a></li>

           <li><a href="info-libro.php">
            <div class="">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="../images/libro4.jpg" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="background-color: white">
                <div class="uk-card-badge uk-label" style="background-color: #ef7f1a">Fotografía</div>
                <h3 class="uk-h3" style="margin-top: 35px">Diseño Gráfico: Nuevos Fundamentos</h3>
                <h4 class="uk-h4" style="margin-top: 0px">Ellen Lupton, Jennifer Cole Phillips</h4>
                <p class="uk-p" style="margin-top: -5px; color: grey">Libro Digital</p>
            </div>
        </div>
        </a></li>

           <li><a href="info-libro.php">
            <div class="">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="../images/libro2.jpg" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="background-color: white">
                <div class="uk-card-badge uk-label" style="background-color: #393185">Ilustración</div>
                <h3 class="uk-h3" style="margin-top: 35px">La Sintaxis de la Imagen</h3>
                <h4 class="uk-h4" style="margin-top: 0px">D.A. Dondis</h4>
                <p class="uk-p" style="margin-top: -5px; color: grey">Libro Digital</p>
            </div>
        </div>
        </a></li>

           <li><a href="info-libro.php">
            <div class="">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="../images/libro1.jpg" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="background-color: white">
                <div class="uk-card-badge uk-label" style="background-color: #ae4a84">Medios</div>
                <h3 class="uk-h3" style="margin-top: 35px">Diseñar Con y Sin Retícula</h3>
                <h4 class="uk-h4" style="margin-top: 0px">Timothy Samara</h4>
                <p class="uk-p" style="margin-top: -5px; color: grey">Libro Digital</p>
            </div>
        </div>
        </a></li>
        </ul>
    </div>

    <div class="uk-hidden@s uk-light">
            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>

        <div class="uk-visible@s">
            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
</div>



         <h2 class="uk-light uk-heading-line uk-text-center"><span>OPCIONES</span></h2>

         <?php 
         if($rol == 'inv' || $rol == 'est'){
            echo '<br>';
         }else{
            echo '<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Para agregar o quitar contenido de la biblioteca, haga <a href="#modal-example" uk-toggle>click aquí</a>.</p>
</div><br>';
}
?>


<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h3 class="uk-h3">Agregar / Quitar</h3><br>
        <div>
    <div class="uk-button-group">
        <button class="uk-button uk-card-campus-primary uk-light uk-padding-small" uk-toggle="target: #modal-example2" style="line-height: 22px; border: 1px solid white;">Libros Digitales</button>
        <button class="uk-button uk-card-campus-primary uk-light uk-padding-small" uk-toggle="target: #modal-example2" style="line-height: 22px; border: 1px solid white;">Contenido Multimedia</button>
        <button class="uk-button uk-card-campus-primary uk-light uk-padding-small" uk-toggle="target: #modal-example2" style="line-height: 22px; border: 1px solid white;">Contenido Online</button>
        <button class="uk-button uk-card-campus-primary uk-light uk-padding-small" uk-toggle="target: #modal-example2" style="line-height: 22px; border: 1px solid white;">Historia Malharro</button>
    </div>
    <button class="uk-button uk-card-campus-secondary uk-light uk-margin-small uk-width-1-1">Eliminar Contenido</button>
</div>
         </div>
</div>


<div id="modal-example2" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h3 class="uk-h3">Agregar Libro</h3><br>
        <div>
        <form class="uk-grid-small" uk-grid>
        <div class="uk-margin-small  uk-width-1-1@s">
            <input class="uk-input" type="text" placeholder="Título">
        </div>
        <div class="uk-margin-small uk-width-1-1@s">
            <input class="uk-input" type="text" placeholder="Autor/es">
        </div>
        <div class="uk-margin-small uk-width-1-1@s">
            <input class="uk-input" type="text" placeholder="Editorial">
        </div>

        
        <div class="uk-margin-small uk-width-1-2@s">
            <input class="uk-input" type="text" placeholder="Año de Publicación">
        </div>
        <div class="uk-margin-small uk-width-1-2@s">
            <input class="uk-input" type="text" placeholder="País de Origen">
        </div>

        <div class="uk-margin-small uk-width-1-1@s">
            <select class="uk-select">
                <option>Sin Clasificar</option>
                <option>Formación Básica</option>
                <option>Diseño Gráfico</option>
                <option>Fotografía</option>
                <option>Ilustración</option>
                <option>Profesorado en Artes Visuales</option>
                <option>Realizador en Artes Visuales</option>
                <option>Escenografía</option>
                <option>Realizador en Medios Audiovisuales</option>
            </select>
        </div>

        <div class="uk-margin-small uk-width-1-1@s">
            <textarea class="uk-textarea" rows="5" placeholder="Descripción"></textarea>
        </div>

        <div class="uk-margin-small uk-width-1-1@s" uk-form-custom="target: true">
            <input type="file">
            <input class="uk-input uk-width-1-1" type="text" placeholder="Seleccionar archivo..." disabled>
            
        </div>
</form>

<div class="uk-flex uk-flex-center" style="margin-top: 30px">
    <button class="uk-button uk-card-campus-secondary uk-light uk-margin-small uk-width-1-2">Agregar Contenido</button>
</div>

</div>
         </div>
</div>


         <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
         <div>
              <div class="uk-card uk-card-default uk-card-body">
                  <h3 class="uk-card-title">Filtro por Tipo de Contenido</h3><hr>
                  <button class="uk-button uk-width-1-1 uk-margin-small-bottom uk-button-secondary" >Libros Digitales</button>
                  <button class="uk-button uk-width-1-1 uk-margin-small-bottom uk-button-secondary" >Contenido Multimedia</button>
                  <button class="uk-button uk-width-1-1 uk-margin-small-bottom uk-button-secondary" >Contenido Online</button>
                  <button class="uk-button uk-width-1-1 uk-margin-small-bottom uk-button-secondary" >Historia de la Escuela</button>
              </div>
          </div> 
         <div>
              <div class="uk-card uk-card-default uk-card-body">
                  <h3 class="uk-card-title">Filtro por Carrera</h3><hr>
                 <!-- <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #F1C40F">Formación Básica</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #2f5da7">Diseño Gráfico</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #ef7f1a">Fotografía</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #393185">Ilustración</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #e31e24">Profesorado en Artes Visuales</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #e5097f">Realizador en Artes Visuales</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #00a0e3">Escenografía</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #ae4a84">Realizador en Medios Audiovisuales</button>-->
             
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #F1C40F">Formación Básica</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #2f5da7">Diseño Gráfico</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #e31e24">Profesorado en Artes Visuales</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #00a0e3">Escenografía</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #ef7f1a">Fotografía</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #ae4a84">Realizador en Medios Audiovisuales</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #393185">Ilustración</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #e5097f">Realizador en Artes Visuales</button>
                </div>
          </div>
          <div>
              <div class="uk-card uk-card-default uk-card-body">
                  <h3 class="uk-card-title">Búsqueda de Contenido</h3><hr>
                  <p>Búsqueda General:</p>
                  <div class="uk-margin" uk-margin>
        <div uk-form-custom="target: true">
            <input type="file">
            <input class="uk-input uk-form-width-medium" type="text" placeholder=" " >
        </div>
        <button class="uk-button uk-button-secondary uk-light"><span uk-icon="icon: search"></span></button>
    </div>
                  <hr>
                  <p>Búsqueda por Título:</p>
                  <div class="uk-margin" uk-margin>
        <div uk-form-custom="target: true">
            <input type="file">
            <input class="uk-input uk-form-width-medium" type="text" placeholder=" " >
        </div>
        <button class="uk-button uk-button-secondary uk-light"><span uk-icon="icon: search"></span></button>
    </div>
                  <p>Búsqueda por Autor:</p>
                  <div class="uk-margin" uk-margin>
        <div uk-form-custom="target: true">
            <input type="file">
            <input class="uk-input uk-form-width-medium" type="text" placeholder=" " >
        </div>
        <button class="uk-button uk-button-secondary uk-light"><span uk-icon="icon: search"></span></button>
    </div>
              </div>
          </div>
          
        </div>
      </div>
     
    <?php
    require_once('footer.php');
    ?>