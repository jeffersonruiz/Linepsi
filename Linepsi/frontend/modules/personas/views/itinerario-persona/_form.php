<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\ItinerarioPersona */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="itinerario-persona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IdItinerarioPersona')->textInput() ?>

    <?= $form->field($model, 'DiaSemana')->textInput() ?>

    <?= $form->field($model, 'HoraInicio')->textInput() ?>

    <?= $form->field($model, 'HoraFin')->textInput() ?>

    <?= $form->field($model, 'IdUsuarioGraba')->textInput() ?>

    <?= $form->field($model, 'FechaGraba')->textInput() ?>

    <?= $form->field($model, 'IdUsuarioModifica')->textInput() ?>

    <?= $form->field($model, 'FechaModifica')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
