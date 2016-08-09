<link rel="stylesheet" type="text/css" href="../stylesSheet/estilo.css">
<?php

require_once("../model/conexion.php");
require_once("../model/ciudad.class.php");

$ciudad = Gestion_Ciudad::cargardepartamento();

?>
<meta charset="utf-8">
<div id="cua">
<h1 style="color:black">CIUDAD</h1>
</div>
<section>
	<article id="admin_consola">

		<form action="../Controller/ciudad.controller.php" method="post">



		<label for="txtCiudad">codigo de la ciudad </label><input type="text" name="txtCiudad" /><br><br>

		

		<label for="txtName">nombre de la ciudad </label><input type="text" name="txtName" /><br><br>

		    
             

		<label for="txtCodigo">Nombre departamento</label>


		<select name="txtCodigo">
		<option>Seleccionar</option>
		<?php
		foreach ($ciudad as $ciu ) {
			echo "<option value=".$ciu["depar_cod"].">".$ciu["depar_nom"]."</option>";
		}
		?>
		</select>

		<br><br>
 


		
 

		<button name="action" value="guardarciudad">enviar</button>

	</article>