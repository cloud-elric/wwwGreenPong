<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_usuarios".
 *
 * @property string $id_usuario
 * @property string $txt_nombre
 * @property string $txt_apellido_paterno
 * @property string $txt_email
 * @property string $tel_numero_celular
 * @property string $b_participo
 *
 * @property WrkCodigos[] $wrkCodigos
 * @property WrkPuntuaciones[] $wrkPuntuaciones
 */
class EntUsuarios extends \yii\db\ActiveRecord {
	public $aceptaTerminos;
	
	
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'ent_usuarios';
	}
	
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [ 
				[ 
						[ 
								
								'aceptaTerminos' 
						],
						'required',
						'requiredValue' => 1,
						'message' => 'Debe aceptar los terminos y condiciones' 
				],
				[
				[
						'tel_numero_celular','txt_email'
				],
				'unique','message'=>'Dato ya registrado utilice otro'
								],
				
				[ 
						[ 
								
								'txt_nombre',
								'txt_apellido_paterno',
								'txt_email',
								'tel_numero_celular' 
						],
						'required',
						'message' => 'Dato requerido' 
				],
				[
				'txt_email',
				'trim'
						],
				['txt_email','email','message'=>'Ingrese una dirección de correo valida'],
				[ 
						[ 
								'b_participo' 
						],
						'integer' 
				],
				[ 
						[ 
								'txt_nombre',
								'txt_apellido_paterno',
								'txt_email',
								'tel_numero_celular' 
						],
						'string',
						'max' => 50 
				] 
		];
	}
	public function attributeLabels() {
		return [ 
				'id_usuario' => 'Id Usuario',
				'txt_nombre' => 'Nombre',
				'txt_apellido_paterno' => 'Apellido paterno',
				'txt_email' => 'Correo electrónico',
				'tel_numero_celular' => 'Número celular',
				'b_participo' => 'B Participo' 
		];
	}
	
	/**
	 *
	 * @return \yii\db\ActiveQuery
	 */
	public function getWrkCodigos() {
		return $this->hasMany ( WrkCodigos::className (), [ 
				'id_usuario' => 'id_usuario' 
		] );
	}
	
	/**
	 *
	 * @return \yii\db\ActiveQuery
	 */
	public function getWrkPuntuaciones() {
		return $this->hasMany ( WrkPuntuaciones::className (), [ 
				'id_usuario' => 'id_usuario' 
		] );
	}
	
	public function getNombreCompleto(){
		return $this->txt_nombre.' '.$this->txt_apellido_paterno;
	}
}
