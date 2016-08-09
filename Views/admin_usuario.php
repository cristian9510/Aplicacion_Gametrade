<div id="cuadro">
<h1 style="color: white">USUARIO</h1>
</div>
<section>

	<article id="art_left_admin">
		<h2>BUCAR USUARIOS</h2>
		<input type="" />
		<button>buscar</button>

	</article>

	<article id="art_center_admin">
	<form>


	<form action="../Controller/usuario.controller.php" method="post">

		<label for="txtCodigo">codigo  </label><input type="text" name="txtCodigo"/> <br><br>

		<label for="txtNombre">nombre  </label><input type="text" name="txtNombre" /><br><br>

		<label for="txtApellido">apellido  </label><input type="text" name="txtApellido" /><br><br>

		<label for="txtTelefono">Telefono  </label><input type="text" name="txtTelefono"/> <br><br>

		<label for="txtCorreo">correo  </label><input type="text" name="txtCorreo" /><br><br>

		<label for="txtCelular">celular  </label><input type="text" name="txtCelular" /><br><br>

		<label for="txtCiudad">ciudad  </label><input type="text" name="txtCiudad" /><br><br>

		<label for="txtPuntos">puntos </label><input type="text" name="txtPuntos" /><br><br>


		<button name="action" value="guardarusuario">enviar</button>

		
	</form>
	</article>




</body>
</html>