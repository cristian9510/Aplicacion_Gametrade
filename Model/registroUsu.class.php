<?php


class registro_class
{
	
	function guardar($codigoRol,$estado,$tipDocument,$numDocum,$nombre,$apellido,$nacimiento,$telefono,$celphone,$direccion,$fecha,$ciudad,$correo,$usuario,$contrasena){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "INSERT INTO tbl_usuario (tip_documento,num_documento,usu_nick,usu_pass,usu_nom,usu_apell,usu_naci,usu_tel,usu_cel,usu_dir,usu_mail,rol_cod,ciu_cod,usu_estado,usu_fech) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($tipDocument,$numDocum,$usuario,$contrasena,$nombre,$apellido,$nacimiento,$telefono,$celphone,$direccion,$correo,$codigoRol,$ciudad,$estado,$fecha));

		ConexionBD::DesconectarBD();

	}
}

?>