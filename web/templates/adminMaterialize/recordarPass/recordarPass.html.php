<div class="col s12 z-depth-4 card-panel">
<form class="login-form" action="<?php echo crearUrl("recordarPass","recordarPass","envioMails")?>" method="POST">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>¿Olvidaste Tu Contrase&ntildea?</h4>
            <p class="center">Ingresa tu correo electronico</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="email" name="email">
            <label for="username" class="center-align">Email</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
           <input type="hidden" name="phpmailer">
            <input type="submit" class="btn waves-effect waves-light col s12" VALUE="Envio Contraseña">
          </div>
        </div>
      </form>
    </div>