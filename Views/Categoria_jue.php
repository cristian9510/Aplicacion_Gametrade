



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<!--Esto es el formulario de la categoría del juego-->



<?php
date_default_timezone_set('America/Bogota');
 ?>


  <h1 style="text-align: center;">Categor&iacute;a del juego</h1>


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


    <!--Esto es el botón para guardar los datos de la categoría del juego:-->
    <button name="action" value="guardar_btn"><a class="waves-effect waves-light btn">Guardar</button></a>
    

    

  </form>

</div>
