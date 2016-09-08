<?php
require_once("../Model/conexion.php");
require_once("../Model/Categoria.class.php");

$accion=$_REQUEST["action"];
switch ($accion) {

  case 'Guardar_btn':
//en esta parte se guardan los datos en la variable GuardarCategoria que esta encima
  $cat_nom=$_POST["cat_nom"];
  $cat_fech=$_POST["cat_fech"];
  $cat_desc=$_POST["cat_desc"];
  $cat_estado="activo";

  //se validan los datos, y le verificamos al usuario si esta guardado o no
  try {
    Categoria_jue::guardar($cat_nom,$cat_fech,$cat_desc,$cat_estado);
    echo "Guardado con &eacute;xito";

  } catch (Exception $e) {
    echo "No se guard&oacute;" +$e;

  }

      break;
}
?>
