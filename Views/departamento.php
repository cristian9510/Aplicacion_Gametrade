<?php
	require_once("../model/conexion.php");
	require_once("../model/departamento.class.php");
	$pais = Gestion_Pais::cargarpais();
?>

<meta charset="utf-8">
<div class="formulariodepartamento" id="admin_consola">
		<form action="../Controller/departamento.controller.php" method="post">
		<label>Departamento: </label>
		<input type="text" name="depar_nom"/>
		<br><br>

		<label>pais: </label>
		<select id="pais_cod" name="pais_cod">
			<option>Seleccionar</option>
			<?php
				foreach ($pais as $pai ) {
					echo "<option value=".$pai["pais_cod"].">".$pai["pais_nom"]."</option>";
				}
			?>
		</select>
		<br><br>

		<button name="action" value="guardardepartamento">Aceptar</button>
		</form>
		</div>
