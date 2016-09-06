<?php
  require_once("../Model/coneXion.php");
  require_once("../Model/usuario.class.php");

  $ciu = usuario::consultarciudad();
  date_default_timezone_set('America/Bogota');
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
    <h2>Consultar usuario</h2>
		<div class="formulariousuario">
      <h1><a href="consultar_usuarios.php">Consultar usuario</a></h1>

			<form action="../Controller/usuario.controller.php" method="post">

				<label for="">Tipo de documento: </label>
				<select name="usu_tip_docum" id="documento">
					<option value="0">Seleccionar</option>
					<option value="1">Cedula de Ciudadania</option>
					<option value="2">Tarjeta de Identidad</option>
					<option value="3">Cedula de Estranjeria</option>
				</select>
				<br><br>

				<label>Numero del documento: </label>
				<input type="number" name="usu_num_docum" />
				<br><br>

				<label>Nombre: </label>
				<input type="text" name="usu_nom"/>
				<br><br>

				<label>Apellido: </label>
				<input type="text" name="usu_apell"/>
				<br><br>

				<label>Nick de usuario: </label>
				<input type="text" name="usu_nick"/>
				<br><br>

				<label>Correo electronico: </label>
				<input type="text" name="usu_mail"/>
				<br><br>

				<label>Contraseña: </label>
				<input type="password" name="usu_pass"/>
				<br><br>

				<label>Confirmar la contraseña: </label>
				<input type="password" name="usu_pass"/>
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

        <label>Ciudad: </label>
				<select id="ciu_cod" name="ciu_cod">
		      <?php
		        echo "<option>Seleccione</option>";
		          foreach ($ciu as $ciudad) {
		            echo "<option value=".$ciudad["ciu_cod"].">".$ciudad["ciu_nom"]."</option>";
		        }
		       ?>
        </select>
        <br><br>

				<label>Dirreccion: </label>
				<input type="text" name="usu_dir" />
				<br><br>
        <!-- fecha -->
				<input type="hidden" name="usu_fech" readonly="" value="<?php echo date('d/m/Y')?>"/>

        <button type="submit" name="action" value="guardarusuario">Aceptar</button>
			</form>
		</div>
	</body>
</html>
