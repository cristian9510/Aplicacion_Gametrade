<?php
require_once("../Model/conexion.php");
require_once("../Model/pais.class.php");

$accion=$_REQUEST["action"];

 switch ($accion) {

 	case 'guardarpais':

 		 $pais_nom=$_POST["pais_nom"];
     $estado="activo";

 		 try {
 		 	Gestion_Pais::guardar($pais_nom,$estado);
 		 	echo "Guardar con exito";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;

    case 'modificar':
      $pais_nom=$_POST["pais_nom"];
      $estado=["estado"];
      $pais_cod=$_POST["pais_cod"];

      try {
        Gestion_Pais::modificar($pais_nom,$estado,$pais_cod);
        echo "Se ha modificado";
        }
        catch (Exception $e){
          echo "Ocurrio un error".$e ;
      }
      break;

 }
?>
