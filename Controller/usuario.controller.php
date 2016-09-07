<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");

$accion=$_REQUEST["action"];

 switch ($accion) {

 	case 'guardarusuario':

 		 $usu_tip_docum=$_POST["usu_tip_docum"];
     $usu_num_docum=$_POST["usu_num_docum"];
 		 $usu_nom=$_POST["usu_nom"];
 		 $usu_apell=$_POST["usu_apell"];
     $usu_nick=$_POST["usu_nick"];
     $usu_mail=$_POST["usu_mail"];
     $usu_pass=$_POST["usu_pass"];
     $usu_naci=$_POST["usu_naci"];
     $photo=$_POST["photo"];
 		 $usu_tel=$_POST["usu_tel"];
 		 $usu_cel=$_POST["usu_cel"];
 		 $ciu_cod=$_POST["ciu_cod"];
 		 $usu_dir=$_POST["usu_dir"];
     $usu_fech=$_POST["usu_fech"];
     $usu_estado="activo";
 		 try {
 		 	usuario::guardar($usu_tip_docum,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$usu_pass,$usu_naci,$photo,
      $usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_fech,$usu_estado);
 		 	echo "Guardar con exito";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;

    case 'modificarusuario':
       $usu_tip_docum=$_POST["usu_tip_docum"];
       $usu_num_docum=$_POST["usu_num_docum"];
  		 $usu_nom=$_POST["usu_nom"];
  		 $usu_apell=$_POST["usu_apell"];
       $usu_nick=$_POST["usu_nick"];
       $usu_mail=$_POST["usu_mail"];
       $usu_pass=$_POST["usu_pass"];
       $usu_naci=$_POST["usu_naci"];
       $photo=$_POST["photo"];
  		 $usu_tel=$_POST["usu_tel"];
  		 $usu_cel=$_POST["usu_cel"];
  		 $ciu_cod=$_POST["ciu_cod"];
       $usu_dir=$_POST["usu_dir"];
       $usu_estado=$_POST["usu_estado"];
       $usu_cod=$_POST["usu_cod"];
       try {
         usuario::modificarusuario($usu_tip_docum,
  $usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,
  $usu_pass,$usu_naci,$photo,$usu_tel,$usu_cel,$ciu_cod,
  $usu_dir,$usu_estado,$usu_cod);
         echo "se a modificado";
       }
       catch (Exception $e){
           echo "Ocurrio un error".$e ;
       }
      break;
 }
?>
