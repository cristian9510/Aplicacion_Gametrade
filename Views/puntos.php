<meta charset="utf-8">
<!--Título del formulario-->
<div class="titulo_puntos">
	<h1>Puntos</h1>
</div>
</br>

<div class="formulario_pto">
	<form class="puntos_frm" action="../Controller/puntos.controller.php" method="post">

		<label>Precio: </label>
		<input type="text" name="pto_moneda_txt" />
		</br></br>
		<label>Descripción:</label>
		</br>

		<!--Textarea para la descripción:-->
		<textarea name="Descripcion_pto" rows="5" cols="25"></textarea>
		</br></br>

		<!--Botón de guardado-->
		<button name="action" value="guardarpunto">Guardar</button>
	</form>
</div>
