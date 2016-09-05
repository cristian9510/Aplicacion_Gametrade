<?php
  class usuario{
    public static function guardar($usu_tip_docum,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$usu_pass,$usu_naci,$usu_photo,$usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_fech,$usu_estado);
    $pdo = ConexionBD::AbrirBD();

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO tbl_usuario(usu_tip_docum,usu_num_docum,usu_nom,usu_apell,usu_nick,usu_mail,usu_pass,usu_naci,photo,usu_tel,usu_cel,ciu_cod,usu_dir,usu_fech,usu_estado) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($usu_tip_docum,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$usu_pass,$usu_naci,$usu_photo,$usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_fech,$usu_estado));

    ConexionBD::DesconectarBD();
  }
 ?>
