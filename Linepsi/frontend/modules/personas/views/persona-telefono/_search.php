<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\search\PersonaTelefonoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persona-telefono-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IdPersonaTelefono') ?>

    <?= $form->field($model, 'IdPersona') ?>

    <?= $form->field($model, 'NumeroTelefono') ?>

    <?= $form->field($model, 'EsPrincipal') ?>

    <?= $form->field($model, 'IdTipoTelefono') ?>

    <?php // echo $form->field($model, 'IdOperadorTelefonia') ?>

    <?php // echo $form->field($model, 'IdCiudad') ?>

    <?php // echo $form->field($model, 'IdPais') ?>

    <?php // echo $form->field($model, 'NombreCiudadExtranjero') ?>

    <?php // echo $form->field($model, 'IdIndicativoTelefono') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
