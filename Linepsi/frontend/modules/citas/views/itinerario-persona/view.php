<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\citas\models\ItinerarioPersona */

$this->title = $model->IdItinerarioPersona;
$this->params['breadcrumbs'][] = ['label' => 'Itinerario Personas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itinerario-persona-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdItinerarioPersona], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdItinerarioPersona], [
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
            'IdItinerarioPersona',
            'DiaSemana',
            'HoraInicio',
            'HoraFin',
            'IdUsuarioGraba',
            'FechaGraba',
            'IdUsuarioModifica',
            'FechaModifica',
        ],
    ]) ?>

</div>
