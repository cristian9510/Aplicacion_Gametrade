
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>


<?php
	require_once("../Model/conexion.php");
	require_once("../Model/ciudad.class.php");

	$departamento=Gestion_Ciudad::mostrardepartamento();
	?>

<meta charset="utf-8">
<div class="formulariociudad">
	<section>
		<h1>Grabar ciudad.</h1>
		<form action="../Controller/ciudad.controller.php" method="post">
			
			<label>Ciudad: </label>
			<input type="text" name="ciu_nom" />
			<br><br>

			<label>departamento: </label>
	    <select id="depar_cod" name="depar_cod" required>
	      <?php
	        echo "<option>Seleccione</option>";
	          foreach ($departamento as $depar) {
	            echo "<option value=".$depar["depar_cod"].">".$depar["depar_nom"]."</option>";
	        }
	       ?>
	     </select>
			 <br><br>

			 <button name="action" value="guardarciudad"><a class="waves-effect waves-light btn">Enviar</button></a>
		 </form>
	</section>
</div>

<div class="consultarciudad">
	<a href="consultar_ciudad.php">Consultar ciudad</a>
</div>
