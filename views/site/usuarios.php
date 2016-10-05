<?php
use yii\widgets\ListView;
?>
<!-- .puntuacion -->
<div class="puntuacion">

	<!-- .puntuacion-cont -->
	<div class="puntuacion-cont">

		<h3>Usuarios registrados</h3>


			
				<?php
				echo ListView::widget ( [ 
						'dataProvider' => $dataProvider,
						// 'options' => [
						// 'tag' => 'div',
						// 'class' => 'puntuacion-cont-tabla-body',
						// 'id' => 'list-wrapper'
						// ],
						'summary' => "Mostrando {begin} - {end} de {totalCount}",
						'layout' => '<div class="puntuacion-cont-tabla">
										<div class="puntuacion-cont-tabla-head">
											<div class="puntuacion-cont-tabla-head-td">Nombre</div>
											<div class="puntuacion-cont-tabla-head-td">Telefono</div>
										</div>
										<div class="puntuacion-cont-tabla-body">
											{items}
										</div>
									</div>{summary}{pager}',
						'itemView' => '_itemUsuario' 
				] );
				?>


	</div>
	<!-- end - .puntuacion-cont -->

</div>
<!-- end - .puntuacion -->