<?php
require_once("../Model/conexion.php");
require_once("../Model/registroUsu.class.php");

$accion=$_POST["v_action"];
 switch ($accion) {
 	case 'AgregarUsuario':
 		 $codigoRol=$_POST["codigoRol"];
 		 $estado=$_POST["estado"];
 		 $tipDocument=$_POST["tipDocument"];
 		 $numDocum=$_POST["numDocum"];
 		 $nombre=$_POST["nombre"];

 		 $apellido=$_POST["apellido"];
 		 $nacimiento=$_POST["nacimiento"];
 		 $telefono=$_POST["telefono"];
 		 $celphone=$_POST["celphone"];
 		 $direccion=$_POST["direccion"];

 		 $ciudad=$_POST["ciudad"];
 		 $correo=$_POST["correo"];
 		 $usuario=$_POST["usuario"];

 		 $contrasena=$_POST["contrasena"];
 		 $photo=$_POST["photo"];

 		 try {
 		 	$registroG=registro_class::guardar($codigoRol,$estado,$tipDocument,$numDocum,$nombre,$apellido,$nacimiento,$telefono,$celphone,$direccion,$ciudad,$correo,$usuario,$contrasena,$photo);
 		 	
 		 	$registroG= "({st:'ok'})";
 		 	
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;
 	
 	default:
 		# code...
 		break;
 }
?>