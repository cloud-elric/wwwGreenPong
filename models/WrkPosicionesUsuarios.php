<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wrk_posiciones_usuarios".
 *
 * @property string $id_posicion_usuario
 * @property string $id_usuario
 * @property string $txt_game_tag
 * @property string $num_puntuacion
 *
 * @property EntUsuarios $idUsuario
 */
class WrkPosicionesUsuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wrk_posiciones_usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_usuario'], 'required'],
            [['id_usuario', 'num_puntuacion'], 'integer'],
            [['txt_game_tag'], 'string', 'max' => 3],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => EntUsuarios::className(), 'targetAttribute' => ['id_usuario' => 'id_usuario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_posicion_usuario' => 'Id Posicion Usuario',
            'id_usuario' => 'Id Usuario',
            'txt_game_tag' => 'Escribe tus iniciales',
            'num_puntuacion' => 'Num Puntuacion',
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
