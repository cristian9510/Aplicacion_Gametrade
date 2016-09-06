<?php
require_once("../Model/coneXion.php");
require_once("../Model/ciudad.class.php");

$accion=$_REQUEST["action"];

 switch ($accion) {

 	case 'guardarciudad':
 		 $ciu_nom=$_POST["ciu_nom"];
 		 $depar_cod=$_POST["depar_cod"];
 		 try {
 		 	Gestion_Ciudad::guardar($ciu_nom,$depar_cod);
 		 	echo "Guardar con exito";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;
 }
?>
