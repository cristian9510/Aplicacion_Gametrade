<?php
include_once("../Model/conexion.php");
include_once("../Model/validarUsu.class.php");

$accion= $_POST["btnusu"];

switch ($accion) {
	case 'ingresoUsu':

		$usuario=$_POST["txtCode"];
		$clave=$_POST["txtName"];

		try {
			$result=Gestionar_Usu::validarUsu($usuario,$clave);
			if ($result!="") {
			
			$_SESSION['usu_nom'] =$result['usu_nom']; 
			
			header("location:../Views/userperfil.php");
		
			}else{
				$num=0;
				echo "<script languaje= 'Javascript'>alert('Datos invalidos')</script>";
				exit();
			}

			if ($num==0) {
				echo "sssss";
				header("location:../Views/index.php");
			}
		

		} catch (Exception $e) {
			echo $e;
		}
		break;
}

?>