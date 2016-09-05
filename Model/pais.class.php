<?php
class Gestion_Pais{
	public static function guardar($pais_nom){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "INSERT INTO tbl_pais (pais_nom) values (?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($pais_nom));

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
