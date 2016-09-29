<?php
use yii\helpers\Url;
?>
<div style="display:none">
	<!-- elementos invisibles -->
		<img id="ball" src="<?=Url::base()?>/images/tennisball.png">
		<img id="court" src="<?=Url::base()?>/images/tenniscourt.png">
	</div>
	
	<div id="score_box">
		<p>Score <span id="score">0</span></p>
	</div>
	
	<div id="lives_box">
		<p>Vidas <span id="lives">0</span></p>
	</div>
	
	<canvas id="myCanvas" width="600" height="300" style="border:1px solid #000000;">
</canvas>
<p onclick="iniciarJuego()">iniciar</p>