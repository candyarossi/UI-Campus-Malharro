<!DOCTYPE html>
<html>
    <head>
        <title>Campus Malharro</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/uikit.min.css" />
        <link rel="stylesheet" href="../css/style-campus.css" />
        <script src="../js/uikit.min.js"></script>
        <script src="../js/uikit-icons.min.js"></script>
        <link rel="shortcut icon"  href="../images/ico.png" />

    </head>
    <body class="uk-background-secondary">

      <nav class="uk-navbar-container uk-margin" style="background-color: white; z-index: 980; box-shadow: 0px 6px 30px #333" uk-sticky="bottom: #offset" uk-navbar>
        <div class="uk-navbar-left">
          <ul class="uk-navbar-nav">
          <li><a class="uk-link-muted uk-margin-small-left uk-margin-small-right" uk-icon="icon: menu"></a></li>
          <div class="uk-navbar-dropdown uk-width-1-5" uk-dropdown="mode: click">
            
            <h4>Menú Principal</h4>
            <ul class="uk-list uk-list-divider">
              <li><a href="carreras.php" class="uk-link-muted"> Carreras y Asignaturas </a></li>
              <li><a href="biblioteca.php" class="uk-link-muted"> Biblioteca Virtual </a></li>

              <?php switch($rol){
                  /*case 'inv':
                    echo '<li><a href="#" class="uk-link-muted"> SIAE </a></li>';
                  break;*/
                  case 'est':
                    echo '<li><a href="siae.php" class="uk-link-muted"> SIAE </a></li>';
                  break;
                  case 'pro':
                    echo '<li><a href="siad.php" class="uk-link-muted"> SIAD </a></li>';
                  break;
                  case 'pre':
                    echo '<li><a href="siad.php" class="uk-link-muted"> SIAD </a></li>';
                    echo '<li><a href="siaa.php" class="uk-link-muted"> SIAA </a></li>';
                  break;
                  case 'adm':
                    //echo '<li><a href="siae.php" class="uk-link-muted"> SIAE (Este no va acá) </a></li>';
                    echo '<li><a href="siad.php" class="uk-link-muted"> SIAD </a></li>';
                    echo '<li><a href="siaa.php" class="uk-link-muted"> SIAA </a></li>';
                    echo '<li><a href="administracion.php" class="uk-link-muted"> Administración del Sitio</a></li>';
                  break;

                } ?>
          </ul>

              </div>

            <a class="uk-navbar-item uk-logo" href="index.php"><img class="" width="40" height="40" src="../images/logo.png" alt="" ></a>
    
            <div class="uk-navbar-item">
                <h4 style="margin-top: 18px; margin-left: -15px;">Campus Malharro</h4>
            </div>
    </ul>
        </div>


        <div class="uk-navbar-right">

          <ul class="uk-navbar-nav">
              
          <?php if($rol == 'inv'){ ?>

          <li><a href="login.php">Acceder &#160;<span uk-icon="sign-in"></span></a></li>
          
          <?php }else{ ?>

              <li><a uk-icon="icon: comment"></a></li>

              <div class="uk-navbar-dropdown uk-width-1-3" uk-dropdown="mode: click; pos: bottom-left">
            
              <h4>Mensajes</h4>
                <table class="uk-table uk-table-hover uk-table-divider">
                    <tbody>
                        <tr>
                            <td> 
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <img class="uk-border-circle" width="40" height="40" src="https://pm1.narvii.com/6684/45efdbec8b089e784673baf594eeeab821029056_hq.jpg">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h5 class="uk-margin-remove-bottom">Rubén Doblas</h5>
                                        <p class="uk-text-meta uk-margin-remove-top">¿Te acuerdas cuando es el parcial de Metodología?</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <img class="uk-border-circle" width="40" height="40" src="https://www.famousbirthdays.com/faces/garcia-aroia-image.jpg">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h5 class="uk-margin-remove-bottom">Aroia García</h5>
                                        <p class="uk-text-meta uk-margin-remove-top"><span uk-icon="icon: image; ratio: 0.8"></span>&#160; logo-final.png</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <img class="uk-border-circle" width="40" height="40" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4BH1QTUHYkFb5FSZ4NoIii3JC6RoU2Sc2HA&usqp=CAU">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h5 class="uk-margin-remove-bottom">Samuel De Luque &#160;<span class="uk-badge" style="background-color: red;">3</span></h5>
                                        <p class="uk-text-meta uk-margin-remove-top">O podemos dejarlo de color violeta.</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <img class="uk-border-circle" width="40" height="40" src="https://cdn.21buttons.com/users/c20f0245f5d44bc4a6c5a0c742d4479a.medium.jpg">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h5 class="uk-margin-remove-bottom">Raúl Álvarez</h5>
                                        <p class="uk-text-meta uk-margin-remove-top">El impresionismo es un movimiento artístico​ inic...</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <img class="uk-border-circle" width="40" height="40" src="https://m.curiouscat.qa/1526909755/avatars/7606643.jpg">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h5 class="uk-margin-remove-bottom">Cristina López &#160;<span class="uk-badge" style="background-color: red;">1</span></h5>
                                        <p class="uk-text-meta uk-margin-remove-top"><span uk-icon="icon: file-pdf; ratio: 0.8"></span>&#160; tp-historia.pdf</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="uk-flex uk-flex-center">
                    <a href="mensajes.php" class="uk-link-muted">Ver Todo</a>
                   </div>
                  </div>

              <li><a uk-icon="icon: bell"></a></li>

              <div class="uk-navbar-dropdown uk-width-1-3" uk-dropdown="mode: click; pos: bottom-left">
            
              <h4>Notificaciones</h4>
                <table class="uk-table uk-table-hover uk-table-divider" style="font-size: 15px;">
                    <tbody>
                        <tr>
                            <td> <span class="uk-align-left" uk-icon="icon: check; ratio: 1.5"></span>El docente Guillermo Díaz ha cargado la nota del 2do Parcial de la materia Taller de Diseño I</td>
                        </tr>
                        <tr>
                            <td> <span class="uk-align-left" uk-icon="icon: file-edit; ratio: 1.5"></span>Tienes una Tarea Pendiente</td>
                        </tr>
                        <tr>
                            <td> <span class="uk-align-left" uk-icon="icon: mail; ratio: 1.5"></span>Confirma tu Correo Electrónico</td>
                        </tr>
                    </tbody>
                </table>
                <div class="uk-flex uk-flex-center">
                    <a class="uk-link-muted">Ver Todo</a>
                   </div>
                  </div>
              
              &#160;&#160;&#160;&#160;&#160;

                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                      <div class="uk-width-auto">
                         <!-- <img class="uk-border-circle" width="40" height="40" src="https://pm1.narvii.com/6437/e77b03983fa04a69d7f00e38baaa272b5725904d_00.jpg"> -->
                          <img class="uk-border-circle" width="40" height="40" src="https://i.pinimg.com/564x/6e/91/91/6e9191e8f6eb7964a102d86a08442c21.jpg">
                     
                      </div>
                      </div>
                      <li><a>Lana LeStrange&#160;<span uk-icon="triangle-down"></span></a></li>
                  <div class="uk-navbar-dropdown uk-width-1-5" uk-dropdown="mode: click; pos: bottom-left">
                      <ul class="uk-nav uk-navbar-dropdown-nav">
                          <li><a href="perfil.php"> <span uk-icon="user"></span> &#160; Mi Perfil</a></li>
                          <li><a href="opciones.php"> <span uk-icon="settings"></span> &#160; Opciones de Cuenta</a></li>
                          <li class="uk-nav-divider"></li>
                          <li><a href="index.php" action="<?php session_destroy() ?>"> <span uk-icon="sign-out"></span> &#160; Cerrar Sesión</a></li>
                      </ul>
                  </div>

                  <?php } ?>
          </ul>
      </div>
    </nav>
  
    
    <div class="uk-container uk-container-expand">

      <div class="uk-container uk-container-expand">

        <br><br>