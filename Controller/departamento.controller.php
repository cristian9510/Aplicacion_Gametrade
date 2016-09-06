<?php
require_once("../Model/conexion.php");
require_once("../Model/departamento.class.php");

$accion=$_REQUEST["action"];

 switch ($accion) {

 	case 'guardardepartamento':
 		 $depar_nom=$_POST["depar_nom"];
 		 $pais_cod=$_POST["pais_cod"];


 		 try {
 		 	Gestion_Departamento::guardar($depar_nom,$pais_cod);
 		 	echo "Guardar con exito";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;
 }


?>
