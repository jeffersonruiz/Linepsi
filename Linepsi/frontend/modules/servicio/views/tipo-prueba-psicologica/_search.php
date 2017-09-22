<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\search\TipoPruebaPsicologicaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipo-prueba-psicologica-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdTipoPruebaPsicologica') ?>

    <?= $form->field($model, 'NombreTipoPruebaPsicologica') ?>

    <?= $form->field($model, 'Descripcion') ?>

    <?= $form->field($model, 'Orden') ?>

    <?= $form->field($model, 'EstadoTipoPruebaPsicologica') ?>

    <?php // echo $form->field($model, 'IdTipoProceso') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
