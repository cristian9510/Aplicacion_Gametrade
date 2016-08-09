<?php


class Gestion_Consola
{
	
	function guardar($cod_consola,$cod_nombre,$cod_referencia,$cod_estado,$cod_imagen){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "INSERT INTO tbl_consola (cons_cod,cons_nom,cons_refer,cons_estado,cons_imagen) values (?,?,?,?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($cod_consola,$cod_nombre,$cod_referencia,$cod_estado,$cod_imagen));

		ConexionBD::DesconectarBD();

	}
}

?>