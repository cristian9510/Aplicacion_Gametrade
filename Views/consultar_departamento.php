<?php
 require_once("../model/conexion.php");
 require_once("../model/departamento.class.php");

 $departamento =Gestion_Departamento::consultardepartamento();
 ?>

<div class="tabladepartamento">
  <section>
    <table border="1px">
      <thead>
        <th colspan="5">Departamento.</th>
        <tr>
          <td>Codigo</td>
          <td>Departamento</td>
          <td>Pais</td>
          <td>Estado</td>
          <td>Operaciones</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($departamento as $bn): ?>
          <tr>
            <td><?php echo $bn["depar_cod"];  ?></td>
            <td><?php echo $bn["depar_nom"];  ?></td>
            <td><?php echo $bn["pais_cod"];   ?></td>
            <td><?php echo $bn["estado"];     ?></td>
            <td>
              <a href="modificar_departamento.php?codigo_departamento=<?php echo base64_encode($bn["depar_cod"]); ?>">Modificar</a>
            </td>
          </tr>
       <?php endforeach ?>
      </tbody>
    </table>
  </section>
</div>
