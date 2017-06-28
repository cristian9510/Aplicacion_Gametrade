<?php
require_once("../Model/conexion.php");
require_once("../Model/registroUsu.class.php");
/*require_once("../Model/recaptchalib.php");*/

$accion=$_POST["v_action"];






 switch ($accion) {
 
 	case 'guardar':
//  
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
 		$fecha= strftime("%d-%m-%Y");  
 		$contrasena=$_POST["contrasena"];
 		// $photo=$_POST["photo"];*/
		$nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
		$nuevafecha = date ( 'j-m-Y' , $nuevafecha );
 
 		 try {
 		 	registro_class::guardar($codigoRol,$estado,$tipDocument,$numDocum,$nombre,$apellido,$nacimiento,$telefono,$celphone,$direccion,$nuevafecha,$ciudad,$correo,$usuario,$contrasena);
 		 	
 		 	echo "({st:'ok'})";

 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;
 	
 	default:
 		# code...
 		break;
 }



 /*$codigoRol=2;
		 $estado=1;
		 $fecha="2016/08/07";
 		 $tipDocument=$_POST["cbTipDocum"];
 		 $numDocum=$_POST["numDocument"];
 		 $nombre=$_POST["nameRegist"];
 		 $apellido=$_POST["lastRegist"];
 		 $nacimiento=$_POST["bornRegist"];
 		 $telefono=$_POST["phoneRegist"];
 		 $celphone=$_POST["CelphoneRegist"];
 		 $direccion=$_POST["addressRegist"];
 		 $ciudad=$_POST["cbCiudad"];
 		 $correo=$_POST["emailRegist"];
 		 $usuario=$_POST["nickRegist"];
 		 $contrasena=$_POST["passRegist"];*/



     
      // your secret key
//  $secret = "6LferBwUAAAAAC5f03lrHfdqAErDVn9oq4n8_4k5";
 
// // empty response
// $response = null;
 
// // check secret key
//  $reCaptcha = new ReCaptcha($secret);

// // if submitted check response
// if ($_POST["g-recaptcha-response"]) {
//     $response = $reCaptcha->verifyResponse(
//         $_SERVER["REMOTE_ADDR"],
//         $_POST["g-recaptcha-response"]
//     );
// }

// if ($response != null && $response->success) {
//     echo "Hi " . $_POST["nombre"] . " (" . $_POST["apellido"] . "), thanks for submitting the form!";
//   } else {
// echo " no paso";
// }
?>

