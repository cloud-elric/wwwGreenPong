<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\web\View;

$this->title = 'Registrarse';
$this->params ['breadcrumbs'] [] = $this->title;
?>

<div class="me-cont">
	<!-- <form class="form-login"> -->

	<?php $form = ActiveForm::begin(['id' => 'registro-form', 'options' => ['class' => 'form-login']]); ?>

		<div class="row">
		<div class="col-xs-12 col-sm-6 input-field">
			<i class="ion ion-ios-person"></i>
			<!-- <input type="text" placeholder="First Name"> -->
				<?= $form->field($usuario, 'txt_nombre')->textInput(['autofocus' => true]) -> label(false) -> textInput(["placeholder" => "First Name"])?>
			</div>
		<div class="col-xs-12 col-sm-6 input-field">
			<!-- <input type="text" class="input-short" placeholder="Last Name"> -->
				<?= $form->field($usuario, 'txt_apellido_paterno') -> label(false) -> textInput(["placeholder" => "Last Name", "class"=>"input-short"])?>
			</div>
		<div class="col-xs-12 input-field">
			<i class="ion ion-ios-telephone"></i>
			<!-- <input type="text" placeholder="Phone Number"> -->
				<?= $form->field($usuario, 'tel_numero_celular') -> label(false) -> textInput(["placeholder" => "Phone Number"])?>
			</div>
		<div class="col-xs-12 input-field">
			<i class="ion ion-at"></i>
			<!-- <input type="email" placeholder="E-mail"> -->
				<?= $form->field($usuario, 'txt_email') -> label(false) -> textInput(["placeholder" => "E-mail"])?>
			</div>

	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-6 btn-field">
			<!-- <button class="form-login-btn">Continuar</button> -->
				<?= Html::submitButton('Continuar', ['class' => 'btn btn-primary', 'name' => 'contact-button'])?>
			</div>
		<div class="col-xs-12 col-sm-6 input-field terminos-condiciones">
			<ul class="list">
				<li class="list__item"><label class="label--checkbox">

						<div class="label--checkbox-row">
							<div class="label--checkbox-row-col">
								
								<?=$form->field ( $usuario, 'aceptaTerminos',['template'=>'{error}{input}'])->label ( false )->checkbox (['class'=>'checkbox'], false)?>
<!-- 									<input type="checkbox" id="checkbox" class="checkbox"> -->
							</div>
							<div class="label--checkbox-row-col">
								Acepta <span>Terminos y condiciones</span>
							</div>
						</div>
				</label></li>
			</ul>
			<div class="aceptar-mask"></div>

			<!-- .modal -->
			<div id="modal-terminos-condiciones" class="modal">

				<!-- Modal content -->
				<div class="modal-content">
					<div class="modal-header">
						<span class="close modal-terminos-condiciones-close">×</span>
						<h2>Terminos-condiciones</h2>
					</div>
					<div class="modal-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Itaque aliquam, sunt nesciunt aperiam quis, tenetur libero vero
							fugit cupiditate nisi! Delectus quis vel cum explicabo incidunt
							eius rerum enim laborum.</p>

						<span class="aceptar-terminos-condiciones-btn"> Acepto los
							terminos y condiciones </span>
					</div>
					<!-- <div class="modal-footer">
							<h3>Modal Footer</h3>
						</div> -->
				</div>

			</div>
			<!-- end - .modal -->

		</div>
	</div>

	<?php ActiveForm::end(); ?>

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
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque
					aliquam, sunt nesciunt aperiam quis, tenetur libero vero fugit
					cupiditate nisi! Delectus quis vel cum explicabo incidunt eius
					rerum enim laborum.</p>
			</div>
			<!-- <div class="modal-footer">
				<h3>Modal Footer</h3>
			</div> -->
		</div>

	</div>
	<!-- end - .modal -->

</div>


<h1><?php # Html::encode($this->title) ?></h1>

<?php # $form = ActiveForm::begin(['id' => 'registro-form']); ?>

                    <?php # $form->field($usuario, 'txt_nombre')->textInput(['autofocus' php> true])?>

                    <?php # $form->field($usuario, 'txt_apellido_paterno')?>

                    <?php # $form->field($usuario, 'txt_email')?>
                    
                    <?php # $form->field($usuario, 'tel_numero_celular')?>

                   
                        <?php # Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button'])?>
 

                <?php # ActiveForm::end(); ?>

