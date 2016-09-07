<?php
  class usuario{
    public static function guardar($usu_tip_docum,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$usu_pass,$usu_naci,$photo,$usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_fech,$usu_estado){

    $pdo = ConexionBD::AbrirBD();

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO tbl_usuario(usu_tip_docum,usu_num_docum,usu_nom,usu_apell,usu_nick,usu_mail,usu_pass,usu_naci,photo,usu_tel,usu_cel,ciu_cod,usu_dir,usu_fech,usu_estado) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($usu_tip_docum,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$usu_pass,$usu_naci,$photo,$usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_fech,$usu_estado));

    ConexionBD::DesconectarBD();
  }

  public static function consultarciudad(){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql= "select * from tbl_ciudad";

    $query= $pdo->prepare($sql);
    $query->execute();

    $result=$query->fetchALL(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }

  public static function mostrarusuario(){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_usuario";

    $query= $pdo->prepare($sql);
    $query->execute();

    $result= $query->fetchALL(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }

  public static function modificarusuario($usu_tip_docum,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$usu_pass,$usu_naci,$photo,$usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_estado,$usu_cod){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="UPDATE tbl_usuario SET usu_tip_docum=? ,usu_num_docum=? ,usu_nom=? ,usu_apell=? ,usu_nick=? ,usu_mail=? ,usu_pass=? ,usu_naci=? ,photo=? ,usu_tel=? ,usu_cel=? ,ciu_cod=? ,usu_dir=? ,usu_estado=? WHERE usu_cod= ?";
    $query= $pdo->prepare($sql);
    $query->execute(array($usu_tip_docum,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$usu_pass,$usu_naci,$photo,$usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_estado,$usu_cod));

    ConexionBD::DesconectarBD();
  }

  public static function consultarcodigo($codigo){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_usuario WHERE usu_cod=?";

    $query= $pdo->prepare($sql);
    $query->execute(array($codigo));

    $result= $query->fetch(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }
}
 ?>
