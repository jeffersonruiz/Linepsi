<?php

namespace frontend\modules\personas\models;

use Yii;

/**
 * This is the model class for table "personacorreoelectronico".
 *
 * @property integer $IdPersonaCorreoElectronico
 * @property integer $IdPersona
 * @property string $CuentaCorreoElectronico
 * @property integer $EsPrincipal
 * @property integer $IdTipoCorreoElectronico
 *
 * @property Tipocorreoelectronico $idTipoCorreoElectronico
 * @property Persona $idPersona
 */
class PersonaCorreoElectronico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personacorreoelectronico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPersona', 'CuentaCorreoElectronico', 'IdTipoCorreoElectronico'], 'required'],
            [['IdPersona', 'EsPrincipal', 'IdTipoCorreoElectronico'], 'integer'],
            [['CuentaCorreoElectronico'], 'string', 'max' => 100],
            [['IdPersona', 'CuentaCorreoElectronico'], 'unique', 'targetAttribute' => ['IdPersona', 'CuentaCorreoElectronico'], 'message' => 'The combination of Id Persona and Cuenta Correo Electronico has already been taken.'],
            [['IdTipoCorreoElectronico'], 'exist', 'skipOnError' => true, 'targetClass' => Tipocorreoelectronico::className(), 'targetAttribute' => ['IdTipoCorreoElectronico' => 'IdTipoCorreoElectronico']],
            [['IdPersona'], 'exist', 'skipOnError' => true, 'targetClass' => Persona::className(), 'targetAttribute' => ['IdPersona' => 'IdPersona']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdPersonaCorreoElectronico' => 'Id Persona Correo Electronico',
            'IdPersona' => 'Id Persona',
            'CuentaCorreoElectronico' => 'Cuenta Correo Electronico',
            'EsPrincipal' => 'Es Principal',
            'IdTipoCorreoElectronico' => 'Id Tipo Correo Electronico',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoCorreoElectronico()
    {
        return $this->hasOne(Tipocorreoelectronico::className(), ['IdTipoCorreoElectronico' => 'IdTipoCorreoElectronico']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPersona()
    {
        return $this->hasOne(Persona::className(), ['IdPersona' => 'IdPersona']);
    }
}
