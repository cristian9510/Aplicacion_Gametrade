
<div id="cuadro">
<h1 style="color: white">CONSOLA</h1>
</div>
<section>

	<article id="admin_consola">

		<form action="../Controller/consola.controller.php" method="post">

		<label for="txtCodigo">codigo</label><input type="number" min="200" max="300" value="200" name="txtCodigo"/> <br><br>

		<label for="txtName">nombre  </label><input type="text" name="txtName" /><br><br>

		<label for="txtReferencia">referencia  </label><input type="text" name="txtReferencia" /><br><br>

		<label for="txtEstado">estado </label><input type="text" name="txtEstado" /><br><br>

		<label for="txtImagen">imagen </label><input type="text" name="txtImagen" /><br><br>

		<button name="action" value="guardarconsola">enviar</button>

	</article>