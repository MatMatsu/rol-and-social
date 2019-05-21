$(document).scroll(function(event) {
	if($(document).scrollTop() > 300) {
		$("#subir").addClass("mostrar");
		$("#subir").removeClass("ocultar");
	} else {
		$("#subir").addClass("ocultar");
		$("#subir").removeClass("mostrar");
	}
});

$("#subir").click(function(){
	$(window).scrollTop(0,0);
});