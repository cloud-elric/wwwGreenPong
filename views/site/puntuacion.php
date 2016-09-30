<!-- .puntuacion -->
<div class="puntuacion">
	
	<!-- .puntuacion-cont -->
	<div class="puntuacion-cont">
		
		<h3>Puntuación</h3>

		<div class="puntuacion-cont-tabla">

			<div class="puntuacion-cont-tabla-head">
				<div class="puntuacion-cont-tabla-head-td">N°</div>
				<div class="puntuacion-cont-tabla-head-td">Nombre</div>
				<div class="puntuacion-cont-tabla-head-td">Abreviación</div>
				<div class="puntuacion-cont-tabla-head-td">Puntuación</div>
			</div>

			<div class="puntuacion-cont-tabla-body">
				<?php 
				$index = 1;
				foreach($puntuaciones as $puntuacion){?>
				
				<div class="puntuacion-cont-tabla-body-tr">
					<div class="puntuacion-cont-tabla-body-td"><?=$index?></div>
					<div class="puntuacion-cont-tabla-body-td"><?=$puntuacion->idUsuario->nombreCompleto?></div>
					<div class="puntuacion-cont-tabla-body-td"><?=$puntuacion->txt_game_tag?></div>
					<div class="puntuacion-cont-tabla-body-td"><?=$puntuacion->num_puntuacion?></div>
				</div>	
				<?php
				$index++;
				}
				?>
			</div>

		</div>

	</div>
	<!-- end - .puntuacion-cont -->

</div>
<!-- end - .puntuacion -->