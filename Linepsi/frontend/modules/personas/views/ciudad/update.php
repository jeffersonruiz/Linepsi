<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\Ciudad */

$this->title = 'Update Ciudad: ' . $model->IdCiudad;
$this->params['breadcrumbs'][] = ['label' => 'Ciudads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdCiudad, 'url' => ['view', 'id' => $model->IdCiudad]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ciudad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
