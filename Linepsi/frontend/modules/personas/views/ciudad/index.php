<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\personas\models\search\CiudadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ciudad';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciudad-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ciudad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdCiudad',
            'CodigoDANE',
            'NombreCiudad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
