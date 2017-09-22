<?php

namespace frontend\modules\citas\models;

use Yii;

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
}
