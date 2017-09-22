<?php

namespace frontend\modules\personas\models;

use Yii;

/**
 * This is the model class for table "personadireccion".
 *
 * @property integer $IdPersonaDireccion
 * @property integer $IdPersona
 * @property string $Direccion
 * @property integer $IdTipoDireccion
 * @property integer $EsPrincipal
 * @property integer $IdCiudad
 * @property integer $IdPais
 * @property string $NombreCiudadExtranjero
 *
 * @property Ciudad $idCiudad
 * @property Pais $idPais
 * @property Persona $idPersona
 * @property Tipodireccion $idTipoDireccion
 */
class PersonaDireccion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personadireccion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPersona', 'Direccion', 'IdTipoDireccion', 'IdCiudad', 'IdPais'], 'required'],
            [['IdPersona', 'IdTipoDireccion', 'EsPrincipal', 'IdCiudad', 'IdPais'], 'integer'],
            [['Direccion', 'NombreCiudadExtranjero'], 'string', 'max' => 100],
            [['IdPersona', 'Direccion'], 'unique', 'targetAttribute' => ['IdPersona', 'Direccion'], 'message' => 'The combination of Id Persona and Direccion has already been taken.'],
            [['IdCiudad'], 'exist', 'skipOnError' => true, 'targetClass' => Ciudad::className(), 'targetAttribute' => ['IdCiudad' => 'IdCiudad']],
            [['IdPais'], 'exist', 'skipOnError' => true, 'targetClass' => Pais::className(), 'targetAttribute' => ['IdPais' => 'IdPais']],
            [['IdPersona'], 'exist', 'skipOnError' => true, 'targetClass' => Persona::className(), 'targetAttribute' => ['IdPersona' => 'IdPersona']],
            [['IdTipoDireccion'], 'exist', 'skipOnError' => true, 'targetClass' => Tipodireccion::className(), 'targetAttribute' => ['IdTipoDireccion' => 'IdTipoDireccion']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdPersonaDireccion' => 'Id Persona Direccion',
            'IdPersona' => 'Id Persona',
            'Direccion' => 'Direccion',
            'IdTipoDireccion' => 'Id Tipo Direccion',
            'EsPrincipal' => 'Es Principal',
            'IdCiudad' => 'Id Ciudad',
            'IdPais' => 'Id Pais',
            'NombreCiudadExtranjero' => 'Nombre Ciudad Extranjero',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCiudad()
    {
        return $this->hasOne(Ciudad::className(), ['IdCiudad' => 'IdCiudad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPais()
    {
        return $this->hasOne(Pais::className(), ['IdPais' => 'IdPais']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPersona()
    {
        return $this->hasOne(Persona::className(), ['IdPersona' => 'IdPersona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoDireccion()
    {
        return $this->hasOne(Tipodireccion::className(), ['IdTipoDireccion' => 'IdTipoDireccion']);
    }
}
