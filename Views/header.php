<header>
	<div id="dvLogo" onclick="sb_menu('home')"></div>
	<div id="dvContel">
		<div id="invitLogin">Ingresa ya a nuestra pagina</div>
		<div id="dvLogin">


			<ul id="Login">
				<li id="dvCode"><input type="text" placeholder="Usuario" name="txtCode" id="txtUsua" required/></li>
				<li><input type="password" placeholder="**********" name="txtName" id="txtPass" required /></li>
			</ul>
			<div id="dvButonL" onclick="ConsultUsu();"><button  name="btnusu" id="btnOpen" value="ingresoUsu"><i class="fa fa-arrow-right" aria-hidden="true"></i></button></div>

			</div>

		<ul id="ulRecord">
			<li onclick="sb_menu('contrasena')">Olvide mi Contraseña</li>
			<li onclick="sb_menu('regist')">Registrate</li>
		</ul>
	</div>

<ul id="dvMenu">
	<li id="code" onclick="sb_menu('home')"><i class="fa fa-home" ></i>Inicio</li>
	<li id="liwor" onclick="sb_menu('wor')"><i class="fa fa-user" ></i>Quienes Somos</li>
	<li id="liUsa" onclick="sb_menu('usa')"><i class="fa fa-question" ></i>Como se usa</li>
	<li id="licontact" onclick="sb_menu('contact')"><i class="fa fa-envelope" ></i>Contactanos</li>
	
</ul>
</header>
<div id="e64ConteContra">
		<div id="e64Contras">
			<div id="e64ClosPrinciC" onclick="sbclose('2');">X</div>
			<div id="e64ConsultUsu">
				<ul id="ulConsultUsu">
					<li><input type="number" id="txtBuscarContra" placeholder="Numero de Documento"/><div onclick="sbConsultar('consult')">Consultar</div></li>
				</ul>
			</div>

			<hr>
			<div id="e64NueContra">
				<ul id="ulNueContra">
					<li><label>Nueva Contraseña<span>*</span></label><input type="password" id="txtNContr" /></li>
					<li><label>Confirmar Contraseña<span>*</span></label><input type="password" id="txtConfirContr" /></li>
					<li><div onclick="sbConsultar('guardarC')">Guardar</div></li>
				</ul>
			</div>
		</div>
	</div>
