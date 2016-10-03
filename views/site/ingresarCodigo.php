<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Ingresar codigo';
?>

<!-- .ingresar-codigo-cont -->
<div class="ingresar-codigo-cont">
	<!-- .ingresar-codigo-card -->
	<div class="ingresar-codigo-card">
		
		<!-- #ingresar-codigo-form -->
		<?php $form = ActiveForm::begin(['id' => 'ingresar-codigo-form']); ?>
			
			<!-- .ingresar-codigo-card-header -->
			<div class="ingresar-codigo-card-header">
				<div class="ingresar-codigo-card-header-anuncio">
					<h3 class="f-futurist-black">Vive la Final</h3>
					<p>
						este 15 de Octubre en <span>ATP OPEN MTY 2016</span>
					</p>
				</div>
			</div>
			<!-- end - .ingresar-codigo-card-header -->
			
			<!-- .ingresar-codigo-card-body -->
			<div class="ingresar-codigo-card-body">

				<div class="id">
					<?= $form->field($codigo, 'txt_codigo')->textInput(['maxlength' => 10])-> label(false) -> textInput(["placeholder" => "ID 579Y26ER"])?>
				</div>
				
				<p class="recibiras">
					Recibirás tu ID vía sms
				</p>

				<hr>

				<p class="texto">
					Juega aquí y el score más alto será parte de esta
				</p>

				<img src="<?=Url::base()?>/images/me-footer.png" alt="" class="card-logo">
				
				<p class="vigencia">
					Vigencia del 3 al 13 de Oct
				</p>

			</div>
			<!-- end - .ingresar-codigo-card-body -->

			<?= Html::submitButton('Jugar', ['class' => 'ingresar-codigo-card-btn-jugar', 'name' => 'contact-button'])?>
		
		<?php ActiveForm::end(); ?>
		<!-- end - #ingresar-codigo-form -->

	</div>
	<!-- end - .ingresar-codigo-card -->

	<!-- .aviso-privacidad -->
	<div class="aviso-privacidad">
		<span class="btn-aviso-privacidad">Aviso de Privacidad</span>
	</div>
	<!-- end - .aviso-privacidad -->

	<!-- .modal (Aviso de privacidad) -->
	<div id="modal-aviso-privacidad" class="modal">

		<!-- .modal-content -->
		<div class="modal-content">
			<!-- .modal-header -->
			<div class="modal-header">
				<span class="close modal-aviso-privacidad-close">×</span>
				<h2>Aviso de privacidad</h2>
			</div>
			<!-- end - .modal-header -->
			<!-- .modal-body -->
			<div class="modal-body">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque aliquam, sunt nesciunt aperiam quis, tenetur libero vero fugit cupiditate nisi! Delectus quis vel cum explicabo incidunt eius rerum enim laborum.
				</p>
			</div>
			<!-- end - .modal-body -->
		</div>
		<!-- end - .modal-content -->

	</div>
	<!-- end - .modal -->
	
	<!-- .modal (Reenviar codigo) -->
	<div id="modal-reenviar-codigo" class="modal">

		<!-- .modal-content -->
		<div class="modal-content">
			<!-- .modal-header -->
			<div class="modal-header">
				<span class="close modal-aviso-privacidad-close">×</span>
				<h2>Reenviar codigo</h2>
			</div>
			<!-- end - .modal-header -->
			<!-- .modal-body -->
			<div class="modal-body">
				<p>
					<?php  $form = ActiveForm::begin(['id' => 'reenviar-codigo-form']); ?>

					<?php  $form->field($usuario, 'tel_numero_celular')->textInput(['maxlength' => 10])?>

					<?php  ActiveForm::end(); ?>
				</p>
			</div>
			<!-- end - .modal-body -->
		</div>
		<!-- end - .modal-content -->

	</div>
	<!-- end - .modal -->
	
</div>
<!-- end - .ingresar-codigo-cont -->

<!-- <h1><?php # Html::encode($this->title) ?></h1> -->

<?php # $form = ActiveForm::begin(['id' => 'ingresar-codigo-form']); ?>

<?php # $form->field($codigo, 'txt_codigo')->textInput(['maxlength' => 10])?>

<?php # ActiveForm::end(); ?>