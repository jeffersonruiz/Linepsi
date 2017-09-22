<?php

namespace frontend\modules\servicio\models;

use Yii;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tipodocumento".
 *
 * @property integer $IdTipoDocumento
 * @property string $NombreTipoDocumento
 *
 * @property Gestiondocumental[] $gestiondocumentals
 */
class TipoDocumento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipodocumento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombreTipoDocumento'], 'required'],
            [['NombreTipoDocumento'], 'string', 'max' => 45],
            [['NombreTipoDocumento'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdTipoDocumento' => 'ID',
            'NombreTipoDocumento' => 'Nombre Tipo Documento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGestiondocumentals()
    {
        return $this->hasMany(Gestiondocumental::className(), ['IdTipoDocumento' => 'IdTipoDocumento']);
    }
    
     public static function getListadoTipoDocumento(){
        $TipoDocumento = TipoDocumento::find()->orderBy('NombreTipoDocumento')->asArray()->all();
        $listadoTipoDucumento = ArrayHelper::map($TipoDocumento, 'IdTipoDocumento', 'NombreTipoDocumento');
        return $listadoTipoDucumento;
    }
}
