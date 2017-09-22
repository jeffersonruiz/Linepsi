<?php

namespace frontend\modules\citas\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $IdUsuario
 * @property string $login
 * @property string $contrasena
 * @property string $email
 * @property integer $IdPersona
 *
 * @property Persona $idPersona
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'contrasena', 'email', 'IdPersona'], 'required'],
            [['IdPersona'], 'integer'],
            [['login'], 'string', 'max' => 10],
            [['contrasena'], 'string', 'max' => 150],
            [['email'], 'string', 'max' => 100],
            [['login'], 'unique'],
            [['IdPersona'], 'exist', 'skipOnError' => true, 'targetClass' => Persona::className(), 'targetAttribute' => ['IdPersona' => 'IdPersona']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsuario' => 'Id Usuario',
            'login' => 'Login',
            'contrasena' => 'Contrasena',
            'email' => 'Email',
            'IdPersona' => 'Id Persona',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPersona()
    {
        return $this->hasOne(Persona::className(), ['IdPersona' => 'IdPersona']);
    }
}
