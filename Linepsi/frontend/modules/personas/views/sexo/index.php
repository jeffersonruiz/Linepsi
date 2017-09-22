<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\personas\models\search\SexoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sexos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sexo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sexo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdSexo',
            'NombreSexo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
