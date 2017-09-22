<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\search\HistoriaClinicaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historia-clinica-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdHistoriaClinica') ?>

    <?= $form->field($model, 'IdPersonaSolicita') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'ObservacionesGeneral') ?>

    <?= $form->field($model, 'IdDocente') ?>

    <?php // echo $form->field($model, 'IdSolicitudCita') ?>

    <?php // echo $form->field($model, 'IdConcepto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
