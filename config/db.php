<?php
// Si esta en DEBUG
if (YII_ENV_DEV) {
	$dataBase = [
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:host=localhost;dbname=green_pong_monkeydb',
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8'
	];
} else {
	$dataBase = [
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:host=mysql1003.mochahost.com;dbname=beto2gom_charlenetas',
			'username' => 'beto2gom_c-netas',
			'password' => 'b4n4n4M0nk3y!',
			'charset' => 'utf8'
	];
}

return $dataBase;
