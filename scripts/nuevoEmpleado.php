<?php
session_start();
$query = "call nvoEmpleado(
'".$_POST['rfc']."',
'".$_POST['num_empleado']."',
'".$_POST['nombre']."',
'".$_POST['puesto']."',
'".$_POST['tipo_contrato']."',
'".$_POST['categoria']."',
'".$_POST['cve_fed']."',
'".$_POST['cct']."')";
require_once('constantes.php');
$conn = new mysqli(HOST, 'seduzac_reg', '3C4F3B8B214AF57424728AEE374CD',DATABASE);
$conn->query($query);	
echo "Se ha guardado el empleado";
?>