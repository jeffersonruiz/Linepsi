<?php

namespace frontend\modules\servicio\models;

use Yii;

/**
 * This is the model class for table "gestiondocumental".
 *
 * @property integer $IdGestionDocumental
 * @property integer $IdHistoriaClinica
 * @property integer $IdTipoDocumento
 * @property string $RutaDocumento
 * @property string $NombreDocumento
 * @property string $ObservacionesDocumento
 * @property integer $IdTipoPruebaPsicologica
 *
 * @property Historiaclinica $idHistoriaClinica
 * @property Tipodocumento $idTipoDocumento
 * @property Tipopruebapsicologica $idTipoPruebaPsicologica
 */
class GestionDocumental extends \yii\db\ActiveRecord
{
    
    public $FileUpload;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gestiondocumental';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdHistoriaClinica', 'IdTipoDocumento', 'ObservacionesDocumento', 'IdTipoPruebaPsicologica'], 'required'],
            [['IdHistoriaClinica', 'IdTipoDocumento', 'IdTipoPruebaPsicologica'], 'integer'],
            [['ObservacionesDocumento'], 'string'],
            [['RutaDocumento', 'NombreDocumento'], 'string', 'max' => 255],
            [['IdHistoriaClinica'], 'exist', 'skipOnError' => true, 'targetClass' => Historiaclinica::className(), 'targetAttribute' => ['IdHistoriaClinica' => 'IdHistoriaClinica']],
            [['IdTipoDocumento'], 'exist', 'skipOnError' => true, 'targetClass' => Tipodocumento::className(), 'targetAttribute' => ['IdTipoDocumento' => 'IdTipoDocumento']],
            [['IdTipoPruebaPsicologica'], 'exist', 'skipOnError' => true, 'targetClass' => Tipopruebapsicologica::className(), 'targetAttribute' => ['IdTipoPruebaPsicologica' => 'IdTipoPruebaPsicologica']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdGestionDocumental' => 'ID',
            'IdHistoriaClinica' => 'Historia Clinica N°',
            'IdTipoDocumento' => 'Tipo Documento',
            'RutaDocumento' => 'Ruta Documento',
            'NombreDocumento' => 'Nombre Documento',
            'ObservacionesDocumento' => 'Observaciones',
            'IdTipoPruebaPsicologica' => 'Prueba Psicologica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdHistoriaClinica()
    {
        return $this->hasOne(Historiaclinica::className(), ['IdHistoriaClinica' => 'IdHistoriaClinica']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoDocumento()
    {
        return $this->hasOne(Tipodocumento::className(), ['IdTipoDocumento' => 'IdTipoDocumento']);
    }
    public function getNombreTipoDocumento(){
        return $this->idTipoDocumento ? $this->idTipoDocumento->NombreTipoDocumento : ' - ';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoPruebaPsicologica()
    {
        return $this->hasOne(Tipopruebapsicologica::className(), ['IdTipoPruebaPsicologica' => 'IdTipoPruebaPsicologica']);
    }
    public function getNombreTipoPrueba(){
        return $this->idTipoPruebaPsicologica ? $this->idTipoPruebaPsicologica->NombreTipoPruebaPsicologica : ' - ';
    }
}
