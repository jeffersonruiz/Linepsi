<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\personas\models\search\TipoCorreoElectronicoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Correo Electronicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-correo-electronico-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipo Correo Electronico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdTipoCorreoElectronico',
            'NombreTipoCorreoElectronico',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
