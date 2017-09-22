<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\PersonaDireccion */

$this->title = 'Update Persona Direccion: ' . $model->IdPersonaDireccion;
$this->params['breadcrumbs'][] = ['label' => 'Persona Direccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdPersonaDireccion, 'url' => ['view', 'id' => $model->IdPersonaDireccion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="persona-direccion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
