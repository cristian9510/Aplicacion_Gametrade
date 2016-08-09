<!--Título del formulario-->
<div class="titulo_puntos">
	<h1>Puntos</h1>
</div>
</br>
<!--<script>
	function ValidarDatosPOST(){
		var verificar= true;

		if (!document.formulario_pto.pto_cod_txt.value) {
			alert("Este campo es requerido");
			document.formulario_pto.pto_cod_txt.focus();
			verificar= false;
		}
	}

	window.onload = function(){
		document.getElementById("enviar-post").onclick= ValidarDatosPOST;
	}
</script>-->

<div class="formulario_pto">
	<form class="puntos_frm" action="../Controller/puntos.controller.php" method="post">
		<label>Ingresa código del punto:</label>
		<input type="text" name="pto_cod_txt" />
		</br></br>
		<label>Ingresa el valor de la moneda:</label>
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