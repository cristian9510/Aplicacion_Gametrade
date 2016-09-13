<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

<meta charset="utf-8">
<div class="formulariopunto">
	<section>
		<h1>Puntos.</h1>
		<form class="puntos_frm" action="../Controller/puntos.controller.php" method="post">

			<label>Cantidad: </label>
			<input type="text" name="pto_cant" />
			</br></br>

			<label>Valor ($): </label>
			<input type="number" name="pto_moneda" />
			</br></br>

			<label>Descripción: </label>
			</br>
			<textarea name="pto_desc" rows="5" cols="25"></textarea>
			</br></br>

			<button name="action" value="guardarpunto"><a class="waves-effect waves-light btn">Guardar</button></a>
		</form>
	</section>
</div>

<div class="consultar_punto">
	<section>
		<a href="consultar_puntos.php">Consultar puntos.</a>
	</section>
</div>
