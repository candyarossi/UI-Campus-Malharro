<?php
    require_once('atributos.php');
    require_once('nav.php');
?>

<div class="uk-card uk-card-default uk-grid-collapse uk-margin uk-card-campus-primary uk-light" style="color: white; border: 4px solid orangered" uk-grid>
    <div class="uk-card-media-left uk-cover-container uk-width-1-5">
        <!-- <img src="https://pm1.narvii.com/6437/e77b03983fa04a69d7f00e38baaa272b5725904d_00.jpg" alt="" uk-cover> -->
        <img src="https://i.pinimg.com/564x/6e/91/91/6e9191e8f6eb7964a102d86a08442c21.jpg" alt="" uk-cover>

    </div>
    <div>
        <div class="uk-card-body uk-width-1-1">
            <h1 class="uk-h1">Lana LeStrange</h1>
            <h4 style="margin-top: 0px">
            <?php
                switch($rol){
                    case 'est':
                        echo 'Estudiante';
                    break;
                    case 'pro':
                        echo 'Profesor/a';
                    break;
                    case 'pre':
                        echo 'Personal Administrativo';
                    break;
                    case 'adm':
                        echo 'Administrador/a del Sitio';
                    break;
                }
            ?>
            </h4>
            <div style="height: 60px"></div>
        </div>
    </div>
</div>

         <h2 class="uk-light uk-heading-line uk-text-center"><span>MI PERFIL</span></h2><br>

         <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
         <h3 class="uk-card-title">Datos Personales</h3><hr>
<div class="uk-column-1-2">
    <form class="uk-form-horizontal">
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><b>Usuario N°:</b></label>
        <div class="uk-form-controls uk-width-1-1">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text">40.777.999</label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><b>Nombre/s:</b></label>
        <div class="uk-form-controls uk-width-1-1">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text">Lana</label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><b>Apellido/s:</b></label>
        <div class="uk-form-controls uk-width-1-1">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text">LeStrange</label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Contraseña:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text">&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;</label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Correo Electrónico:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text">lanalestrange@gmail.com</label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Domicilio:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text">San Martín 2345</label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Ciudad de Residencia:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text">Mar del Plata</label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Fecha de Nacimiento:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text">21/04/1991</label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Ciudad de Nacimiento:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text">Haedo</label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Teléfono Fijo:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text">(223) 4877741</label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Teléfono Móvil:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text">(223) 4490446</label>
            </div>
        </div>
    </div>
    <br>
    <small>* Esta información sólo es visible para ti. Los usuarios que accedan a tu perfil no podrán verla.</small>
    <br><small>** Para cambiar alguno de estos datos, diríjase a <a class="uk-link-muted" href="opciones.php">Opciones de Cuenta</a>.</small>
</form>
</div>
</div>
    

      <br>

      <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m uk-column-1-2">
    <h3 class="uk-card-title">Mis Datos de Contacto</h3><hr>
    <form class="uk-form-horizontal">
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Correo Electrónico:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><a class="uk-link-muted" href="mailto:lanalestrange@gmail.com">lanalestrange@gmail.com</a></label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Carrera:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text">Diseño Gráfico</label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Redes Sociales:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text">

        <a class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
        <a class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
        <a class="uk-icon-button  uk-margin-small-right" uk-icon="instagram"></a>
        <a class="uk-icon-button  uk-margin-small-right" uk-icon="behance"></a>

        </label>
            </div>
        </div>
    </div>
    </form>
<br>
    <h3 class="uk-card-title">Mis Cursos</h3><hr>
    <div>
        <ul class="uk-list uk-list-circle">
            <li><a class="uk-link-muted" href="materia.php">Diseño Institucional</a></li>
            <li><a class="uk-link-muted" href="materia.php">Diseño de Información</a></li>
            <li><a class="uk-link-muted" href="materia.php">Diseño en Medios</a></li>
            <li><a class="uk-link-muted" href="materia.php">Arte, Cultura y Estética en el Mundo Contemporáneo</a></li>
            <li><a class="uk-link-muted" href="materia.php">Diseño Web</a></li>
            <li><a class="uk-link-muted" href="materia.php">Práctica Profesional</a></li>
        </ul>
    </div>
</div>
      
    <?php
    require_once('footer.php');
    ?>