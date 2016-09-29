/**
 * Green Pong - Juego
 *
 * # author      Damián <@damian>
 * # copyright   Copyright (c) 2016, Green Pong
 *
 */
// Variables
// modal - GameOver
var openGameOver = document.getElementById('btn-gameover');
var modalGameOver = document.getElementById('modal-gameover');
var closeGameOver = document.getElementsByClassName("modal-gameover-close")[0];

/**
 * Document Ready
 */
$(document).ready(function(){

	/**
	 * Click - Mostar modal GameOver
	 */
	$(".btn-gameover").on("click", function(){
		modalGameOver.style.display = "flex";
	});

});

/**
 * Modal
 */
// close
// GameOver
closeGameOver.onclick = function() {
	modalGameOver.style.display = "none";
}

// // close it
// window.onclick = function(event) {
// 	// modal - GameOver
// 	if (event.target == modalGameOver) {
// 		modalGameOver.style.display = "none";
// 	}
// }