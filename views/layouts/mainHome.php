<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register ( $this );
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
	<head>
	<link rel="shortcut icon" type="image/png" href="<?=Url::base()?>/favicon.png"/>
		<meta charset="<?= Yii::$app->charset ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Vive una Master Experience en el Abierto Monterrey 2016 con Fiesta Americana. Gana un pase doble para la final ATP Abierto Monterrey 2016." />
		<?= Html::csrfMetaTags()?>
		<title><?= Html::encode($this->title) ?></title>
		<?php $this->head()?>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-85161587-1', 'auto');
  ga('send', 'pageview');
 
</script>
	</head>

	<body>
		<?php $this->beginBody()?>

		<div class="loader"><img src="<?=Url::base()?>/images/loader.gif" alt="Loader"></div>

		<div class="wrap">
			<?= $content?>

			<p class="text-face">
				“#ComienzaLaExperiencia regístrate y gana boletos para la final del Abierto de Monterrey 2016. “
			</p>
		</div>

		<?php $this->endBody()?>
	</body>

</html>
<?php $this->endPage()?>
