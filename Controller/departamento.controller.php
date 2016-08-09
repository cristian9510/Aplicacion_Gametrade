<?php
require_once("../Model/conexion.php");
require_once("../Model/departamento.class.php");

$accion=$_REQUEST["action"];
 switch ($accion) {
 	case 'guardardepartamento':
 		 $cod_departamento=$_POST["txtCodigo"];
 		 $departamento_nombre=$_POST["txtName"];
 		 $codigo_pais=$_POST["txtPais"];
 		
 		
 		 try {
 		 	Gestion_Departamento::Guardar($cod_departamento,$departamento_nombre, $codigo_pais);
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