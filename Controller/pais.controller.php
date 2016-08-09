<?php
require_once("../Model/conexion.php");
require_once("../Model/pais.class.php");

$accion=$_REQUEST["action"];
 switch ($accion) {
 	case 'guardarpais':
 		 
 		 $cod_pais=$_POST["txtCodigo"];
 		 $nom_pais=$_POST["txtName"];
 		 
 		
 		 try {
 		 	Gestion_Ciudad::Guardar($cod_pais,$nom_pais);
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