<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\TipoPruebaPsicologica */

$this->title = 'Actualizar Tipo Prueba Psicologica: ' . $model->IdTipoPruebaPsicologica;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Prueba Psicologica', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdTipoPruebaPsicologica, 'url' => ['view', 'id' => $model->IdTipoPruebaPsicologica]];
$this->params['breadcrumbs'][] = 'UActualizar';
?>
<div class="tipo-prueba-psicologica-update">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
