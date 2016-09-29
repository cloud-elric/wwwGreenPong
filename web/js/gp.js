/**
 * Green Pong
 *
 * # author      Damián <@damian>
 * # copyright   Copyright (c) 2016, Green Pong
 *
 */
// Variables
// modal - aviso de privacidad
var modalAvisoPrivacidad = document.getElementById('modal-aviso-privacidad');
var btnAvisoPrivacidad = document.getElementsByClassName("btn-aviso-privacidad")[0];
var closeAvisoPrivacidad = document.getElementsByClassName("modal-aviso-privacidad-close")[0];

var modalTerminosCondiciones = document.getElementById('modal-terminos-condiciones');
var modalGameOver = document.getElementById('modal-gameover');

/**
 * Document Ready
 */
$(document).ready(function(){

	/**
	 * Modal
	 */
	// open
	// Aviso de privacidad
	$(btnAvisoPrivacidad).on("click", function(){
		modalAvisoPrivacidad.style.display = "flex";
	});
	// btnAvisoPrivacidad.onclick = function() {
	// 	modalAvisoPrivacidad.style.display = "flex";
	// }

	// close
	// Aviso de privacidad
	// closeAvisoPrivacidad.onclick = function() {
	$(closeAvisoPrivacidad).on("click", function(){
		modalAvisoPrivacidad.style.display = "none";
	});

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
		// modal - GameOver
		if (event.target == modalGameOver) {
			modalGameOver.style.display = "none";
		}
	}

});

$(window).load(function(){
	$(".loader").fadeOut();
	$(".wrap").delay(3000).fadeIn();
});