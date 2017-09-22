<?php

namespace frontend\modules\personas\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;


use yii\helpers\ArrayHelper;

use frontend\modules\servicio\models\ItinerarioPersona;

/**
 * This is the model class for table "persona".
 *
 * @property integer $IdPersona
 * @property integer $IdTipoDocumentoIdentificacion
 * @property string $NumeroDocumento
 * @property string $PrimerNombre
 * @property string $SegundoNombre
 * @property string $PrimerApellido
 * @property string $SegundoApellido
 * @property string $FechaNacimiento
 * @property integer $IdSexo
 * @property integer $IdEstadoCivil
 * @property integer $IdGenero
 *
 * @property Docente[] $docentes
 * @property Estudiante[] $estudiantes
 * @property Historiaclinica[] $historiaclinicas
 * @property Estadocivil $idEstadoCivil
 * @property Genero $idGenero
 * @property Sexo $idSexo
 * @property Tipodocumentoidentificacion $idTipoDocumentoIdentificacion
 * @property Itinerariopersona $idItinerario
 * @property Personacorreoelectronico[] $personacorreoelectronicos
 * @property Personadireccion[] $personadireccions
 * @property Personatelefono[] $personatelefonos
 * @property Solicitudcita[] $solicitudcitas
 * @property Usuario[] $usuarios
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public $NombreCompleto;
//    public  $DireccionResidencia;
//    public  $NumeroTelefonoPersonal;
//    public  $IdEstadoRegistro;
//    public $IdCiudadResidencia;
//    public  $Indicativo_TelefonoPersonal;
//    public  $TelefonoPersonal;
//    public $TelefonoResidencia;
//    public $Indicativo_TelefonoResidencia;
//    public $IdPais;


    public static function tableName()
    {
        return 'persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdTipoDocumentoIdentificacion', 'NumeroDocumento', 'PrimerNombre', 'PrimerApellido', 'FechaNacimiento', 'IdSexo', 'IdEstadoCivil', 'IdGenero'], 'required'],
            [['IdTipoDocumentoIdentificacion', 'IdSexo', 'IdEstadoCivil', 'IdGenero'], 'integer'],
            [['FechaNacimiento'], 'safe'],
            [['NumeroDocumento'], 'string', 'max' => 20],
            [['PrimerNombre', 'SegundoNombre', 'PrimerApellido', 'SegundoApellido'], 'string', 'max' => 15],
            [['NumeroDocumento'], 'unique'],
            [['IdEstadoCivil'], 'exist', 'skipOnError' => true, 'targetClass' => Estadocivil::className(), 'targetAttribute' => ['IdEstadoCivil' => 'IdEstadoCivil']],
            [['IdGenero'], 'exist', 'skipOnError' => true, 'targetClass' => Genero::className(), 'targetAttribute' => ['IdGenero' => 'IdGenero']],
            [['IdSexo'], 'exist', 'skipOnError' => true, 'targetClass' => Sexo::className(), 'targetAttribute' => ['IdSexo' => 'IdSexo']],
            [['IdTipoDocumentoIdentificacion'], 'exist', 'skipOnError' => true, 'targetClass' => Tipodocumentoidentificacion::className(), 'targetAttribute' => ['IdTipoDocumentoIdentificacion' => 'IdTipoDocumentoIdentificacion']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdPersona' => 'ID',
            'IdTipoDocumentoIdentificacion' => 'Id Documento',
            'NumeroDocumento' => 'Documento',
            'PrimerNombre' => 'Primer Nombre',
            'SegundoNombre' => 'Segundo Nombre',
            'PrimerApellido' => 'Primer Apellido',
            'SegundoApellido' => 'Segundo Apellido',
            'FechaNacimiento' => 'Fecha Nacimiento',
            'IdSexo' => 'Sexo',
            'IdEstadoCivil' => 'Estado Civil',
            'IdGenero' => 'Genero',
            
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocentes()
    {
        return $this->hasMany(Docente::className(), ['IdPersona' => 'IdPersona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudiantes()
    {
        return $this->hasMany(Estudiante::className(), ['IdPersona' => 'IdPersona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoriaclinicas()
    {
        return $this->hasMany(Historiaclinica::className(), ['IdPersonaSolicita' => 'IdPersona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEstadoCivil()
    {
        return $this->hasOne(Estadocivil::className(), ['IdEstadoCivil' => 'IdEstadoCivil']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGenero()
    {
        return $this->hasOne(Genero::className(), ['IdGenero' => 'IdGenero']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSexo()
    {
        return $this->hasOne(Sexo::className(), ['IdSexo' => 'IdSexo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoDocumentoIdentificacion()
    {
        return $this->hasOne(Tipodocumentoidentificacion::className(), ['IdTipoDocumentoIdentificacion' => 'IdTipoDocumentoIdentificacion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
   

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonacorreoelectronicos()
    {
        return $this->hasMany(Personacorreoelectronico::className(), ['IdPersona' => 'IdPersona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonadireccions()
    {
        return $this->hasMany(Personadireccion::className(), ['IdPersona' => 'IdPersona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonatelefonos()
    {
        return $this->hasMany(Personatelefono::className(), ['IdPersona' => 'IdPersona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitudcitas()
    {
        return $this->hasMany(Solicitudcita::className(), ['IdPersona' => 'IdPersona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['IdPersona' => 'IdPersona']);
    }
    
    
    public static function getListaPersonas () {
        
            
            $personas = Persona::find()->select(['IdPersona', 
                                                    new Expression("CONCAT_WS(' ',"
                                                            . "PrimerNombre, "
                                                            . "SegundoNombre, "
                                                            . "PrimerApellido, "
                                                            . "SegundoApellido) AS NombreCompleto"
                                                        )
                                ])-> from('persona AS PER')->orderBy('PrimerNombre')
                                  ->all();            
        
        
        $listaPerosnas = ArrayHelper::map($personas,'IdPersona','NombreCompleto');
        return $listaPerosnas;
    }
}
