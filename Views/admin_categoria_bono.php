<?php
require_once("../Model/conexion.php");
require_once("../Model/Categoria_bono.class.php");
$cat_bono= categoria_bono::mostrar_categoria_bono();
date_default_timezone_set('America/Bogota');
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
     <div class="formilario_cat_bono">
       <section>
         <h1 style="text-align: center;color:#11E5BB"><font face="arial,">categoria de bonos</h1></font>
         <!--aqui esta el formato y de esta de esta forma se hace -->
         <form action="../Controller/categoria_bono.controller.php" method="post">

           <label>nombre: </label>
           <input type="text" name="cat_bono_nom">
           <br>
           <br>
           <!-- fecha -->
           <input type="hidden" name="cat_bono_fech" value="<?php echo date('d/m/Y')?>"/>
           <!--este es el boton-->
           <button name="action" value="guardar_cat_bono"><a class="waves-effect waves-light btn">Guardar</button></a>

         </form>
       </section>
     </div>
   </body>
 </html>

 <div class="consultar_categoria_bono">
    <section>
      <a href="consultar_categoria_bono.php">consultar categoria bono.</a>
    </section>
 </div>
