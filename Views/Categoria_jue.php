<?php
date_default_timezone_set('America/Bogota');
 ?>
<div class="Titulo_Cat">
  <h1>Categor&iacute;a del juego</h1>
</div>

<div class="Categoria">
  <form class="categoria_frm" action="../Controller/categoria.controller.php" method="post">
    <label>Nombre:</label>
    <input type="text" name="cat_nom"/>
    </br></br>

    <label>Descripcion:</label>
    <br>

    <textarea name="cat_desc" rows="5" cols="30"></textarea>
    </br></br>

    <input type="hidden" name="cat_fech" readonly="" value="<?php echo date('d/m/Y')?>"/>

    <button name="action" value="Guardar_btn">Guardar</button>
  </form>

</div>
