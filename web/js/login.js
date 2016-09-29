/**
 * Green Pong - Login
 *
 * # author      Damián <@damian>
 * # copyright   Copyright (c) 2016, Green Pong
 *
 */
// Variables
// modal - terminos y condiciones
var modalTerminosCondiciones = document.getElementById('modal-terminos-condiciones');
var closeTerminosCondiciones = document.getElementsByClassName("modal-terminos-condiciones-close")[0];

/**
 * Document Ready
 */
$(document).ready(function(){

	/**
	 * Click - Mostar terminos y condiciones
	 */
	$(".aceptar-mask").on("click", function(){
		modalTerminosCondiciones.style.display = "flex";
	});

	/**
	 * Click - Boton de Aceptar terminos y condiciones
	 */
	$(".aceptar-terminos-condiciones-btn").on("click", function(){
		$(".aceptar-mask").hide();
		$("#checkbox").prop( "checked", true );
		modalTerminosCondiciones.style.display = "none";

	});

	/**
	 * Click - Checkbox
	 */
	$("#checkbox").click(function() {
		if($("#checkbox").is(':checked')) {
			alert("Está activado");
		} else {
			$(".aceptar-mask").show();
		}
	});

});

/**
 * Modal
 */
// close
// Terminos y condiciones
closeTerminosCondiciones.onclick = function() {
	modalTerminosCondiciones.style.display = "none";
}

// // close it
// window.onclick = function(event) {
// 	// modal - Terminos y condiciones
// 	if (event.target == modalTerminosCondiciones) {
// 		modalTerminosCondiciones.style.display = "none";
// 	}
// }