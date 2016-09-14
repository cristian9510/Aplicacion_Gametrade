<?php
  require_once("../Model/conexion.php");
  require_once("../Model/juego_admi.class.php");

  $juegomo =Gestion_Videojuego::consultarporCodigo(base64_decode($_GET["codigo_juego"]));
  date_default_timezone_set('America/Bogota');
  //cuardate terminar y organizar lo que vallas a organizar
  
 ?>



 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>modificar usuario</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
   </head>
   <body>
     <div class="usuariomodificado">
       <h1 style="text-align: center;">Modificar juego</h1>
       <form  action="../Controller/juego_admi.controller.php" method="post">

        <input type="hidden" name="jue_cod" readonly value="<?php echo $juegomo["jue_cod"]; ?>" />

        <label>Usuario: </label>
  				<input type="text" name="usu_cod" value="<?php echo $juegomo["usu_cod"]; ?>"/>
  				<br><br>

 				<label>Nombre del juego: </label>
 				<input type="text" name="jue_nom" value="<?php echo $juegomo["jue_nom"]; ?>"/>
 				<br><br>

 				<label>Consola: </label>
 				<input type="text" name="cons_cod" value="<?php echo $juegomo["cons_cod"]; ?>"/>
 				<br><br>

 				<label>Categoria del juego: </label>
 				<input type="text" name="cat_cod" value="<?php echo $juegomo["cat_cod"]; ?>"/>
 				<br><br>

 				<label>Descripcion del juego: </label>
 				<input type="text" name="jue_desc" value="<?php echo $juegomo["jue_desc"]; ?>"/>
 				<br><br>

 				<label>Cantidad de juegos: </label>
 				<input type="text" name="jue_cant" value="<?php echo $juegomo["jue_cant"]; ?>"/>
 				<br><br>

 				<label>Trailes: </label>
 				<input type="text" name="jue_trailer" value="<?php echo $juegomo["jue_trailer"]; ?>"/>
 				<br><br>

 				<input type="hidden" name="jue_fech_public" readonly value="<?php echo date('d/m/Y')?>"/>

 				<label>Imagen: </label>
 				<input type="text" name="jue_imagen" value="<?php echo $juegomo["jue_imagen"]; ?>"/>

        <button type="submit"  name="agregarimgen"><a class="waves-effect waves-light btn">agregar</button></a>
 				<br><br>

 				<label>Palabras claves: </label>
 				<input type="text" name="jue_pal_clave" value="<?php echo $juegomo["jue_pal_clave"]; ?>"/>
 				<br><br>

 				<label>Estado: </label>
 				<input type="text" name="jue_estado" value="<?php echo $juegomo["jue_estado"]; ?>"/>
 				<br><br>


         <button type="submit" name="action"><a class="waves-effect waves-light btn">Modificar</button></a>

       </form>
     </div>

   </body>
 </html>
