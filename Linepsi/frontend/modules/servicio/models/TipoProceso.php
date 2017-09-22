<?php

namespace frontend\modules\servicio\models;

use Yii;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tipoproceso".
 *
 * @property integer $IdTipoProceso
 * @property string $TipoProceso
 *
 * @property Tipopruebapsicologica[] $tipopruebapsicologicas
 */
class TipoProceso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipoproceso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TipoProceso'], 'required'],
            [['TipoProceso'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdTipoProceso' => 'ID',
            'TipoProceso' => 'Tipo Proceso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipopruebapsicologicas()
    {
        return $this->hasMany(Tipopruebapsicologica::className(), ['IdTipoProceso' => 'IdTipoProceso']);
    }
    
    public static  function  getListaTipoProceso(){
        $TipoProceso = TipoProceso::find()->orderBy('TipoProceso')->asArray()->all();
        $listatipoproceso = ArrayHelper::map($TipoProceso, 'IdTipoProceso', 'TipoProceso');
        return $listatipoproceso;
    }
}
