<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\personas\models\search\TipoDireccionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Direccions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-direccion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipo Direccion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdTipoDireccion',
            'NombreTipoDireccion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
