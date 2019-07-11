<?php
session_start();
$_SESSION['instalar'] = "si";
?>
<h5>Instalación</h5>
El sistema aún no se ha inicializado, por favor llena los siguientes campos par continuar, <span style="color:red;"><strong>el usuario aqui registrado, será el usuario principal en este dispositivo</strong></span>.
<br>
<form onsubmit="return instalar();">
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input  id="tablet" type="text" class="validate" required style="text-transform:uppercase;">
          <label for="tablet">Num. de la Tablet</label>
        </div>
        <div class="input-field col s6">
          <input id="nombre" type="text" class="validate" required style="text-transform:capitalize;">
          <label for="nombre">Nombre del Responsable</label>
        </div>
      </div>
        <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s4">
          <input  id="usuario" type="text" class="validate" required style="text-transform:lowercase;">
          <label for="usuario">Usuario</label>
        </div>
        <div class="input-field col s4">
          <input id="clave" type="password" class="validate" required>
          <label for="clave">Contraseña</label>
        </div>
           <div class="input-field col s4">
          <input id="clave2" type="password" class="validate" required>
          <label for="clave2">Repetir Contraseña</label>
        </div>
      </div>
        <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input  id="telefono" type="tel" class="validate" required pattern="[0-9]{10}" maxlength="10">
          <label for="telefono">Teléfono</label>
        </div>
        <div class="input-field col s6">
          <input id="email" type="email" class="validate" required style="text-transform:lowercase;">
          <label for="email">Email</label>
        </div>
      </div>
    <div style="text-align:left;">
    <button class="btn waves-effect waves-light #f4511e deep-orange darken-1" type="submit" name="action">Continuar&nbsp;
    <i class="fa fa-sign-in" aria-hidden="true"></i>
        
  </button>
        </div>
    </form>