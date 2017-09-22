<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\citas\models\search\DiasSemanaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dias Semanas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dias-semana-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dias Semana', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdDiasSemana',
            'DiasSemana',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
