$(document).ready(function(){
	/*	AVISO DE QUE ESTAS SALIENDO DE LA PÁGINA		*/
	$("#logout").click(_=>{
		//Cuando se oscurezca la pantalla tira un confirmBox
		$.when($("body").append("<div class='fondoOscuro'></div>")).then(_=>{
			if (confirm('¿Estás seguro de volver a una vida "normal"?')) {
				//llevar a login
				alert("Ya volveras a buscar cobijo aquí bodoque!");
				window.location.replace("./paginas/login.html");
			} else {
				//Hacer nada
				alert("Era lo que me imaginaba...");
				$(".fondoOscuro").remove();
			}
		});
	});
	/*************************************************************/

	/*************************************************************/
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
	/*************************************************************/

	/*************************************************************/
	/*	FUNCION PARA IR AL TOPE DE LA PÁGINA AYUDA 	*/
	$("#subir").click(function(){
		var a = setInterval(function () {
			$(window).scrollTop($(document).scrollTop()-100)
			if ($(document).scrollTop() <= 0) {
				clearInterval(a);
			}
		},30);	
	});
	/*************************************************************/

	/*************************************************************/
	/*	ACTIVA Y DESACTIVA EL BOTON PARA PUBLICAR MENSAJES EN EL MURO	*/
	$("textarea").focus(_=>{
		$("textarea").bind("keyup", function(e){
			var comment = $.trim($(this).val());
			if(comment != "") {
				//SI ES DISTINTO A "" ACTIVA EL BOTON
				$(this).siblings("div").children("input").removeAttr("disabled");
			} else {
				//SI ES IGUAL A "" DESACTIVA EL BOTON
				$(this).siblings("div").children("input").attr("disabled", true);
			}
		});
	});
	/*************************************************************/

	/*************************************************************/
	/*	MOSTRAR Y OCULTAR COMENTARIOS EN INDEX.HTML 	*/
	$(".verComentarios").click(function() {
		if($(this).attr("aria-expanded")==="true") {
			$(this).text("Ver comentarios");
		} else {
			$(this).text("Ocultar comentarios");
		}
	});
	/*************************************************************/

	/*************************************************************/
	/*	CAMBIA COLOR DE LA BANDERA 	*/
	$(".flag").click(function() {
		if($("i", this).hasClass("fas")) {
			$(".fas",this).remove();
			$(this).append("<i class='far fa-flag'></i>");
		} else {
			$(".far",this).remove();
			$(this).append("<i class='fas fa-flag'></i>");
		}
		$(this).toggleClass("redFlag");
	});
	/*************************************************************/

	/*************************************************************/
	/*	CAMBIA COLOR DE LA BANDERA 	*/
	$("#leyes").click(function() {
		$(".cb").prop("checked", true);
	});
	/*************************************************************/
});