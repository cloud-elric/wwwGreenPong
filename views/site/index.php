<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Registrarse';
$this->params ['breadcrumbs'] [] = $this->title;

$this->registerJsFile('@web/js/login.js',['depends' => [\app\assets\AppAsset::className()]]);
?>

<!-- .login-cont -->
<div class="login-cont">
	
	<!-- .form-login -->
	<?php $form = ActiveForm::begin(['id' => 'registro-form', 'options' => ['class' => 'form-login']]); ?>
		
		<!-- .row -->
		<div class="row">
			<div class="col-xs-12 col-sm-6 input-field">
				<i class="ion ion-ios-person"></i>
				<?= $form->field($usuario, 'txt_nombre')->textInput(['autofocus' => true]) -> label(false) -> textInput(["placeholder" => "First Name"])?>
			</div>
			<div class="col-xs-12 col-sm-6 input-field">
				<?= $form->field($usuario, 'txt_apellido_paterno') -> label(false) -> textInput(["placeholder" => "Last Name", "class"=>"input-short"])?>
			</div>
			<div class="col-xs-12 input-field">
				<i class="ion ion-ios-telephone"></i>
				<?= $form->field($usuario, 'tel_numero_celular') -> label(false) -> textInput(["placeholder" => "Phone Number"])?>
			</div>
			<div class="col-xs-12 input-field">
				<i class="ion ion-at"></i>
				<?= $form->field($usuario, 'txt_email') -> label(false) -> textInput(["placeholder" => "E-mail"])?>
			</div>
		</div>
		<!-- end - .row -->
		
		<!-- .row -->
		<div class="row">
			<!-- .btn-field -->
			<div class="col-xs-12 col-sm-6 btn-field">
				<?= Html::submitButton('Continuar', ['class' => 'form-login-btn', 'name' => 'contact-button'])?>
			</div>
			<!-- end - .btn-field -->
			<!-- .terminos-condiciones -->
			<div class="col-xs-12 col-sm-6 input-field terminos-condiciones">
				<!-- .list -->
				<ul class="list">
					<!-- .list__item -->
					<li class="list__item">
						<!-- .label--checkbox -->
						<label class="label--checkbox">
							<!-- .label--checkbox-row -->
							<div class="label--checkbox-row">
								<div class="label--checkbox-row-col">
									<input type="checkbox" id="checkbox" class="checkbox">
								</div>
								<div class="label--checkbox-row-col">
									Acepta <span>Terminos y condiciones</span>
								</div>
							</div>
							<!-- end - .label--checkbox-row -->
						</label>
						<!-- end - .label--checkbox -->
					</li>
					<!-- end - .list__item -->
				</ul>
				<!-- end - .list -->

				<!-- .aceptar-mask -->
				<div class="aceptar-mask"></div>

				<!-- .modal (Terminos y condiciones) -->
				<div id="modal-terminos-condiciones" class="modal">
					<!-- .modal-content -->
					<div class="modal-content">
						<!-- .modal-header -->
						<div class="modal-header">
							<span class="close modal-terminos-condiciones-close">×</span>
							<h2>Terminos-condiciones</h2>
						</div>
						<!-- end - .modal-header -->
						<!-- .modal-body -->
						<div class="modal-body">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque aliquam, sunt nesciunt aperiam quis, tenetur libero vero fugit cupiditate nisi! Delectus quis vel cum explicabo incidunt eius rerum enim laborum.
							</p>

							<span class="aceptar-terminos-condiciones-btn">
								Acepto los terminos y condiciones
							</span>
						</div>
						<!-- end - .modal-body -->
					</div>
					<!-- end - .modal-content -->
				</div>
				<!-- end - .modal -->

			</div>
			<!-- end - .terminos-condiciones -->
		</div>
		<!-- end - .row -->

	<?php ActiveForm::end(); ?>
	<!-- end - .form-login -->
	
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

</div>
<!-- end - .login-cont -->

<!-- <h1><?php # Html::encode($this->title) ?></h1> -->

<?php # $form = ActiveForm::begin(['id' => 'registro-form']); ?>

<?php # $form->field($usuario, 'txt_nombre')->textInput(['autofocus' php> true])?>

<?php # $form->field($usuario, 'txt_apellido_paterno')?>

<?php # $form->field($usuario, 'txt_email')?>

<?php # $form->field($usuario, 'tel_numero_celular')?>

<?php # Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button'])?>

<?php # ActiveForm::end(); ?>