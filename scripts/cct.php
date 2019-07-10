<?php
if(strlen($_POST['cct']) > 8){
error_reporting(E_ALL);
ini_set('display_errors',1);
require_once('constantes.php');
$conn = new mysqli(HOST, 'seduzac_con', 'F2AE9469B26199657C279E55B1747',DATABASE);
$queryCCT = "SELECT id,nombre FROM centros_trabajo WHERE cct = '".$_POST['cct']."'";
$exeQueryCCT = $conn->query($queryCCT) or die ($conn->error);
$res = $exeQueryCCT->fetch_array();
if($res[0] == ''){die(json_encode(0));}
$queryEmpleados = "CALL listaEmpleados(".$res[0].")";
$exeQueryEmpleados = $conn->query($queryEmpleados) or die (json_encode($conn->error));

$cctEmpleados = array();

while($resEmpleado = $exeQueryEmpleados->fetch_array()){
    $cctEmpleados[] = array($resEmpleado[0],$resEmpleado[1],$resEmpleado[2],$resEmpleado[3],$resEmpleado[4],$resEmpleado[5],$resEmpleado[6]);
}

$cctInfo = array();
$cctInfo[] = $res[0];
$cctInfo[] = $res[1];
$cctInfo[] = $cctEmpleados;
echo json_encode($cctInfo);
}
