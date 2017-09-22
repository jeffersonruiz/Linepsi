<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\SolicitudCita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solicitud-cita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FechaSolicitudRegistro')->textInput() ?>

    <?= $form->field($model, 'IdTipoSolicitudCita')->textInput() ?>

    <?= $form->field($model, 'IdPersona')->textInput() ?>

    <?= $form->field($model, 'IdDocente')->textInput() ?>

    <?= $form->field($model, 'IdEstadoSolicitudCita')->textInput() ?>

    <?= $form->field($model, 'NecesitaConsentimiento')->textInput() ?>

    <?= $form->field($model, 'IdInstitucion')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IdCampoPsicologico')->textInput() ?>

    <?= $form->field($model, 'IdUsuarioGraba')->textInput() ?>

    <?= $form->field($model, 'FechaGraba')->textInput() ?>

    <?= $form->field($model, 'IdUsuarioModifica')->textInput() ?>

    <?= $form->field($model, 'FechaModifica')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
