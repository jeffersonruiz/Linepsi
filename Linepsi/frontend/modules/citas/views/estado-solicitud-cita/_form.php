<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\EstadoSolicitudCita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estado-solicitud-cita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NombreEstadoSolicitudCita')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
