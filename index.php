<?php

ini_set('display_errors',0);
session_start();
unset($_SESSION);
session_destroy();
require_once('scripts/constantes.php');

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
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div class="center"><img src="img/imgSeduzac.png"></div><br>
		<hr>
      <div class="row center">
		  <?php require_once("scripts/inicializacion.php"); 
		     if($setup){
				 include("views/setup.php");
			 }else{
				 include("views/login.php");
			 }
		  ?>
      </div>
         </div>
  </div>
  <footer class="page-footer white">
    <div class="footer-copyright">
      <div class="container">
      Powered by <a class="orange-text text-lighten-3" href="https://cozcyt.gob.mx/labsol/"><img src="img/logo_labsol.png"></a> &nbsp;|&nbsp; <a href="https://www.gnu.org/licenses/gpl-3.0.en.html" target="_blank" > <img src="img/gpl3_logo.png" width="80"></a>
      </div>
    </div>
  </footer>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/materialize.js"></script>
	<?php
	if($setup){
		?><script src="js/setup.js"></script> 
	<?php
	}else{
	  ?><script src="js/login.js"></script> 	
 <?php	} ?>
  </body>
</html>
