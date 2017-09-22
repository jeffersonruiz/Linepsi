<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\IndicativoTelefono */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="indicativo-telefono-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NombreIndicativoTelefono')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
