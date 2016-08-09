function sb_menu(vVar){
	switch(vVar){
		case "home":
			self.location.href="index.php";
		break;

		case "wor":
			self.location.href="AboutUs.php";
		break;

		case "contact":
			self.location.href="contacto.php";
		break;

		case "usa":
			self.location.href="usa.php";
		break;

		case "contrasena":
				$("#e64ConteContra").fadeIn();
		break;

		case "regist":
			self.location.href="registro.php";
		break;
	}
}

