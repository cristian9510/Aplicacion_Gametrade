<?php
	require_once("../model/conexion.php");
	require_once("../model/pais.class.php");
?>
<meta charset="utf-8">
	<div class="formulariopais" id="admin_consola">
		<h1>Guardar pais</h1>
		<form action="../Controller/pais.controller.php" method="post">
		<label>nombre: </label>
		<input type="text" name="pais_nom" required>
		<br><br>
		<button name="action" value="guardarpais">Aceptar</button>
		</form>
	</div>
