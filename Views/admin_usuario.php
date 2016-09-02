<?php
require_once("../Model/coneXion.php");
require_once("../Model/usuario.class.php");
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<div class="formulariousuario">
			<form action="../Controller/usuario.controller.php" method="post">

				<label for="">Tipo de documento</label>
				<select name="usu_tip_docum" id="documento">
					<option value="0">Seleccionar</option>
					<option value="1">Cedula de Ciudadania</option>
					<option value="2">Tarjeta de Identidad</option>
					<option value="3">Cedula de Estranjeria</option>
				</select>
				<br><br>

				<label>Numero del documto: </label>
				<input type="number" name="usu_num_docum" required />
				<br><br>

				<label>Nombre: </label>
				<input type="text" name="usu_nom" required/>
				<br><br>

				<label>Apellido: </label>
				<input type="text" name="usu_apell" required/>
				<br><br>

				<label>Nombre de usuario </label>
				<input type="text" name="usu_nick" required/>
				<br><br>

				<label>Correo electronico </label>
				<input type="text" name="usu_mail" required/>
				<br><br>

				<label>Contraseña: </label>
				<input type="password" name="usu_pass" required/>
				<br><br>

				<label>Confirmar la contraseña: </label>
				<input type="password" name="usu_pass" required />
				<br><br>

				<label>Fecha de nacimiento: </label>
				<input type="date" name="usu_naci" />
				<br><br>

				<label>Agrega una foto: </label>
				<input type="text" name="photo"/>
				<button type="submit" name="agregarphoto">Aceptar</button>
				<br><br>

				<label>Telefono: </label>
				<input type="number" name="usu_tel" />
				<br><br>

				<label>Celular: </label>
				<input type="number" name="usu_cel" />
				<br><br>

				<select id="ciu_cod" name="ciu_cod">
		      <?php
		        echo "<option>Seleccione</option>";
		          foreach ($ciu as $ciudad) {
		            echo "<option value=".$ciudad["ciu_cod"].">".$ciudad["ciu_nom"]."</option>";
		        }
		       ?>
					 <br><br>

				<label>Dirreccion: </label>
				<input type="text" name="usu_dir" />
				<br><br>

				<label>fecha de creacion del usuario: </label>
				<input type="date" name="usu_fech" />
				<br><br>

				<label>Estado</label>
				<select name="usu_estado" id="estado">
					<option value="0">Seleccionar</option>
					<option value="1">activo</option>
					<option value="2">inactivo</option>
				<br><br>
				<button name="action" value="guardarusuario">enviar</button>

			</form>
		</div>
	</body>
</html>
