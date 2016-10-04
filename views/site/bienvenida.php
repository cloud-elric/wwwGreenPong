<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;

?>
<!-- .bienvenida -->
<div class="bienvenida">
	<!-- .bienvenida-cont -->
	<div class="bienvenida-cont">

		<!-- .bienvenida-tile -->
		<h2 class="bienvenida-tile">
			Bienvenido
		</h2>
		<!-- end - .bienvenida-tile -->

		<!-- ¿Cómo Participar? -->
		<p class="bienvenida-como-participar">
			¿Cómo Participar?
			<!-- <img src="<?=Url::base()?>/images/Como-Participar.png" alt="¿Cómo Participar?"> -->
		</p>
		
		<!-- .bienvenida-cont-textos -->
		<div class="bienvenida-cont-textos">
			<!-- 1 Regístrate -->
			<div class="bienvenida-registrate">
				<p class="bienvenida-head">
					<span class="bienvenida-head-numero">
						<img src="<?=Url::base()?>/images/1.png" alt="1">
					</span>
					<span class="bienvenida-head-title">
						<!-- <img src="<?=Url::base()?>/images/bienvenida/Registrate.png" alt="Registrate"> -->
						Regístrate
					</span>
				</p>
				<p class="bienvenida-registrate-desc">
					<!-- <img src="<?=Url::base()?>/images/bienvenida/Registrate-Texto.png" alt="Registrate Texto"> -->
					No olvides aceptar el aviso de privacidad y términos y condiciones.
				</p>
			</div>

			<!-- 2 Regístrate -->
			<div class="bienvenida-juega">
				<p class="bienvenida-head">
					<span class="bienvenida-head-numero">
						<img src="<?=Url::base()?>/images/2.png" alt="2">
					</span>
					<span class="bienvenida-head-title">
						<!-- <img src="<?=Url::base()?>/images/bienvenida/Confirma.png" alt="Confirma"> -->
						Confirma
					</span>
				</p>
				<p class="bienvenida-registrate-desc">
					<!-- <img src="<?=Url::base()?>/images/bienvenida/Registrate-Texto.png" alt="Registrate Texto"> -->
					Te enviaremos un SMS con un código único de inscripción.
				</p>
			</div>

			<!-- 3 Regístrate -->
			<div class="bienvenida-confirma">
				<p class="bienvenida-head">
					<span class="bienvenida-head-numero">
						<img src="<?=Url::base()?>/images/3.png" alt="3">
					</span>
					<span class="bienvenida-head-title">
						<!-- <img src="<?=Url::base()?>/images/bienvenida/Juega.png" alt="Juega"> -->
						Juega
					</span>
				</p>
				<p class="bienvenida-registrate-desc">
					<!-- <img src="<?=Url::base()?>/images/bienvenida/Registrate-Texto.png" alt="Registrate Texto"> -->
					Diviértete en nuestra Master Experience.
				</p>
			</div>

			<!-- 4 Regístrate -->
			<div class="bienvenida-score-alto-gana">
				<p class="bienvenida-head">
					<span class="bienvenida-head-numero">
						<img src="<?=Url::base()?>/images/4.png" alt="1">
					</span>
					<span class="bienvenida-head-title bienvenida-head-title-lg">
						<!-- <img src="<?=Url::base()?>/images/bienvenida/Registrate.png" alt="Registrate"> -->
						¡El score más alto ganará!
					</span>
				</p>
				<p class="bienvenida-registrate-desc">
					<!-- <img src="<?=Url::base()?>/images/bienvenida/Registrate-Texto.png" alt="Registrate Texto"> -->
					No olvides visitar el STAND de Fiesta Americana en el Abierto de Monterrey 2016 para más sorpresas.
					<span>¡Te esperamos!</span>
				</p>
			</div>
		</div>
		<!-- end - .bienvenida-cont-textos -->

		<!-- .bienvenida-btn-comenzar -->
		<a class="bienvenida-btn-comenzar" href="<?=Url::base()?>/site/index">
			Comenzar
		</a>
		<!-- end - .bienvenida-btn-comenzar -->

		<a href="<?=Url::base()?>/site/puntuacion" class="btn-ver-puntuacion">Ver puntuaciones</a>

	</div>
	<!-- end - .bienvenida-cont -->
</div>
<!-- end - .bienvenida -->