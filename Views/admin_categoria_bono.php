<?php
require_once("../Model/coneXion.php");
require_once("../Model/Categoria_bono.class.php");

$cat_bono= categoria_bono::mostrar_categoria_bono();

 ?>

<!--espacio del titulo titulo-->
<div class="categoria_bono">
  <h1>categoria de bonos</h1>
</div>
<!--contenedor del formulario-->
<div class="formilario_cat_bono">
  <!--aqui esta el formato y de esta de esta forma se hace -->
  <form action="../Controller/categoria_bono.controller.php" method="post">

    <label>nombre: </label>
    <input type="text" name="cat_bono_nom">
    <br>
    <br>
    <label>fecha: </label>

    <input type="date" name="cat_bono_fech">
    <br>
    <br>
    <!--este es el boton-->
    <button name="action" value="guardar_cat_bono">Guardar</button>
  </form>
</div>

<h2>informacion de categoria bono</h2>

<table border="1px">
  <thead>

    <tr>
      <td>codigo</td>
      <td>nombre</td>
      <td>fecha de ingreso</td>
    </tr>

  </thead>

  <tbody>
      <?php
        foreach ($cat_bono as $cb) {
          echo "<tr>
                  <td>".$cb["cat_bono_cod"]."</td>
                  <td>".$cb["cat_bono_nom"]."</td>
                  <td>".$cb["cat_bono_fech"]."</td>
          </tr>";
        }
       ?>
  </tbody>
</table>
