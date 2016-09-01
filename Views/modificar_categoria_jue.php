<?php 
require_once("../Model/conexion.php");
require_once("../Model/Categoria.class.php");

$CatJue = Gestion_Usuarios::Consultar_por_codigo($_GET["cat_cod"]);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="categoria.controller" method="POST">
 		<label>Código de la categoría: <?php echo $Categoria_jue["cat_cod"]; ?></label>
 		<input type="hidden" name="cat_cod_txt" readonly value ="<?php echo $Categoria_jue["cat_cod"]; ?>" >
 		</br></br>

 		<label>Nombre de la categoría:</label>
 		<input type="text" name="cat_nom_txt" required value ="<?php echo $Categoria_jue["cat_nom"]; ?>" >
 		</br></br>

 		<label>Descripción:</label>
 		<input type="text" name="Descripcion" required value ="<?php echo $Categoria_jue["cat_desc"]; ?>" >
		</br></br>

		<label>Fecha:</label>
	    <input type="text" name="cat_fech_txt" "<?php echo $Categoria_jue["cat_fech"]; ?>" />
	    </br></br>

		<label>Estado:</label>
	  	</br></br>
	    <!--Este es un "select", es un dropdown list. Para seleccionar el estado del usuario:-->
	    <select name="Estado_slct" required value ="<?php echo $Categoria_jue["cat_estado"]; ?>" >
	      <option value="Activo"></option>
	      <option value="Activo">Activo</option>
	      <option value="Inactivo">Inactivo</option>
	    </select>
	    </br></br>
		
		<button name="action" value="CatJue">Modificar</button>
 	</form>
 </body>
 </html>