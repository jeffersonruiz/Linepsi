<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\citas\models\search\EstadocivilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Estadocivils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estadocivil-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Estadocivil', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdEstadoCivil',
            'NombreEstadoCivil',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
