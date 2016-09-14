<?php
 require_once("../model/conexion.php");
 require_once("../model/categoria.class.php");

 $cat_juego =Categoria_jue::Consultar_categoria_juego();
 ?>

<div class="tabla_categoria_juego">
  <section>
    <table border="1px">
      <thead>
        <th colspan="6">Categorias de juegos.</th>
        <tr>
          <td>Codigo</td>
          <td>Nombre</td>
          <td>Descripcion</td>
          <td>Fecha de creacion</td>
          <td>Estado</td>
          <td>Operaciones</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($cat_juego as $bn): ?>
          <tr>
            <td><?php echo $bn["cat_cod"];  ?></td>
            <td><?php echo $bn["cat_nom"];  ?></td>
            <td><?php echo $bn["cat_desc"];  ?></td>
            <td><?php echo $bn["cat_fech"];  ?></td>
            <td><?php echo $bn["cat_estado"];  ?></td>
            <td>
              <a href="modificar_categoria_juego.php?codigo_categoria=<?php echo base64_encode($bn["cat_cod"]); ?>">Modificar</a>
            </td>
          </tr>
       <?php endforeach ?>
      </tbody>
    </table>
  </section>
</div>
