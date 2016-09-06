<?php
	class Gestion_Ciudad{
		public static function guardar($ciu_nom,$depar_cod){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "INSERT INTO tbl_ciudad (ciu_nom,depar_cod) values (?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($ciu_nom,$depar_cod));

		ConexionBD::DesconectarBD();
	}

	public static function mostrardepartamento(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "select * from tbl_departamento";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}
}

?>
