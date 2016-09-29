<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wrk_puntuaciones".
 *
 * @property string $id_puntuacion
 * @property string $id_usuario
 * @property string $num_puntuacion
 *
 * @property EntUsuarios $idUsuario
 */
class WrkPuntuaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wrk_puntuaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_usuario', 'num_puntuacion'], 'required'],
            [['id_usuario', 'num_puntuacion'], 'integer'],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => EntUsuarios::className(), 'targetAttribute' => ['id_usuario' => 'id_usuario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_puntuacion' => 'Id Puntuacion',
            'id_usuario' => 'Id Usuario',
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
