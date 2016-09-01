<?php

require_once("../model/conexion.php");
require_once("../model/pais.class.php");

$pais = Gestion_Pais::cargarpais();

?>
<meta charset="utf-8">
<div id="micuadro">
<h1 style="color:white">DEPARTAMENTO</h1>
</div>
<section>
	<article id="admin_consola">

		<form action="../Controller/departamento.controller.php" method="post">

		<label for="txtCodigo">codigo </label><input type="text" name="txtCodigo"/> <br><br>

		<label for="txtName">nombre  </label><input type="text" name="txtName" /><br><br>

		<label for="txtPais">pais  </label>

		<select name="txtPais">
		<option>Seleccionar</option>
		<?php
		foreach ($pais as $pai ) {
			echo "<option value=".$pai["pais_cod"].">".$pai["pais_nom"]."</option>";
		}
		?>
		</select>

		<br><br>

		<button name="action" value="guardardepartamento">enviar</button>

	</article>
