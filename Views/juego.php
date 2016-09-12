
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

<?php
  date_default_timezone_set('America/Bogota');
 ?>
<meta charset="utf-8">
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="formulariojuego">
      <h1 style="text-align: center;color: #01DFA5">Juegos</h1>
      <form action="../Controller/juego_admin.controller.php" method="post">
        <label>Codigo de usuario: </label>
        <input type="text" name="usu_cod">
        <br><br>

        <label>Nombre del juego: </label>
        <input type="text" name="jue_nom">
        <br><br>

        <label>Codigo de consola: </label>
        <input type="text" name="cons_cod">
        <br><br>

        <label>Categoria bono: </label>
        <input type="text" name="cat_cod">
        <br><br>

        <label>descripcion del juego: </label>
        <textarea name="jue_desc" rows="5" cols="25"></textarea>
        <br><br>

        <label>Cantidad de juegos: </label>
        <input type="number" name="jue_cant">
        <br><br>

        <label>Trailer del juego: </label>
        <input type="text" name="jue_trailer">
        <br><br>

        <input type="hidden" name="jue_fech_public" readonly="" value="<?php echo date('d/m/Y')?>"/>

        <label>Imagen del juego: </label>
        <input type="text" name="jue_imagen">
        <br><br>

        <label>Palabras claves: </label>
        <input type="text" name="jue_pal_clave">
        <br><br>

        

        <button name="action" value="guardarjuego"><a class="waves-effect waves-light btn">Aceptar</button></a>
      </form>
    </div>
  </body>
</html>
