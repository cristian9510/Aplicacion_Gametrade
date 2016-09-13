<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>


<div class="formularioconsola">
	<section>
		<form action="../Controller/consola.controller.php" method="post">

		<label>codigo: </label>
		<input type="text" name="cons_cod"/> <br><br>

		<label>Nombre: </label>
		<input type="text" name="cons_nom"/>
		<br><br>

		<label>Referencia: </label>
		<input type="number" name="cons_refer"/>
		<br><br>

		<label>Imagen: </label>
		<input type="text" name="cons_imagen"/>
		<br><br>

		<button name="action" value="guardarconsola"><a class="waves-effect waves-light btn">Enviar</button></a>

	</section>
</div>

<div class="consultarconsola">
	<section>
		<a href="consultar_consola.php">Consultar consola.</a>
	</section>
</div>
