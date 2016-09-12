<?php
  require_once("../Model/conexion.php");
  require_once("../Model/Categoria_bono.class.php");

  $cat_bono_mo=categoria_bono::consultarporCodigo(base64_decode($_GET["codigo_cat_bono"]));
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
      <label>Fecha: </label>
      <input type="date" name="cat_bono_fech" required value="<?php echo $cat_bono_mo["cat_bono_fech"]; ?>">
      <br><br>
      <button  name="action" value="modificar">Modificar</button>
    </form>
  </section>
</div>
