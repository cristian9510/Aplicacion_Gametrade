


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

<h1 style="text-align: center;" style="color: #000">CONSOLA</h1>

<section>

	<article id="admin_consola">

		<form action="../Controller/consola.controller.php" method="post">

		<label for="txtCodigo">codigo</label><input type="number" min="200" max="300" value="200" name="txtCodigo"/> <br><br>


	
	<form action="../Controller/consola.controller.php" method="post">
	<label>Nombre: </label>
	<input type="text" name="cons_nom"/>
	<br><br>


	<label>Referencia: </label>
	<input type="text" name="cons_refer"/>
	<br><br>

	<label>Imagen: </label>
	<input type="text" name="cons_imagen"/>
	<br><br>


		<label for="txtEstado">estado </label><input type="text" name="txtEstado" /><br><br>

		<label for="txtImagen">imagen </label><input type="text" name="txtImagen" /><br><br>

		<button name="action" value="guardarconsola"><a class="waves-effect waves-light btn">Enviar</button></a>

	</article>

	
</div>
