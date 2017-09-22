<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\CampoPsicologico */

$this->title = 'Update Campo Psicologico: ' . $model->IdCampoPsicologico;
$this->params['breadcrumbs'][] = ['label' => 'Campo Psicologicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdCampoPsicologico, 'url' => ['view', 'id' => $model->IdCampoPsicologico]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="campo-psicologico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
