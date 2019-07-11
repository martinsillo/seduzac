<?php
session_start();
if($_SESSION["logged"] == 0){
    header('location: index.php');
}
require_once('scripts/constantes.php');   
$conn = new mysqli(HOST, 'seduzac_con', 'F2AE9469B26199657C279E55B1747',DATABASE);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>SEDUZAC - Encuestas</title>
  <link href="css/font-awesome.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-green lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><small></small></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div class="center"><img src="img/imgSeduzac.png"></div><br>
		<hr>
      <div class="row center">
		  <div style="text-align:left;">
           <h5> Auditoria Estatal de los trabajadores de Educación</h5>
            
              
<div class="row">
<div class="input-field col s4">
 <input type="text" id="autocomplete-cct" class="autocomplete-cct" onchange="cargaInfoCCT(this.value)">
          <label for="autocomplete-cct">CCT</label>
  </div>
<div class="input-field col s8">
 <input type="text" disabled id="nomEscuela" value="-Seleccione CCT-">
          <label for="autocomplete-cct">Escuela</label>
  </div>    
</div>
<a href="javascript:agregarEmpleado" class="btn btn-success btn-small"> Agregar Empleado</a><br><br>
<hr>			  
<div id="listaPersonal">
<table class="highlight" id="recordsPersonal">
        <thead>
          <tr>
              <th>Num Empleado</th>
              <th>RFC</th>
              <th>Nombre</th>
              <th>Puesto</th>
              <th>Encuestado</th>
              <th>Fecha</th>
			  <th>Acción</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
			<td>-</td>  
          </tr>
       
        </tbody>
      </table>
</div>
    </div>
      </div>
         </div>
  </div>
	
  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content" id="contenidoModal">
      <h4>--</h4>
      <p>--</p>
    </div>
    <div class="modal-footer" id="footerModal">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">--</a>
    </div>
  </div>
	
	
  <footer class="page-footer white">
    <div class="footer-copyright">
      <div class="container">
      <span style="color:#333;">Powered by </span> <a class="orange-text text-lighten-3" href="https://cozcyt.gob.mx/labsol/"><img src="img/logo_labsol.png"></a> &nbsp;|&nbsp; <a href="https://www.gnu.org/licenses/gpl-3.0.en.html" target="_blank" > <img src="img/gpl3_logo.png" width="80"></a>
      </div>
    </div>
  </footer>
	
	

	
	
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/materialize.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('input.autocomplete-cct').autocomplete({
      data: {
        <?php 
           $queryCCt = "SELECT * FROM centros_trabajo";
           $rCCt = $conn->query($queryCCt);
          while($record = $rCCt->fetch_array()){
        ?>
        "<?php echo $record[1]; ?>": null,
          <?php } ?>
        "-":null  
      },
    });
  });
     
     	
</script>	
 <script type="application/javascript" src="js/main.js?v2.1.4"></script>    
  </body>
</html>