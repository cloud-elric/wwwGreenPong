<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Ingresar codigo';
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(['id' => 'ingresar-codigo-form']); ?>

<?= $form->field($codigo, 'txt_codigo')->textInput(['maxlength' => 10])?>
<?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button'])?>
 
<?php ActiveForm::end(); ?>

