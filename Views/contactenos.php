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
		<input type="text" maxlength="20" placeholder="Nombre"></input>
		<input type="text" maxlength="20" placeholder="Correo Electronico"></input>
		<input type="text" maxlength="20" placeholder="Numero de telefono"></input>
		<textarea name="mensaje" placeholder="Escriba aqui su mensaje"></textarea>
		<a class="waves-effect waves-light btn">Enviar</a>
	</div>
	


</div>


<?php require_once("footer.php"); ?>
</div>
</body>
</html>