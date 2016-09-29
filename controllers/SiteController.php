<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntUsuarios;
use app\models\WrkCodigos;
use app\models\Utils;

class SiteController extends Controller {
	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className (),
						'only' => [ 
								'logout' 
						],
						'rules' => [ 
								[ 
										'actions' => [ 
												'logout' 
										],
										'allow' => true,
										'roles' => [ 
												'@' 
										] 
								] 
						] 
				],
				'verbs' => [ 
						'class' => VerbFilter::className (),
						'actions' => [ 
								'logout' => [ 
										'post' 
								] 
						] 
				] 
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function actions() {
		return [ 
				'error' => [ 
						'class' => 'yii\web\ErrorAction' 
				],
				'captcha' => [ 
						'class' => 'yii\captcha\CaptchaAction',
						'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null 
				] 
		];
	}
	
	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionIndex() {
		$usuario = new EntUsuarios ();
		
		if ($usuario->load ( Yii::$app->request->post () )) {
			$usuario->txt_token = Utils::generateToken ( 'usr_' );
			$usuario->save ();
			
			$codigo = new WrkCodigos ();
			$codigo->id_usuario = $usuario->id_usuario;
			$codigo->txt_codigo = substr ( md5 ( microtime () ), 1, 10 );
			$codigo->txt_token = Utils::generateToken ( 'cod_' );
			
			$codigo->save ();
			
			$message = urlencode('Usa el siguiente codigo '.$codigo->txt_codigo);
			$url = 'http://sms-tecnomovil.com/SvtSendSms?username=PIXERED&password=Pakabululu01&message=' . $message .'&numbers=' . $usuario->tel_numero_celular;
			
			$sms = file_get_contents($url);
			
			return $this->redirect ( 'ingresar-codigo' );
		}
		
		return $this->render ( 'index', [ 
				'usuario' => $usuario 
		] );
	}
	
	/**
	 * Action para ingresar el codigo
	 */
	public function actionIngresarCodigo() {
		$codigo = new WrkCodigos ();
		
		if ($codigo->load ( Yii::$app->request->post () )) {
			$codigoEncontrado = WrkCodigos::find ()->where ( [ 
					'txt_codigo' => $codigo->txt_codigo,
					'b_codigo_usado'=>0
			] )->one();
			
			if(empty($codigoEncontrado)){
				return $this->render('codigoNoValido');
			}
			
			return $this->render('juego');
		}
		
		return $this->render ( 'ingresarCodigo', [ 
				'codigo' => $codigo 
		] );
	}
	
	/**
	 * Busca un usuario por su token
	 *
	 * @param unknown $token        	
	 * @throws NotFoundHttpException
	 * @return EntUsuarios
	 */
	private function getUsuarioByToken($token) {
		if (($usuario = EntUsuarios::find ()->where ( [ 
				'txt_token' => $token 
		] )->one ()) !== null) {
			return $usuario;
		} else {
			throw new NotFoundHttpException ( 'The requested page does not exist.' );
		}
	}
	
	/**
	 * Login action.
	 *
	 * @return string
	 */
	public function actionLogin() {
		if (! Yii::$app->user->isGuest) {
			return $this->goHome ();
		}
		
		$model = new LoginForm ();
		if ($model->load ( Yii::$app->request->post () ) && $model->login ()) {
			return $this->goBack ();
		}
		return $this->render ( 'login', [ 
				'model' => $model 
		] );
	}
	
	/**
	 * Logout action.
	 *
	 * @return string
	 */
	public function actionLogout() {
		Yii::$app->user->logout ();
		
		return $this->goHome ();
	}
	
	/**
	 * Displays contact page.
	 *
	 * @return string
	 */
	public function actionContact() {
		$model = new ContactForm ();
		if ($model->load ( Yii::$app->request->post () ) && $model->contact ( Yii::$app->params ['adminEmail'] )) {
			Yii::$app->session->setFlash ( 'contactFormSubmitted' );
			
			return $this->refresh ();
		}
		return $this->render ( 'contact', [ 
				'model' => $model 
		] );
	}
	
	/**
	 * Displays about page.
	 *
	 * @return string
	 */
	public function actionAbout() {
		return $this->render ( 'about' );
	}
}
