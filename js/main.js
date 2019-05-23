$(document).ready(function(){
	/*	FUNCION PARA OCULTAR O MOSTRAR EL BOTON PARA SUBIR EN LA PAGINA DE AYUDA 	*/
	$(document).scroll(function(event) {
		if($(document).scrollTop() > 300) {
			$("#subir").addClass("mostrar");
			$("#subir").removeClass("ocultar");
		} else {
			$("#subir").addClass("ocultar");
			$("#subir").removeClass("mostrar");
		}
	});

	/*	FUNCION PARA IR AL TOPE DE LA PÁGINA AYUDA 	*/
	$("#subir").click(function(){
		var a = setInterval(function () {
			$(window).scrollTop($(document).scrollTop()-100)
			if ($(document).scrollTop() < 0) {
				clearInterval(a);
			}
		},30);	
	});

	/*	CREAR FUNCION PARA QUE EL ANCHOR EN AYUDA FUNCIONE BIEN 	*/
	$(".indice>ul li a").on("click", function() {
		//$(document).scrollTop($(document).scrollTop() + 1000);
	});


	/*	MOSTRAR Y OCUTAR COMENTARIOS EN INDEX.HTML 	*/
	$(".verComentarios").click(function() {
		if($(this).attr("aria-expanded")==="true") {
			$(this).text("Ver comentarios");
		} else {
			$(this).text("Ocultar comentarios");
		}
	});

	$("#flag").click(function() {
		$(this).toggleClass("redFlag");
	});

});