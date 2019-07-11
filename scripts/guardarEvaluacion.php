<?php

// guardamos si se entrevisto al empleado
if( $_POST['entrevistado'] == 'si'){
	
	
	$folio = 'text';
	$fecha = date("Y-m-d H:i:s");
	$encuestador = 'claveEncuestador';
	$empleado = 1;
	$query = "INSERT INTO encuestas (
	folio,
	fecha,
	encuestador,
	empleado,
	q1,
	q2,
	q2_10,
	q3,
	q4,
	q4_12,
	ineFront,
	ineBack,
	empleadoFoto
	) VALUES (
	'".$folio."',
	'".$fecha."',
	'".$encuestador."',
	$empleado,
	".$_POST['q1'].",
	'".$_POST['q2']."',
	'".$_POST['q2_10']."',
	'".$_POST['q3']."',
	".$_POST['q4'].",
	'".$_POST['q4_12']."',
	'".$_POST['ineFront']."',
	'".$_POST['ineBack']."',
	'".$_POST['empleadoFoto']."'
	)";

	
	require_once('constantes.php');
		$conn = new mysqli(HOST, 'seduzac_reg', '3C4F3B8B214AF57424728AEE374CD',DATABASE);
	    $conn->query($query);
		echo "Se ha registrado la encuesta";
}

if( $_POST['entrevistado'] == 'no'){
	echo "no";
}



?>