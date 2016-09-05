<?php
require_once("../Model/conexion.php");
require_once("../Model/pais.class.php");

$accion=$_REQUEST["action"];

 switch ($accion) {

 	case 'guardarpais':

 		 $pais_nom=$_POST["pais_nom"];

 		 try {
 		 	Gestion_Pais::guardar($pais_nom);
 		 	echo "Guardar con exito";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;

 }
?>
