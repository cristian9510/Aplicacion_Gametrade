<!DOCTYPE html>
<html>
<head>

 <link rel="stylesheet" type="text/css" href="stylesSheet/main.css"/>

  <!-- Compiled and minified JavaScript -->
  <script type="text/javascript" src="js/gweb.js"></script>

<title>CONTACTENOS</title>
<meta charset="UTF-8">
	
</head>

<body>
<div id=dv_main>
<?php require_once("header.php"); ?>

<div id="fondo-contactenos">
	<h1>CONTACTENOS</h1>
	<div class="cl-conteForm">
		<div class="">
			<ul class="">
				<li><h5>Email</h5></li>
				<li><h6>Email:gametrade@hotmail.com</h6></li>
				<li><h5>Telefono</h5></li>
				<li><h6>3456214546</h6></li>
			</ul>
		</div>
		<ul>
			<li>
		
				<input type="text" maxlength="20" placeholder="Nombre"></input>
				<span>Ingresar Nombre</span>
			</li>
			<li>
		
				<input type="text" maxlength="20" placeholder="Correo Electronico"></input>
				<span>Ingresar Correo</span>
			</li>
			<li>
		
				<input type="text" maxlength="20" placeholder="Numero de telefono"></input>
				<span>Ingresar Telefono</span>
			</li>
			<li>
		
				<textarea name="mensaje" placeholder="Escriba aqui su mensaje"></textarea>
				<span>Ingresar Mensaje</span></li>
		</ul>
		
		
		
		
		<div class="waves-effect waves-light btn">Enviar</div>
	</div>
	


</div>


<?php require_once("footer.php"); ?>
</div>
</body>
</html>