<?php
ini_set('display_errors',0);
session_start();
if($_SESSION['instalar'] == "si"){
    	require('constantes.php');
		$conn = new mysqli(HOST, 'seduzac_reg', '3C4F3B8B214AF57424728AEE374CD',DATABASE);
        $query = "CALL instalacion('".$_POST['tablet']."','".$_POST['usuario']."','".$_POST['clave']."','".$_POST['nombre']."','".$_POST['email']."','".$_POST['telefono']."')";
        
        if($conn->query($query)){
            $result = array(1,"Se ha guardado correctamente");
        }else{
            $result = array(0,"Error al guardar: ".$conn->error);
        }
}

echo json_encode($result);

?>