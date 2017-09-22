<?php

namespace frontend\modules\citas\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "estadosolicitudcita".
 *
 * @property integer $IdEstadoSolicitudCita
 * @property string $NombreEstadoSolicitudCita
 *
 * @property Solicitudcita[] $solicitudcitas
 */
class EstadoSolicitudCita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estadosolicitudcita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombreEstadoSolicitudCita'], 'required'],
            [['NombreEstadoSolicitudCita'], 'string', 'max' => 45],
            [['NombreEstadoSolicitudCita'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdEstadoSolicitudCita' => 'Id Estado Solicitud Cita',
            'NombreEstadoSolicitudCita' => 'Nombre Estado Solicitud Cita',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitudcitas()
    {
        return $this->hasMany(Solicitudcita::className(), ['IdEstadoSolicitudCita' => 'IdEstadoSolicitudCita']);
    }
    
     public static  function  getListaEstado(){
        $Estado= EstadoSolicitudCita::find()->orderBy('IdEstadoSolicitudCita')->asArray()->all();
        $listaEstado = ArrayHelper::map($Estado, 'IdEstadoSolicitudCita', 'NombreEstadoSolicitudCita');
        return $listaEstado;
    }
}
