<!--aqui recojemos los datos y los llevamos a la base de datos-->
<?php
class bono{
  function guardar($cat_bono_cod,$pto_cod,$bono_desc,$bono_cant){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO tbl_bono(cat_bono_cod,pto_cod,bono_desc,bono_cant) values(?,?,?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($cat_bono_cod,$pto_cod,$bono_desc,$bono_cant));

    ConexionBD::DesconectarBD();

  }
//se hace la consulta a la tabla para mostrar datos
  function mostrar_bono(){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_bono";

    $query= $pdo->prepare($sql);
    $query->execute();

    $result= $query->fetchALL(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;

  }

  function consultarporCodigo($codigo){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_bono WHERE bono_cod=?";

    $query= $pdo->prepare($sql);
    $query->execute(array($codigo));

    $result= $query->fetch(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;

  }

  function modificar($cat_bono_cod,$pto_cod,$bono_desc,$bono_cant,$bono_cod){

    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="UPDATE tbl_bono SET cat_bono_cod= ? ,pto_cod= ?, bono_desc= ?, bono_cant= ? WHERE bono_cod= ?";
    $query= $pdo->prepare($sql);
    $query->execute(array($cat_bono_cod,$pto_cod,$bono_desc,$bono_cant,$bono_cod));

    ConexionBD::DesconectarBD();

  }

  function mostrarCategoriabono(){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "select * from tbl_categoria_bono";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}

  function mostrarpunto(){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "select * from tbl_pack_punto";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}



}

  ?>
