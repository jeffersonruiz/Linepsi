<?php

namespace frontend\modules\citas\models;

use Yii;

/**
 * This is the model class for table "institucion".
 *
 * @property integer $IdInstitucion
 * @property string $NombreInstitucion
 *
 * @property Solicitudcita[] $solicitudcitas
 */
class Institucion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'institucion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombreInstitucion'], 'required'],
            [['NombreInstitucion'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdInstitucion' => 'Id Institucion',
            'NombreInstitucion' => 'Nombre Institucion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitudcitas()
    {
        return $this->hasMany(Solicitudcita::className(), ['IdInstitucion' => 'IdInstitucion']);
    }
}
