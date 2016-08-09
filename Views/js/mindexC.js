$(document).ready(function() {
CargarSlider();
});



function sbclose(v_Var){
	switch(v_Var){
		case "1":
			$("#e64Monstrar").fadeOut();
		break;

		case "2":
			$("#e64ConteContra").fadeOut();
		break;
	}
}


function CargarSlider(){
	$("#e64SlideNoticia").load("slider/with-jquery.html");

}
