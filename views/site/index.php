<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registrarse';
$this->params ['breadcrumbs'] [] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

                <?php $form = ActiveForm::begin(['id' => 'registro-form']); ?>

                    <?= $form->field($usuario, 'txt_nombre')->textInput(['autofocus' => true])?>

                    <?= $form->field($usuario, 'txt_apellido_paterno')?>

                    <?= $form->field($usuario, 'txt_email')?>
                    
                    <?= $form->field($usuario, 'tel_numero_celular')?>

                   
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button'])?>
 

                <?php ActiveForm::end(); ?>

