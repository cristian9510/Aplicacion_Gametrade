<?php


class Gestion_Videojuego
{
	
	function Guardar($jue_usuario,$jue_codigo,$jue_consol,$jue_categor,$jue_name,$jue_detail,$jue_cantidad,$jue_imagen,$jue_trailer,$jue_estado,$jue_fecha,$jue_clave)
	{

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "INSERT INTO tbl_videojuego (jue_cod,usu_cod,jue_nom,cons_cod,cat_cod,jue_desc,jue_cant,jue_trailer,jue_fech_public,jue_imagen, jue_pal_clave,jue_estado) values (?,?,?,?,?,?,?,?,?,?,?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($jue_codigo,$jue_usuario,$jue_name,$jue_consol,$jue_categor,$jue_detail,$jue_cantidad,$jue_trailer,$jue_fecha,$jue_imagen,$jue_clave,$jue_estado));

		ConexionBD::DesconectarBD();

	}

	function mostrarConsol(){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "select * from tbl_consola";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}

	function mostrarCategoria(){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "select * from tbl_categoria_jue";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}


	function mostrarjuego(){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "select * from tbl_videojuego";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}


	function mostrarcodigojuego(){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "select jue_cod from tbl_videojuego ORDER BY jue_cod desc";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetch(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}







}

?>