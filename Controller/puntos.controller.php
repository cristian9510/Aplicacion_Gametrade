<?php
//Conexiones para envíar a la BD:
require_once("../Model/conexion.php");
require_once("../Model/puntos.class.php");

$accion=$_REQUEST["action"];    

  switch ($accion) {

    case 'guardarpunto':

//Grabar los datos:
    $pto_cod= $_POST["pto_cod_txt"];
    $pto_moneda= $_POST["pto_moneda_txt"];
    $pto_desc= $_POST["Descripcion_pto"];

//Validación de datos, verificación de que si se ha guardado ó no:
  try {
  	puntos::guardar($pto_cod,$pto_moneda,$pto_desc);
    echo "Guardado con &eacute;xito";
  }
  	catch (Exception $e){
      	echo $e;
  }
  break;
}

?>
