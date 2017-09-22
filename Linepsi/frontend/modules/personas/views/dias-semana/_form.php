<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\DiasSemana */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dias-semana-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IdDiasSemana')->textInput() ?>

    <?= $form->field($model, 'DiasSemana')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
