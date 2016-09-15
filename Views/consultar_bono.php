<?php
  require_once("../Model/conexion.php");
  require_once("../Model/bono.class.php");
  $bono=bono::mostrar_bono();
?>

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
