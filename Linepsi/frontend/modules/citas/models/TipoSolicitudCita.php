<?php

namespace frontend\modules\citas\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tiposolicitudcita".
 *
 * @property integer $IdTipoSolicitudCita
 * @property string $NombreTipoSolicitudCita
 *
 * @property Solicitudcita[] $solicitudcitas
 */
class TipoSolicitudCita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tiposolicitudcita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombreTipoSolicitudCita'], 'required'],
            [['NombreTipoSolicitudCita'], 'string', 'max' => 45],
            [['NombreTipoSolicitudCita'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdTipoSolicitudCita' => 'Id Tipo Solicitud Cita',
            'NombreTipoSolicitudCita' => 'Nombre Tipo Solicitud Cita',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitudcitas()
    {
        return $this->hasMany(Solicitudcita::className(), ['IdTipoSolicitudCita' => 'IdTipoSolicitudCita']);
    }
    
     public static  function  getListaTipo(){
        $Tipo = TipoSolicitudCita::find()->orderBy('IdTipoSolicitudCita')->asArray()->all();
        $listaTipo = ArrayHelper::map($Tipo, 'IdTipoSolicitudCita', 'NombreTipoSolicitudCita');
        return $listaTipo;
    }
}
