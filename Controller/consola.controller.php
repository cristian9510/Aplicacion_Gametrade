<?php
require_once("../Model/conexion.php");
require_once("../Model/consola.class.php");

$accion=$_REQUEST["action"];

 switch ($accion) {

 	case 'guardarconsola':

 		 $cod_nombre=$_POST["cons_nom"];
 		 $cod_referencia=$_POST["cons_refer"];
 		 $cod_estado="activo";
 		 $cod_imagen=$_POST["cons_imagen"];

 		 try {
 		 	Gestion_Consola::Guardar($cod_nombre,$cod_referencia,$cod_estado,$cod_imagen);
 		 	echo "Guardar con exito";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;
 }
?>
