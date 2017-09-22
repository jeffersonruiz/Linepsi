<?php

namespace frontend\modules\personas\models;

use Yii;

/**
 * This is the model class for table "pais".
 *
 * @property integer $IdPais
 * @property string $NombrePais
 *
 * @property Personadireccion[] $personadireccions
 * @property Personatelefono[] $personatelefonos
 */
class Pais extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pais';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombrePais'], 'required'],
            [['NombrePais'], 'string', 'max' => 100],
            [['NombrePais'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdPais' => 'Id Pais',
            'NombrePais' => 'Nombre Pais',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonadireccions()
    {
        return $this->hasMany(Personadireccion::className(), ['IdPais' => 'IdPais']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonatelefonos()
    {
        return $this->hasMany(Personatelefono::className(), ['IdPais' => 'IdPais']);
    }
}
