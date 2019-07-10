<?php
	require_once('constantes.php');
	$conn = new mysqli(HOST, 'seduzac_con', 'F2AE9469B26199657C279E55B1747',DATABASE);
	$consultar = $conn->query("SELECT COUNT(*) FROM configuracion") or die ($conn->error);
    $r = $consultar->fetch_array();
    if($r[0] == 0){
		$setup = true;
	}else{
		$setup = false;
	}
    $conn->close();
    unset($conn);
?>