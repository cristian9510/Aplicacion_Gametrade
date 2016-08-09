<?php

require_once("../model/conexion.php");
require_once("../model/pais.class.php");

$pais = Gestion_Pais::cargarpais();

?>
<meta charset="utf-8">
<div id="cualid">
<h1 style="color:black">PAIS</h1>
</div>
<section>
	<article id="admin_consola">

		<form action="../Controller/pais.controller.php" method="post">

		<label type="number" for="txtCodigo">codigo del pais </label>


		<select name="txtCodigo">
		<option>Seleccionar</option>
		<?php
		foreach ($pais as $pai ) {
			echo "<option value=".$pai["pais_cod"].">".$pai["pais_nom"]."</option>";
		}
		?>
		</select>

		<br><br>
 


		
 

		<button name="action" value="guardarciudad">enviar</button>

	</article>