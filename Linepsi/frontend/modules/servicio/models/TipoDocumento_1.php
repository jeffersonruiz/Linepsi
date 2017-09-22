<?php

namespace frontend\modules\servicio\models;

use Yii;

use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "tipodocumento".
 *
 * @property integer $IdTipoDocumento
 * @property string $NombreTipoDocumento
 * @property integer $IdTipoPruebaPsicologica
 *
 * @property Gestiondocumental[] $gestiondocumentals
 * @property Tipopruebapsicologica $idTipoPruebaPsicologica
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
            [['NombreTipoDocumento', 'IdTipoPruebaPsicologica'], 'required'],
            [['IdTipoPruebaPsicologica'], 'integer'],
            [['NombreTipoDocumento'], 'string', 'max' => 45],
            [['NombreTipoDocumento'], 'unique'],
            [['IdTipoPruebaPsicologica'], 'exist', 'skipOnError' => true, 'targetClass' => Tipopruebapsicologica::className(), 'targetAttribute' => ['IdTipoPruebaPsicologica' => 'IdTipoPruebaPsicologica']],
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
            'IdTipoPruebaPsicologica' => 'Tipo Prueba',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGestiondocumentals()
    {
        return $this->hasMany(Gestiondocumental::className(), ['IdTipoDocumento' => 'IdTipoDocumento']);
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
    
    public static function getListadoTipoDocumento(){
        $TipoDocumento = TipoDocumento::find()->orderBy('NombreTipoDocumento')->asArray()->all();
        $listadoTipoDucumento = ArrayHelper::map($TipoDocumento, 'IdTipoDocumento', 'NombreTipoDocumento');
        return $listadoTipoDucumento;
    }
}
