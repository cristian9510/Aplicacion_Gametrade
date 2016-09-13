<?php
  date_default_timezone_set('America/Bogota');
 ?>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

<div class="Categoria">
  <h1>Categoria de juego.</h1>
  <form class="categoria_frm" action="../Controller/categoria.controller.php" method="post">

    <label>Nombre:</label>
    <input type="text" name="cat_nom"/>
    </br></br>

    <label>Descripcion:</label>
    <br>
    <textarea name="cat_desc" rows="5" cols="25"></textarea>
    </br></br>

    <input type="hidden" name="cat_fech" readonly="" value="<?php echo date('d/m/Y')?>"/>

    <button name="action" value="guardar"><a class="waves-effect waves-light btn">Guardar</button></a>
  </form>
</div>
