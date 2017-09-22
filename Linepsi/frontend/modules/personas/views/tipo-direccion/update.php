<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\TipoDireccion */

$this->title = 'Update Tipo Direccion: ' . $model->IdTipoDireccion;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Direccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdTipoDireccion, 'url' => ['view', 'id' => $model->IdTipoDireccion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-direccion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
