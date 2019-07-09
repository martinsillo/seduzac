<div class="row">
<div class="input-field col s4">
 <input type="text" id="autocomplete-cct" class="autocomplete-cct" onchange="cargaInfoCCT(this.value)">
          <label for="autocomplete-cct">CCT</label>
  </div>

<div class="input-field col s8">
	<input type="text" id="escuelaNombre" onchange="cargaMaestros()">
</div>

</div>
<div class="file-field input-field">
      <div class="btn">
        <span>Foto del Centro de trabajo</span>
        <input type="file" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
    </div>

  <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">assignment_ind</i>
          <input type="text" id="autocomplete-input" class="autocomplete" onchange="cargaInfoEmpleado()">
          <label for="autocomplete-input">Nombre del Empleado</label>
        </div>
      </div>
    </div>
  </div>
<div id="infoEmpleado"></div>
Estatus del empleado
<p>
      <label>
        <input name="group1" type="radio" onclick="cargaPreguntas(1);" />
        <span>Se encuentra</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" onclick="cargaPreguntas(2);"/>
        <span>Otro ocupa la plaza</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" onclick="cargaPreguntas(3);" />
        <span>No se encuentra</span>
      </label>
    </p>
<div id="preguntasEmpleado"></div>
<button class="waves-effect waves-light  green darken-3 btn-small">Guardar Registro</button>
   