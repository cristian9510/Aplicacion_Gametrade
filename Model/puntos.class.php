<!--Se recojen los datos para envíarlos a la Base de Datos-->
<?php
/**
 *
 */
 class puntos
 {

 	function guardar($pto_cod, $pto_moneda, $pto_desc)
 	{
 		$pdo = ConexionBD::AbrirBD();
    	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql= "INSERT INTO tbl_pack_punto(pto_cod, pto_moneda, pto_desc) values(?,?,?)";

	    $query= $pdo->prepare($sql);
    	$query->execute(array($pto_cod, $pto_moneda, $pto_desc));

    	ConexionBD::DesconectarBD();
 	}
 }
 ?>
