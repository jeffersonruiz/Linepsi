<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\search\SolicitudCitaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solicitud-cita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdSolicitudCita') ?>

    <?= $form->field($model, 'FechaSolicitudRegistro') ?>

    <?= $form->field($model, 'IdTipoSolicitudCita') ?>

    <?= $form->field($model, 'IdPersona') ?>

    <?= $form->field($model, 'IdDocente') ?>

    <?php // echo $form->field($model, 'IdEstadoSolicitudCita') ?>

    <?php // echo $form->field($model, 'NecesitaConsentimiento') ?>

    <?php // echo $form->field($model, 'IdInstitucion') ?>

    <?php // echo $form->field($model, 'descripcion') ?>

    <?php // echo $form->field($model, 'IdCampoPsicologico') ?>

    <?php // echo $form->field($model, 'IdUsuarioGraba') ?>

    <?php // echo $form->field($model, 'FechaGraba') ?>

    <?php // echo $form->field($model, 'IdUsuarioModifica') ?>

    <?php // echo $form->field($model, 'FechaModifica') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
