
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>


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

		<button name="action" value="guardarpais"><a class="waves-effect waves-light btn">Aceptar</button></a>
		</form>
	</div>
	<div class="consultarpais">
		<section>
			<a href="consultar_pais.php"><h1>Cunsulatar paises.</h1></a>
		</section>
	</div>
