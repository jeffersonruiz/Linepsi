<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\search\GestionDocumentalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gestion-documental-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdGestionDocumental') ?>

    <?= $form->field($model, 'IdHistoriaClinica') ?>

    <?= $form->field($model, 'IdTipoDocumento') ?>

    <?= $form->field($model, 'RutaDocumento') ?>

    <?= $form->field($model, 'NombreDocumento') ?>

    <?php // echo $form->field($model, 'ObservacionesDocumento') ?>

    <?php // echo $form->field($model, 'IdAutorizacionConsentimiento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
