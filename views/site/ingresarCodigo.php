<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Ingresar codigo';
?>
			
<div class="me-conts">
	<div class="me-card">

		<?php $form = ActiveForm::begin(['id' => 'ingresar-codigo-form']); ?>

		<div class="me-card-header">
			<div class="me-card-header-anuncio">
				<h3 class="f-futurist-black">Vive la Final</h3>
				<p>
					este 15 de Octubre en <span>ATP OPEN MTY 2016</span>
				</p>
			</div>
		</div>

		<div class="me-card-body">

			<div class="id">
				<!-- <p>ID 579Y26ER</p> -->
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

		<!-- <span class="me-btn-jugar">Jugar</span> -->
		<?= Html::submitButton('Jugar', ['class' => 'me-btn-jugar', 'name' => 'contact-button'])?>
		
		<?php ActiveForm::end(); ?>
	</div>
	

	<div class="aviso-privacidad">
		<span id="myBtn">Aviso de Privacidad</span>
	</div>

	<!-- .modal -->
	<div id="modal-aviso-privacidad" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<span class="close modal-aviso-privacidad-close">×</span>
				<h2>Aviso de privacidad</h2>
			</div>
			<div class="modal-body">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque aliquam, sunt nesciunt aperiam quis, tenetur libero vero fugit cupiditate nisi! Delectus quis vel cum explicabo incidunt eius rerum enim laborum.
				</p>
			</div>
			<!-- <div class="modal-footer">
				<h3>Modal Footer</h3>
			</div> -->
		</div>

	</div>
	<!-- end - .modal -->
	
</div>


<h1><?php # Html::encode($this->title) ?></h1>

<?php # $form = ActiveForm::begin(['id' => 'ingresar-codigo-form']); ?>

<?php # $form->field($codigo, 'txt_codigo')->textInput(['maxlength' => 10])?>

 
<?php # ActiveForm::end(); ?>

