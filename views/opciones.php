<?php
    require_once('atributos.php');
    require_once('nav.php');
?>

<div class="uk-card uk-card-default uk-grid-collapse uk-margin uk-card-campus-primary uk-light" uk-grid>
    <div>
        <div class="uk-card-body uk-width-1-1">
            <h2 class="uk-h2">OPCIONES DE CUENTA</h2>
        </div>
    </div>
</div>

        <br>

         <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
         <h3 class="uk-card-title">Datos Personales</h3><hr>
<div class="uk-column-1-2">
    <form class="uk-form-horizontal">
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><b>Usuario N°</b></label>
        <div class="uk-form-controls uk-width-1-1">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: "></a>
            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="40.777.999" disabled>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><b>Nombre/s</b></label>
        <div class="uk-form-controls uk-width-1-1">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: "></a>
            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Lana" disabled>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><b>Apellido/s</b></label>
        <div class="uk-form-controls uk-width-1-1">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: "></a>
            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="LeStrange" disabled>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Correo Electrónico</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></a>
            <input class="uk-input" id="form-horizontal-text" type="password" placeholder="lanalestrange@gmail.com" disabled>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Domicilio</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></a>
            <input class="uk-input" id="form-horizontal-text" type="password" placeholder="San Martín 2300" disabled>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Ciudad de Residencia</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></a>
            <input class="uk-input" id="form-horizontal-text" type="password" placeholder="Mar del Plata" disabled>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Fecha de Nacimiento</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: "></a>
            <input class="uk-input" id="form-horizontal-text" type="password" placeholder="21/04/1991" disabled>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Ciudad de Nacimiento</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: "></a>
            <input class="uk-input" id="form-horizontal-text" type="password" placeholder="Haedo" disabled>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Teléfono Fijo</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></a>
            <input class="uk-input" id="form-horizontal-text" type="password" placeholder="(223) 4877741" disabled>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Teléfono Móvil</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></a>
            <input class="uk-input" id="form-horizontal-text" type="password" placeholder="(223) 4490446" disabled>
            </div>
        </div>
    </div>
<br>
    <small>* Esta información sólo es visible para ti. Los usuarios que accedan a tu perfil no podrán verla.</small>
</form>
</div>
</div>
    

      <br>

<div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
         <div>
              <div class="uk-card uk-card-default uk-card-body">
              <h3 class="uk-card-title">Cambiar Contraseña</h3><hr>
              <form class="uk-form-horizontal">
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Contraseña Actual</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <input class="uk-input" id="form-horizontal-text" type="password" placeholder="" >
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Contraseña Nueva</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <input class="uk-input" id="form-horizontal-text" type="password" placeholder="" >
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Repetir Contraseña Nueva</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <input class="uk-input" id="form-horizontal-text" type="password" placeholder="" >
            </div>
        </div>
    </div>
    </form>
    <br>
    <div class="uk-flex uk-flex-right">
    <button class="uk-button uk-card-campus-secondary uk-light">Confirmar</button>
</div>
                 </div>
          </div> 
         <div>

              <div class="uk-card uk-card-default uk-card-body">
                  <h3 class="uk-card-title">Formulario de Contacto</h3><hr>
                <p>Completa este campo para reportar errores en la información académica, 
                de asistencias o datos personales, y/o también para realizar consultas técnicas.</p>
                <textarea class="uk-textarea" rows="5" placeholder=""></textarea> 
                <br><br>
                <div class="uk-flex uk-flex-right">
                <button class="uk-button uk-card-campus-secondary uk-light">Enviar</button>
                </div>
                </div>
          </div>
          <div>
              
        </div>
      </div>



    <?php
    require_once('footer.php');
    ?>