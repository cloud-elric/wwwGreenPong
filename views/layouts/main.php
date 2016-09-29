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
		<meta charset="<?= Yii::$app->charset ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?= Html::csrfMetaTags()?>
		<title><?= Html::encode($this->title) ?></title>
		<?php $this->head()?>
	</head>

	<body>
		<?php $this->beginBody()?>

		<div class="loader"><img src="<?=Url::base()?>/images/loader.gif" alt="Loader"></div>

		<div class="wrap">

			<header>
				<div class="header-cont">
					<div class="nav-trigger">

						<!-- <div class="toggle-nav">
							<div class="bar top"></div>
							<div class="bar middle1"></div>
							<div class="bar bottom"></div>
							<div class="bar middle2"></div>
						</div> -->

						<div id="nav-icon3">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>

					</div>

					<div class="nav">
						<a href="">Home</a>
						<a href="">Services</a>
						<a href="">About</a>
						<a href="">Contact</a>
					</div>

					<a href="" class="logo">
						<img src="<?=Url::base()?>/images/logo.png" alt="Masters Experience">
					</a>
				</div>
			</header>

			<?= $content?>
		</div>

		<?php $this->endBody()?>
	</body>

</html>
<?php $this->endPage()?>
