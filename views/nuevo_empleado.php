<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
session_start();
if($_SESSION["logged"] == 0){
    header('location: index.php');
}
require_once('../scripts/constantes.php');   
?>

<h5> Agregar Nuevo Empleado </h5>
<hr>
<div class="row">
    <form class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <input id="cct_nuevo" name="cct_nuevo" type="text" class="validate" disabled>
            </div>
            <div class="input-field col s6">
                <input id="nombre_cct_nuevo" name="nombre_cct_nuevo" type="text" class="validate" disabled>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <input id="nombre_nuevo" name="nombre_nuevo"type="text" class="validate" >
                <label for="nombre_nuevo">Nombre</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input id="rfc_n" name="rfc_n" type="text" class="validate" required>
                <label for="rfc_n">RFC</label>
            </div>
            <div class="input-field col s4">
                <input id="cve_fed_n" name="cve_fed_n" type="text" class="validate" required>
                <label for="cve_fed_n" name="cve_fed_n">Clave Federal</label>
            </div>
            <div class="input-field col s4">
                <input id="num_empleado_n" name = "num_empleado_n" type="text" class="validate" required>
                <label for="num_empleado_n">Número de empleado</label>
            </div>
        </div>
        
         <div class="row">
            <div class="input-field col s4">
                <input id="puesto_n" name="puesto_n" class="autocomplete-puesto"  type="text" required>
                <label for="puesto_n">Puesto</label>
            </div>
            <div class="input-field col s4">
                <input id="categoria_n" name="categoria_n" type="text" class="autocomplete-categoria" required>
                <label for="categoria_n">Categoría</label>
            </div>
            <div class="input-field col s4">
                <input id="contrato_n" name = "contrato_n" type="text"  class="autocomplete-contrato" required>
                <label for="contrato_n">Tipo de Contrato</label>
            </div>
        </div>
        
        
        
    </form>
</div>
<script>
$(document).ready(function(){
    
    $('#cct_nuevo').val($('#autocomplete-cct').val());
    $('#nombre_cct_nuevo').val($('#nomEscuela').val());
    
    $('input.autocomplete-puesto').autocomplete({
      data: {
        <?php 
           $conn = new mysqli(HOST, 'seduzac_con', 'F2AE9469B26199657C279E55B1747',DATABASE);
           $queryPuesto = "SELECT * FROM puestos";
           $rPuesto = $conn->query($queryPuesto);
          while($puesto = $rPuesto->fetch_array()){
        ?>
        "<?php echo $puesto[1]; ?>": null,
          <?php } ?>
        "-":null  
      },
    });
    $('input.autocomplete-categoria').autocomplete({
      data: {
        <?php 
           
           $querycategoria = "SELECT * FROM categorias";
           $rCat = $conn->query($querycategoria);
          while($categoria = $rCat->fetch_array()){
        ?>
        "<?php echo $categoria[1]; ?>": null,
          <?php } ?>
        "-":null  
      },
    });
    
    $('input.autocomplete-contrato').autocomplete({
      data: {
        <?php 
           
           $queryContrato = "SELECT * FROM contratos";
           $rContrato = $conn->query($queryContrato);
          while($contrato = $rContrato->fetch_array()){
        ?>
        "<?php echo $contrato[1]; ?>": null,
          <?php } ?>
        "-":null  
      },
    });
    
  });

</script>
