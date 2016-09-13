<?php
	require_once("../Model/conexion.php");
	require_once("../Model/consola.class.php");

  $consolamo= Gestion_Consola::consultarporCodigo(base64_decode($_GET["codigo_consola"]));
	?>

<meta charset="utf-8">
<div class="formularioconsol">
	<section>
		<h1>Modificar consola.</h1>
		<form action="../Controller/consola.controller.php" method="post">
			
      <label>Codigo: </label>
      <input type="text" name="cons_cod" readonly value="<?php echo $consolamo["cons_cod"]; ?>" />
      <br><br>

			<label>Nombre: </label>
			<input type="text" name="cons_nom" required value="<?php echo $consolamo["cons_nom"]; ?>" />
			<br><br>

			<label>Referencia: </label>
      <input type="number" name="cons_refer" required value="<?php echo $consolamo["cons_refer"]; ?>" />
      <br><br>

      <label>imagen: </label>
			<input type="text" name="cons_imagen" required value="<?php echo $consolamo["cons_imagen"]; ?>" />
			<br><br>

			<label>estado: </label>
      <input type="number" name="cons_estado" required value="<?php echo $consolamo["cons_estado"]; ?>" />
      <br><br>

			 <button name="action" value="modificar"><a class="waves-effect waves-light btn">Modificar</button></a>
		 </form>
	</section>
</div>
