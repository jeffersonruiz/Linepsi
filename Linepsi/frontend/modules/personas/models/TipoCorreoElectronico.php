<?php

namespace frontend\modules\personas\models;

use Yii;

/**
 * This is the model class for table "tipocorreoelectronico".
 *
 * @property integer $IdTipoCorreoElectronico
 * @property string $NombreTipoCorreoElectronico
 *
 * @property Personacorreoelectronico[] $personacorreoelectronicos
 */
class TipoCorreoElectronico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipocorreoelectronico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombreTipoCorreoElectronico'], 'required'],
            [['NombreTipoCorreoElectronico'], 'string', 'max' => 45],
            [['NombreTipoCorreoElectronico'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdTipoCorreoElectronico' => 'Id Tipo Correo Electronico',
            'NombreTipoCorreoElectronico' => 'Nombre Tipo Correo Electronico',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonacorreoelectronicos()
    {
        return $this->hasMany(Personacorreoelectronico::className(), ['IdTipoCorreoElectronico' => 'IdTipoCorreoElectronico']);
    }
}
