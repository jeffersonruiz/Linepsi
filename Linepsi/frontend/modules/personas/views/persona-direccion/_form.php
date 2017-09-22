<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\PersonaDireccion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persona-direccion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IdPersona')->textInput() ?>

    <?= $form->field($model, 'Direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IdTipoDireccion')->textInput() ?>

    <?= $form->field($model, 'EsPrincipal')->textInput() ?>

    <?= $form->field($model, 'IdCiudad')->textInput() ?>

    <?= $form->field($model, 'IdPais')->textInput() ?>

    <?= $form->field($model, 'NombreCiudadExtranjero')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
