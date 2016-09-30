/*
		DESARROLLADO POR: 2 GEEKS ONE MONKEY
		URL: HTTP://2GOM.COM.MX
		CONTACTO: CONTACTO@2GOM.COM.MX
		FECHA: SEPTIEMBRE 2016
		VERSION: 1.0.1
		
		DESCRIPCION: 
		JUEGO DE PONG DE UN SOLO JUGADOR VS LA MAQUINA
	*/
	
	
	/* ------------------------ VARIABLES -----------------------------*/
	//CANVAS
	var c 	= document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
	
	//SCORE
	var score = 0;
	var scoreLabel = document.getElementById("score");
	
	//VIDAS RESTANTES
	var vidas = 3;
	var vidasLabel = document.getElementById("lives");
	
	//Cancha de tenis bg
    var court = document.getElementById("court");
	
	//BALL de tenis bg
	var ball = document.getElementById("ball");
	
	//LIMITE BORDE SUPERIOR INFERIOR
	var topBottomBorder = 20;
	
	//Pelota
	var posX = 300;
	var posY = 150;
	var dirX = -1;
	var dirY = -1;
	var speedX = 20;
	var speedY = 10;

	//Player
	var playerH 	= 100;
	var playerW 	= 10;
	var playerPosY 	= 0;
	var playerPosX 	= 80;
	var playerSpeed = 10;
	var playerHit = false;
	
	//CONTROL DE TECLAS
	var keys = [];
	
	//FRAMES POR SEGUNDO DEL JUEGO
	var fps = 15;
	
	//ESTADO DEL JUEGO
	var isPlayig = false;
	var isGameOver = true;


	
	/* ------------ UI DEL JUEGO ------------------- */
	
	function setCourt(){
		//console.log("setCourt()");
		ctx.fillStyle="#FFFFFF";
		ctx.fillRect(0,0,600, 300);
		ctx.drawImage(court,0,0, 600,300);
		
	}
	
	function setPlayer(){
		if(playerHit){
			ctx.fillStyle="#FF0000";
			playerHit = false;
		}else{
			ctx.fillStyle="#FFFFFF";
		}
		ctx.fillRect(playerPosX,playerPosY,playerW, playerH);
	}
	
	function setBall(){ 
		if(!isPlayig){
			return;
		}
		ctx.drawImage(ball,posX,posY, 15,15);
	}

	function updateScore(){
		scoreLabel.innerHTML = score ;
		$('#wrkposicionesusuarios-num_puntuacion').val(score);
		$('.puntuaje-usuario').text(score);
	}
	
	function updateVidas(){
		//vidasLabel.innerHTML = vidas ;
		
		$('.live').each(function(index){
			var elemento = $(this);
			if((index+1)>vidas){
				elemento.removeClass('ion-ios-tennisball');
				elemento.addClass('ion-ios-tennisball-outline');
			}
		});
	}
	
	function iniciarVidas(){
		$('.live').removeClass('ion-ios-tennisball-outline');
		$('.live').addClass('ion-ios-tennisball');
	}
	

	
	/* ------------- FLUJO DEL JUEGO -------------- */
	
	//DESPLIEGA LA PANTALLA DEL JUEGO
	function init(){
		updateScore();
		updateVidas();
		setCourt();
	}

	function iniciarJuego(){
		
		$('#js-button-jugar').hide();
		
		if(isPlayig){
			return;
		}
	
		if(isGameOver){
			score = 0;
			vidas = 3;
			iniciarVidas();
			modalGameOver.style.display = "none";
		}		
		
		isGameOver = false;
		initBall();
		initPlayer();
		isPlayig = true;
		draw();
	}
	
	//PIERDE UNA PELOTA
	function dead(){
		
		$('#js-button-jugar').show();
		
		console.log("dead!");
		isPlayig = false;
		setCourt();
		setPlayer();
		vidas = vidas -1;
		updateVidas();
		if(vidas == 0){
			gameOver();
		}
	}
	
	function gameOver(){
		console.log("gameOver");
		isGameOver = true;
		modalGameOver.style.display = "flex";
	}
	
	
	function movePlayer(){
		if(keys['38']){
			playerPosY = playerPosY - playerSpeed;
		}
		
		if(keys['40']){
			playerPosY = playerPosY + playerSpeed;
		}
		
		if(playerPosY < 0) {
			playerPosY = 0;
		}
		
		if(playerPosY > (300 - playerH) ) {
			playerPosY = (300 - playerH);
		}
	}
	
	
	
	/* -------------- LOGICA DEL JUEGO ----------------- */
	
	/* TICS DEL JUEGO */
	function draw() {
		if(!isPlayig){
			return;
		}
	
		setTimeout(function() {
			requestAnimationFrame(draw);
			updateScore();
			movePlayer();
			moveBall();
			setCourt();
			setBall();
			setPlayer();

		}, 1000 / fps);
	}
	
	function moveBall(){
		posX = posX + (dirX * speedX);
		posY = posY  + (dirY * speedY);
		
		if(posY < topBottomBorder || posY > 285 - topBottomBorder){
			dirY = dirY * -1;
		}
		/*
		if(posX < 10 || posX > 585){
			dirX = dirX * -1;
		}
		*/
		//Solo del lado drecho no sale la pelota
		if(posX > 585){
			dirX = dirX * -1;
		}
		
		//Si la pelota sale de la pantalla, se pierde 1 vida
		if(posX < 10){
			dead();
		}
		
		//valida el contacto con el player
		
		if(posX <= playerPosX + playerW * 2 && posX >= playerPosX - playerW  && posY >= playerPosY  && posY <= playerPosY + playerH){
			playerHitAction();
		}
	}
	
	function playerHitAction(){
		//dirX = dirX * -1;
		playerHit = true;
		dirX = 1; //movimiento a la derecha
		score = score + 1;
		
		//recorta el tamaño de la barra
		//playerH = playerH - 10;
		
		//Ajustla la velocidad
		var num = Math.floor(Math.random()*2) == 1 ? 2 : -2;
		
		speedY = speedY + num;
		speedX = speedX + Math.random();
		
		
		
		if(speedY > 15){
			speedY = 14;
		}
		if(speedY < -15){
			speedY = -14;
		}
		
		//console.log("Speed: " + speedX , " " + speedY);
		
	}
	
	/* ------------- INICIALIZACIÓN DE COMPONENTES -------------- */
	
	function initBall(){
		//BALL
		posX 	= 550;
		posY 	= 150;
		dirX 	= -1;
		dirY 	= -1;
		speedX 	= 20;
		speedY 	= 10;
	}
	
	function initPlayer(){
		//Player
		 playerH 		= 100;
		 playerW 		= 10;
		 
		 playerPosY 	= 0;
		 playerPosX 	= 80;
		 
		 playerSpeed 	= 10;
		 playerHit = false;
	}
	
	
	/* ------------- CONTROLES -------------- */
	
	window.onkeyup = function(e) {
		keys[e.keyCode]=false;
		//console.log("ku " + e.keyCode);
	}

	window.onkeydown = function(e) {
		keys[e.keyCode]=true;
		//console.log("kd " + e.keyCode);
	}
	
	
	
	/* ---------- DOCUMENT READY ------------------- */
	$( document ).ready(function() {
		console.log( "ready!" );
		init();
		
		$(".btn-volver-a-jugar").on("click", function(e){
			e.preventDefault();
		});
	});
	
