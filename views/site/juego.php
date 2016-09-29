<?php
use yii\helpers\Url;
?>
<!-- .jugar -->
<div class="jugar">
	
	<!-- .jugar-cont -->
	<div class="jugar-cont">
		
		<!-- .jugar-cont-header -->
		<div class="jugar-cont-header">

			<!-- <img id="ball" src="<?=Url::base()?>/images/tennisball.png">
			<img id="court" src="<?=Url::base()?>/images/tenniscourt.png"> -->

			<!-- .jugar-score -->
			<div id="score_box" class="jugar-score">
				<p>Score <span id="score">199837247238974283</span></p>
			</div>
			<!-- end - .jugar-score -->

			<!-- .jugar-lives -->
			<div id="lives_box" class="jugar-lives">
				<p>Up <span id="lives"> <i class="ion ion-ios-heart"></i> <i class="ion ion-ios-heart-outline"></i> <i class="ion ion-ios-heart"></i> </span></p>
			</div>
			<!-- end - .jugar-lives -->

		</div>
		<!-- end - .jugar-cont-header -->
		

		<!-- .jugar-cont-body -->
		<div class="jugar-cont-body">
			<canvas id="myCanvas"></canvas>
			<p onclick="iniciarJuego()">iniciar</p>
		</div>
		<!-- end - .jugar-cont-body -->

	</div>
	<!-- end - .jugar-cont -->

</div>
<!-- end - .jugar -->