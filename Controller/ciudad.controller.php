<?php
require_once("../Model/conexion.php");
require_once("../Model/ciudad.class.php");

$accion=$_REQUEST["action"];
 switch ($accion) {
 	case 'guardarciudad':
 		 
 		 $ciu_codigo=$_POST["txtCiudad"];
 		 $ciu_nombre=$_POST["txtName"];
 		 $ciu_departamento=$_POST["txtCodigo"];
 		
 		 try {
 		 	Gestion_Ciudad::Guardar($ciu_codigo,$ciu_nombre,$ciu_departamento);
 		 	echo "Guardar con exito";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;
 	
 	default:
 		# code...
 		break;
 }
?>