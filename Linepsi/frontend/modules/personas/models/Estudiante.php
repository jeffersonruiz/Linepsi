<?php

namespace frontend\modules\personas\models;

use Yii;

/**
 * This is the model class for table "estudiante".
 *
 * @property integer $IdEstudiante
 * @property integer $IdPersona
 * @property integer $CodigoID
 *
 * @property Persona $idPersona
 */
class Estudiante extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estudiante';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPersona', 'CodigoID'], 'required'],
            [['IdPersona', 'CodigoID'], 'integer'],
            [['IdPersona'], 'exist', 'skipOnError' => true, 'targetClass' => Persona::className(), 'targetAttribute' => ['IdPersona' => 'IdPersona']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdEstudiante' => 'Id Estudiante',
            'IdPersona' => 'Id Persona',
            'CodigoID' => 'Codigo ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPersona()
    {
        return $this->hasOne(Persona::className(), ['IdPersona' => 'IdPersona']);
    }
}
