<?php

namespace frontend\modules\servicio\models;

use Yii;

use frontend\modules\citas\models\SolicitudCita;

/**
 * This is the model class for table "autorizacionconsentimiento".
 *
 * @property integer $IdAutorizacionConsentimiento
 * @property integer $IdSolicitudCita
 * @property integer $Respuesta
 * @property string $NombreFirma
 * @property string $RutaDocumento
 * @property string $NombreDocumento
 *
 * @property Solicitudcita $idSolicitudCita
 */
class AutorizacionConsentimiento extends \yii\db\ActiveRecord
{
    public $FileUpload;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'autorizacionconsentimiento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdSolicitudCita'], 'required'],
            [['IdSolicitudCita', 'Respuesta'], 'integer'],
            [['NombreFirma'], 'string', 'max' => 100],
            [['RutaDocumento', 'NombreDocumento'], 'string', 'max' => 255],
            [['IdSolicitudCita'], 'exist', 'skipOnError' => true, 'targetClass' => Solicitudcita::className(), 'targetAttribute' => ['IdSolicitudCita' => 'IdSolicitudCita']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdAutorizacionConsentimiento' => 'ID',
            'IdSolicitudCita' => 'Cita N°.',
            'Respuesta' => 'Respuesta',
            'NombreFirma' => 'Nombre Firma',
            'RutaDocumento' => 'Ruta Documento',
            'NombreDocumento' => 'Nombre Documento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSolicitudCita()
    {
        return $this->hasOne(Solicitudcita::className(), ['IdSolicitudCita' => 'IdSolicitudCita']);
    }
}
