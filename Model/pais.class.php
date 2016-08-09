<?php


class Gestion_Pais
{
	
	function guardar($cod_pais,$nom_pais){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "INSERT INTO tbl_pais (pais_cod,pais_nom) values (?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($cod_pais,$nom_pais));

		ConexionBD::DesconectarBD();

	}

    function cargarpais(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "SELECT * FROM tbl_pais";

		$query= $pdo->prepare($sql);
		$query->execute();
		
		$result = $query ->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}
}

?>