<?php

namespace frontend\modules\personas\models;

use Yii;

/**
 * This is the model class for table "personatelefono".
 *
 * @property integer $IdPersonaTelefono
 * @property integer $IdPersona
 * @property integer $NumeroTelefono
 * @property integer $EsPrincipal
 * @property integer $IdTipoTelefono
 * @property integer $IdOperadorTelefonia
 * @property integer $IdCiudad
 * @property integer $IdPais
 * @property string $NombreCiudadExtranjero
 * @property integer $IdIndicativoTelefono
 *
 * @property Ciudad $idCiudad
 * @property Indicativotelefono $idIndicativoTelefono
 * @property Operadortelefonia $idOperadorTelefonia
 * @property Pais $idPais
 * @property Persona $idPersona
 * @property Tipotelefono $idTipoTelefono
 */
class PersonaTelefono extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personatelefono';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPersona', 'NumeroTelefono', 'IdTipoTelefono', 'IdOperadorTelefonia', 'IdCiudad', 'IdPais', 'IdIndicativoTelefono'], 'required'],
            [['IdPersona', 'NumeroTelefono', 'EsPrincipal', 'IdTipoTelefono', 'IdOperadorTelefonia', 'IdCiudad', 'IdPais', 'IdIndicativoTelefono'], 'integer'],
            [['NombreCiudadExtranjero'], 'string', 'max' => 45],
            [['IdPersona', 'NumeroTelefono'], 'unique', 'targetAttribute' => ['IdPersona', 'NumeroTelefono'], 'message' => 'The combination of Id Persona and Numero Telefono has already been taken.'],
            [['IdCiudad'], 'exist', 'skipOnError' => true, 'targetClass' => Ciudad::className(), 'targetAttribute' => ['IdCiudad' => 'IdCiudad']],
            [['IdIndicativoTelefono'], 'exist', 'skipOnError' => true, 'targetClass' => Indicativotelefono::className(), 'targetAttribute' => ['IdIndicativoTelefono' => 'IdIndicativoTelefono']],
            [['IdOperadorTelefonia'], 'exist', 'skipOnError' => true, 'targetClass' => Operadortelefonia::className(), 'targetAttribute' => ['IdOperadorTelefonia' => 'IdOperadorTelefonia']],
            [['IdPais'], 'exist', 'skipOnError' => true, 'targetClass' => Pais::className(), 'targetAttribute' => ['IdPais' => 'IdPais']],
            [['IdPersona'], 'exist', 'skipOnError' => true, 'targetClass' => Persona::className(), 'targetAttribute' => ['IdPersona' => 'IdPersona']],
            [['IdTipoTelefono'], 'exist', 'skipOnError' => true, 'targetClass' => Tipotelefono::className(), 'targetAttribute' => ['IdTipoTelefono' => 'IdTipoTelefono']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdPersonaTelefono' => 'Id Persona Telefono',
            'IdPersona' => 'Id Persona',
            'NumeroTelefono' => 'Numero Telefono',
            'EsPrincipal' => 'Es Principal',
            'IdTipoTelefono' => 'Id Tipo Telefono',
            'IdOperadorTelefonia' => 'Id Operador Telefonia',
            'IdCiudad' => 'Id Ciudad',
            'IdPais' => 'Id Pais',
            'NombreCiudadExtranjero' => 'Nombre Ciudad Extranjero',
            'IdIndicativoTelefono' => 'Id Indicativo Telefono',
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
    public function getIdIndicativoTelefono()
    {
        return $this->hasOne(Indicativotelefono::className(), ['IdIndicativoTelefono' => 'IdIndicativoTelefono']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdOperadorTelefonia()
    {
        return $this->hasOne(Operadortelefonia::className(), ['IdOperadorTelefonia' => 'IdOperadorTelefonia']);
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
    public function getIdTipoTelefono()
    {
        return $this->hasOne(Tipotelefono::className(), ['IdTipoTelefono' => 'IdTipoTelefono']);
    }
}
