<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario_admin.class.php");

$accion=$_REQUEST["action"];
 switch ($accion) {
 	case 'guardarusuario':
 		 
 		 $usu_cod=$_POST["txtCodigo"];
 		 $usu_nombre=$_POST["txtNombre"];
 		 $usu_apellido=$_POST["txtApellido"];
 		 $usu_telefono=$_POST["txtTelefono"];
 		 $usu_correo=$_POST["txtCorreo"];
 		 $usu_celular=$_POST["txtCelular"];
 		 $usu_ciudad=$_POST["txtCiudad"];
 		 $usu_puntos=$_POST["txtPuntos"];


 		 try {
 		 	Gestion_Consola::Guardar($usu_cod,$usu_nombre,$usu_apellido,$usu_telefono,$usu_correo,$usu_celular,$usu_ciudad,$usu_puntos);
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