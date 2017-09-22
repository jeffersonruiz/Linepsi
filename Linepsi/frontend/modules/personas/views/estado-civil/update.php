<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\EstadoCivil */

$this->title = 'Update Estado Civil: ' . $model->IdEstadoCivil;
$this->params['breadcrumbs'][] = ['label' => 'Estado Civils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdEstadoCivil, 'url' => ['view', 'id' => $model->IdEstadoCivil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estado-civil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
