<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\Persona */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IdTipoDocumentoIdentificacion')->textInput() ?>

    <?= $form->field($model, 'NumeroDocumento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrimerNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SegundoNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrimerApellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SegundoApellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FechaNacimiento')->textInput() ?>

    <?= $form->field($model, 'IdSexo')->textInput() ?>

    <?= $form->field($model, 'IdEstadoCivil')->textInput() ?>

    <?= $form->field($model, 'IdGenero')->textInput() ?>

    <?= $form->field($model, 'IdItinerario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
