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

// HOME - Términos y condiciones
var modalTerminosCondicionesHome = document.getElementById('modal-terminos-condiciones-home');
var btnTerminosCondicionesHome = document.getElementsByClassName("btn-terminos-condiciones-home")[0];
var closeTerminosCondicionesHome = document.getElementsByClassName("modal-terminos-condiciones-close-home")[0];

// HOME - Aviso de privacidad
var modalAvisoPrivacidadHome = document.getElementById('modal-aviso-privacidad-home');
var btnAvisoPrivacidadHome = document.getElementsByClassName("btn-aviso-privacidad-home")[0];
var closeAvisoPrivacidadHome = document.getElementsByClassName("modal-aviso-privacidad-close-home")[0];

var btnReenviarCodigo = document.getElementById("js-reenviar-codigo");

var closeAvisoPrivacidad = document.getElementsByClassName("modal-aviso-privacidad-close")[0];
var closeReenviarCodigo = document.getElementsByClassName("modal-reenviar-close")[0];

var modalTerminosCondiciones = document.getElementById('modal-terminos-condiciones');
var modalGameOver = document.getElementById('modal-gameover');
var modalReenviarCodigo = document.getElementById('modal-reenviar-codigo');

window.onhashchange = function() {
	 alert();
	}
/**
 * Document Ready
 */
$(document).ready(function(){

	/**
	 * Reenvia el codigo 
	 */
	$("#js-reenviar-codigo-cel").on("click", function(e){
		e.preventDefault();

		// Ladda
		var l = Ladda.create(this);
	 	l.start();

		var url = 'reenviar-codigo'
		var data = $('#reenviar-codigo-form').serialize();
		$.ajax({
			url:url,
			data:data,
			dataType:'JSON',
			type:'POST',
			success:function(response){
				if(response.status=="success"){
					$('.mensaje-codigo-enviado-success').text(response.message);
				}else{
					$('.mensaje-codigo-enviado-error').text(response.message);
				}
				l.stop();
			}
			
		});
	});
	
	/**
	 * Modal
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
		$("#entusuarios-aceptaterminos").prop( "checked", true );
		modalTerminosCondiciones.style.display = "none";

});
	
	// open
	// Aviso de privacidad
	$(btnAvisoPrivacidad).on("click", function(){
		modalAvisoPrivacidad.style.display = "flex";
	});

	// open
	// Términos y condiciones (HOME)
	$(btnTerminosCondicionesHome).on("click", function(){
		modalTerminosCondicionesHome.style.display = "flex";
	});

	// open
	// Aviso de privacidad (HOME)
	$(btnAvisoPrivacidadHome).on("click", function(){
		modalAvisoPrivacidadHome.style.display = "flex";
	});
	
	// close
	// Aviso de privacidad
	// closeAvisoPrivacidad.onclick = function() {
	$(closeAvisoPrivacidad).on("click", function(){
		modalAvisoPrivacidad.style.display = "none";
	});
	
	
	// open
	// Reenviar codigo modal
	$(btnReenviarCodigo).on("click", function(e){
		e.preventDefault();
		modalReenviarCodigo.style.display = "flex";
		resetFormReenviar();
	});
	// btnAvisoPrivacidad.onclick = function() {
	// 	modalAvisoPrivacidad.style.display = "flex";
	// }

	// close
	// Reenviar codigo modal
	$(closeReenviarCodigo).on("click", function(){
		modalReenviarCodigo.style.display = "none";
		resetFormReenviar();
	});

	// close
	// Términos y condiciones - HOME
	$(closeTerminosCondicionesHome).on("click", function(){
		modalTerminosCondicionesHome.style.display = "none";
		resetFormReenviar();
	});


	// close
	// Aviso de privacidad - HOME
	$(closeAvisoPrivacidadHome).on("click", function(){
		modalAvisoPrivacidadHome.style.display = "none";
		resetFormReenviar();
	});

	function resetFormReenviar(){
		$('.mensaje-codigo-enviado-success').text('');
		$('.mensaje-codigo-enviado-error').text('');
		document.getElementById("reenviar-codigo-form").reset();
	}


	$("#entusuarios-aceptaterminos").click(function() {
		if($("#entusuarios-aceptaterminos").is(':checked')) {
			alert("Está activado");
		} else {
			$(".aceptar-mask").show();
		}
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
		
		// modal -reenviar codigo
		if (event.target == modalReenviarCodigo) {
			modalReenviarCodigo.style.display = "none";
		}

		// modal - HOME Términos y condiciones
		if (event.target == modalTerminosCondicionesHome) {
			modalTerminosCondicionesHome.style.display = "none";
		}

		// modal - HOME Aviso de privacidad
		if (event.target == modalAvisoPrivacidadHome) {
			modalAvisoPrivacidadHome.style.display = "none";
		}

	}

$(window).load(function(){
	$(".loader").fadeOut();
	$(".wrap").delay(3000).fadeIn();
});

});