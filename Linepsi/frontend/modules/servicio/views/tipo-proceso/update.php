<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\servicio\models\TipoProceso */

$this->title = 'Actualizar Tipo Proceso: ' . $model->IdTipoProceso;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Procesos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdTipoProceso, 'url' => ['view', 'id' => $model->IdTipoProceso]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tipo-proceso-update">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
