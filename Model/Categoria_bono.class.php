<!--aqui recojemos los datos y los llevamos a la base de datos-->
<?php
class categoria_bono{
  function guardar($cat_bono_nom,$cat_bono_fech){
    $pdo= ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO tbl_categoria_bono(cat_bono_nom,cat_bono_fech) values (?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($cat_bono_nom,$cat_bono_fech));

    ConexionBD::DesconectarBD();

  }

  function mostrar_categoria_bono(){
    $pdo= ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_categoria_bono";

    $query= $pdo->prepare($sql);
    $query->execute();

    $result= $query->fetchALL(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }
}
 ?>
