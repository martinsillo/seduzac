<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
session_start();

// guardamos si se entrevisto al empleado
if( $_POST['entrevistado'] == 'si'){
	
	$folio = md5(date("Y-m-d H:i:s"));
	$fecha = date("Y-m-d H:i:s");
	$encuestador = $_SESSION['nombre'];
	$query = "INSERT INTO encuestas (
	folio,
	fecha,
	encuestador,
	empleado,
    accede_encuesta,
	q1,
	q2,
	q2_10,
	q3,
	q4,
	q4_12,
	ineFront,
	ineBack,
	empleadoFoto,
    no_respuesta
	) VALUES (
	'".$folio."',
	'".$fecha."',
	'".$encuestador."',
	".$_POST['idEmpleado'].",
    1,
	".$_POST['q1'].",
	'".$_POST['q2']."',
	'-',
	'".$_POST['q3']."',
	".$_POST['q4'].",
	'".$_POST['q4_12']."',
	'".$_POST['ineFront']."',
	'".$_POST['ineBack']."',
	'".$_POST['empleadoFoto']."',
    0
	)";
    


	
	require_once('constantes.php');
		$conn = new mysqli(HOST, 'seduzac_reg', '3C4F3B8B214AF57424728AEE374CD',DATABASE);
	    $conn->query($query) or die ($conn->error);
		echo "Se ha registrado la encuesta";
}





if( $_POST['entrevistado'] == 'no'){
    
	
    $folio = md5(date("Y-m-d H:i:s"));
	$fecha = date("Y-m-d H:i:s");
	$encuestador = $_SESSION['nombre'];
	$query = "INSERT INTO encuestas (
	folio,
	fecha,
	encuestador,
	empleado,
    accede_encuesta,
	q1,
	q2,
	q2_10,
	q3,
	q4,
	q4_12,
	ineFront,
	ineBack,
	empleadoFoto,
    no_respuesta
	) VALUES (
	'".$folio."',
	'".$fecha."',
	'".$encuestador."',
	".$_POST['idEmpleado'].",
	0,
    0,
    '-',
    '-',
    '1900-01-01',
    0,
    '-',
    '-',
    '-',
    '-',
    ".$_POST['respuesta']."
	)";

	
	require_once('constantes.php');
		$conn = new mysqli(HOST, 'seduzac_reg', '3C4F3B8B214AF57424728AEE374CD',DATABASE);
	    $conn->query($query) or die ($conn->error);
		echo "Se ha registrado la encuesta";
        
}


?>