<?php

namespace frontend\modules\citas\models;

use Yii;

/**
 * This is the model class for table "diassemana".
 *
 * @property integer $IdDiasSemana
 * @property string $DiasSemana
 *
 * @property Itinerariopersona[] $itinerariopersonas
 */
class DiasSemana extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diassemana';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdDiasSemana', 'DiasSemana'], 'required'],
            [['IdDiasSemana'], 'integer'],
            [['DiasSemana'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdDiasSemana' => 'Id Dias Semana',
            'DiasSemana' => 'Dias Semana',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItinerariopersonas()
    {
        return $this->hasMany(Itinerariopersona::className(), ['DiaSemana' => 'IdDiasSemana']);
    }
}
