<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\personas\models\search\ItinerarioPersonaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Itinerario Personas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itinerario-persona-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Itinerario Persona', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdItinerarioPersona',
            'DiaSemana',
            'HoraInicio',
            'HoraFin',
            'IdUsuarioGraba',
            // 'FechaGraba',
            // 'IdUsuarioModifica',
            // 'FechaModifica',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
