<?php
  require_once("../Model/conexion.php");
  require_once("../Model/usuario.class.php");

  $ciu = usuario::consultarciudad();
  date_default_timezone_set('America/Bogota');
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
    <script>
    function myFunction() {
    var x = document.getElementById("usu_pass").value;
    var y = document.getElementById("usu_pass_c").value;
    if (x==y){
      document.getElementById("confirmar").innerHTML="Son iguales";
    }
    else{
        document.getElementById("confirmar").innerHTML="No coinciden";
    }
    //x.value = x.value.toUpperCase();
}
</script>

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
					<option value="3">Cedula de Extranjeria</option>
				</select>
				<br><br>

				<label>Numero del documento: </label>
				<input type="number" name="usu_num_docum" required/>
				<br><br>

				<label>Nombre: </label>
				<input type="text" name="usu_nom" required/>
				<br><br>

				<label>Apellido: </label>
				<input type="text" name="usu_apell" required/>
				<br><br>

				<label>Nick de usuario: </label>
				<input type="text" name="usu_nick"/>
				<br><br>

				<label>Correo electronico: </label>
				<input type="text" name="usu_mail" required/>
				<br><br>

				<label>Contraseña: </label>
				<input type="password" name="usu_pass" id="usu_pass" required/>
				<br><br>

				<label>Confirmar la contraseña: </label>
				<input type="password" name="usu_pass" id="usu_pass_c" onkeyup="myFunction()" required/>
        <span id="confirmar"></span>
				<br><br>

				<label>Fecha de nacimiento: </label>
				<input type="date" name="usu_naci"  required/>
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
				<select id="ciu_cod" name="ciu_cod" required>
		      <?php
		        echo "<option>Seleccione</option>";
		          foreach ($ciu as $ciudad) {
		            echo "<option value=".$ciudad["ciu_cod"].">".$ciudad["ciu_nom"]."</option>";
		        }
		       ?>
        </select>
        <br><br>

				<label>Dirreccion: </label>
				<input type="text" name="usu_dir" required/>
				<br><br>
        <!-- fecha -->
				<input type="hidden" name="usu_fech" readonly="" value="<?php echo date('d/m/Y')?>"/>

        <button type="submit" name="action" value="guardarusuario">Aceptar</button>
			</form>
		</div>
	</body>
</html>
