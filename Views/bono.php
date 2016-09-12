

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>


<!--este es una conexion por haci desirlo-->
<?php
require_once("../Model/conexion.php");
require_once("../Model/bono.class.php");

//este es para mostrar bono
$cat_bono_cod=bono::mostrarCategoriabono();
$pto_cod=bono::mostrarpunto();
$bono=bono::mostrar_bono();
?>

<meta charset="utf-8">
<!--contenedor del formulario-->
<div class="formulariobono">
  <h1 style="text-align: center;">Bono</h1>
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
</div>

<!--estes es el proceso para que aparesca y se pueda mostrar-->
<div class="tablabono">
  <table border="1px">
    <thead>
      <th colspan="6">Informacion de bonos</th>
      <tr>
        <td>Codigo</td>
        <td>Codigo caterogia bono</td>
        <td>Codigo punto</td>
        <td>Descripcion</td>
        <td>Cantidad</td>
        <td>Operaciones</td>
      </tr>
    </thead>
    <tbody>
         <?php foreach ($bono as $bn): ?>
           <tr>
             <td><?php echo $bn["bono_cod"];    ?></td>
             <td><?php echo $bn["cat_bono_cod"];?></td>
             <td><?php echo $bn["pto_cod"];     ?></td>
             <td><?php echo $bn["bono_desc"];   ?></td>
             <td><?php echo $bn["bono_cant"];   ?></td>
             <td>
               <a href="modificarbono.php?codigo_bono=<?php echo base64_encode($bn["bono_cod"]); ?>">Modificar</a>

               <a href="../Controller/bono.controller.php?action=eliminar&codigo_bono=<?php echo base64_encode($bn["bono_cod"]); ?>">Eliminar</a>
             </td>
           </tr>
        <?php endforeach ?>
    </tbody>
  </table>
</div>
