<?php
// require_once("../Model/conexion.php");
// include("../Model/ciudad.class.php");

// $ciudad=Gestion_Ciudad::mostrarciudad();

?>


<!DOCTYPE html>
<head>
	<title>Registro</title>
		<meta charset="utf8"/>
		<link rel="stylesheet" type="text/css" href="stylesSheet/gstyle.css"/>
		<link rel="stylesheet" type="text/css" href="stylesSheet/registro.css"/>

		<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="js/connection.js"></script>
	<script type="text/javascript" src="js/gweb.js"></script>
	<script type="text/javascript" src="js/registro.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
		
</head>
<body>

	<div id="dv_main">
	<?php require_once("header.php"); ?>
<div id="e64ContRegist">
	<div id="e64REusu">Registrarse</div>
	<p>Si tienes videojuegos y quieres intercambiarlos, nosotros somos tu mejor opción <span>!!REGISTRATE!</span></p>
	<h2>Formulario de registro</h2>
	<form class="formRegis" action="../Controller/registro.controller.php" method="post">

		<ul id="ulContRegist">
			<li>
				<label for="nameRegist">Nombre Completo</label>
				<input type="text" id="nameRegist"  name="nameRegist" required/>
				<span class="clObliga">*</span>
			</li>
			
			<li>
				<label for="cbTipDocum">Tipo de documento</label>

				<select name="cbTipDocum" id="cbTipDocum">
					<option value="0">Seleccionar</option>
					<option value="1">Cedula de Ciudadania</option>
					<option value="2">Tarjeta de Identidad</option>
					<option value="3">Cedula de Extranjeria</option>
				</select>
				<span class="clObliga">*</span>
			</li>
			
			
			<li>
				<label for="bornRegist">Fecha de nacimiento</label>
				<input type="date"  id="bornRegist" name="bornRegist"/>
				<span class="clObliga">*</span>
			</li>
				
			
			<li>
				<label for="CelphoneRegist">Celular</label>
				<input type="number"  id="CelphoneRegist" name="CelphoneRegist"/>
			</li>			
			
				
			<li>
				<label for="addressRegist">Direccion</label>
				<input type="text" id="addressRegist"  name="addressRegist" required/>
			</li>
			
			<li>
				<label for="nickRegist">Usuario</label>
				<input type="text"  id="nickRegist" name="nickRegist"/>
				<span class="clObliga">*</span>
			</li>
				
			<li>
				<label for="passRegist">Contraseña</label>
				<input type="password"  id="passRegist" name="passRegist"/>
				<span class="clObliga">*</span>
			</li>
			
			
				
		</ul>
		<ul id="ulContRegist1">
			<li>
				<label for="lastRegist">Apellidos</label>
				<input type="text" id="lastRegist"  name="lastRegist" required="required"/>
				<span class="clObliga">*</span>
			</li>
			<li>
				<label for="numDocument">Numero de Documento</label>
				<input type="number" id="numDocument" name="numDocument" required/>
				<span class="clObliga">*</span>
			</li>
			<li>
				<label for="phoneRegist">Telefono</label>
				<input type="number" id="phoneRegist"  name="phoneRegist"/>
			</li>
			<li>
				<label for="emailRegist">E-mail</label>
				<input type="email"  id="emailRegist" name="emailRegist" required/>
				<span class="clObliga">*</span>
			</li>
			<li>
			<label for="cbCiudad">Ciudad</label>
				<select  id="cbCiudad" name="cbCiudad">
					<?php
							echo "<option value='0'>Seleccionar</option>";
						foreach ($ciudad as $ciu ) {
							echo "<option value=".$ciu["ciu_cod"].">".$ciu["ciu_nom"]."</option>";
						}

					?>
				</select> 
			</li>
			<li>
				<label for="passVerRegist">Verifica Contraseña</label>
				<input type="password"  id="passVerRegist" onpaste="return false" name="passVerRegist"/>
				<span class="clObliga">*</span>
			</li>
		</ul>
		<div class="g-recaptcha" data-sitekey="6LferBwUAAAAAJOxMtZ2RBzZ3y05ybz1U2bnY0Bj"></div>
		<div class="clEnvias">
			<div id="enviarR" onclick="enviar()">Registrarme</div>
		</div>
	</form>
</div>
</div>
<?php require_once("footer.php"); ?>
	
</body>
</html>
