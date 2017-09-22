<?php

namespace frontend\modules\citas\models;

use Yii;

use frontend\modules\personas\models\Persona;
use frontend\modules\personas\models\Docente;
use frontend\modules\citas\models\Institucion;

/**
 * This is the model class for table "solicitudcita".
 *
 * @property integer $IdSolicitudCita
 * @property string $FechaSolicitudRegistro
 * @property integer $IdTipoSolicitudCita
 * @property integer $IdPersona
 * @property integer $IdDocente
 * @property integer $IdEstadoSolicitudCita
 * @property integer $NecesitaConsentimiento
 * @property integer $IdInstitucion
 * @property string $descripcion
 * @property integer $IdCampoPsicologico
 * @property integer $IdUsuarioGraba
 * @property string $FechaGraba
 * @property integer $IdUsuarioModifica
 * @property string $FechaModifica
 *
 * @property Autorizacionconsentimiento[] $autorizacionconsentimientos
 * @property Historiaclinica $historiaclinica
 * @property Docente $idDocente
 * @property Estadosolicitudcita $idEstadoSolicitudCita
 * @property Institucion $idInstitucion
 * @property Persona $idPersona
 * @property Tiposolicitudcita $idTipoSolicitudCita
 * @property Campopsicologico $idCampoPsicologico
 */
class SolicitudCita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'solicitudcita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FechaSolicitudRegistro', 'FechaGraba', 'FechaModifica'], 'safe'],
            [['IdTipoSolicitudCita', 'IdPersona', 'IdDocente', 'IdEstadoSolicitudCita', 'IdInstitucion', 'IdUsuarioGraba', 'IdUsuarioModifica'], 'required'],
            [['IdTipoSolicitudCita', 'IdPersona', 'IdDocente', 'IdEstadoSolicitudCita', 'NecesitaConsentimiento', 'IdInstitucion', 'IdCampoPsicologico', 'IdUsuarioGraba', 'IdUsuarioModifica'], 'integer'],
            [['descripcion'], 'string', 'max' => 300],
            [['IdDocente'], 'exist', 'skipOnError' => true, 'targetClass' => Docente::className(), 'targetAttribute' => ['IdDocente' => 'IdDocente']],
            [['IdEstadoSolicitudCita'], 'exist', 'skipOnError' => true, 'targetClass' => Estadosolicitudcita::className(), 'targetAttribute' => ['IdEstadoSolicitudCita' => 'IdEstadoSolicitudCita']],
            [['IdInstitucion'], 'exist', 'skipOnError' => true, 'targetClass' => Institucion::className(), 'targetAttribute' => ['IdInstitucion' => 'IdInstitucion']],
            [['IdPersona'], 'exist', 'skipOnError' => true, 'targetClass' => Persona::className(), 'targetAttribute' => ['IdPersona' => 'IdPersona']],
            [['IdTipoSolicitudCita'], 'exist', 'skipOnError' => true, 'targetClass' => Tiposolicitudcita::className(), 'targetAttribute' => ['IdTipoSolicitudCita' => 'IdTipoSolicitudCita']],
            [['IdCampoPsicologico'], 'exist', 'skipOnError' => true, 'targetClass' => Campopsicologico::className(), 'targetAttribute' => ['IdCampoPsicologico' => 'IdCampoPsicologico']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdSolicitudCita' => 'ID',
            'FechaSolicitudRegistro' => 'Fecha',
            'IdTipoSolicitudCita' => 'Tipo Cita',
            'IdPersona' => 'Persona',
            'IdDocente' => 'Docente',
            'IdEstadoSolicitudCita' => 'Estado',
            'NecesitaConsentimiento' => 'Necesita Consentimiento',
            'IdInstitucion' => 'Institucion',
            'descripcion' => 'Descripcion',
            'IdCampoPsicologico' => 'Campo Psicologico',
            'IdUsuarioGraba' => 'Usuario Graba',
            'FechaGraba' => 'Fecha Graba',
            'IdUsuarioModifica' => 'Usuario Modifica',
            'FechaModifica' => 'Fecha Modifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAutorizacionconsentimientos()
    {
        return $this->hasMany(Autorizacionconsentimiento::className(), ['IdSolicitudCita' => 'IdSolicitudCita']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoriaclinica()
    {
        return $this->hasOne(Historiaclinica::className(), ['IdSolicitudCita' => 'IdSolicitudCita']);
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
    public function getIdEstadoSolicitudCita()
    {
        return $this->hasOne(Estadosolicitudcita::className(), ['IdEstadoSolicitudCita' => 'IdEstadoSolicitudCita']);
    }
    
    public function getNombreEstdo(){
        return $this->idEstadoSolicitudCita ? $this->idEstadoSolicitudCita->NombreEstadoSolicitudCita : ' - ';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdInstitucion()
    {
        return $this->hasOne(Institucion::className(), ['IdInstitucion' => 'IdInstitucion']);
    }
    
    public function getNombreInsistitucion(){
        return $this->idInstitucion ? $this->idInstitucion->NombreInstitucion : ' - ';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPersona()
    {
        return $this->hasOne(Persona::className(), ['IdPersona' => 'IdPersona']);
    }
    
     public function getNombrePersona(){
        return $this->idPersona ? $this->idPersona->PrimerNombre . ' ' .
                                        $this->idPersona->SegundoNombre . ' ' .
                                        $this->idPersona->PrimerApellido . ' ' .
                                        $this->idPersona->SegundoApellido . ' ' : ' - ';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoSolicitudCita()
    {
        return $this->hasOne(Tiposolicitudcita::className(), ['IdTipoSolicitudCita' => 'IdTipoSolicitudCita']);
    }
    public function getNombreTipoSolicitud(){
        return $this->idTipoSolicitudCita ? $this->idTipoSolicitudCita->NombreTipoSolicitudCita : ' - ';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCampoPsicologico()
    {
        return $this->hasOne(Campopsicologico::className(), ['IdCampoPsicologico' => 'IdCampoPsicologico']);
    }
}
