<?php

namespace frontend\modules\personas\models;

use Yii;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tipodocumentoidentificacion".
 *
 * @property integer $IdTipoDocumentoIdentificacion
 * @property string $NombreTipoDocumentoIdentificacion
 *
 * @property Persona[] $personas
 */
class TipoDocumentoIdentificacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipodocumentoidentificacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NombreTipoDocumentoIdentificacion'], 'required'],
            [['NombreTipoDocumentoIdentificacion'], 'string', 'max' => 45],
            [['NombreTipoDocumentoIdentificacion'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdTipoDocumentoIdentificacion' => 'Id Tipo Documento Identificacion',
            'NombreTipoDocumentoIdentificacion' => 'Nombre Tipo Documento Identificacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Persona::className(), ['IdTipoDocumentoIdentificacion' => 'IdTipoDocumentoIdentificacion']);
    }
    
    
    public static  function  getListaTipoDocumento(){
        $tipodocumento = TipoDocumentoIdentificacion::find()->all();
        $listatipodocumento = ArrayHelper::map($tipodocumento, 'IdTipoDocumentoIdentificacion', 'NombreTipoDocumentoIdentificacion');
        return $listatipodocumento;
    } 
}
