<?php
	class Gestion_Departamento
	{
		function guardar($depar_nom,$pais_cod){
			$pdo = ConexionBD::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql= "INSERT INTO tbl_departamento (depar_nom,pais_cod) values (?,?)";

			$query= $pdo->prepare($sql);
			$query->execute(array($depar_nom,$pais_cod));

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
