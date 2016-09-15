<!--este es una conexion por haci desirlo-->
<?php
require_once("../Model/conexion.php");
require_once("../Model/bono.class.php");

//este es para mostrar bono
$cat_bono_cod=bono::mostrarCategoriabono();
$pto_cod=bono::mostrarpunto();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  </head>
  <body>
    <!--contenedor del formulario-->
    <div class="formulariobono">
      <section>
        <h1 style="text-align: center;color: #000">Bono</h1>
      <!--aqui esta el formato y de esta de esta forma se hace -->
        <form action="../Controller/bono.controller.php" method="post">
          <label>Código de categoria de bono: </label>

          <select id="cat_bono_cod" name="cat_bono_cod" required>
            <?php
              echo "<option>Seleccione</option>";

                foreach ($cat_bono_cod as $categoria) {
                  echo "<option value=".$categoria["cat_bono_cod"].">".$categoria["cat_bono_nom"]."</option>";
              }

             ?>
           </select>
          </br>
          </br>
          <label>Codigo de punto: </label>
          <select id="pto_cod" name="pto_cod" required>
            <?php
              echo "<option>Seleccione</option>";

                foreach ($pto_cod as $puntos) {
                  echo "<option value=".$puntos["pto_cod"].">".$puntos["pto_moneda"]."</option>";
              }

             ?>
           </select>
          </br>
          </br>
          <label>Descripción de bono:</label>
          <input type="text" name="bono_desc" required/>
          </br>
          </br>
          <label>Cantidad de bonos:</label>
          <input type="text" name="bono_cant" required/>
          </br>
          </br>
          <!--este es el boton-->
          <button name="action" value="guardarbono"><a class="waves-effect waves-light btn">Guardar</button></a>

        </form>
      </section>
    </div>
  </body>
</html>

<div class="consultar_bono">
  <section>
    <a href="consultar_bono.php">consultar bono.</a>
  </section>
</div>
