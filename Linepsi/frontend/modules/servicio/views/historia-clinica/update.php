<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\HistoriaClinica */

$this->title = 'Update Historia Clinica: ' . $model->IdHistoriaClinica;
$this->params['breadcrumbs'][] = ['label' => 'Historia Clinicas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdHistoriaClinica, 'url' => ['view', 'id' => $model->IdHistoriaClinica]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="historia-clinica-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
