<?php
	require_once("../Model/conexion.php");
	require_once("../Model/ciudad.class.php");

  $ciudadmo= Gestion_Ciudad::consultarporCodigo(base64_decode($_GET["codigo_ciudad"]));
	?>

<meta charset="utf-8">
<div class="formulariociudad">
	<section>
		<h1>Modificar ciudad.</h1>
		<form action="../Controller/ciudad.controller.php" method="post">
      <input type="hidden" name="ciu_cod" readonly value="<?php echo $ciudadmo["ciu_cod"]; ?>" />

			<label>Ciudad: </label>
			<input type="text" name="ciu_nom" required value="<?php echo $ciudadmo["ciu_nom"]; ?>" />
			<br><br>

			<label>departamento: </label>
      <input type="text" name="depar_cod" required value="<?php echo $ciudadmo["depar_cod"]; ?>" />
      <br><br>

			 <button name="action" value="modificar"><a class="waves-effect waves-light btn">Modificar</button></a>
		 </form>
	</section>
</div>
