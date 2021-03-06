<?php
use yii\helpers\Url;
use yii\widgets\ActiveForm;
$this->registerJsFile('@web/js/juego.js',['depends' => [\app\assets\AppAsset::className()]]);
?>

<?php
$form = ActiveForm::begin ( [ 
		'id'=>'finalizar-juego',
		'action'=>'finalizar-juego?token='.$token 
] );

?>

<!-- .jugar -->
<div class="jugar">
	
	<!-- .jugar-cont -->
	<div class="jugar-cont">
		
		<!-- .jugar-cont-header -->
		<div class="jugar-cont-header">

			<!-- .jugar-score -->
			<div id="score_box" class="jugar-score">
				<p>Score <span id="score">199837247238974283</span></p>
				<?= $form->field($puntuaje, 'num_puntuacion')->hiddenInput()->label(false)?>
			</div>
			<!-- end - .jugar-score -->

			<!-- .jugar-lives -->
			<div id="lives_box" class="jugar-lives">
				<p>Up <span id="lives"> </span></p>
				<i class="ion ion-ios-tennisball live"></i> 
				<i class="ion ion-ios-tennisball live"></i> 
				<i class="ion ion-ios-tennisball live"></i>
			</div>
			<!-- end - .jugar-lives -->

			<!-- <input type="button" id="js-boton-arriba" style="width: 100px;">

			<input type="button" id="js-boton-abajo" style="width: 100px;"> -->

		</div>
		<!-- end - .jugar-cont-header -->
		

		<!-- .jugar-cont-body -->
		<div class="jugar-cont-body">
			
			<div class="jugar-cont-body-gral">

				<div class="jugar-cont-body-canvas">

					<div class="jugar-cont-body-overflow">
						<canvas id="myCanvas" width="600" height="300">
							
						</canvas>
						<p class="jugar-cont-body-btn-jugar" onclick="iniciarJuego()" id="js-button-jugar">
							<i class="ion ion-play"></i>
							<!-- <i class="ion ion-refresh"></i> -->
							Jugar
						</p>
					</div>

					<div class="jugar-cont-body-canvas-controles">
						<button class="jugar-cont-body-canvas-controles-btn" id="js-boton-arriba"><i class="ion ion-chevron-up"></i></button>
						<button class="jugar-cont-body-canvas-controles-btn" id="js-boton-abajo"><i class="ion ion-chevron-down"></i></button>
					</div>

					<!-- <canvas id="myCanvas" width="600" height="300"> -->
				</div>
			</div>
			<div>
				<img id="ball" src="<?=Url::base()?>/images/tennisball.png">
				<img id="court" src="<?=Url::base()?>/images/tenniscourt.jpg">
			</div>

		</div>
		<!-- end - .jugar-cont-body -->

	</div>
	<!-- end - .jugar-cont -->


	<!-- .modal (GameOver) -->
	<div id="modal-gameover" class="modal modal-gameover">

		<!-- .modal-content -->
		<div class="modal-content">
			<!-- .modal-header -->
			<div class="modal-header">
				<span class="close modal-gameover-close">×</span>
				<h2>GameOver</h2>
			</div>
			<!-- end - .modal-header -->
			<!-- .modal-body -->
			<div class="modal-body">
				<p class="p-puntuacion">Tu puntuación fue de <label class='puntuaje-usuario'></label></p>
				<?= $form->field($puntuaje, 'txt_game_tag')->textInput(['maxlength' => true])?>
				<button class="btn-volver-a-jugar" onclick="iniciarJuego()">Volver a jugar</button>
				<button class="btn-finalizar">Finalizar</button>
			</div>
			<!-- end - .modal-body -->
		</div>
		<!-- end - .modal-content -->

	</div>
	<!-- end - .modal -->

</div>
<!-- end - .jugar -->

<?php

ActiveForm::end ();
?>