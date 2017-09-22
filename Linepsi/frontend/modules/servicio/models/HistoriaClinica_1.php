<?php

namespace frontend\modules\servicio\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\db\Expression;

/**
 * This is the model class for table "historiaclinica".
 *
 * @property integer $IdHistoriaClinica
 * @property integer $IdPersonaSolicita
 * @property string $Fecha
 * @property string $ObservacionesGeneral
 * @property integer $IdDocente
 * @property integer $IdSolicitudCita
 * @property integer $IdConcepto
 *
 * @property Gestiondocumental[] $gestiondocumentals
 * @property Docente $idDocente
 * @property Persona $idPersonaSolicita
 * @property Solicitudcita $idSolicitudCita
 */
class HistoriaClinica extends \yii\db\ActiveRecord
{
    public $historiaclinica;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'historiaclinica';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPersonaSolicita', 'ObservacionesGeneral', 'IdDocente', 'IdSolicitudCita'], 'required'],
            [['IdPersonaSolicita', 'IdDocente', 'IdSolicitudCita', 'IdConcepto'], 'integer'],
            [['Fecha'], 'safe'],
            [['ObservacionesGeneral'], 'string'],
            [['IdPersonaSolicita', 'Fecha'], 'unique', 'targetAttribute' => ['IdPersonaSolicita', 'Fecha'], 'message' => 'The combination of Id Persona Solicita and Fecha has already been taken.'],
            [['IdSolicitudCita'], 'unique'],
            [['IdDocente'], 'exist', 'skipOnError' => true, 'targetClass' => Docente::className(), 'targetAttribute' => ['IdDocente' => 'IdDocente']],
            [['IdPersonaSolicita'], 'exist', 'skipOnError' => true, 'targetClass' => Persona::className(), 'targetAttribute' => ['IdPersonaSolicita' => 'IdPersona']],
            [['IdSolicitudCita'], 'exist', 'skipOnError' => true, 'targetClass' => Solicitudcita::className(), 'targetAttribute' => ['IdSolicitudCita' => 'IdSolicitudCita']],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdHistoriaClinica' => 'ID',
            'IdPersonaSolicita' => 'Paciente',
            'Fecha' => 'Fecha',
            'ObservacionesGeneral' => 'Observaciones',
            'IdDocente' => 'Docente',
            'IdSolicitudCita' => 'Cita N°',
            'IdConcepto' => 'Concepto',
        ];
    }
     public function getNombreConcepto(){
        $nombre = "";
         switch ($this->IdConcepto) {
             case 0:
                 $nombre = "No Aplica";
                 break;
             case 1:
                 $nombre = "Aprobado";
                 break;
             case 2:
                 $nombre = "Reprobado";
                 break;
             case 3:
                 $nombre = "Proceso Especial";
                 break;
             case 4:
                 $nombre = "En Proceso";
                 break;

             default:
                 $nombre = "--";
                 break;
        };
     return $nombre;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGestiondocumentals()
    {
        return $this->hasMany(Gestiondocumental::className(), ['IdHistoriaClinica' => 'IdHistoriaClinica']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDocente()
    {
        return $this->hasOne(Docente::className(), ['IdDocente' => 'IdDocente']);
    }
    
    public function getNombreDocente(){
        return $this->idDocente ? $this->idDocente->idPersona->PrimerNombre . ' ' .
                                    $this->idDocente->idPersona->SegundoNombre . ' ' .
                                    $this->idDocente->idPersona->PrimerApellido . ' ' .
                                    $this->idDocente->idPersona->SegundoApellido . ' ' : ' - ';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPersonaSolicita()
    {
        return $this->hasOne(Persona::className(), ['IdPersona' => 'IdPersonaSolicita']);
    }
    
    public function getNombrePersona(){
        return $this->idPersonaSolicita ? $this->idPersonaSolicita->PrimerNombre . ' ' .
                                        $this->idPersonaSolicita->SegundoNombre . ' ' .
                                        $this->idPersonaSolicita->PrimerApellido . ' ' .
                                        $this->idPersonaSolicita->SegundoApellido . ' ' : ' - ';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSolicitudCita()
    {
        return $this->hasOne(Solicitudcita::className(), ['IdSolicitudCita' => 'IdSolicitudCita']);
    }
    
    public static function getListaHistoriaClinica () {
        
            
            $historia = HistoriaClinica::find()->select(['IdHistoriaClinica', 
                                                    new Expression("CONCAT_WS(' ',"
                                                            . " 'Historia', "
                                                            . " 'Clinica', "
                                                            . " 'N°', "
                                                            . "IdHistoriaClinica) AS historiaclinica"
                                                        )
                                ])-> from('historiaclinica AS HC')->orderBy('IdHistoriaClinica')
                                  ->all();          
        
        
        $listahistoria = ArrayHelper::map($historia,'IdHistoriaClinica','historiaclinica');
        return $listahistoria;
    }
    
    
    
}
