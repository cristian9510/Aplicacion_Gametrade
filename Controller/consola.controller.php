<?php
require_once("../Model/conexion.php");
require_once("../Model/consola.class.php");

$accion=$_REQUEST["action"];
 switch ($accion) {
 	case 'guardarconsola':
 		 
 		 $cod_consola=$_POST["txtCodigo"];
 		 $cod_nombre=$_POST["txtName"];
 		 $cod_referencia=$_POST["txtReferencia"];
 		 $cod_estado=$_POST["txtEstado"];
 		 $cod_imagen=$_POST["txtImagen"];

 		 try {
 		 	Gestion_Consola::Guardar($cod_consola,$cod_nombre,$cod_referencia,$cod_estado,$cod_imagen);
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