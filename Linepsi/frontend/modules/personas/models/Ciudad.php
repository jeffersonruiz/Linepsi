<?php

namespace frontend\modules\personas\models;

use Yii;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "ciudad".
 *
 * @property integer $IdCiudad
 * @property string $CodigoDANE
 * @property string $NombreCiudad
 *
 * @property Personadireccion[] $personadireccions
 * @property Personatelefono[] $personatelefonos
 */
class Ciudad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ciudad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CodigoDANE'], 'required'],
            [['CodigoDANE'], 'string', 'max' => 45],
            [['NombreCiudad'], 'string', 'max' => 100],
            [['CodigoDANE'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdCiudad' => 'Id Ciudad',
            'CodigoDANE' => 'Codigo Dane',
            'NombreCiudad' => 'Nombre Ciudad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonadireccions()
    {
        return $this->hasMany(Personadireccion::className(), ['IdCiudad' => 'IdCiudad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonatelefonos()
    {
        return $this->hasMany(Personatelefono::className(), ['IdCiudad' => 'IdCiudad']);
    }
    
    public static  function  getListaCiudades(){
        $ciudades = Ciudad::find()->orderBy('NombreCiudad')->asArray()->all();
        $listaciudades = ArrayHelper::map($ciudades, 'IdCiudad', 'NombreCiudad');
        return $listaciudades;
    }   
}
