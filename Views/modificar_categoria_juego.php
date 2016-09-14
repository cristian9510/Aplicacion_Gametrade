<?php
  require_once("../Model/conexion.php");
  require_once("../Model/Categoria.class.php");

$cat_juegomo = Categoria_jue::consultarporCodigo(base64_decode($_GET["codigo_categoria"]));
date_default_timezone_set('America/Bogota');
?>


    <meta charset="utf-8">
        <div class="tablabono">
          <section>
          <!--est es para doper modificar-->
          <h1>Modificar categoria de juego.</h1>
          <form action="../Controller/categoria.controller.php" method="post">
            <input type="hidden" name="cat_cod" readonly value="<?php echo $cat_juegomo["cat_cod"]; ?>" />

            <label>Nombre: </label>
            <input type="text" name="cat_nom"  required value="<?php echo $cat_juegomo["cat_nom"]; ?>"/>
            </br>
            </br>
            <label>Descripcion: </label>
            <input type="text" name="cat_desc" required value="<?php echo $cat_juegomo["cat_desc"]; ?>"/>
            </br>
            </br>

            <input type="hidden" name="cat_fech" readonly value="<?php echo date('d/m/Y')?>"/>

            <label>Estado:</label>
            <input type="text" name="cat_estado" required value="<?php echo $cat_juegomo["cat_estado"]; ?>"/>
            </br>
            </br>

            <button name="action" value="modificar">modificar</button>
          </form>
        </section>
      </div>
