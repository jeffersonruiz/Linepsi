<?php

namespace frontend\modules\personas\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use backend\models\Ciudad;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "docente".
 *
 * @property integer $IdDocente
 * @property integer $IdPersona
 * @property integer $PerteneceLaboratorio
 *
 * @property Persona $idPersona
 * @property Historiaclinica[] $historiaclinicas
 * @property Solicitudcita[] $solicitudcitas
 */
class Docente extends \yii\db\ActiveRecord
{
    
    public $NombreCompleto;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'docente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdPersona'], 'required'],
            [['IdPersona', 'PerteneceLaboratorio'], 'integer'],
            [['IdPersona'], 'exist', 'skipOnError' => true, 'targetClass' => Persona::className(), 'targetAttribute' => ['IdPersona' => 'IdPersona']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdDocente' => 'Id Docente',
            'IdPersona' => 'Id Persona',
            'PerteneceLaboratorio' => 'Pertenece Laboratorio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPersona()
    {
        return $this->hasOne(Persona::className(), ['IdPersona' => 'IdPersona']);
    }
    
    public function getNombreDocente(){
        return $this->idPersona ?   $this->idPersona->PrimerNombre . ' ' .
                                    $this->idPersona->SegundoNombre . ' ' .
                                    $this->idPersona->PrimerApellido . ' ' .
                                    $this->idPersona->SegundoApellido . ' ' : ' - ';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoriaclinicas()
    {
        return $this->hasMany(Historiaclinica::className(), ['IdDocente' => 'IdDocente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitudcitas()
    {
        return $this->hasMany(Solicitudcita::className(), ['IdDocente' => 'IdDocente']);
    }
    
    
    public static function getListaDocente () {
        
            
            $docentes = Docente::find()->select(['DO.IdDocente', 
                                                    new Expression("CONCAT_WS(' ',"
                                                            . "PER.PrimerNombre, "
                                                            . "PER.SegundoNombre, "
                                                            . "PER.PrimerApellido, "
                                                            . "PER.SegundoApellido) AS NombreCompleto"
                                                        )
                                ])-> from('docente AS DO')
                                  -> join('INNER JOIN', 
                                            'Persona AS PER', 
                                            'DO.IdPersona = PER.IdPersona')
                                  ->orderBy('PER.PrimerNombre')
                                  ->all();            
        
        
        $listaDocentes = ArrayHelper::map($docentes,'IdDocente','NombreCompleto');
        return  $listaDocentes;
    }
}
