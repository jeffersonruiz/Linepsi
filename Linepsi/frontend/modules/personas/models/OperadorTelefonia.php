<?php

namespace frontend\modules\personas\models;

use Yii;

/**
 * This is the model class for table "operadortelefonia".
 *
 * @property integer $IdOperadorTelefonia
 * @property string $NombreOperadorTelefonia
 *
 * @property Personatelefono[] $personatelefonos
 */
class OperadorTelefonia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'operadortelefonia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombreOperadorTelefonia'], 'required'],
            [['NombreOperadorTelefonia'], 'string', 'max' => 45],
            [['NombreOperadorTelefonia'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdOperadorTelefonia' => 'Id Operador Telefonia',
            'NombreOperadorTelefonia' => 'Nombre Operador Telefonia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonatelefonos()
    {
        return $this->hasMany(Personatelefono::className(), ['IdOperadorTelefonia' => 'IdOperadorTelefonia']);
    }
}
