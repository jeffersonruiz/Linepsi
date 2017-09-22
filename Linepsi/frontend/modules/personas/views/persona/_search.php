<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\search\PersonaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persona-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdPersona') ?>

    <?= $form->field($model, 'IdTipoDocumentoIdentificacion') ?>

    <?= $form->field($model, 'NumeroDocumento') ?>

    <?= $form->field($model, 'PrimerNombre') ?>

    <?= $form->field($model, 'SegundoNombre') ?>

    <?php // echo $form->field($model, 'PrimerApellido') ?>

    <?php // echo $form->field($model, 'SegundoApellido') ?>

    <?php // echo $form->field($model, 'FechaNacimiento') ?>

    <?php // echo $form->field($model, 'IdSexo') ?>

    <?php // echo $form->field($model, 'IdEstadoCivil') ?>

    <?php // echo $form->field($model, 'IdGenero') ?>

    <?php // echo $form->field($model, 'IdItinerario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
