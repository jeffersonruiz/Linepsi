<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\personas\models\search\OperadorTelefoniaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Operador Telefonias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operador-telefonia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Operador Telefonia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdOperadorTelefonia',
            'NombreOperadorTelefonia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
