<?php

namespace frontend\modules\servicio\models;

use Yii;


use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "tipopruebapsicologica".
 *
 * @property integer $IdTipoPruebaPsicologica
 * @property string $NombreTipoPruebaPsicologica
 * @property string $Descripcion
 * @property integer $Orden
 * @property integer $EstadoTipoPruebaPsicologica
 * @property integer $IdTipoProceso
 *
 * @property Tipodocumento[] $tipodocumentos
 * @property Tipoproceso $idTipoProceso
 */
class TipoPruebaPsicologica extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipopruebapsicologica';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombreTipoPruebaPsicologica', 'Orden', 'EstadoTipoPruebaPsicologica', 'IdTipoProceso'], 'required'],
            [['Descripcion'], 'string'],
            [['Orden', 'EstadoTipoPruebaPsicologica', 'IdTipoProceso'], 'integer'],
            [['NombreTipoPruebaPsicologica'], 'string', 'max' => 150],
            [['Orden'], 'unique'],
            [['IdTipoProceso'], 'exist', 'skipOnError' => true, 'targetClass' => Tipoproceso::className(), 'targetAttribute' => ['IdTipoProceso' => 'IdTipoProceso']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdTipoPruebaPsicologica' => 'ID',
            'NombreTipoPruebaPsicologica' => 'Nombre Prueba',
            'Descripcion' => 'Descripcion',
            'Orden' => 'Orden',
            'EstadoTipoPruebaPsicologica' => 'Estado',
            'IdTipoProceso' => 'Tipo Proceso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipodocumentos()
    {
        return $this->hasMany(Tipodocumento::className(), ['IdTipoPruebaPsicologica' => 'IdTipoPruebaPsicologica']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoProceso()
    {
        return $this->hasOne(Tipoproceso::className(), ['IdTipoProceso' => 'IdTipoProceso']);
    }
    
    public function getNombreTipoProceso(){
        return $this->idTipoProceso ? $this->idTipoProceso->TipoProceso : ' - ';
    }
    
    public static function getListaTipoPrueba(){
        
        $TipoPrueba = TipoPruebaPsicologica::find()->orderBy('NombreTipoPruebaPsicologica')->asArray()->all();
        $listadoTipoPrueba = ArrayHelper::map($TipoPrueba,'IdTipoPruebaPsicologica', 'NombreTipoPruebaPsicologica');
        return $listadoTipoPrueba;
    }
}
