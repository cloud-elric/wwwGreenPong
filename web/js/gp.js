/**
 * Charlenetas
 *
 * # author      Damián <@damian>
 * # copyright   Copyright (c) 2016, Charlenetas
 *
 */
// Variables
// modal - terminos y condiciones
var modalTerminosCondiciones = document.getElementById('modal-terminos-condiciones');
var closeTerminosCondiciones = document.getElementsByClassName("modal-terminos-condiciones-close")[0];
// modal - aviso de privacidad
var modalAvisoPrivacidad = document.getElementById('modal-aviso-privacidad');
var btnAvisoPrivacidad = document.getElementById("myBtn");
var closeAvisoPrivacidad = document.getElementsByClassName("modal-aviso-privacidad-close")[0];

/**
 * Document Ready
 */
$(document).ready(function(){

	/**
	 * Click - Menu
	 */
	$(".toggle-nav").on("click", function(){
		$(this).toggleClass("toggle-nav-anim");
	});

	/**
	 * Click - Menu
	 */
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
		$(".nav").toggleClass('nav-toggle');
	});

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

	$("#checkbox").click(function() {
		if($("#checkbox").is(':checked')) {
			alert("Está activado");
		} else {
			$(".aceptar-mask").show();
		}
    });

    $(".form-login-btn").on("click", function(e){
    	e.preventDefault();
    });

});

$(window).load(function(){
	// alert("Load");
	$(".loader").fadeOut();
	$(".wrap").delay(3000).fadeIn();
});


/**
 * Modal
 */
// open modal
// Aviso de privacidad
btnAvisoPrivacidad.onclick = function() {
	// modal.style.display = "block";
	modalAvisoPrivacidad.style.display = "flex";
}

// close modal
// Aviso de privacidad
closeAvisoPrivacidad.onclick = function() {
	modalAvisoPrivacidad.style.display = "none";
}
// Terminos y condiciones
closeTerminosCondiciones.onclick = function() {
	modalTerminosCondiciones.style.display = "none";
}

// close it
window.onclick = function(event) {
	// modal - Aviso de privacidad
	if (event.target == modalAvisoPrivacidad) {
		modalAvisoPrivacidad.style.display = "none";
	}
	// modal - Terminos y condiciones
	if (event.target == modalTerminosCondiciones) {
		modalTerminosCondiciones.style.display = "none";
	}
}