<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\search\ItinerarioPersonaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="itinerario-persona-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdItinerarioPersona') ?>

    <?= $form->field($model, 'DiaSemana') ?>

    <?= $form->field($model, 'HoraInicio') ?>

    <?= $form->field($model, 'HoraFin') ?>

    <?= $form->field($model, 'IdUsuarioGraba') ?>

    <?php // echo $form->field($model, 'FechaGraba') ?>

    <?php // echo $form->field($model, 'IdUsuarioModifica') ?>

    <?php // echo $form->field($model, 'FechaModifica') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
