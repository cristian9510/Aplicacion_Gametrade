<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>



<meta charset="utf-8">
<!--Título del formulario-->

	<h1 style="text-align: center;" style="color: #01DFA5">Puntos</h1>

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
		<button name="action" value="guardarpunto"><a class="waves-effect waves-light btn">Guardar</button></a>
		
	</form>
</div>
