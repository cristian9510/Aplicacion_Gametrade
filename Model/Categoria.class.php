<!--Se recojen los datos para envíarlos a la Base de Datos-->
<?php
class Categoria_jue{
  function Guardar($cat_cod, $cat_nom, $cat_fech, $cat_desc, $cat_estado){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO tbl_categoria_jue(cat_cod, cat_nom, cat_fech, cat_desc, cat_estado) values(?,?,?,?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($cat_cod, $cat_nom, $cat_fech, $cat_desc, $cat_estado));

    ConexionBD::DesconectarBD();

    function Consultar(){

 		$pdo = ConexionBD::AbrirBD();
    	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql= "SELECT * FROM tbl_categoria_jue ORDER BY cat_nom";

	    $query= $pdo->prepare($sql);
    	$query->execute();

    	$result = $query->fetchALL(PDO::FETCH_BOTH);

    	ConexionBD::CerrarBD();

    	return $result;
 	}

 	function Modificar($cat_cod, $cat_nom, $cat_fech, $cat_desc, $cat_estado){

 		$pdo = ConexionBD::AbrirBD();
    	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql= "UPDATE tbl_categoria_jue SET cat_nom = ? cat_desc = ? cat_estado = ? cat_fech = ?  WHERE cat_cod = ?";

	    $query= $pdo->prepare($sql);
    	$query->execute(array($cat_nom, $cat_desc, $cat_estado, $cat_fech, $cat_cod));

   
    	ConexionBD::CerrarBD();
	}
}
?>
