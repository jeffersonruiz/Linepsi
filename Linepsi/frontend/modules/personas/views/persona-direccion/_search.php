<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\\search\PersonaDireccionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persona-direccion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdPersonaDireccion') ?>

    <?= $form->field($model, 'IdPersona') ?>

    <?= $form->field($model, 'Direccion') ?>

    <?= $form->field($model, 'IdTipoDireccion') ?>

    <?= $form->field($model, 'EsPrincipal') ?>

    <?php // echo $form->field($model, 'IdCiudad') ?>

    <?php // echo $form->field($model, 'IdPais') ?>

    <?php // echo $form->field($model, 'NombreCiudadExtranjero') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
