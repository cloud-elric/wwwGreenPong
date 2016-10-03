<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wrk_codigos".
 *
 * @property string $id_codigo
 * @property string $id_usuario
 * @property string $txt_codigo
 *
 * @property EntUsuarios $idUsuario
 */
class WrkCodigos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wrk_codigos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_usuario', 'txt_codigo'], 'required', 'on'=>'Necesita ingresar un codigo'],
            [['id_usuario'], 'integer'],
        		[
        		'txt_codigo',
        		'trim'
        				],
            [['txt_codigo'], 'string', 'max' => 50],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => EntUsuarios::className(), 'targetAttribute' => ['id_usuario' => 'id_usuario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_codigo' => 'Id Codigo',
            'id_usuario' => 'Id Usuario',
            'txt_codigo' => 'Txt Codigo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuario()
    {
        return $this->hasOne(EntUsuarios::className(), ['id_usuario' => 'id_usuario']);
    }
}
