<?php
require_once("../Model/conexion.php");
require_once("../Model/bono.class.php");

$bonomo = bono::consultarporCodigo($_GET["codigo_bono"]);

?>
<!--est es para doper modificar-->
<h1>modificar bono</h1>
<form action="../Controller/bono.controller.php" method="post">

  <label>Código: <?php echo $bonomo["bono_cod"]; ?></label>
  <input type="hidden" name="bono_cod" readonly value="<?php echo $bonomo["bono_cod"]; ?>" />
  </br>
  </br>
  <label>Código de categoria de bono: </label>
  <input type="text" name="cat_bono_cod" required value="<?php echo $bonomo["cat_bono_cod"]; ?>"/>
  </br>
  </br>
  <label>Codigo de punto: </label>
  <input type="text" name="pto_cod" required value="<?php echo $bonomo["pto_cod"]; ?>"/>
  </br>
  </br>
  <label>Descripción de bono:</label>
  <input type="text" name="bono_desc" required value="<?php echo $bonomo["bono_desc"]; ?>"/>
  </br>
  </br>
  <label>Cantidad de bonos:</label>
  <input type="text" name="bono_cant" required value="<?php echo $bonomo["bono_cant"]; ?>"/>
  </br>
  </br>
  <!--este es el boton-->
  <button name="action" value="modificar">modificar</button>
</form>
