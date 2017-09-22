<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\CampoPsicologico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campo-psicologico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IdCampoPsicologico')->textInput() ?>

    <?= $form->field($model, 'NombreCampoPsicologico')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
