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

    // case 'modificar':
    //   $pais_nom=$_POST["pais_nom"];
    //   $estado=["estado"];
    //   $pais_cod=$_POST["pais_cod"];
    //
    //   try {
    //     Gestion_Pais::modificar($pais_nom,$estado,$pais_cod);
    //     echo "Se ha modificado";
    //     }
    //     catch (Exception $e){
    //       echo "Ocurrio un error".$e ;
    //   }
    //   break;
 }


?>
