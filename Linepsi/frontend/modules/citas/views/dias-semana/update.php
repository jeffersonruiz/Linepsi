<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\DiasSemana */

$this->title = 'Update Dias Semana: ' . $model->IdDiasSemana;
$this->params['breadcrumbs'][] = ['label' => 'Dias Semanas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdDiasSemana, 'url' => ['view', 'id' => $model->IdDiasSemana]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dias-semana-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
