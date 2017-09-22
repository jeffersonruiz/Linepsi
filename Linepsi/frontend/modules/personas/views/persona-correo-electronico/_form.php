<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\PersonaCorreoElectronico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persona-correo-electronico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IdPersona')->textInput() ?>

    <?= $form->field($model, 'CuentaCorreoElectronico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EsPrincipal')->textInput() ?>

    <?= $form->field($model, 'IdTipoCorreoElectronico')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
