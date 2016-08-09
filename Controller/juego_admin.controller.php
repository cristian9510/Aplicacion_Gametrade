<?php
require_once("../Model/conexion.php");
require_once("../Model/juego_admi.class.php");

$accion=$_REQUEST["action"];
 switch ($accion) {
 	case 'juego_admi':
 		 
 		 $jue_usuario=$_POST["txtUsuario"];
 		 $jue_codigo=$_POST["txtCodigo"];
 		 $jue_consol=$_POST["cbConsol"];
 		 $jue_categor=$_POST["cbCategor"];
 		 $jue_name=$_POST["txtName"];
 		 $jue_detail=$_POST["txtDetail"];
 		 $jue_cantidad=$_POST["txtCantidad"];
 		 $jue_imagen=$_POST["txtImagen"];
 		 $jue_trailer=$_POST["txtTrailer"];
 		 $jue_estado=$_POST["txtEstado"];
 		 $jue_fecha=$_POST["txtFecha"];
 		 $jue_clave=$_POST["txtClaves"];

 		 try {
 		 	Gestion_Videojuego::Guardar($jue_usuario,$jue_codigo,$jue_consol,$jue_categor,$jue_name,$jue_detail,$jue_cantidad,$jue_imagen,$jue_trailer,$jue_estado,$jue_fecha,$jue_clave);
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