<?php

namespace frontend\modules\personas\models;

use Yii;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "indicativotelefono".
 *
 * @property integer $IdIndicativoTelefono
 * @property string $NombreIndicativoTelefono
 *
 * @property Personatelefono[] $personatelefonos
 */
class IndicativoTelefono extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'indicativotelefono';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombreIndicativoTelefono'], 'required'],
            [['NombreIndicativoTelefono'], 'string', 'max' => 45],
            [['NombreIndicativoTelefono'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdIndicativoTelefono' => 'Id Indicativo Telefono',
            'NombreIndicativoTelefono' => 'Nombre Indicativo Telefono',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonatelefonos()
    {
        return $this->hasMany(Personatelefono::className(), ['IdIndicativoTelefono' => 'IdIndicativoTelefono']);
    }
    
     public static  function  getListaIndicativo(){
        $indicativos = IndicativoTelefono::find()->orderBy('IdIndicativoTelefono')->asArray()->all();
        $listaindicativos = ArrayHelper::map($indicativos, 'IdIndicativoTelefono', 'NumeroIndicativoTelefono');
        return $listaindicativos;
    }
}
