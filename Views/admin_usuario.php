<?php
  require_once("../Model/conexion.php");
  require_once("../Model/usuario.class.php");

  $ciu = usuario::consultarciudad();
  $documento = usuario::consultardocumento();
  date_default_timezone_set('America/Bogota');
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css"/>
    <script>
      function myFunction(){
        var x = document.getElementById("usu_pass").value;
        var y = document.getElementById("usu_pass_c").value;
        if (x==y)
        {
          document.getElementById("confirmar").innerHTML="Son iguales";
        }
        else
        {
          document.getElementById("confirmar").innerHTML="No coinciden";
        }
      }
    </script>


	</head>
	<body>
		<div class="formulariousuario">
      <section>
        <h2>Registrar usuario</h2>
  			<form action="../Controller/usuario.controller.php" method="post">
          <label>Tipo de documento: </label>
            <select class="select" name="tipo_cod" required>
              <option value="" disabled selected>Choose your option</option>
              <?php foreach ($documento as $docu): ?>
              <option value="<?php echo $docu['tipo_cod'] ?>"><?php echo $docu['tipo_documento']; ?></option>
              <?php endforeach ?>
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
        </section>
		  </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
     <script>
         $(document).ready(function () {
             $('select').material_select();
         });
     </script>
	</body>
</html>

<div class="consultarusuario">
    <a href="consultar_usuarios.php">Consultar usuario</a>
</div>
