<?php
//aqui se hace la conecion entre la parte que recoge los datos y la base de datos
require_once("../Model/conexion.php");
require_once("../Model/categoria_bono.class.php");

$accion=$_REQUEST["action"];

switch ($accion) {

  case 'guardar_cat_bono':

  //en esta parte se guardan los datos en la variable guardarbono que esta encima
  $cat_bono_nom=$_POST["cat_bono_nom"];
  $cat_bono_fech=$_POST["cat_bono_fech"];

  //se validan los datos, y le verificamos al usuario si esta guardado o no
  try {
    categoria_bono::guardar($cat_bono_nom,$cat_bono_fech);
    header("location:../Views/admin_categoria_bono.php");
  } catch (Exception $e) {
      echo "No guardo"+$e;

  }
    break;

    case 'modificar':
      $cat_bono_nom=$_POST["cat_bono_nom"];
      $cat_bono_fech=$_POST["cat_bono_fech"];
      $cat_bono_cod=$_POST["cat_bono_cod"];
      try {
        categoria_bono::modificar($cat_bono_nom,$cat_bono_fech,$cat_bono_cod);
        echo "Modifico";
      }
      catch (Exception $e) {
        echo "Ocurrio un error".$e ;
      }
      break;

    case 'eliminar_cat_bono':
      try {
        $catbono = base64_decode($_GET["codigo_cat_bono"]);
        categoria_bono::eliminar_cat_bono($catbono);
        // header("location:http://localhost:8000/Aplicacion_gametrade/Views/admin_categoria_bono.php");
      } catch (Exception $e) {
        echo "string" . $e->getMessage() . $e->getLine();
      }
      break;
}
 ?>
