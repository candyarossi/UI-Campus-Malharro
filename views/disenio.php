<?php
    require_once('atributos.php');
    require_once('nav.php');
?>

<?php if($rol == 'est' || $rol == 'inv'){
    $pag = 'matriculacion.php';
}else{
    $pag = 'materia.php';
} ?>

 <div class="uk-child-width-1-1@m" uk-grid>
            <div>
        
                <div class="uk-inline">
                    <img src="../images/diseno-grafico-web.jpg" alt="" width="100%" height="10%">
                   
                </div>
        
            </div>
        </div>
<br>
         <h2 class="uk-light uk-heading-line uk-text-center"><span>MATERIAS</span></h2><br>


<div class="uk-grid-small uk-child-width-1-2@s uk-flex-center uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <div class="uk-flex uk-flex-center">
         <h3 class="uk-card-title">Primer Año</h3>
         </div><hr style="margin-top: 0px">
<div class="uk-column-1-2">
    <ul class="uk-list uk-list-circle" style="font-size: 15px;">
        <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Taller de Diseño I</a></li>
        <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Dibujo</a></li>
        <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Tipografía I</a></li>
        <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Gráfica Asistida por Computadora I</a></li>
        <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Percepción Visual</a></li>
        <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Taller de Texto</a></li>
        <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Comunicación</a></li>
        <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Historia del Arte y del Diseño</a></li>
        <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Metodología Proyectual</a></li>
    </ul>
</div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <div class="uk-flex uk-flex-center">
         <h3 class="uk-card-title">Segundo Año</h3>
         </div><hr style="margin-top: 0px">
<div class="uk-column-1-2">
<ul class="uk-list uk-list-circle" style="font-size: 15px;">
    <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Taller de Diseño II</a></li>
   <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Tecnología I</a></li>
   <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Tipografía II</a></li>
   <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Gráfica Asistida por Computadora II</a></li>
   <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Semiología de la Imagen</a></li>
   <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Historia del Diseño</a></li>
   <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Organización de la Instituciones</a></li>
   <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Síntesis Visual</a></li>
  
</ul>
</div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <div class="uk-flex uk-flex-center">
         <h3 class="uk-card-title">Tercer Año</h3>
         </div><hr style="margin-top: 0px">
<div class="uk-column-1-2">
<ul class="uk-list uk-list-circle" style="font-size: 15px;">
<li><a href="<?php echo $pag; ?>" class="uk-link-muted">Taller de Diseño III y Proyecto</a></li>
   <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Tecnología II</a></li>
   <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Fotografía</a></li>
   <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Taller de Multimedia</a></li>
   <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Sociología de la Comunicación</a></li>
   <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Ética y Legislación</a></li>
   <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Introducción a la Tridimensión</a></li>
   
</ul>
</div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <div class="uk-flex uk-flex-center">
         <h3 class="uk-card-title">Cuarto Año</h3>
         </div><hr style="margin-top: 0px">
<div class="uk-column-1-2">
    <ul class="uk-list uk-list-circle" style="font-size: 15px;">
        <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Diseño Institucional</a></li>
        <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Diseño de Información</a></li>
        <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Diseño en Medios</a></li>
        <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Arte, Cultura y Estética en el Mundo Contemporáneo</a></li>
        <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Diseño Web</a></li>
        <li><a href="<?php echo $pag; ?>" class="uk-link-muted">Práctica Profesional</a></li>
        
    </ul>
</div>
        </div>
    </div>
</div>



      </div></div>

    <?php
    require_once('footer.php');
    ?>