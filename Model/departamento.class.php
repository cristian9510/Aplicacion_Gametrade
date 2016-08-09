<?php


class Gestion_Departamento
{
	
	function guardar($cod_departamento,$departamento_nombre, $codigo_pais){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "INSERT INTO tbl_departamento (depar_cod,depar_nom,pais_cod) values (?,?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($cod_departamento,$departamento_nombre, $codigo_pais));

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
}

?>