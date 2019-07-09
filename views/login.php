<?php
session_start();
$_SESSION["login"] = "si";
$_SESSION["logged"] = 0;
?>
<div class="row center">
    <form class="col s6" onsubmit="return login()">
      <div class="row">
        <div class="input-field col s6">
          
          <input id="usuario" type="text" class="validate" style="text-transform:lowercase;">
          <label for="usuario"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Usuario</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col s6">
          
          <input id="clave" type="password" class="validate">
          <label for="clave"><i class="fa fa-lock" aria-hidden="true"></i> Contraseña</label>
        </div>
      </div>
        <button class="btn waves-effect waves-light #d84315 deep-orange darken-3" type="submit" name="action">Ingresar <i class="fa fa-sign-in" aria-hidden="true"></i>
  </button>
    </form>
  </div>