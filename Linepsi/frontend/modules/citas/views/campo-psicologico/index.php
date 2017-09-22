<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\citas\models\search\CampoPsicologicoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Campo Psicologicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campo-psicologico-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Campo Psicologico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdCampoPsicologico',
            'NombreCampoPsicologico',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
