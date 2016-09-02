<?php
require_once("../Model/coneXion.php");
require_once("../Model/Categoria_bono.class.php");

$cat_bono= categoria_bono::mostrar_categoria_bono();
 ?>

<!--contenedor del formulario-->
<div class="formilario_cat_bono">
  <h1>categoria de bonos</h1>
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

<!--estes es el proceso para que aparesca y se pueda mostrar-->
<div class="tablacategoriabono">
<table border="1px">
  <thead>
    <th colspan="4">informacion de categoria bono</th>
    <tr>
      <td>codigo</td>
      <td>nombre</td>
      <td>fecha de ingreso</td>
      <td>Operaciones</td>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($cat_bono as $cb): ?>
        <tr>
          <td><?php echo $cb["cat_bono_cod"]; ?></td>
          <td><?php echo $cb["cat_bono_nom"]; ?></td>
          <td><?php echo $cb["cat_bono_fech"];?></td>
          <td>
            <a href="modificar_categoria_bono.php?codigo_cat_bono=<?php echo base64_encode($cb["cat_bono_cod"]); ?>">Modificar</a>

            <a href="../Controller/categoria_bono.controller.php?action=eliminar_cat_bono&codigo_cat_bono=<?php echo base64_encode($cb['cat_bono_cod']); ?>">Eliminar</a>
          </td>
        </tr>
      <?php endforeach ?>
  </tbody>
</table>
</div>
