<?php

namespace frontend\modules\personas\models;

use Yii;

/**
 * This is the model class for table "tipotelefono".
 *
 * @property integer $IdTipoTelefono
 * @property string $NombreTipoTelefono
 *
 * @property Personatelefono[] $personatelefonos
 */
class TipoTelefono extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipotelefono';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombreTipoTelefono'], 'required'],
            [['NombreTipoTelefono'], 'string', 'max' => 45],
            [['NombreTipoTelefono'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdTipoTelefono' => 'Id Tipo Telefono',
            'NombreTipoTelefono' => 'Nombre Tipo Telefono',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonatelefonos()
    {
        return $this->hasMany(Personatelefono::className(), ['IdTipoTelefono' => 'IdTipoTelefono']);
    }
}
