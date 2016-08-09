<?php
require_once("../Model/conexion.php");
require_once("../Model/Categoria.class.php");

$accion=$_REQUEST["action"];
switch ($accion) {
  case 'Guardar_btn':

//en esta parte se guardan los datos en la variable GuardarCategoria que esta encima
  $cat_cod=$_POST["cat_cod_txt"];
  $cat_nom=$_POST["cat_nom_txt"];
  $cat_fech=$_POST["cat_fech_txt"];
  $cat_desc=$_POST["Descripcion"];
  $cat_estado=$_POST["Estado_slct"];

  //se validan los datos, y le verificamos al usuario si esta guardado o no
  try {
    Categoria_jue::guardar($cat_cod,$cat_nom,$cat_fech,$cat_desc,$cat_estado);
    echo "Guardado con &eacute;xito";

  } catch (Exception $e) {
    echo "No se guard&oacute;" +$e;

  }

      break;
}
?>
