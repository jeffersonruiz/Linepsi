<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\EstadoCivil */

$this->title = $model->IdEstadoCivil;
$this->params['breadcrumbs'][] = ['label' => 'Estado Civils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-civil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdEstadoCivil], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdEstadoCivil], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdEstadoCivil',
            'NombreEstadoCivil',
        ],
    ]) ?>

</div>
