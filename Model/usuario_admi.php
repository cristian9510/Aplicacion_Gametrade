<?php


class Gestion_Usuario
{
	
	function guardar($usu_cod,$usu_nombre,$usu_apellido,$usu_telefono,$usu_correo,$usu_celular,$usu_ciudad,$usu_puntos){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "INSERT INTO tbl_usuario (usu_cod,usu_tip_docum,usu_num_docum,usu_pass,usu_nick,usu_nom,usu_apell,rol_cod,usu_tel,usu_naci,usu_cel,usu_dir,usu_mail,ciu_cod,usu_estado,usu_fech) values (?,?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($usu_cod,$usu_nombre,$usu_apellido,$usu_telefono,$usu_correo,$usu_celular,$usu_ciudad,$usu_puntos));

		ConexionBD::DesconectarBD();

	}
}

?>