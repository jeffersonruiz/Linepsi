<?php

namespace frontend\modules\citas\models;

use Yii;

/**
 * This is the model class for table "campopsicologico".
 *
 * @property integer $IdCampoPsicologico
 * @property string $NombreCampoPsicologico
 *
 * @property Solicitudcita[] $solicitudcitas
 */
class CampoPsicologico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campopsicologico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdCampoPsicologico', 'NombreCampoPsicologico'], 'required'],
            [['IdCampoPsicologico'], 'integer'],
            [['NombreCampoPsicologico'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdCampoPsicologico' => 'Id Campo Psicologico',
            'NombreCampoPsicologico' => 'Nombre Campo Psicologico',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitudcitas()
    {
        return $this->hasMany(Solicitudcita::className(), ['IdCampoPsicologico' => 'IdCampoPsicologico']);
    }
}
