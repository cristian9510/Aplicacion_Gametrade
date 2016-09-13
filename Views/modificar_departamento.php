<?php
  require_once("../Model/conexion.php");
  require_once("../Model/departamento.class.php");

  $departamento_mo=Gestion_Departamento::consultarporcodigo(base64_decode($_GET["codigo_departamento"]));
 ?>

 <meta charset="utf-8">
 <div class="pais_mo">
   <section>
     <h1>Modificar departamento</h1>
     <form action="../Controller/departamento.controller.php" method="post">
       <input type="hidden" name="depar_cod" readonly value="<?php echo $departamento_mo["depar_cod"]; ?>"/>
       <label>departamento: </label>
       <input type="text" name="depar_nom" required value="<?php echo $departamento_mo["depar_nom"]; ?>">
       <br><br>
       <label>pais: </label>
       <input type="text" name="pais_cod" required value="<?php echo $departamento_mo["pais_cod"]; ?>">
       <br><br>
       <label>Estado: </label>
       <input type="text" name="estado" required value="<?php echo $departamento_mo["estado"]; ?>">
       <br><br>
       <button  name="action" value="modificar">Modificar</button>
     </form>
   </section>
 </div>
