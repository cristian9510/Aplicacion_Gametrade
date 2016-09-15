<?php
  require_once("../Model/conexion.php");
  require_once("../Model/Categoria_bono.class.php");

  $cat_bono_mo=categoria_bono::consultarporCodigo(base64_decode($_GET["codigo_cat_bono"]));
  date_default_timezone_set('America/Bogota');
?>

<meta charset="utf-8">
<div class="cat_bono_mo">
  <section>
    <h1>Modificar categoria bono</h1>
    <form action="../Controller/categoria_bono.controller.php" method="post">
      <input type="hidden" name="cat_bono_cod" readonly value="<?php echo $cat_bono_mo["cat_bono_cod"]; ?>"/>
      <br><br>
      <label>Nombre: </label>
      <input type="text" name="cat_bono_nom" required value="<?php echo $cat_bono_mo["cat_bono_nom"]; ?>">
      <br><br>
      <input type="hidden" name="cat_bono_fech" readonly value="<?php echo date('d/m/Y')?>"/>
      <label>Estado: </label>
      <input type="text" name="cat_estado" required value="<?php echo $cat_bono_mo["cat_estado"]; ?>">
      <br><br>
      <button  name="action" value="modificar">Modificar</button>
    </form>
  </section>
</div>
