<?php
ini_set('display_errors',0);
session_start();
if($_SESSION['login'] == "si"){
        require_once('constantes.php');
		$conn = new mysqli(HOST, 'seduzac_con', 'F2AE9469B26199657C279E55B1747',DATABASE);
        $query = "CALL login('".$_POST['usuario']."','".$_POST['clave']."')";
        $rq1 = $conn->query($query) or die ($conn->error);
        $res = $rq1->fetch_array();
            if($res[0] == 1){
                  $conn->close();
                  unset($conn);
                  $conn = new mysqli(HOST, 'seduzac_con', 'F2AE9469B26199657C279E55B1747',DATABASE);
                  $query = "CALL infoConfig('".$_POST['usuario']."','".$_POST['clave']."')";
                  $exeQuery = $conn->query($query) or die ($conn->error);
                  $r = $exeQuery->fetch_array();
                  $_SESSION['tablet'] =  $r[0];
                  $_SESSION['nombre'] =  $r[1];
                  $_SESSION["logged"] = 1;
                  $conn->close();
                  unset($conn);
                  unset($r);
                  unset($exeQuery);
                  unset($query);
                  $result = array(1,"-");
            }else{
                $result = array(0,"Nombre de usuario o clave incorrectos");
            }
        }


echo json_encode($result);

?>