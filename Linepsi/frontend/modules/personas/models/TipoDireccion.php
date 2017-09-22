<?php

namespace frontend\modules\personas\models;

use Yii;

/**
 * This is the model class for table "tipodireccion".
 *
 * @property integer $IdTipoDireccion
 * @property string $NombreTipoDireccion
 *
 * @property Personadireccion[] $personadireccions
 */
class TipoDireccion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipodireccion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombreTipoDireccion'], 'required'],
            [['NombreTipoDireccion'], 'string', 'max' => 45],
            [['NombreTipoDireccion'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdTipoDireccion' => 'Id Tipo Direccion',
            'NombreTipoDireccion' => 'Nombre Tipo Direccion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonadireccions()
    {
        return $this->hasMany(Personadireccion::className(), ['IdTipoDireccion' => 'IdTipoDireccion']);
    }
}
