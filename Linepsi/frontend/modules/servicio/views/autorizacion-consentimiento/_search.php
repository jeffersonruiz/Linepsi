<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\search\AutorizacionConsentimientoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="autorizacion-consentimiento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdAutorizacionConsentimiento') ?>

    <?= $form->field($model, 'IdSolicitudCita') ?>

    <?= $form->field($model, 'Respuesta') ?>

    <?= $form->field($model, 'NombreFirma') ?>

    <?= $form->field($model, 'RutaDocumento') ?>

    <?php // echo $form->field($model, 'NombreDocumento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
