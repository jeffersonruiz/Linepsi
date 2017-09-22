<?php

namespace frontend\modules\citas\models;

use Yii;

/**
 * This is the model class for table "itinerariopersona".
 *
 * @property integer $IdItinerarioPersona
 * @property integer $DiaSemana
 * @property string $HoraInicio
 * @property string $HoraFin
 * @property integer $IdUsuarioGraba
 * @property string $FechaGraba
 * @property integer $IdUsuarioModifica
 * @property string $FechaModifica
 *
 * @property Diassemana $diaSemana
 * @property Persona[] $personas
 */
class ItinerarioPersona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'itinerariopersona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdItinerarioPersona', 'DiaSemana', 'HoraInicio', 'HoraFin', 'IdUsuarioGraba', 'IdUsuarioModifica'], 'required'],
            [['IdItinerarioPersona', 'DiaSemana', 'IdUsuarioGraba', 'IdUsuarioModifica'], 'integer'],
            [['HoraInicio', 'HoraFin', 'FechaGraba', 'FechaModifica'], 'safe'],
            [['DiaSemana'], 'exist', 'skipOnError' => true, 'targetClass' => Diassemana::className(), 'targetAttribute' => ['DiaSemana' => 'IdDiasSemana']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdItinerarioPersona' => 'ID',
            'DiaSemana' => 'Dia Semana',
            'HoraInicio' => 'Hora Inicio',
            'HoraFin' => 'Hora Fin',
            'IdUsuarioGraba' => 'Id Usuario Graba',
            'FechaGraba' => 'Fecha Graba',
            'IdUsuarioModifica' => 'Id Usuario Modifica',
            'FechaModifica' => 'Fecha Modifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiaSemana()
    {
        return $this->hasOne(Diassemana::className(), ['IdDiasSemana' => 'DiaSemana']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Persona::className(), ['IdItinerario' => 'IdItinerarioPersona']);
    }
}
